<?php
/**
 * Created by PhpStorm.
 * User: paipeng
 * Date: 10.07.15
 * Time: 12:00
 */

require_once __DIR__ ."/../vendor/autoload.php";
require_once __DIR__ ."/../src/HelloPai.php";

class HelloPaiTest extends  PHPUnit_Framework_TestCase{
    /**
     * A cache of the container
     *
     * @var HelloPai
     */
    protected $helloPai;

    public function setUp()
    {
        $this->helloPai = new HelloWorld\HelloPai();
    }

    public function testQueryReturnsNodelist() {
         $this->assertEquals("HelloWorld by Pai", $this->helloPai->hi());
    }
}