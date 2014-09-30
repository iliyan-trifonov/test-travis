<?php

class TextsTest extends  PHPUnit_Framework_TestCase
{
    public function testTextCanBeEmptyString()
    {
        $texts = new Texts();
        $this->assertEquals("", $texts->getText());

        $texts = new Texts("");
        $this->assertEquals("", $texts->getText());
    }

    public function testTextFromConstructorIsTheOneGot()
    {
        $texts = new Texts("test");
        $this->assertEquals("test", $texts->getText());
    }

    public function testTextFromConstructorAndAddFunctionsIsTheOneGot()
    {
        $constrText = "text from constructor";
        $addText = " and text added";
        $texts = new Texts($constrText);
        $texts->addText($addText);
        $this->assertEquals($constrText . $addText, $texts->getText());
    }

    public function testNonStringsAreNotAllowed()
    {
        $obj = new stdClass();
        $texts = new Texts($obj);
    }
}
