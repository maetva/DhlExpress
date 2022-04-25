<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType $Provider = null;
    /**
     * Constructor method for docTypeRef_RateResponseType
     * @uses DocTypeRef_RateResponseType::setProvider()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType|null
     */
    public function getProvider(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateResponseType
     */
    public function setProvider(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProviderType $provider = null): self
    {
        $this->Provider = $provider;
        
        return $this;
    }
}
