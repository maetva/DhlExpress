<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RequestWaybillDocument EnumType
 * Meta information extracted from the WSDL
 * - documentation: Return waybill document in shipment response. The default is N which is always not be returned
 * @subpackage Enumerations
 */
class RequestWaybillDocument extends AbstractStructEnumBase
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