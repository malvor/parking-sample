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

	private array $parkings = [];

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

	public function addNewParking(ParkingInterface $newParking): void
    {
		$this->parkings[] = $newParking;
    }

    public function removeParking(ParkingInterface $parking): void
    {
        $key = array_search($parking, $this->parkings);
		if (!$key) {
			throw new \Exception ("Parking not found");
		}
		unset($this->parkings[$key]);
    }

    public function getTotalParking(): int
    {
		return count($this->parkings);
    }

    public function getTotalParkingCapacities()
    {		
		$total = 0;
		foreach ($this->parkings as $parking) {
			$total += $parking->getNumberOfPlaces();
		}
		return $total;
    }
}