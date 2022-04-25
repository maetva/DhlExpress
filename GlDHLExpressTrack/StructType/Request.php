<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Request StructType
 * @subpackage Structs
 */
class Request extends AbstractStructBase
{
    /**
     * The ServiceHeader
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $ServiceHeader = null;
    /**
     * Constructor method for Request
     * @uses Request::setServiceHeader()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader|null
     */
    public function getServiceHeader(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Request
     */
    public function setServiceHeader(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
