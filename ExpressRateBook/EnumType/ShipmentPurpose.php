<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentPurpose EnumType
 * Meta information extracted from the WSDL
 * - documentation: Indicates if the shipment was sent for PERSONAL (e.g. Gift) or COMMERCIAL (e.g. Sale) reasons
 * @subpackage Enumerations
 */
class ShipmentPurpose extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PERSONAL'
     * @return string 'PERSONAL'
     */
    const VALUE_PERSONAL = 'PERSONAL';
    /**
     * Constant for value 'COMMERCIAL'
     * @return string 'COMMERCIAL'
     */
    const VALUE_COMMERCIAL = 'COMMERCIAL';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_COMMERCIAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSONAL,
            self::VALUE_COMMERCIAL,
        ];
    }
}
