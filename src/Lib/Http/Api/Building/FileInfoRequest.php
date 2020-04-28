<?php

namespace Jetimob\Orulo\Lib\Http\Api\Building;

use Jetimob\Orulo\Lib\Http\Api\GetWEndUserAuth;

/**
 * Class FileInfoRequest
 * @package Jetimob\Orulo\Lib\Http\Api\Building
 * @see http://api.orulo.com.br.s3-website-us-east-1.amazonaws.com/#operation/files
 */
class FileInfoRequest extends GetWEndUserAuth
{
    protected string $buildingId;

    protected string $fileId;

    /**
     * FileInfoRequest constructor.
     * @param string $buildingId
     * @param string $fileId
     */
    public function __construct(string $buildingId, string $fileId)
    {
        parent::__construct();
        $this->buildingId = $buildingId;
        $this->fileId = $fileId;
    }

    public function urn(): string
    {
        return 'buildings/{buildingId}/files/{fileId}';
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
    public function getFileId(): string
    {
        return $this->fileId;
    }
}