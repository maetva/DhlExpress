<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstimatedDeliveryDateType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Estimated Delivery Date Type to be returned in the Create Shipment response QDDC - constitutes DHL's service commitment as quoted at booking/shipment creation. QDDC builds in clearance time, and potentially other special operational
 * non-transport component(s), when relevant. QDDF - is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF
 * does not constitute DHL's service commitment.
 * @subpackage Enumerations
 */
class EstimatedDeliveryDateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'QDDC'
     * @return string 'QDDC'
     */
    const VALUE_QDDC = 'QDDC';
    /**
     * Constant for value 'QDDF'
     * @return string 'QDDF'
     */
    const VALUE_QDDF = 'QDDF';
    /**
     * Return allowed values
     * @uses self::VALUE_QDDC
     * @uses self::VALUE_QDDF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_QDDC,
            self::VALUE_QDDF,
        ];
    }
}
