<?php

abstract class Employee {
    private $fullName;
    private $salary;
    private $qualification;

    public function __construct(string $fullName, float $salary, string $qualification)
    {
        $this->fullName = $fullName;
        $this->salary = $salary;
        $this->qualification = $qualification;
    }

    public function getFullName(): string {
        return "\nFull Name: " .$this->fullName. "\n";
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function getQulification(): string {
        return "Qualification: " .$this->qualification. "\n";
    }


}