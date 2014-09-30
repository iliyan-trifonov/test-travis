<?php

class Texts
{

    private $text = "";

    public function __construct($text = "")
    {
        if (is_string($text) && $text) {
            $this->text = $text;
        }
    }

    public function addText($text = "")
    {
        if (is_string($text) && $text) {
            $this->text .= $text;
        }
    }

    public function getText()
    {
        return $this->text;
    }

}
