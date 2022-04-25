<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null;
    /**
     * Constructor method for trackShipmentRequest
     * @uses TrackShipmentRequest::setTrackingRequest()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null)
    {
        $this
            ->setTrackingRequest($trackingRequest);
    }
    /**
     * Get trackingRequest value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest|null
     */
    public function getTrackingRequest(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest
    {
        return $this->trackingRequest;
    }
    /**
     * Set trackingRequest value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequest
     */
    public function setTrackingRequest(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingRequest $trackingRequest = null): self
    {
        $this->trackingRequest = $trackingRequest;
        
        return $this;
    }
}
