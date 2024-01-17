<?php

namespace Test\AbraFlexi;

use AbraFlexi\Formats;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2023-12-17 at 23:30:00.
 */
class FormatsTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Formats
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Formats();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers AbraFlexi\Formats::byContentType
     */
    public function testbyContentType() {
        $this->assertTrue(array_key_exists('application/javascript', $this->object->byContentType()),);
    }

    /**
     * @covers AbraFlexi\Formats::bySuffix
     */
    public function testbySuffix() {
        $this->assertTrue(array_key_exists('js', $this->object->bySuffix()));
    }

    /**
     * @covers AbraFlexi\Formats::suffixToContentType
     */
    public function testsuffixToContentType() {
        $this->assertEquals('application/xml', $this->object->suffixToContentType('xml'));
    }

    /**
     * @covers AbraFlexi\Formats::contentTypeToSuffix
     */
    public function testcontentTypeToSuffix() {
        $this->assertEquals('xml', $this->object->contentTypeToSuffix('application/xml'));
    }
}