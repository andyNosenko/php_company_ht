<?php
require('SalaryAmount.php');
require('Employee.php');
require('Designer.php');
require('SeniorDeveloper.php');
require('MiddleDeveloper.php');
require('TypeSetter.php');


$designer = new Designer("Andrey Nosenko", 3000.0, "Designer");
echo $designer->getFullName();
echo $designer->getQulification();


$senior_developer = new SeniorDeveloper("Vlad Lut", 10.0, 60, "Senior Developer");
echo $senior_developer->getFullName();
echo $senior_developer->getQulification();

$middle_developer1 = new MiddleDeveloper("Kim Lee", 1000.0, 3, "Middle Developer");
echo $middle_developer1->getFullName();
echo $middle_developer1->getQulification();

$middle_developer2 = new MiddleDeveloper("Adrian Wall", 1000.0, 3, "Middle Developer");
echo $middle_developer2->getFullName();
echo $middle_developer2->getQulification();

$type_setter = new TypeSetter("John Smith", 5.0, 120, "Type Setter");
echo $type_setter->getFullName();
echo $type_setter->getQulification();


$total =
    $designer->getSalaryAmount() +
    $senior_developer->getSalaryAmount() +
    $middle_developer1->getSalaryAmount() +
    $middle_developer2->getSalaryAmount() +
    $type_setter->getSalaryAmount();
echo "\nTotal salary amount: " .$total;


