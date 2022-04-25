<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NumberOfWaybillDocumentCopies EnumType
 * Meta information extracted from the WSDL
 * - documentation: Number of Waybill document copies required to be generated in shipment response
 * @subpackage Enumerations
 */
class NumberOfWaybillDocumentCopies extends AbstractStructEnumBase
{
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Return allowed values
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_1,
            self::VALUE_2,
        ];
    }
}
