<?php

namespace AlexanderZabornyi\ProxyTest;

class Security
{
    protected $door;

    /**
     * Security constructor.
     *
     * @param DoorInterface $door
     */
    public function __construct(DoorInterface $door)
    {
        $this->door = $door;
    }

    /**
     * Открытие по паролю
     *
     * @param string $password
     *
     * @return string
     */
    public function open(string $password)
    {
        if ($this->authenticate($password)) {
            return $this->door->open();
        } else {
            return 'Big no! It ain\'t possible.';
        }
    }

    /**
     * Аутентификация
     *
     * @param string $password
     *
     * @return bool
     */
    public function authenticate(string $password)
    {
        return $password == 'secret';
    }
}