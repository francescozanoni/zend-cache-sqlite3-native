<?php
require_once __DIR__ . '/../vendor/autoload.php';

class CacheTest extends Zend_Test_PHPUnit_ControllerTestCase
{

    public function setUp()
    {
        // Assign and instantiate in one step:
        $this->bootstrap = new Zend_Application(
            'testing',
            __DIR__ . '/application.ini'
        );
        parent::setUp();
    }

    /**
     * Ensure an uncached item is not available.
     */
    public function testUncachedItem()
    {

        $cache = $this->_getCache();

        $uncachedItemValue = $cache->load('uncached_item_key');

        $this->assertFalse($uncachedItemValue);

    }

    /**
     * Ensure a cached item is available.
     */
    public function testCachedItem()
    {
