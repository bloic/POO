<?php

// Cars.php

class Cars

{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $energylevel;

    public function __construct(string $color, string $energy, int $nbSeats)
    {
        $this->color = $color;
        $this->energy =$energy;
        $this->nbSeats = $nbSeats;
    }


    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $this->start;
        return "started";
    }

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energylevel;
    }

}