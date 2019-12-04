<?php

namespace JQueryUI\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use JQueryUI\View\Helper\JQueryUIHelper;

class JQueryUIHelperTest extends TestCase {

    /**
     * @var \JQueryUI\View\Helper\JQueryUIHelper
     */
    public $JQueryUI;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->JQueryUI = new JQueryUIHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->JQueryUI);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
