<?php

class EditorCommand extends Command
{
    public $operator;
    public $beginText;
    public $endText;
    public $boofer;
    public $textEditor;

    public function __construct(TextEditor $textEditor, $operator, $boofer, $beginText, $endText)
    {
        $this->beginText = $beginText;
        $this->endText = $endText;
        $this->operator = $operator;
        $this->boofer = $boofer;
        $this->textEditor = $textEditor;
    }

    public function execute()
    {
        switch ($this->operator)
        {
            case 'copy' :
                $this->boofer = $this->textEditor->copyText($this->beginText, $this->endText);
                return $this->boofer;

            case 'cut' :
                $this->boofer = $this->textEditor->cutText($this->beginText, $this->endText);
                return $this->boofer;

            case 'insert' :
                $this->textEditor->insertText($this->beginText, $this->boofer);
                $this->endText = $this->beginText + mb_strlen($this->boofer);
                return $this->boofer;
        }
    }

    public function unExecute()
    {
        switch ($this->operator)
        {
            case 'copy' :
                break;

            case 'cut' :
                $this->textEditor->insertText($this->beginText, $this->boofer);
                break;

            case 'insert' :
                $this->textEditor->cutText($this->beginText, $this->endText);
                break;
        }
    }
}