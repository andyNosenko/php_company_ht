<?php


class User
{
    public $name = 'Andrey';
    protected $surName = 'Nosenko';
    private $nationality = 'BY';

    public function fullName(): string {
        return $this->name. ' ' .$this->surName. ' ' .$this->nationality;
    }


}

$user = new User();

echo $user->fullName();
