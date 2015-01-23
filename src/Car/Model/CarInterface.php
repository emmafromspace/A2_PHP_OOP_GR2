<?php

namespace Unitato\Init\Car\Model;

interface CarInterface
{
    /**
     * @return int
     */
    public function getSpeed();

    /**
     * @param int $speed
     *
     * @return CarInterface
     */
    public function setSpeed($speed);
}