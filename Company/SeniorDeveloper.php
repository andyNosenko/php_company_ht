<?php

final class SeniorDeveloper extends Employee implements SalaryAmount {
    private $hours;

    public function __construct(string $fullName, float $salary, int $hours, string $qualification)
    {
        parent::__construct($fullName, $salary, $qualification);
        $this->hours = $hours;
    }

    public function getFullName(): string
    {
        return parent::getFullName(); // TODO: Change the autogenerated stub
    }

    public function getSalary(): float
    {
        return parent::getSalary(); // TODO: Change the autogenerated stub
    }

    public function getSalaryAmount(): float
    {
        return $this->hours * $this->getSalary();
    }
}