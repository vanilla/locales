<?php
/**
 * @author Todd Burry <todd@vanillaforums.com>
 * @copyright 2009-2020 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\Locales\Tests;

/**
 * Some smoke tests that make sure translations aren't malformed.
 */
class SmokeTest extends AbstractLocalesTest {
    /**
     * @var array
     */
    private $source;

    /**
     * @inheritDoc
     */
    public function setUp(): void {
        parent::setUp();
        $this->source = $this->loadSourceTranslations();
    }

    /**
     * @param string $localeDir
     * @param string $resourceFilename
     * @dataProvider provideLocalesAndResources
     */
    public function testSprintfStrings(string $localeDir, string $resourceFilename): void {
        $locale = basename($localeDir);
        $translations = $this->loadResourceTranslations($localeDir, $resourceFilename);
        $source = $this->source;

        $tested = 0;
        foreach ($source as $key => $value) {
            $sprintfs = $this->getSprintfs($value);
            if (empty($sprintfs)) {
                continue;
            }

            if (isset($translations[$key])) {
                $translaion = $translations[$key];
                $translationSprintfs = $this->getSprintfs($translaion);
                if ($sprintfs !== $translationSprintfs) {
                    // For debug breakpoints.
                    $translationSprintfs = $this->getSprintfs($translaion);
                }
                $message = "key: $key\nsource: $value\ntranslation: $translaion";
                $this->assertSame($sprintfs, $translationSprintfs, $message);
                $tested++;
            }
        }

        if (!$tested) {
            if (fnmatch('*vf_en*', $localeDir)) {
                $this->assertTrue(true);
            } else {
                $this->markTestSkipped("The $locale locale has not translated any sprintf strings for $resourceFilename.");
            }
        }
    }

    /**
     * Get all the `sprintf` patterns from a format string.
     *
     * @param string $value
     * @return array
     */
    private static function getSprintfs(string $value): array {
        $r = [];
        // Sprintf expansions.
        if (preg_match_all('`(%\d?\$?\+?[sdf])`', $value, $m)) {
            $r = array_merge($r, $m[1]);
        }

        // HtmlUtils::formatTags().
        if (preg_match_all('`(</?[\d]+\s?>)`', $value, $m)) {
            $tags = $m[1];
            // Put tags together to test for common RTL mistakes.
            for ($i = 0; $i < count($tags); $i += 2) {
                $close = $tags[$i + 1] ?? '';
                $r[] = "{$tags[$i]}{$close}";
            }
        }
        sort($r);
        return $r;
    }

    /**
     * @param string $localeDir
     * @param string $resourceFilename
     * @dataProvider provideLocalesAndResources
     */
    public function testFormatStrings(string $localeDir, string $resourceFilename): void {
        $locale = basename($localeDir);
        $translations = $this->loadResourceTranslations($localeDir, $resourceFilename);
        $source = $this->source;

        $tested = 0;
        foreach ($source as $key => $value) {
            $fields = $this->getFormatPlaceholders($value);
            if (empty($fields)) {
                continue;
            }

            if (isset($translations[$key])) {
                $translaion = $translations[$key];
                $translationFormats = $this->getFormatPlaceholders($translaion);
                $message = "key: $key\nsource: $value\ntranslation: $translaion";
                $this->assertFormatStringFields($fields, $translationFormats, $key);

                foreach ($translationFormats as $format) {
                    $this->assertValidFormatPlaceholder($format, "$key; {$format['expr']}");
                }
                $tested++;
            }
        }

        if (!$tested) {
            if (fnmatch('*vf_en*', $localeDir)) {
                $this->assertTrue(true);
            } else {
                $this->markTestSkipped("The $locale locale has not translated any sprintf strings for $resourceFilename.");
            }
        }
    }

    /**
     * Get all the format placeholders in a string.
     *
     * @param string $value
     * @return array
     */
    private static function getFormatPlaceholders(string $value): array {
        $r = [];
        if (preg_match_all('/{([^\s][^}]+[^\s]?)}/', $value, $m)) {
            foreach ($m[1] as $expr) {
                $parts = explode(',', $expr);
                $field = trim($parts[0]);
                $format = trim(($parts[1] ?? ''));
                $subFormat = isset($parts[2]) ? strtolower(trim($parts[2])) : '';
                $formatArgs = $parts[3] ?? '';

                if (in_array($format, ['currency', 'integer', 'percent'])) {
                    $formatArgs = $subFormat;
                    $subFormat = $expr;
                    $format = 'number';
                } elseif (is_numeric($subFormat)) {
                    $formatArgs = $subFormat;
                    $subFormat = '';
                }
                $r[] = [
                    'field' => $field,
                    'format' => $format,
                    'subFormat' => $subFormat,
                    'args' => $formatArgs,
                    'expr' => '{' . $expr . '}',
                ];
            }
        }
        return $r;
    }

    /**
     * @param $format
     * @param string $message
     */
    public function assertValidFormatPlaceholder($format, string $message): void {
        $this->assertNotEmpty($format['field'], "The field name cannot be empty for: $message");
        $this->assertContains(
            strtolower($format['format']),
            [
                '', 'plural', 'text', 'plaintext',
                'html', 'htmlencode', 'htmlspecialchars', 'urlencode', 'rawurlencode',
                'url', 'exurl',
                'date', 'time', 'number',
                'user', 'you', 'his', 'her', 'your', 'gender',
            ],
            "Invalid format: $message"
        );

        if (in_array($format['format'], ['url', 'exurl'], true)) {

        } else {
            $this->assertMatchesRegularExpression('`[a-z0-9.]+`i', $format['field'], "Invalid field: $message");
        }
    }

