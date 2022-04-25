<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Response StructType
 * @subpackage Structs
 */
class DocTypeRef_Response extends AbstractStructBase
{
    /**
     * The ServiceHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $ServiceHeader = null;
    /**
     * Constructor method for docTypeRef_Response
     * @uses DocTypeRef_Response::setServiceHeader()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    public function getServiceHeader(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response
     */
    public function setServiceHeader(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
