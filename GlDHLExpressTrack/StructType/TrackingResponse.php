<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingResponse StructType
 * Meta information extracted from the WSDL
 * - type: s0:TrackingResponse
 * @subpackage Structs
 */
class TrackingResponse extends AbstractStructBase
{
    /**
     * The Response
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response $Response = null;
    /**
     * The AWBInfo
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $AWBInfo = null;
    /**
     * The Fault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault $Fault = null;
    /**
     * Constructor method for TrackingResponse
     * @uses TrackingResponse::setResponse()
     * @uses TrackingResponse::setAWBInfo()
     * @uses TrackingResponse::setFault()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response $response
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault $fault
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response $response = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault $fault = null)
    {
        $this
            ->setResponse($response)
            ->setAWBInfo($aWBInfo)
            ->setFault($fault);
    }
    /**
     * Get Response value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response|null
     */
    public function getResponse(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response $response
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setResponse(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Response $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Get AWBInfo value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo|null
     */
    public function getAWBInfo(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
    {
        return $this->AWBInfo;
    }
    /**
     * Set AWBInfo value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setAWBInfo(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo = null): self
    {
        $this->AWBInfo = $aWBInfo;
        
        return $this;
    }
    /**
     * Get Fault value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault|null
     */
    public function getFault(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault
    {
        return $this->Fault;
    }
    /**
     * Set Fault value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault $fault
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setFault(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault $fault = null): self
    {
        $this->Fault = $fault;
        
        return $this;
    }
}
