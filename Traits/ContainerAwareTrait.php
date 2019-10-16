<?php


trait ContainerAwareTrait
{
    private $container;

    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}

final class UserController {
    use ContainerAwareTrait;

    
}