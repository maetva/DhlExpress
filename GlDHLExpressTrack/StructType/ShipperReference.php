<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipperReference StructType
 * @subpackage Structs
 */
class ShipperReference extends AbstractStructBase
{
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for shipment
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReferenceID = null;
    /**
     * The ReferenceType
     * Meta information extracted from the WSDL
     * - documentation: Reference Type
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ReferenceType = null;
    /**
     * Constructor method for ShipperReference
     * @uses ShipperReference::setReferenceID()
     * @uses ShipperReference::setReferenceType()
     * @param string $referenceID
     * @param string $referenceType
     */
    public function __construct(?string $referenceID = null, ?string $referenceType = null)
    {
        $this
            ->setReferenceID($referenceID)
            ->setReferenceType($referenceType);
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID(): ?string
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipperReference
     */
    public function setReferenceID(?string $referenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
    /**
     * Get ReferenceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferenceType(): ?string
    {
        return isset($this->ReferenceType) ? $this->ReferenceType : null;
    }
    /**
     * Set ReferenceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $referenceType
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipperReference
     */
    public function setReferenceType(?string $referenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceType) && !is_string($referenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceType, true), gettype($referenceType)), __LINE__);
        }
        if (is_null($referenceType) || (is_array($referenceType) && empty($referenceType))) {
            unset($this->ReferenceType);
        } else {
            $this->ReferenceType = $referenceType;
        }
        
        return $this;
    }
}
