<?php

namespace Jetimob\Orulo\Lib\Http\Exception;

use Throwable;

/**
 * Class RequiresEndUserInteraction
 *
 * Exception thrown if the request requires an ORULO_END_USER_AUTH authentication and we don't have an access_token
 * of this type stored in the cache.
 *
 * This happens because the end-user MUST be redirected to Orulo's OAuth page to authorize the usage.
 *
 * @package Jetimob\Orulo\Lib\Http\Exception
 */
class RequiresEndUserInteraction extends HttpException
{
}
