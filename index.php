<?php

class Camion extends Car
{
    private int $stockCapacity;
    private int $charge = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->stockCapacity = $stockCapacity;
    }

    public function isFilling(): string
    {
        if($this->charge == $this->stockCapacity) {
            return 'Full';
        } elseif ($this->charge < $this->stockCapacity) {
            return 'in filling';
        } else {
            return 'error charge > stockCapacity';
        }
    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity($stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge($charge): void
    {
        $this->charge = $charge;
    }
}

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'Fuel',
        'Electric',
    ];
    protected string $energy;
    protected int $energyLevel = 100;
    protected bool $isEngineOn = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->nbWheels = 4;
        $this->currentSpeed = 0;
    }

    public function start(): string
    {
        if ($this->isEngineOn) {
            return 'Engine is already On';
        } else {
            $this->isEngineOn = true;
            return 'Engine start';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getIsEngineOn(): bool
    {
        return $this->isEngineOn;
    }

    public function setIsEngineOn($isEngineOn): void
    {
        $this->isEngineOn = $isEngineOn;
    }
}


class Bicycle extends Vehicle
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
        $this->nbWheels = 2;
        $this->currentSpeed = 0;
    }
}

class Vehicle
{
    protected string $color;
    protected int $currentSpeed;
    protected int $nbSeats;
    protected int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return 'Go !';
    }

    public function brake(): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence .= "Im'stopped !";
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}