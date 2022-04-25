<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentPurpose2 EnumType
 * @subpackage Enumerations
 */
class ShipmentPurpose2 extends AbstractStructEnumBase
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
