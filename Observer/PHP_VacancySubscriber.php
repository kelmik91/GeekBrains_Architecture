<?php

class PHP_VacancySubscriber implements IVacancySubscriber
{
    private $jobSeekers = [];
    private $vacanсy = [];

    public function addJobSeeker(JobSeeker $jobSeeker)
    {
        $this->jobSeekers[] = $jobSeeker;
        echo "{$jobSeeker->name}, Вы подписались на вакансии РНР программиста " . PHP_EOL;
    }

    public function removeJobSeeker(JobSeeker $jobSeeker)
    {
        foreach ($this->jobSeekers as $key => $value) {
            if ($value === $jobSeeker) {
                array_splice($this->jobSeekers, $key, 1);
                break;
            }
        }
        echo "{$jobSeeker->name}, Вы отписались" . PHP_EOL;
    }

    public function notify()
    {
        foreach ($this->jobSeekers as $jobSeeker) {
            echo "{$jobSeeker->name}, появилась новая вакансия" . PHP_EOL;
        }
    }

    public function getVacanсy()
    {
        return $this->vacanсy;
    }

    public function setVacancy($vacanсy)
    {
        $this->vacanсy = $vacanсy;
        $this->notify();
    }

}