<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DropOffType2 EnumType
 * @subpackage Enumerations
 */
class DropOffType2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'REGULAR_PICKUP'
     * @return string 'REGULAR_PICKUP'
     */
    const VALUE_REGULAR_PICKUP = 'REGULAR_PICKUP';
    /**
     * Constant for value 'REQUEST_COURIER'
     * @return string 'REQUEST_COURIER'
     */
    const VALUE_REQUEST_COURIER = 'REQUEST_COURIER';
    /**
     * Return allowed values
     * @uses self::VALUE_REGULAR_PICKUP
     * @uses self::VALUE_REQUEST_COURIER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_REGULAR_PICKUP,
            self::VALUE_REQUEST_COURIER,
        ];
    }
}
