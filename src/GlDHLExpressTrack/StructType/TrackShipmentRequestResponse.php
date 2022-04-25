<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackShipmentRequestResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackShipmentRequestResponse
 * @subpackage Structs
 */
class TrackShipmentRequestResponse extends AbstractStructBase
{
    /**
     * The trackingResponse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null;
    /**
     * Constructor method for trackShipmentRequestResponse
     * @uses TrackShipmentRequestResponse::setTrackingResponse()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse
     */
    public function __construct(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null)
    {
        $this
            ->setTrackingResponse($trackingResponse);
    }
    /**
     * Get trackingResponse value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse|null
     */
    public function getTrackingResponse(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse
    {
        return $this->trackingResponse;
    }
    /**
     * Set trackingResponse value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackShipmentRequestResponse
     */
    public function setTrackingResponse(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null): self
    {
        $this->trackingResponse = $trackingResponse;
        
        return $this;
    }
}
