<?php
/**
 * @author Todd Burry <todd@vanillaforums.com>
 * @copyright 2009-2019 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\Locales\Tests;

/**
 * Smoke tests for translations that will be run through `strftime`.
 *
 * $Definition['Date.DefaultDateTimeFormat'] = '%B %e, %Y %l:%M%p';
 * $Definition['Date.DefaultDayFormat'] = '%B %e';
 * $Definition['Date.DefaultFormat'] = '%B %e, %Y';
 * $Definition['Date.DefaultTimeFormat'] = 'g:iA';
 * $Definition['Date.DefaultYearFormat'] = '%B %Y';
 */
class DateFormatsTest extends AbstractLocalesTestCase {
    protected static $testTime;

    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();
        self::$testTime = strtotime('2019-09-25 12:25 PM EDT');
    }

    protected function assertDateFormatNotSmokey(string $dir, string $key) {
        $defs = $this->loadTranslations($dir);
        $format = $defs[$key] ?? null;
        $basename = basename($dir);

        if ($format !== null) {
            // Just checking for an error.
            $f = strftime($format, self::$testTime);
            $this->assertIsString($f);
            $this->assertFalse(strpos($f, '%'), "$f contains a percent sign for $key: $format.");
        } elseif (fnmatch('*/vf_en*', $dir)) {
            $this->assertTrue(true);
        } else {
            $this->markTestSkipped("The $basename locale doesn't have format for key: $key.");
        }
    }

    protected function assertTimeFormatNotSmokey(string $dir, string $key) {
        $defs = $this->loadTranslations($dir);
        $format = $defs[$key] ?? null;
        $basename = basename($dir);

        if ($format !== null) {
            // Just checking for an error.
            $f = date($format, self::$testTime);
            $this->assertIsString($f);
            $this->assertFalse(strpos($f, '%'), "$f contains a percent sign for $key: $format.");
        } elseif (fnmatch('*/vf_en*', $dir)) {
            $this->assertTrue(true);
        } else {
            $this->markTestSkipped("The $basename locale doesn't have format for key: $key.");
        }
    }

    /**
     * Test Date.DefaultDateTimeFormat
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testDefaultDateTimeFormat(string $dir) {
        $this->assertDateFormatNotSmokey($dir, 'Date.DefaultDateTimeFormat');
    }

    /**
     * Test Date.DefaultDayFormat
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testDefaultDayFormat(string $dir) {
        $this->assertDateFormatNotSmokey($dir, 'Date.DefaultDayFormat');
    }

    /**
     * Test Date.DefaultFormat
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testDefaultFormat(string $dir) {
        $this->assertDateFormatNotSmokey($dir, 'Date.DefaultFormat');
    }

    /**
     * Test Date.DefaultTimeFormat
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testDefaultTimeFormat(string $dir) {
        $this->assertTimeFormatNotSmokey($dir, 'Date.DefaultTimeFormat');
    }

    /**
     * Test Date.DefaultYearFormat
     *
     * @param string $dir
     * @dataProvider provideLocaleDirs
     */
    public function testDefaultYearFormat(string $dir) {
        $this->assertDateFormatNotSmokey($dir, 'Date.DefaultYearFormat');
    }
}
