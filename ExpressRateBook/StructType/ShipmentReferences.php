<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $ShipmentReference = null;
    /**
     * Constructor method for ShipmentReferences
     * @uses ShipmentReferences::setShipmentReference()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference = null)
    {
        $this
            ->setShipmentReference($shipmentReference);
    }
    /**
     * Get ShipmentReference value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType|null
     */
    public function getShipmentReference(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType
    {
        return $this->ShipmentReference;
    }
    /**
     * Set ShipmentReference value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences
     */
    public function setShipmentReference(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferenceType $shipmentReference = null): self
    {
        $this->ShipmentReference = $shipmentReference;
        
        return $this;
    }
}
