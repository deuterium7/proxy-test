<?php

namespace AlexanderZabornyi\ProxyTest;

interface DoorInterface
{
    public function open(): string;

    public function close(): string;
}