<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse $TrackingResponse = null;
    /**
     * Constructor method for pubTrackingResponse
     * @uses PubTrackingResponse::setTrackingResponse()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse = null)
    {
        $this
            ->setTrackingResponse($trackingResponse);
    }
    /**
     * Get TrackingResponse value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse|null
     */
    public function getTrackingResponse(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
    {
        return $this->TrackingResponse;
    }
    /**
     * Set TrackingResponse value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PubTrackingResponse
     */
    public function setTrackingResponse(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse $trackingResponse = null): self
    {
        $this->TrackingResponse = $trackingResponse;
        
        return $this;
    }
}
