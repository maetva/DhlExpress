<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DHLCustomsInvoiceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Use DHL generated custom invoice types Commercial Invoice (CMI), Proforma Invoice (PFI)
 * @subpackage Enumerations
 */
class DHLCustomsInvoiceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const VALUE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'PROFORMA_INVOICE'
     * @return string 'PROFORMA_INVOICE'
     */
    const VALUE_PROFORMA_INVOICE = 'PROFORMA_INVOICE';
    /**
     * Return allowed values
     * @uses self::VALUE_COMMERCIAL_INVOICE
     * @uses self::VALUE_PROFORMA_INVOICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMMERCIAL_INVOICE,
            self::VALUE_PROFORMA_INVOICE,
        ];
    }
}
