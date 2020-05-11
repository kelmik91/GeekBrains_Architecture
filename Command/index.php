<?php

require "Command.php";
require "EditorCommand.php";
require "MacrosoftWorld.php";
require "TextEditor.php";

$text =
'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.';

$mw = new MacrosoftWorld($text);
$mw->runCommand('copy', 370, 470);
$mw->runCommand('insert', 50, 51);
$mw->runCommand('cut', 30, 732);
$mw->down(3);
$mw->up(3);
$mw->getText();