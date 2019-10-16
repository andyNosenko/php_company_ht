<?php


interface UserRepository
{
    public function add(User $user): void;
    public function remove(User $user): void;
    public function findById(UserId $id): ?User;
}