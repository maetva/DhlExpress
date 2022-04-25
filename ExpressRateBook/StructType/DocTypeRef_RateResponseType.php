<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RateResponseType StructType
 * @subpackage Structs
 */
class DocTypeRef_RateResponseType extends AbstractStructBase
{
    /**
     * The Provider
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType $Provider = null;
    /**
     * Constructor method for docTypeRef_RateResponseType
     * @uses DocTypeRef_RateResponseType::setProvider()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType|null
     */
    public function getProvider(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RateResponseType
     */
    public function setProvider(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
