<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Typology
{
    use Serializable;

    protected string $id;

    /** @var string $type Enum: "Apartamento" | "Casa" | "Casa em Condomínio" | "Cobertura Duplex" | "Cobertura Horizontal" | "Duplex" | "Edifício Comercial" | "Fazenda/Sítio" | "Galpão/Pavilhão" | "Garden" | "Loft" | "Loja" | "Sala" | "Sala com Área Ext." | "Studio" | "Terreno/Lote Comercial" | "Terreno/Lote Residencial" | "Triplex"*/
    protected string $type;

    protected float $original_price;

    /** @var float $discount_price price with applied discount (if available) */
    protected float $discount_price;

    protected float $private_area;

    protected float $total_area;

    protected int $bedrooms;

    protected int $bathrooms;

    protected int $suites;

    /** @var int $parking amount of available parking spots */
    protected int $parking;

    /** @var string $solar_position Enum: "Norte" | "Sul" | "Leste" | "Oeste" */
    protected string $solar_position;

    protected float $condominium_value;

    /** @var float $urban_land_tax "IPTU" value */
    protected float $urban_land_tax;

    protected float $rental_price;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @return float
     */
    public function getOriginalPrice(): ?float
    {
        return $this->original_price ?? null;
    }

    /**
     * @return float
     */
    public function getDiscountPrice(): ?float
    {
        return $this->discount_price ?? null;
    }

    /**
     * @return float
     */
    public function getPrivateArea(): ?float
    {
        return $this->private_area ?? null;
    }

    /**
     * @return float
     */
    public function getTotalArea(): ?float
    {
        return $this->total_area ?? null;
    }

    /**
     * @return int
     */
    public function getBedrooms(): ?int
    {
        return $this->bedrooms ?? null;
    }

    /**
     * @return int
     */
    public function getBathrooms(): ?int
    {
        return $this->bathrooms ?? null;
    }

    /**
     * @return int
     */
    public function getSuites(): ?int
    {
        return $this->suites ?? null;
    }

    /**
     * @return int
     */
    public function getParking(): ?int
    {
        return $this->parking ?? null;
    }

    /**
     * @return string
     */
    public function getSolarPosition(): ?string
    {
        return $this->solar_position ?? null;
    }

    /**
     * @return float
     */
    public function getCondominiumValue(): ?float
    {
        return $this->condominium_value ?? null;
    }

    /**
     * @return float
     */
    public function getUrbanLandTax(): ?float
    {
        return $this->urban_land_tax ?? null;
    }

    /**
     * @return float
     */
    public function getRentalPrice(): ?float
    {
        return $this->rental_price ?? null;
    }
}
