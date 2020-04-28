<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWEndUserAuth;

/**
 * Class CommercialContactListRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/contacts
 */
class CommercialContactRequest extends GetWEndUserAuth
{
    protected string $buildingId;

    protected string $contactId;

    /**
     * CommercialContactListRequest constructor.
     * @param string $buildingBuildingId
     * @param string $contactId
     */
    public function __construct(string $buildingBuildingId, string $contactId)
    {
        parent::__construct();
        $this->buildingId = $buildingBuildingId;
        $this->contactId = $contactId;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}/commercial_contacts/{contactId}';
    }

    /**
     * @return string
     */
    public function getBuildingId(): string
    {
        return $this->buildingId;
    }

    /**
     * @return string
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }
}
