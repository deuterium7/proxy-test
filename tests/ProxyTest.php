<?php

namespace AlexanderZabornyi\ProxyTest\Tests;

use AlexanderZabornyi\ProxyTest\LabDoor;
use AlexanderZabornyi\ProxyTest\Security;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $door = new Security(new LabDoor());

        $this->assertEquals('Big no! It ain\'t possible.', $door->open('test'));
        $this->assertEquals('Opening lab door', $door->open('secret'));
    }
}