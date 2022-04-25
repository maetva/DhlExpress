<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $ServiceHeader = null;
    /**
     * Constructor method for Request
     * @uses Request::setServiceHeader()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader|null
     */
    public function getServiceHeader(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request
     */
    public function setServiceHeader(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
