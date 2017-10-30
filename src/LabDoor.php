<?php

namespace AlexanderZabornyi\ProxyTest;

class LabDoor implements DoorInterface
{
    /**
     * Открытие двери лабораторной
     *
     * @return string
     */
    public function open(): string
    {
        return 'Opening lab door';
    }

    /**
     * Закрытие двери лабораторной
     *
     * @return string
     */
    public function close(): string
    {
        return 'Closing lab door';
    }
}