<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnitOfMeasurement2 EnumType
 * @subpackage Enumerations
 */
class UnitOfMeasurement2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SI'
     * @return string 'SI'
     */
    const VALUE_SI = 'SI';
    /**
     * Constant for value 'SU'
     * @return string 'SU'
     */
    const VALUE_SU = 'SU';
    /**
     * Return allowed values
     * @uses self::VALUE_SI
     * @uses self::VALUE_SU
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SI,
            self::VALUE_SU,
        ];
    }
}
