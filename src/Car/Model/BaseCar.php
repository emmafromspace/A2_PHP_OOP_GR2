<?php

namespace Unitato\Init\Car\Model;

abstract class BaseCar implements CarInterface
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var int
     */
    private $horsepower;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var int
     */
    private $fuel;

    /**
     * @var int
     */
    private $speed;

    const FUEL_ELECTRIC = 0;
    const FUEL_GAS      = 1;
    const FUEL_DIESEL   = 2;
    const FUEL_GPL      = 3;

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return BaseCar
     *
     * @throws \Exception
     */
    public function setBrand($brand)
    {
        if (is_string($brand))
            $this->brand = $brand;
        else
            throw new \Exception('Brand must be a string');

        return $this;
    }

    /**
     * @return int
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * @param int $horsepower
     *
     * @return BaseCar
     *
     * @throws \Exception
     */
    public function setHorsepower($horsepower)
    {
        if (is_int($horsepower) && $horsepower > 0)
            $this->horsepower = $horsepower;
        else
            throw new \Exception('Horsepower must be an integer and > 0');

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return BaseCar
     *
     * @throws \Exception
     */
    public function setWeight($weight)
    {
        if (is_int($weight) && $weight > 0)
            $this->weight = $weight;
        else
            throw new \Exception('Weight must be an integer and > 0');

        return $this;
    }

    /**
     * @return int
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param int $fuel
     *
     * @return BaseCar
     *
     * @throws \Exception
     */
    public function setFuel($fuel)
    {
        if (true === in_array($fuel, [
            self::FUEL_ELECTRIC,
            self::FUEL_GAS,
            self::FUEL_DIESEL,
            self::FUEL_GPL,
        ]))
            $this->fuel = $fuel;
        else
            throw new \Exception('Fuel not valid');

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * {@inheritdoc}
     *
     * @return BaseCar
     *
     * @throws \Exception
     */
    public function setSpeed($speed)
    {
        if (is_int($speed) && $speed > 0)
            $this->speed = $speed;
        else
            throw new \Exception('Speed must be an integer and > 0');

        return $this;
    }
}
