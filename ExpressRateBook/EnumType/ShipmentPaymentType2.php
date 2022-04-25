<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShipmentPaymentType2 EnumType
 * Meta information extracted from the WSDL
 * - documentation: S=Bill-To Shipper, R=Bill-To Receiver, T=Bill-To Third Party
 * @subpackage Enumerations
 */
class ShipmentPaymentType2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_R
     * @uses self::VALUE_T
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_S,
            self::VALUE_R,
            self::VALUE_T,
        ];
    }
}
