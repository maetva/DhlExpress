<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reference StructType
 * @subpackage Structs
 */
class Reference extends AbstractStructBase
{
    /**
     * The ShipmentReference
     * Meta information extracted from the WSDL
     * - documentation: The ShipmentReference element the shipper reference ID number
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipmentReference = null;
    /**
     * The ShipmentReferenceType
     * Meta information extracted from the WSDL
     * - documentation: The ReferenceType element is the shipper reference type. Possible value: CU (reference number of consignor)
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipmentReferenceType = null;
    /**
     * Constructor method for Reference
     * @uses Reference::setShipmentReference()
     * @uses Reference::setShipmentReferenceType()
     * @param string $shipmentReference
     * @param string $shipmentReferenceType
     */
    public function __construct(?string $shipmentReference = null, ?string $shipmentReferenceType = null)
    {
        $this
            ->setShipmentReference($shipmentReference)
            ->setShipmentReferenceType($shipmentReferenceType);
    }
    /**
     * Get ShipmentReference value
     * @return string|null
     */
    public function getShipmentReference(): ?string
    {
        return $this->ShipmentReference;
    }
    /**
     * Set ShipmentReference value
     * @param string $shipmentReference
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference
     */
    public function setShipmentReference(?string $shipmentReference = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentReference) && !is_string($shipmentReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentReference, true), gettype($shipmentReference)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($shipmentReference) && mb_strlen((string) $shipmentReference) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $shipmentReference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($shipmentReference) && mb_strlen((string) $shipmentReference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $shipmentReference)), __LINE__);
        }
        $this->ShipmentReference = $shipmentReference;
        
        return $this;
    }
    /**
     * Get ShipmentReferenceType value
     * @return string|null
     */
    public function getShipmentReferenceType(): ?string
    {
        return $this->ShipmentReferenceType;
    }
    /**
     * Set ShipmentReferenceType value
     * @param string $shipmentReferenceType
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Reference
     */
    public function setShipmentReferenceType(?string $shipmentReferenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentReferenceType) && !is_string($shipmentReferenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentReferenceType, true), gettype($shipmentReferenceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($shipmentReferenceType) && mb_strlen((string) $shipmentReferenceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $shipmentReferenceType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($shipmentReferenceType) && mb_strlen((string) $shipmentReferenceType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $shipmentReferenceType)), __LINE__);
        }
        $this->ShipmentReferenceType = $shipmentReferenceType;
        
        return $this;
    }
}
