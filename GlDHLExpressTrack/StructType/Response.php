<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Response StructType
 * @subpackage Structs
 */
class Response extends AbstractStructBase
{
    /**
     * The ServiceHeader
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $ServiceHeader = null;
    /**
     * Constructor method for Response
     * @uses Response::setServiceHeader()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader|null
     */
    public function getServiceHeader(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response
     */
    public function setServiceHeader(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
