<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pubTrackingResponse StructType
 * @subpackage Structs
 */
class PubTrackingResponse extends AbstractStructBase
{
    /**
     * The TrackingResponse
     * Meta information extracted from the WSDL
     * - ref: s0:TrackingResponse
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse $TrackingResponse = null;
    /**
     * Constructor method for pubTrackingResponse
     * @uses PubTrackingResponse::setTrackingResponse()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse
     */
    public function __construct(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse = null)
    {
        $this
            ->setTrackingResponse($trackingResponse);
    }
    /**
     * Get TrackingResponse value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse|null
     */
    public function getTrackingResponse(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse
    {
        return $this->TrackingResponse;
    }
    /**
     * Set TrackingResponse value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PubTrackingResponse
     */
    public function setTrackingResponse(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse = null): self
    {
        $this->TrackingResponse = $trackingResponse;
        
        return $this;
    }
}
