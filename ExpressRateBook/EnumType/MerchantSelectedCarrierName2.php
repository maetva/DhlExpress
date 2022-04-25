<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MerchantSelectedCarrierName2 EnumType
 * @subpackage Enumerations
 */
class MerchantSelectedCarrierName2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DHL'
     * @return string 'DHL'
     */
    const VALUE_DHL = 'DHL';
    /**
     * Constant for value 'UPS'
     * @return string 'UPS'
     */
    const VALUE_UPS = 'UPS';
    /**
     * Constant for value 'FEDEX'
     * @return string 'FEDEX'
     */
    const VALUE_FEDEX = 'FEDEX';
    /**
     * Constant for value 'TNT'
     * @return string 'TNT'
     */
    const VALUE_TNT = 'TNT';
    /**
     * Constant for value 'POST'
     * @return string 'POST'
     */
    const VALUE_POST = 'POST';
    /**
     * Constant for value 'OTHERS'
     * @return string 'OTHERS'
     */
    const VALUE_OTHERS = 'OTHERS';
    /**
     * Return allowed values
     * @uses self::VALUE_DHL
     * @uses self::VALUE_UPS
     * @uses self::VALUE_FEDEX
     * @uses self::VALUE_TNT
     * @uses self::VALUE_POST
     * @uses self::VALUE_OTHERS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DHL,
            self::VALUE_UPS,
            self::VALUE_FEDEX,
            self::VALUE_TNT,
            self::VALUE_POST,
            self::VALUE_OTHERS,
        ];
    }
}
