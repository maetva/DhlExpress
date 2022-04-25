<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $TrackedBy = null;
    /**
     * The Status
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status $Status = null;
    /**
     * The ShipmentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $ShipmentInfo = null;
    /**
     * The Pieces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $Pieces = null;
    /**
     * Constructor method for AWBInfo
     * @uses AWBInfo::setAWBNumber()
     * @uses AWBInfo::setTrackedBy()
     * @uses AWBInfo::setStatus()
     * @uses AWBInfo::setShipmentInfo()
     * @uses AWBInfo::setPieces()
     * @param string $aWBNumber
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status $status
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces
     */
    public function __construct(?string $aWBNumber = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status $status = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces = null)
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy|null
     */
    public function getTrackedBy(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy
    {
        return $this->TrackedBy;
    }
    /**
     * Set TrackedBy value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setTrackedBy(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackedBy $trackedBy = null): self
    {
        $this->TrackedBy = $trackedBy;
        
        return $this;
    }
    /**
     * Get Status value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status|null
     */
    public function getStatus(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status $status
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setStatus(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Status $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get ShipmentInfo value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo|null
     */
    public function getShipmentInfo(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
    {
        return $this->ShipmentInfo;
    }
    /**
     * Set ShipmentInfo value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setShipmentInfo(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo $shipmentInfo = null): self
    {
        $this->ShipmentInfo = $shipmentInfo;
        
        return $this;
    }
    /**
     * Get Pieces value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces|null
     */
    public function getPieces(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
     */
    public function setPieces(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces $pieces = null): self
    {
        $this->Pieces = $pieces;
        
        return $this;
    }
}
