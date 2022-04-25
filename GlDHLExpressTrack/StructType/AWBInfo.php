<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AWBInfo StructType
 * @subpackage Structs
 */
class AWBInfo extends AbstractStructBase
{
    /**
     * The AWBNumber
     * Meta information extracted from the WSDL
     * - documentation: Identifies the piece number as a counter, same as input.
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 10
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $AWBNumber = null;
    /**
     * The TrackedBy
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $TrackedBy = null;
    /**
     * The Status
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status $Status = null;
    /**
     * The ShipmentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $ShipmentInfo = null;
    /**
     * The Pieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $Pieces = null;
    /**
     * Constructor method for AWBInfo
     * @uses AWBInfo::setAWBNumber()
     * @uses AWBInfo::setTrackedBy()
     * @uses AWBInfo::setStatus()
     * @uses AWBInfo::setShipmentInfo()
     * @uses AWBInfo::setPieces()
     * @param string $aWBNumber
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status $status
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces
     */
    public function __construct(?string $aWBNumber = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status $status = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces = null)
    {
        $this
            ->setAWBNumber($aWBNumber)
            ->setTrackedBy($trackedBy)
            ->setStatus($status)
            ->setShipmentInfo($shipmentInfo)
            ->setPieces($pieces);
    }
    /**
     * Get AWBNumber value
     * @return string|null
     */
    public function getAWBNumber(): ?string
    {
        return $this->AWBNumber;
    }
    /**
     * Set AWBNumber value
     * @param string $aWBNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setAWBNumber(?string $aWBNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($aWBNumber) && !is_string($aWBNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aWBNumber, true), gettype($aWBNumber)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($aWBNumber) && mb_strlen((string) $aWBNumber) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $aWBNumber)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($aWBNumber) && mb_strlen((string) $aWBNumber) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $aWBNumber)), __LINE__);
        }
        $this->AWBNumber = $aWBNumber;
        
        return $this;
    }
    /**
     * Get TrackedBy value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy|null
     */
    public function getTrackedBy(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy
    {
        return $this->TrackedBy;
    }
    /**
     * Set TrackedBy value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setTrackedBy(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy = null): self
    {
        $this->TrackedBy = $trackedBy;
        
        return $this;
    }
    /**
     * Get Status value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status|null
     */
    public function getStatus(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status $status
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setStatus(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get ShipmentInfo value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo|null
     */
    public function getShipmentInfo(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
    {
        return $this->ShipmentInfo;
    }
    /**
     * Set ShipmentInfo value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setShipmentInfo(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo = null): self
    {
        $this->ShipmentInfo = $shipmentInfo;
        
        return $this;
    }
    /**
     * Get Pieces value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces|null
     */
    public function getPieces(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setPieces(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces = null): self
    {
        $this->Pieces = $pieces;
        
        return $this;
    }
}
