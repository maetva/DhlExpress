<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SplitLabelsByPieces EnumType
 * Meta information extracted from the WSDL
 * - documentation: single PDF or thermal output file for each pieces in Transport Label, Single PDF or thermal output file for Waybill Document (for regular shipment - dutiable shipment), and Single PDF of Shipment Receipt + Customs Invoice
 * @subpackage Enumerations
 */
class SplitLabelsByPieces extends AbstractStructEnumBase
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
