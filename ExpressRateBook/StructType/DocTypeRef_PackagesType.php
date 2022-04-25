<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $RequestedPackages = null;
    /**
     * Constructor method for docTypeRef_PackagesType
     * @uses DocTypeRef_PackagesType::setRequestedPackages()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages = null)
    {
        $this
            ->setRequestedPackages($requestedPackages);
    }
    /**
     * Get RequestedPackages value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType|null
     */
    public function getRequestedPackages(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
    {
        return $this->RequestedPackages;
    }
    /**
     * Set RequestedPackages value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType
     */
    public function setRequestedPackages(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType $requestedPackages = null): self
    {
        $this->RequestedPackages = $requestedPackages;
        
        return $this;
    }
}
