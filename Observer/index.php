<?php

require "IVacancySubscriber.php";
require "JobSeeker.php";
require "PHP_VacancySubscriber.php";

$subscriber = new PHP_VacancySubscriber();

$jobSeeker1 = new JobSeeker('Дима', 'dima@mail.ru');
$jobSeeker3 = new JobSeeker('Маша', 'masha@mail.ru');

$subscriber->addJobSeeker($jobSeeker1);
$subscriber->addJobSeeker($jobSeeker3);

$subscriber->setVacancy(['php-программист']);

$subscriber->removeJobSeeker($jobSeeker3);

$subscriber->notify();