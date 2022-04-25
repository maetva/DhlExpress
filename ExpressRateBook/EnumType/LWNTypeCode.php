<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LWNTypeCode EnumType
 * @subpackage Enumerations
 */
class LWNTypeCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Return allowed values
     * @uses self::VALUE_N
     * @uses self::VALUE_C
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_N,
            self::VALUE_C,
        ];
    }
}
