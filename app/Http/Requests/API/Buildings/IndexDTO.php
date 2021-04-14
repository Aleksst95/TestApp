<?php

declare(strict_types=1);

namespace App\Http\Requests\API\Buildings;

class IndexDTO
{
    private ?string $name;
    private ?float $priceFrom;
    private ?float $priceTo;
    private ?int $countBedrooms;
    private ?int $countBathrooms;
    private ?int $countStoreys;
    private ?int $countGarages;

    public function __construct(
        ?string $name,
        ?float $priceFrom,
        ?float $priceTo,
        ?int $countBedrooms,
        ?int $countBathrooms,
        ?int $countStoreys,
        ?int $countGarages
    ) {
        $this->name = $name;
        $this->priceFrom = $priceFrom;
        $this->priceTo = $priceTo;
        $this->countBedrooms = $countBedrooms;
        $this->countBathrooms = $countBathrooms;
        $this->countStoreys = $countStoreys;
        $this->countGarages = $countGarages;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function priceFrom(): ?float
    {
        return $this->priceFrom;
    }

    public function priceTo(): ?float
    {
        return $this->priceTo;
    }

    public function countBedrooms(): ?int
    {
        return $this->countBedrooms;
    }

    public function countBathrooms(): ?int
    {
        return $this->countBathrooms;
    }

    public function countStoreys(): ?int
    {
        return $this->countStoreys;
    }

    public function countGarages(): ?int
    {
        return $this->countGarages;
    }
}
