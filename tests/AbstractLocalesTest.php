<?php
/**
 * @author Todd Burry <todd@vanillaforums.com>
 * @copyright 2009-2019 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\Locales\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Base functionality for locale tests.
 */
abstract class AbstractLocalesTest extends TestCase {
    const BASEDIR = __DIR__.'/..';
    const RESOURCE_FILES = ['dash_core.php', 'dash_text.php', 'site_core.php', 'site_kb.php'];

    private $cache = [];

    /**
     * Get all of the locale directories.
     *
     * - $path
     *
     * @return array Returns a data provider.
     */
    public static function provideLocaleDirs() {
        $dirs = glob(self::BASEDIR.'/vf_*');
        $r = [];

        foreach ($dirs as $dir) {
            if (is_dir($dir)) {
                $r[basename($dir)] = [$dir];
            }
        }

        return $r;
    }

    /**
     * Load all the translations for a locale directory.
     *
     * @param string $dir The directory to load.
     * @return array Returns an array of translations.
     */
    protected function loadTranslations(string $dir): array {
        if (!isset($this->cache[$dir])) {
            $resources = self::RESOURCE_FILES;
            $Definition = [];
            foreach ($resources as $resource) {
                $path = "$dir/$resource";
                if (file_exists($path)) {
                    require $path;
                }
            }
            $this->cache[$dir] = $Definition;
        }
        return $this->cache[$dir];
    }

    /**
     * Load the translations for just one resource.
     *
     * @param string $baseDir
     * @param string $filename
     * @return array
     */
    protected function loadResourceTranslations(string $baseDir, string $filename): array {
        $path = "$baseDir/$filename";
        if (file_exists($path)) {
            require $path;
            return $Definition;
        }
        return [];
    }

    /**
     * Load the source translations.
     *
     * @return array
     */
    protected function loadSourceTranslations(): array {
        $r = $this->loadTranslations(self::BASEDIR.'/tx-source');
        return $r;
    }

    /**
     * Returns a data provider in the form:
     *
     * - $filename
     * - $resourceName
     *
     * @return array
     */
    public static function provideResources(): array {
        $r = [];
        foreach (self::RESOURCE_FILES as $file) {
            if ($file === 'missing.php') {
                continue;
            }
            $r[$file] = [$file, str_replace(['.', '_'], '-', $file).'--transifex'];
        }
        return $r;
    }

    /**
     * Returns a data provider in the form:
     *
     * - $basePath
     * - $resourceFilename
     * - $resourceName
     *
     * @return array
     */
    public static function provideLocalesAndResources(): array {
        $localeDirs = self::provideLocaleDirs();
        $resourceDirs = self::provideResources();

        $r = [];
        foreach ($localeDirs as $locale => [$localeDir]) {
            foreach ($resourceDirs as $resource => [$filename, $resourceName]) {
                $r["$locale: $resource"] = [$localeDir, $filename, $resourceName];
            }
        }
        return $r;
    }
}
