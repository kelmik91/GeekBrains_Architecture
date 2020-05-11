<?php

class TextEditor
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function insertText($beginText, $boofer)
    {
        $text = $this->text;
        $this->text = mb_substr($text, 0, $beginText) . $boofer . mb_substr($text, $beginText);
    }

    public function cutText($beginText, $endText)
    {
        $text = $this->text;
        $this->text = mb_substr($text, 0, $beginText) . mb_substr($text, $endText);
        return mb_substr($text, $beginText, $endText - $beginText);
    }

    public function copyText($beginText, $endText)
    {
        return mb_substr($this->text, $beginText, $endText - $beginText);
    }

    public function getText()
    {
        echo $this->text;
    }

}