<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceQuery StructType
 * @subpackage Structs
 */
class ReferenceQuery extends AbstractStructBase
{
    /**
     * The ShipperAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The account number of the shipper
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipperAccountNumber = null;
    /**
     * The ShipmentReferences
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference $ShipmentReferences = null;
    /**
     * The ShipmentDateRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate $ShipmentDateRange = null;
    /**
     * Constructor method for ReferenceQuery
     * @uses ReferenceQuery::setShipperAccountNumber()
     * @uses ReferenceQuery::setShipmentReferences()
     * @uses ReferenceQuery::setShipmentDateRange()
     * @param string $shipperAccountNumber
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference $shipmentReferences
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate $shipmentDateRange
     */
    public function __construct(?string $shipperAccountNumber = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference $shipmentReferences = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate $shipmentDateRange = null)
    {
        $this
            ->setShipperAccountNumber($shipperAccountNumber)
            ->setShipmentReferences($shipmentReferences)
            ->setShipmentDateRange($shipmentDateRange);
    }
    /**
     * Get ShipperAccountNumber value
     * @return string|null
     */
    public function getShipperAccountNumber(): ?string
    {
        return $this->ShipperAccountNumber;
    }
    /**
     * Set ShipperAccountNumber value
     * @param string $shipperAccountNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery
     */
    public function setShipperAccountNumber(?string $shipperAccountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAccountNumber) && !is_string($shipperAccountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAccountNumber, true), gettype($shipperAccountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($shipperAccountNumber) && mb_strlen((string) $shipperAccountNumber) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $shipperAccountNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($shipperAccountNumber) && mb_strlen((string) $shipperAccountNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $shipperAccountNumber)), __LINE__);
        }
        $this->ShipperAccountNumber = $shipperAccountNumber;
        
        return $this;
    }
    /**
     * Get ShipmentReferences value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference|null
     */
    public function getShipmentReferences(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference
    {
        return $this->ShipmentReferences;
    }
    /**
     * Set ShipmentReferences value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference $shipmentReferences
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery
     */
    public function setShipmentReferences(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference $shipmentReferences = null): self
    {
        $this->ShipmentReferences = $shipmentReferences;
        
        return $this;
    }
    /**
     * Get ShipmentDateRange value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate|null
     */
    public function getShipmentDateRange(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate
    {
        return $this->ShipmentDateRange;
    }
    /**
     * Set ShipmentDateRange value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate $shipmentDateRange
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery
     */
    public function setShipmentDateRange(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentDate $shipmentDateRange = null): self
    {
        $this->ShipmentDateRange = $shipmentDateRange;
        
        return $this;
    }
}
