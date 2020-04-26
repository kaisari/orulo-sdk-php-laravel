<?php

namespace Jetimob\Orulo\Lib\Http\Model;

use Jetimob\Orulo\Lib\Traits\Serializable;

class PartnerSummary
{
    use Serializable;

    public string $id;

    public string $name;

    /** @var string $updated_at <date-time> DD/MM/YYYY HH:MM:SS */
    public string $updated_at;

    /** @var string $logo url */
    public string $logo;
}
