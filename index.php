<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once 'workerOne/Worker.php';
require_once 'workerTwo/Worker.php';

//Часть 1

use workerOne\Worker;
use workerTwo\Worker as Workers;
$workerOne = new Worker();

$workerOne->name = 'Иван';
$workerOne->age = 25;
$workerOne->salary = 1000;

$workerTho = new Worker();

$workerTho->name = 'Вася';
$workerTho->age = 26;
$workerTho->salary = 2000;

echo "Cумма зарплат Ивана и Васи: ";
echo $workerOne->salary + $workerTho->salary;

echo "<br>";

echo 'Cуммa возрастов Ивана и Васи: ';
echo $workerOne->age + $workerTho->age;

echo "<hr>";

//Часть 2

$workerOne = new Workers();

$workerOne->setName('Иван');
$workerOne->setAge(25);
$workerOne->setSalary(1000);

$workerTho = new Workers();

$workerTho->setName('Вася');
$workerTho->setAge(26);
$workerTho->setSalary(2000);

echo "Cумма зарплат Ивана и Васи: ";
echo $workerOne->getSalary() + $workerTho->getSalary();

echo "<br>";

echo 'Cуммa возрастов Ивана и Васи: ';
echo $workerOne->getAge() + $workerTho->getAge();

echo "<hr>";

//Часть 3




//echo '<pre>';
//echo '</pre>';
