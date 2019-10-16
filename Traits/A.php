<?php


trait A
{
    public function run() {
        echo "trait A run()\n";
    }
    public function stop() {
        echo "trait A stop()\n";
    }
}

trait B
{
    public function run() {
        echo "trait B run()\n";
    }
    public function stop() {
        echo "trait B stop()\n";
    }
}

final class SomeClass
{
    use A, B {
        A::stop insteadof B;
        B::run insteadof A;
        A::run as runFromA;
        B::stop as stopFromB;
    }
}

$some = new SomeClass();
$some->stop();
$some->run();
$some->runFromA();
$some->stopFromB();