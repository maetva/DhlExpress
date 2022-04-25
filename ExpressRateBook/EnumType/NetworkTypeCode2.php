<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NetworkTypeCode2 EnumType
 * @subpackage Enumerations
 */
class NetworkTypeCode2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AL'
     * @return string 'AL'
     */
    const VALUE_AL = 'AL';
    /**
     * Constant for value 'DD'
     * @return string 'DD'
     */
    const VALUE_DD = 'DD';
    /**
     * Constant for value 'TD'
     * @return string 'TD'
     */
    const VALUE_TD = 'TD';
    /**
     * Return allowed values
     * @uses self::VALUE_AL
     * @uses self::VALUE_DD
     * @uses self::VALUE_TD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AL,
            self::VALUE_DD,
            self::VALUE_TD,
        ];
    }
}
