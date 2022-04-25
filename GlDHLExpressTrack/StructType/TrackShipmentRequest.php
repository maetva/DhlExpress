<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackShipmentRequest StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackShipmentRequest
 * @subpackage Structs
 */
class TrackShipmentRequest extends AbstractStructBase
{
    /**
     * The trackingRequest
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null;
    /**
     * Constructor method for trackShipmentRequest
     * @uses TrackShipmentRequest::setTrackingRequest()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest
     */
    public function __construct(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null)
    {
        $this
            ->setTrackingRequest($trackingRequest);
    }
    /**
     * Get trackingRequest value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest|null
     */
    public function getTrackingRequest(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest
    {
        return $this->trackingRequest;
    }
    /**
     * Set trackingRequest value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackShipmentRequest
     */
    public function setTrackingRequest(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null): self
    {
        $this->trackingRequest = $trackingRequest;
        
        return $this;
    }
}
