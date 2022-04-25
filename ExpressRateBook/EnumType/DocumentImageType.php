<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentImageType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Custom Clearance Document Image Type
 * @subpackage Enumerations
 */
class DocumentImageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INV'
     * @return string 'INV'
     */
    const VALUE_INV = 'INV';
    /**
     * Constant for value 'PNV'
     * @return string 'PNV'
     */
    const VALUE_PNV = 'PNV';
    /**
     * Constant for value 'COO'
     * @return string 'COO'
     */
    const VALUE_COO = 'COO';
    /**
     * Constant for value 'NAF'
     * @return string 'NAF'
     */
    const VALUE_NAF = 'NAF';
    /**
     * Constant for value 'CIN'
     * @return string 'CIN'
     */
    const VALUE_CIN = 'CIN';
    /**
     * Constant for value 'DCL'
     * @return string 'DCL'
     */
    const VALUE_DCL = 'DCL';
    /**
     * Constant for value 'AWB'
     * @return string 'AWB'
     */
    const VALUE_AWB = 'AWB';
    /**
     * Return allowed values
     * @uses self::VALUE_INV
     * @uses self::VALUE_PNV
     * @uses self::VALUE_COO
     * @uses self::VALUE_NAF
     * @uses self::VALUE_CIN
     * @uses self::VALUE_DCL
     * @uses self::VALUE_AWB
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INV,
            self::VALUE_PNV,
            self::VALUE_COO,
            self::VALUE_NAF,
            self::VALUE_CIN,
            self::VALUE_DCL,
            self::VALUE_AWB,
        ];
    }
}
