<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class Typology
{
    use Serializable;

    public string $id;

    /** @var string $type Enum: "Apartamento" | "Casa" | "Casa em Condomínio" | "Cobertura Duplex" | "Cobertura Horizontal" | "Duplex" | "Edifício Comercial" | "Fazenda/Sítio" | "Galpão/Pavilhão" | "Garden" | "Loft" | "Loja" | "Sala" | "Sala com Área Ext." | "Studio" | "Terreno/Lote Comercial" | "Terreno/Lote Residencial" | "Triplex"*/
    public string $type;

    public float $original_price;

    /** @var float $discount_price price with applied discount (if available) */
    public float $discount_price;

    public float $private_area;

    public float $total_area;

    public int $bedrooms;

    public int $bathrooms;

    public int $suites;

    /** @var int $parking amount of available parking spots */
    public int $parking;

    /** @var string $solar_position Enum: "Norte" | "Sul" | "Leste" | "Oeste" */
    public ?string $solar_position = null;

    public ?float $condominium_value = null;

    /** @var float $urban_land_tax "IPTU" value */
    public ?float $urban_land_tax = null;

    public ?float $rental_price = null;
}
