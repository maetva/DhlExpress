<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UseOwnShipmentIdentificationNumber EnumType
 * Meta information extracted from the WSDL
 * - documentation: Customer able to provide SID if set to Y. The default is N
 * @subpackage Enumerations
 */
class UseOwnShipmentIdentificationNumber extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Return allowed values
     * @uses self::VALUE_Y
     * @uses self::VALUE_N
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_Y,
            self::VALUE_N,
        ];
    }
}
