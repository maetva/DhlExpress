<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null;
    /**
     * Constructor method for trackShipmentRequestResponse
     * @uses TrackShipmentRequestResponse::setTrackingResponse()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null)
    {
        $this
            ->setTrackingResponse($trackingResponse);
    }
    /**
     * Get trackingResponse value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse|null
     */
    public function getTrackingResponse(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse
    {
        return $this->trackingResponse;
    }
    /**
     * Set trackingResponse value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequestResponse
     */
    public function setTrackingResponse(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse $trackingResponse = null): self
    {
        $this->trackingResponse = $trackingResponse;
        
        return $this;
    }
}
