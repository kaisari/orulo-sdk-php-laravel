<?php

namespace Jetimob\Orulo\Exception;

/**
 * Class ConfigurationException
 *
 * This exception is thrown when at least one required key is not present in the configuration file.
 * The required keys are: client_id and client_secret
 *
 * @package Jetimob\Orulo\Exception
 */
class ConfigurationException extends OruloException
{
}