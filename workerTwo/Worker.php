<?php

namespace workerTwo;


class Worker
{
    private $name;
    private $age;
    private $salary;

    private function checkAge($age)
    {
        if ($age > 1 & $age < 100){
            $this->age =  $age;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
       return $this->name;
    }

    public function setAge($age)
    {
        $this->checkAge($age);
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}