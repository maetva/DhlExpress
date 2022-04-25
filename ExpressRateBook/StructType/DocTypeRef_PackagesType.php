<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_PackagesType StructType
 * @subpackage Structs
 */
class DocTypeRef_PackagesType extends AbstractStructBase
{
    /**
     * The RequestedPackages
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $RequestedPackages = null;
    /**
     * Constructor method for docTypeRef_PackagesType
     * @uses DocTypeRef_PackagesType::setRequestedPackages()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages = null)
    {
        $this
            ->setRequestedPackages($requestedPackages);
    }
    /**
     * Get RequestedPackages value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType|null
     */
    public function getRequestedPackages(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
    {
        return $this->RequestedPackages;
    }
    /**
     * Set RequestedPackages value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType
     */
    public function setRequestedPackages(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages = null): self
    {
        $this->RequestedPackages = $requestedPackages;
        
        return $this;
    }
}
