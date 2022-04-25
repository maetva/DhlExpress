<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ChargeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Amount type code. Possible values: 1) FREIGHT 2) ADDITIONAL_CHARGE 3) INSURANCE
 * - base: xsd:string
 * - maxLength: 5
 * - minLength: 5
 * - whiteSpace: collapse
 * @subpackage Enumerations
 */
class ChargeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FREIGHT'
     * @return string 'FREIGHT'
     */
    const VALUE_FREIGHT = 'FREIGHT';
    /**
     * Constant for value 'ADDITIONAL_CHARGE'
     * @return string 'ADDITIONAL_CHARGE'
     */
    const VALUE_ADDITIONAL_CHARGE = 'ADDITIONAL_CHARGE';
    /**
     * Constant for value 'INSURANCE'
     * @return string 'INSURANCE'
     */
    const VALUE_INSURANCE = 'INSURANCE';
    /**
     * Return allowed values
     * @uses self::VALUE_FREIGHT
     * @uses self::VALUE_ADDITIONAL_CHARGE
     * @uses self::VALUE_INSURANCE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FREIGHT,
            self::VALUE_ADDITIONAL_CHARGE,
            self::VALUE_INSURANCE,
        ];
    }
}
