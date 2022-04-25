<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $TrackingRequest = null;
    /**
     * Constructor method for pubTrackingRequest
     * @uses PubTrackingRequest::setTrackingRequest()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest = null)
    {
        $this
            ->setTrackingRequest($trackingRequest);
    }
    /**
     * Get TrackingRequest value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest|null
     */
    public function getTrackingRequest(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
    {
        return $this->TrackingRequest;
    }
    /**
     * Set TrackingRequest value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest
     */
    public function setTrackingRequest(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest $trackingRequest = null): self
    {
        $this->TrackingRequest = $trackingRequest;
        
        return $this;
    }
}
