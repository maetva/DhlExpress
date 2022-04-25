<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentTransportationMode2 EnumType
 * @subpackage Enumerations
 */
class ShipmentTransportationMode2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AIR'
     * @return string 'AIR'
     */
    const VALUE_AIR = 'AIR';
    /**
     * Constant for value 'OCEAN'
     * @return string 'OCEAN'
     */
    const VALUE_OCEAN = 'OCEAN';
    /**
     * Constant for value 'GROUND'
     * @return string 'GROUND'
     */
    const VALUE_GROUND = 'GROUND';
    /**
     * Return allowed values
     * @uses self::VALUE_AIR
     * @uses self::VALUE_OCEAN
     * @uses self::VALUE_GROUND
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AIR,
            self::VALUE_OCEAN,
            self::VALUE_GROUND,
        ];
    }
}
