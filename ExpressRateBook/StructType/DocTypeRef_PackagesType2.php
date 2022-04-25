<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $RequestedPackages = null;
    /**
     * Constructor method for docTypeRef_PackagesType2
     * @uses DocTypeRef_PackagesType2::setRequestedPackages()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages = null)
    {
        $this
            ->setRequestedPackages($requestedPackages);
    }
    /**
     * Get RequestedPackages value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2|null
     */
    public function getRequestedPackages(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
    {
        return $this->RequestedPackages;
    }
    /**
     * Set RequestedPackages value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType2
     */
    public function setRequestedPackages(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2 $requestedPackages = null): self
    {
        $this->RequestedPackages = $requestedPackages;
        
        return $this;
    }
}
