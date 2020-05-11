<?php

class MacrosoftWorld
{
    private $textEditor;
    private $commands = [];
    private $current = 0;
    public $boofer = '';

    public function __construct($text)
    {
        $this->textEditor = new TextEditor($text);
    }

    public function runCommand($operator, $beginText, $endText)
    {
        $command = new EditorCommand($this->textEditor, $operator, $this->boofer, $beginText, $endText);
        $this->boofer = $command->execute();

        $this->commands[] = $command;
        $this->current++;
    }

    public function down($levels)
    {
        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current > 0){
                $this->commands[--$this->current]->unExecute();
            }
        }
    }

    public function up($levels)
    {
        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current < count($this->commands)){
                $this->commands[$this->current++]->execute();
            }
        }
    }

    public function getText()
    {
        $this->textEditor->getText();
    }

}