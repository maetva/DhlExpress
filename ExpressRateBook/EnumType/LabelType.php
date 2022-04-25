<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LabelType EnumType
 * @subpackage Enumerations
 */
class LabelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'ZPL'
     * @return string 'ZPL'
     */
    const VALUE_ZPL = 'ZPL';
    /**
     * Constant for value 'EPL'
     * @return string 'EPL'
     */
    const VALUE_EPL = 'EPL';
    /**
     * Constant for value 'LP2'
     * @return string 'LP2'
     */
    const VALUE_LP_2 = 'LP2';
    /**
     * Return allowed values
     * @uses self::VALUE_PDF
     * @uses self::VALUE_ZPL
     * @uses self::VALUE_EPL
     * @uses self::VALUE_LP_2
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PDF,
            self::VALUE_ZPL,
            self::VALUE_EPL,
            self::VALUE_LP_2,
        ];
    }
}
