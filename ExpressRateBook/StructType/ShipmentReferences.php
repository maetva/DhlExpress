<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentReferences StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label - ECOM26_84CI_003 templates
 * @subpackage Structs
 */
class ShipmentReferences extends AbstractStructBase
{
    /**
     * The ShipmentReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $ShipmentReference = null;
    /**
     * Constructor method for ShipmentReferences
     * @uses ShipmentReferences::setShipmentReference()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference = null)
    {
        $this
            ->setShipmentReference($shipmentReference);
    }
    /**
     * Get ShipmentReference value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType|null
     */
    public function getShipmentReference(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType
    {
        return $this->ShipmentReference;
    }
    /**
     * Set ShipmentReference value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferences
     */
    public function setShipmentReference(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference = null): self
    {
        $this->ShipmentReference = $shipmentReference;
        
        return $this;
    }
}
