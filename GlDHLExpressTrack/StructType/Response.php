<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $ServiceHeader = null;
    /**
     * Constructor method for Response
     * @uses Response::setServiceHeader()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader|null
     */
    public function getServiceHeader(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Response
     */
    public function setServiceHeader(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
