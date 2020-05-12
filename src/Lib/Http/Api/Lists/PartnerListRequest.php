<?php

namespace Jetimob\Orulo\Lib\Http\Api\Lists;

use Jetimob\Orulo\Lib\Http\Api\GetWClientAuth;

/**
 * Class PartnerListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Lists
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/partners
 */
class PartnerListRequest extends GetWClientAuth
{
    protected ?string $city;

    protected ?string $state;

    protected ?string $type;

    protected ?string $role;

    protected ?string $updated_after;

    protected int $results_per_page;

    protected int $page;

    protected array $bodySchema = ['city', 'state', 'type', 'role', 'updated_after', 'results_per_page', 'page'];

    /**
     * PartnerListRequest constructor.
     * @param string|null $city
     * @param string|null $state
     * @param string|null $type
     * @param string|null $role
     * @param string|null $updated_after
     * @param int $results_per_page
     * @param int $page
     */
    public function __construct(
        ?string $city = null,
        ?string $state = null,
        ?string $type = null,
        ?string $role = null,
        ?string $updated_after = null,
        int $results_per_page = 10,
        int $page = 1
    ) {
        parent::__construct();
        $this->city = $city;
        $this->state = $state;
        $this->type = $type;
        $this->role = $role;
        $this->updated_after = $updated_after;
        $this->results_per_page = $results_per_page;
        $this->page = $page;
    }

    public function urn(): string
    {
        return 'partners';
    }
}
