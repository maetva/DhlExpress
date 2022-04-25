<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pubTrackingRequest StructType
 * @subpackage Structs
 */
class PubTrackingRequest extends AbstractStructBase
{
    /**
     * The TrackingRequest
     * Meta information extracted from the WSDL
     * - ref: s0:TrackingRequest
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $TrackingRequest = null;
    /**
     * Constructor method for pubTrackingRequest
     * @uses PubTrackingRequest::setTrackingRequest()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest = null)
    {
        $this
            ->setTrackingRequest($trackingRequest);
    }
    /**
     * Get TrackingRequest value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest|null
     */
    public function getTrackingRequest(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
    {
        return $this->TrackingRequest;
    }
    /**
     * Set TrackingRequest value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest
     */
    public function setTrackingRequest(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest = null): self
    {
        $this->TrackingRequest = $trackingRequest;
        
        return $this;
    }
}
