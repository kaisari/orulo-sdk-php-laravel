<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class BuildingByNameRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/buildingNameSearch
 */
class BuildingByNameRequest extends GetWClientAuth
{
    /**
     * Building partial or full name. At least 3 chars. Case and punctuation insensitive.
     * @var string $name
     */
    protected string $name;

    /**
     * Default is set to 10, max is 20.
     * @var int $max_results
     */
    protected int $max_results;

    protected array $bodySchema = ['name', 'max_results'];

    /**
     * BuildingByNameRequest constructor.
     * @param string $name
     * @param int $maxResults
     */
    public function __construct(string $name, int $maxResults = 10)
    {
        parent::__construct();
        $this->name = $name;
        $this->max_results = $maxResults;
    }

    public function urn(): string
    {
        return 'buildings/name/search';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->max_results;
    }
}
