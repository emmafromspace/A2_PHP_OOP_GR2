<?php

namespace Unitato\Init\Car;

use Unitato\Init\Car\Model\BaseCar;

class SUV extends BaseCar
{
    /**
     * @var int
     */
    private $ceiling;

    const CEILING_OPENED = 0;
    const CEILING_CLOSED = 1;
    const CEILING_PANO = 2;

    /**
     * @return int
     */
    public function getCeiling()
    {
        return $this->ceiling;
    }

    /**
     * @param int $ceiling
     *
     * @return SUV
     *
     * @throws \Exception
     */
    public function setCeiling($ceiling)
    {
        if (true === in_array($ceiling, [
            self::CEILING_OPENED,
            self::CEILING_CLOSED,
            self::CEILING_PANO,
        ]))
            $this->ceiling = $ceiling;
        else
            throw new \Exception('Ceiling is not valid');

        return $this;
    }
}