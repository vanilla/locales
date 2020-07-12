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
    public function setUp() {
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
                $this->assertSame($sprintfs, $translationSprintfs, $key);
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

//                    exec("txsync decode --locale={$m[1]}");
//                    exec("txsync pull -l {$m[1]}");
                  }

                $this->assertSame($decoded, $value);
            }
        }
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
            $translaion = $translations[$key];
            $translationSprintfs = $this->getSprintfs($translaion);
            if ($sprintfs !== $translationSprintfs) {
                // For debug breakpoints.
                $translationSprintfs = $this->getSprintfs($translaion);
            }
            $this->assertSame($sprintfs, $translationSprintfs, $value);
        } elseif (fnmatch('*vf_en*', $dir)) {
            $this->assertTrue(true);
        } else {
            $this->markTestSkipped("The $locale locale has not translated: $key");
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
     * Provide locales and strings that get passed to `sprintf()`.
     *
     * @return array
     */
    public function provideDirsAndSprintfs(): array {
        $dirs = $this->provideLocaleDirs();
        $sprintfs = $this->provideSprintfStrings();

        $r = [];
        foreach ($dirs as $locale => $dir) {
            foreach ($sprintfs as $str => $sprintf) {
                $r["$locale: $str"] = array_merge($dir, $sprintf);
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

            $sprintfs = $this->getSprintfs($value);
            if (!empty($sprintfs)) {
                $r[$key] = [$key, $value, $sprintfs];
            }
        }

        $f = $source['EmailPassword'];
        return $r;
    }

    /**
     * Get all of the `sprintf` patterns from a format string.
     *
     * @param string $value
     * @return array
     */
    private function getSprintfs(string $value): array {
        $r = [];
        // Sprintf expansions.
        if (preg_match_all('`(%\d?\$?[sdf])`', $value, $m)) {
            $r = array_merge($r, $m[1]);
        }
        // HtmlUtils::formatTags().
/*        if (preg_match_all('`(<(/?[\d]+\s?>)`', $value, $m)) {*/
//            $r = array_merge($r, $m[1]);
//        }
        sort($r);
        return $r;
    }
}
