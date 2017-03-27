<?php

namespace Tasksuki\Component\Driver;

/**
 * Interface DriverInterface
 *
 * @package Tasksuki\Component\Driver
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
interface DriverInterface
{
    /**
     * @param string $name
     * @param string $message
     *
     * @return bool
     */
    public function send(string $name, string $message): bool;

    /**
     * @param string   $name
     * @param callable $handler
     */
    public function receive(string $name, callable $handler);
}