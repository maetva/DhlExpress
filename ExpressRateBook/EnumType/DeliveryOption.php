<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeliveryOption EnumType
 * @subpackage Enumerations
 */
class DeliveryOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TV'
     * @return string 'TV'
     */
    const VALUE_TV = 'TV';
    /**
     * Constant for value 'SW'
     * @return string 'SW'
     */
    const VALUE_SW = 'SW';
    /**
     * Constant for value 'SX'
     * @return string 'SX'
     */
    const VALUE_SX = 'SX';
    /**
     * Return allowed values
     * @uses self::VALUE_TV
     * @uses self::VALUE_SW
     * @uses self::VALUE_SX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TV,
            self::VALUE_SW,
            self::VALUE_SX,
        ];
    }
}
