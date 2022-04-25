<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response $Response = null;
    /**
     * The AWBInfo
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $AWBInfo = null;
    /**
     * The Fault
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault $Fault = null;
    /**
     * Constructor method for TrackingResponse
     * @uses TrackingResponse::setResponse()
     * @uses TrackingResponse::setAWBInfo()
     * @uses TrackingResponse::setFault()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response $response
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault $fault
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response $response = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault $fault = null)
    {
        $this
            ->setResponse($response)
            ->setAWBInfo($aWBInfo)
            ->setFault($fault);
    }
    /**
     * Get Response value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response|null
     */
    public function getResponse(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response $response
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setResponse(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Get AWBInfo value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo|null
     */
    public function getAWBInfo(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
    {
        return $this->AWBInfo;
    }
    /**
     * Set AWBInfo value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setAWBInfo(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo $aWBInfo = null): self
    {
        $this->AWBInfo = $aWBInfo;
        
        return $this;
    }
    /**
     * Get Fault value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault|null
     */
    public function getFault(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault
    {
        return $this->Fault;
    }
    /**
     * Set Fault value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault $fault
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingResponse
     */
    public function setFault(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Fault $fault = null): self
    {
        $this->Fault = $fault;
        
        return $this;
    }
}
