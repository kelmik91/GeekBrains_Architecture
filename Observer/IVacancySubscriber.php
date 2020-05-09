<?php

interface IVacancySubscriber
{
    public function notify();
    public function addJobSeeker(JobSeeker $jobSeeker);
    public function removeJobSeeker(JobSeeker $jobSeeker);
}