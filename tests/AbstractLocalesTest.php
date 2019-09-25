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

    private $cache = [];

    /**
     * Get all of the locale directories.
     *
     * @return array Returns a data provider.
     */
    public function provideLocaleDirs() {
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
     * Load all of the translations for a locale directory.
     *
     * @param string $dir The directory to load.
     * @return array Returns an array of translations.
     */
    protected function loadTranslations(string $dir): array {
        if (!isset($this->cache[$dir])) {
            $resources = ['dash_core.php', 'dash_text.php', 'missing.php', 'site_core.php'];
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
}
