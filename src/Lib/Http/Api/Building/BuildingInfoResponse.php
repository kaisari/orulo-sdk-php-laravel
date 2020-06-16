<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Model\Address;
use Jetimob\Orulo\Lib\Http\Model\BuildingTrait;
use Jetimob\Orulo\Lib\Http\Model\CommercialContact;
use Jetimob\Orulo\Lib\Http\Model\DefaultImage;
use Jetimob\Orulo\Lib\Http\Model\Developer;
use Jetimob\Orulo\Lib\Http\Model\File;
use Jetimob\Orulo\Lib\Http\Model\FloorPlanBase;
use Jetimob\Orulo\Lib\Http\Model\ImageBase;
use Jetimob\Orulo\Lib\Http\Model\OpportunityWClientBroker;
use Jetimob\Orulo\Lib\Http\Model\Typology;
use Jetimob\Orulo\Lib\Http\Model\Video;
use Jetimob\Orulo\Lib\Http\Response;

/**
 * Class BuildingInfoResponse
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#tag/Dados-do-Empreendimento
 */
class BuildingInfoResponse extends Response
{
    use BuildingTrait;

    /** @var CommercialContact[] $commercial_contacts */
    protected array $commercial_contacts;

    /** @var string $created_at string <date-time> DD/MM/YYYY HH:MM:SS */
    protected string $created_at;

    /** @var string $status Enum: "Em construção" | "Pronto novo" | "Usado" */
    protected string $status;

    /** @var string $opening_date string <date> DD/MM/YYYY */
    protected string $opening_date;

    /** @var string $launch_date string <date> DD/MM/YYYY */
    protected string $launch_date;

    /** @var string $type Enum: "Vertical" | "Horizontal" */
    protected string $type;

    /** @var int $stock remnant items */
    protected int $stock;

    protected OpportunityWClientBroker $opportunity;

    /** @var Typology[] $typologies */
    protected array $typologies;

    /** @var ImageBase[] $images */
    protected array $images;

    /** @var FloorPlanBase[] $floor_plans */
    protected array $floor_plans;

    /** @var File[] $files */
    protected array $files;

    /** @var Video[] $videos */
    protected array $videos;

    /** @var string $webpage building website */
    protected string $webpage;

    /** @var string $virtual_tour url of the building's virtual tour */
    protected string $virtual_tour;

    /** @var string[] $features */
    protected array $features;

    /** @var float $total_area total area of the building */
    protected float $total_area;

    protected float $floor_area;

    protected int $apts_per_floor;

    protected int $number_of_floors;

    /** @var int $total_units total amount of units in the building */
    protected int $total_units;

    public function initComplexObjects()
    {
        $this->commercial_contacts = $this->deserializeDataArray('commercial_contacts', CommercialContact::class);
        $this->typologies = $this->deserializeDataArray('typologies', Typology::class);
        $this->images = $this->deserializeDataArray('images', ImageBase::class);
        $this->floor_plans = $this->deserializeDataArray('floor_plans', FloorPlanBase::class);
        $this->files = $this->deserializeDataArray('files', File::class);
        $this->videos = $this->deserializeDataArray('videos', Video::class);
        $this->features = $this->data->features;
    }

    /**
     * @return CommercialContact[]
     */
    public function getCommercialContacts(): array
    {
        return $this->commercial_contacts;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at ?? null;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status ?? null;
    }

    /**
     * @return string|null
     */
    public function getOpeningDate(): ?string
    {
        return $this->opening_date ?? null;
    }

    /**
     * @return string|null
     */
    public function getLaunchDate(): ?string
    {
        return $this->launch_date ?? null;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @return int|null
     */
    public function getStock(): ?int
    {
        return $this->stock ?? null;
    }

    /**
     * @return OpportunityWClientBroker|null
     */
    public function getOpportunity(): ?OpportunityWClientBroker
    {
        return $this->opportunity ?? null;
    }

    /**
     * @return Typology[]
     */
    public function getTypologies(): array
    {
        return $this->typologies;
    }

    /**
     * @return ImageBase[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return FloorPlanBase[]
     */
    public function getFloorPlans(): array
    {
        return $this->floor_plans;
    }

    /**
     * @return File[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @return Video[]
     */
    public function getVideos(): array
    {
        return $this->videos;
    }

    /**
     * @return string|null
     */
    public function getWebpage(): ?string
    {
        return $this->webpage ?? null;
    }

    /**
     * @return string|null
     */
    public function getVirtualTour(): ?string
    {
        return $this->virtual_tour ?? null;
    }

    /**
     * @return string[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    /**
     * @return float|null
     */
    public function getTotalArea(): ?float
    {
        return $this->total_area ?? null;
    }

    /**
     * @return float|null
     */
    public function getFloorArea(): ?float
    {
        return $this->floor_area ?? null;
    }

    /**
     * @return int|null
     */
    public function getAptsPerFloor(): ?int
    {
        return $this->apts_per_floor ?? null;
    }

    /**
     * @return int|null
     */
    public function getNumberOfFloors(): ?int
    {
        return $this->number_of_floors ?? null;
    }

    /**
     * @return int|null
     */
    public function getTotalUnits(): ?int
    {
        return $this->total_units ?? null;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return Developer|null
     */
    public function getDeveloper(): ?Developer
    {
        return $this->developer ?? null;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address ?? null;
    }

    /**
     * @return float|null
     */
    public function getMinPrice(): ?float
    {
        return $this->min_price ?? null;
    }

    /**
     * @return float|null
     */
    public function getPricePerPrivateSquareMeter(): ?float
    {
        return $this->price_per_private_square_meter ?? null;
    }

    /**
     * @return int|null
     */
    public function getMinBathrooms(): ?int
    {
        return $this->min_bathrooms ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxBathrooms(): ?int
    {
        return $this->max_bathrooms ?? null;
    }

    /**
     * @return int|null
     */
    public function getMinArea(): ?int
    {
        return $this->min_area ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxArea(): ?int
    {
        return $this->max_area ?? null;
    }

    /**
     * @return int|null
     */
    public function getMinBedrooms(): ?int
    {
        return $this->min_bedrooms ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxBedrooms(): ?int
    {
        return $this->max_bedrooms ?? null;
    }

    /**
     * @return int|null
     */
    public function getMinSuites(): ?int
    {
        return $this->min_suites ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxSuites(): ?int
    {
        return $this->max_suites ?? null;
    }

    /**
     * @return int|null
     */
    public function getMinParking(): ?int
    {
        return $this->min_parking ?? null;
    }

    /**
     * @return int|null
     */
    public function getMaxParking(): ?int
    {
        return $this->max_parking ?? null;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return string|null
     */
    public function getFinality(): ?string
    {
        return $this->finality ?? null;
    }

    /**
     * @return DefaultImage|null
     */
    public function getDefaultImage(): ?DefaultImage
    {
        return $this->default_image ?? null;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at ?? null;
    }
}
