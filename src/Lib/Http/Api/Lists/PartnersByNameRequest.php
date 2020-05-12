<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class PartnersbyNameRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Listsco
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/partnersNameSearch
 */
class PartnersByNameRequest extends GetWClientAuth
{
    /**
     * Partial or full partner name. At least 3 chars. Punctuation and case insensitive.
     * @var string $name
     */
    protected string $name;

    /**
     * Enum: developer | commercial_partner
     * Filters the partner by its role.
     * @var string $role
     */
    protected ?string $role;

    /**
     * Required only if a city is defined.
     * @var string|null $state
     */
    protected ?string $state;

    /**
     * If city is set, state is required.
     * @var string|null $city
     */
    protected ?string $city;

    /**
     * Default is set to 10, max is 20.
     * @var int $max_results
     */
    protected int $max_results;

    protected array $bodySchema = ['name', 'role', 'state', 'city', 'max_results'];

    /**
     * PartnersByNameRequest constructor.
     * @param string $name
     * @param string|null $role
     * @param string|null $state
     * @param string|null $city
     * @param int $maxResults
     */
    public function __construct(
        string $name,
        ?string $role = null,
        ?string $state = null,
        ?string $city = null,
        int $maxResults = 10
    ) {
        parent::__construct();
        $this->name = $name;
        $this->role = $role;
        $this->state = $state;
        $this->city = $city;
        $this->max_results = $maxResults;
    }

    public function urn(): string
    {
        return 'partners/name/search';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->max_results;
    }
}