    /**
     * Translations should not include HTML entities.
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testHtmlDecoding(string $dir): void {
        $translations = $this->loadTranslations($dir);
        foreach ($translations as $key => $value) {
            if (!isset($this->source[$key])) {
                continue;
            }

            $source = $this->source[$key];
            $sourceDecoded = $this->decode($source);

            if ($source === $sourceDecoded) {
                $decoded = $this->decode($value);

                if ($decoded !== $value) {
                    preg_match('`/vf_(.+)`', $dir, $m);

                    exec("txsync decode --locale={$m[1]}");
                    exec("txsync pull -l {$m[1]}");
                }

                $this->assertSame($decoded, $value, "key: $key");
            }
        }
    }

    /**
     * @param $translation
     * @return string
     */
    public function decode($translation): string {
        $decoded = html_entity_decode($translation);
        $decoded = str_replace('&#39;', "'", $decoded);
        return $decoded;
    }

    /**
     * Sprintf placeholders should match between the source and translations.
     *
     * @param string $dir
     * @param string $key
     * @param string $value
     * @param array $sprintfs
     * @dataProvider provideDirsAndSprintfs
     * @large
     */
    public function testSprintfStringsExpanded(string $dir, string $key, string $value, array $sprintfs): void {
        $locale = basename($dir);
        $translations = $this->loadTranslations($dir);

        if (isset($translations[$key])) {
            $translation = $translations[$key];
            $translationSprintfs = $this->getSprintfs($translation);
            if ($sprintfs !== $translationSprintfs) {
                // For debug breakpoints.
                $translationSprintfs = $this->getSprintfs($translation);
            }
            $this->assertSame($sprintfs, $translationSprintfs, $value);
        } elseif (fnmatch('*vf_en*', $dir)) {
            $this->assertTrue(true);
        } else {
            $this->markTestSkipped("The $locale locale has not translated: $key");
        }
    }

    /**
     * Smoke test `formatString()` formats.
     *
     * @param string $dir
     * @param string $key
     * @param string $value
     * @param array $formats
     * @dataProvider provideDirsAndFormatStrings
     */
    public function testFormatStringExpanded(string $dir, string $key, string $value, array $formats): void {
        $locale = basename($dir);
        $translations = $this->loadTranslations($dir);
        if (isset($translations[$key])) {
            $translation = $translations[$key];
            $translationFormats = $this->getFormatPlaceholders($translation);
            $this->assertNotEmpty($translationFormats, $key);
            $message = "key: $key\nsource: $value\ntranslation: $translation";
            $this->assertFormatStringFields($formats, $translationFormats, $message);

            foreach ($translationFormats as $format) {
                $this->assertValidFormatPlaceholder($format, "$key; {$format['expr']}");
            }
        } elseif (fnmatch('*vf_en*', $dir)) {
            $this->assertTrue(true);
        } else {
            $this->markTestSkipped("The $locale locale has not translated: $key");
        }
    }

    /**
     * Provide locales and strings that get passed to `sprintf()`.
     *
     * @param string $dir
     * @param string $key
     * @param string $value
     * @param array $formats
     */
    public function provideDirsAndSprintfs(): array {
        $dirs = self::provideLocaleDirs();
        $formats = $this->provideSprintfStrings();

        $r = [];
        foreach ($dirs as $locale => $dir) {
            foreach ($formats as $str => $format) {
                $r["$locale: $str"] = array_merge($dir, $format);
            }
        }
        return $r;
    }

    /**
     * Provide all `sprintf()` formats.
     *
     * @return array
     */
    public function provideSprintfStrings(): array {
        $source = $this->loadSourceTranslations();
        $r = [];
        foreach ($source as $key => $value) {
            if (!is_string($value)) {
                continue;
            }

            $sprintfs = self::getSprintfs($value);
            if (!empty($sprintfs)) {
                $r[$key] = [$key, $value, $sprintfs];
            }
        }

        $f = $source['EmailPassword'];
        return $r;
    }

    /**
     * Provide locales and strings that get passed to `formatString()`.
     *
     * -
     *
     * @return array
     */
    public function provideDirsAndFormatStrings(): array {
        $dirs = $this->provideLocaleDirs();
        $sprintfs = $this->provideFormatStrings();

        $r = [];
        foreach ($dirs as $locale => $dir) {
            foreach ($sprintfs as $str => $sprintf) {
                $r["$locale: $str"] = array_merge($dir, $sprintf);
            }
        }
        return $r;
    }

    /**
     * Provide all `formatString()` formats.
     *
     * @return array
     */
    public function provideFormatStrings(): array {
        $source = $this->loadSourceTranslations();
        $r = [];
        foreach ($source as $key => $value) {
            if (!is_string($value)) {
                continue;
            }

            $formats = $this->getFormatPlaceholders($value);
            if (!empty($formats)) {
                $r[$key] = [$key, $value, $formats];
            }
        }

        $f = $source['EmailPassword'];
        return $r;
    }

    private function assertFormatStringFields(array $formats, array $translationFormats, string $message = '') {
        $formats = array_column($formats, null, 'field');
        $translationFormats = array_column($translationFormats, null, 'field');
        foreach ($formats as $field => $format) {
            $this->assertArrayHasKey($field, $translationFormats, $message);
        }
    }
}
