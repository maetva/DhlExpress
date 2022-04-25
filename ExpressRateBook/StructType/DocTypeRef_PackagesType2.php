<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_PackagesType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_PackagesType2 extends AbstractStructBase
{
    /**
     * The RequestedPackages
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $RequestedPackages = null;
    /**
     * Constructor method for docTypeRef_PackagesType2
     * @uses DocTypeRef_PackagesType2::setRequestedPackages()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages = null)
    {
        $this
            ->setRequestedPackages($requestedPackages);
    }
    /**
     * Get RequestedPackages value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2|null
     */
    public function getRequestedPackages(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
    {
        return $this->RequestedPackages;
    }
    /**
     * Set RequestedPackages value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType2
     */
    public function setRequestedPackages(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages = null): self
    {
        $this->RequestedPackages = $requestedPackages;
        
        return $this;
    }
}
