<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseType StructType
 * @subpackage Structs
 */
class ResponseType extends AbstractStructBase
{
    /**
     * The ServiceHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType $ServiceHeader = null;
    /**
     * Constructor method for ResponseType
     * @uses ResponseType::setServiceHeader()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    public function getServiceHeader(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType
     */
    public function setServiceHeader(?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
