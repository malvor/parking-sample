<?php
declare(strict_types=1);
namespace App\Model;

class City
{
	/** @var string */
	private $name;

	/** @var string */
	private $country;

	/** @var int */
	private $population;

	/** @var float */
	private $area;

	private $parkings;

	/**
	 * City constructor.
	 *
	 * @param string $name
	 * @param string $country
	 * @param int $population
	 * @param float $area
	 */
	public function __construct(string $name, string $country, int $population, float $area)
	{
		$this->name       = $name;
		$this->country    = $country;
		$this->population = $population;
		$this->area       = $area;
	}

	public function addNewParking(): void
    {
        //TODO: implement
    }

    public function removeParking(): void
    {
        //TODO: implement
    }

    public function getTotalParking(): int
    {
        //TODO: implement
        return 0;
    }

    public function getTotalParkingCapacities(): int
    {
        //TODO: implement
        return 1;
    }
}