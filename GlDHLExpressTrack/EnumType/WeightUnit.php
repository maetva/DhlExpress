<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WeightUnit EnumType
 * @subpackage Enumerations
 */
class WeightUnit extends AbstractStructEnumBase
{
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'K'
     * @return string 'K'
     */
    const VALUE_K = 'K';
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Return allowed values
     * @uses self::VALUE_L
     * @uses self::VALUE_K
     * @uses self::VALUE_G
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_L,
            self::VALUE_K,
            self::VALUE_G,
        ];
    }
}
