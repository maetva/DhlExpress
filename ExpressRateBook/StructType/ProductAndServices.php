<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductAndServices StructType
 * @subpackage Structs
 */
class ProductAndServices extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: DHL global product code
     * - base: xsd:string
     * - maxLength: 6
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The LocalServiceType
     * Meta information extracted from the WSDL
     * - documentation: Local Product Code | Optional DHL local product code
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalServiceType = null;
    /**
     * The SpecialServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2 $SpecialServices = null;
    /**
     * Constructor method for ProductAndServices
     * @uses ProductAndServices::setServiceType()
     * @uses ProductAndServices::setLocalServiceType()
     * @uses ProductAndServices::setSpecialServices()
     * @param string $serviceType
     * @param string $localServiceType
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2 $specialServices
     */
    public function __construct(?string $serviceType = null, ?string $localServiceType = null, ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2 $specialServices = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setLocalServiceType($localServiceType)
            ->setSpecialServices($specialServices);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ProductAndServices
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $serviceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get LocalServiceType value
     * @return string|null
     */
    public function getLocalServiceType(): ?string
    {
        return $this->LocalServiceType;
    }
    /**
     * Set LocalServiceType value
     * @param string $localServiceType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ProductAndServices
     */
    public function setLocalServiceType(?string $localServiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($localServiceType) && !is_string($localServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localServiceType, true), gettype($localServiceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($localServiceType) && mb_strlen((string) $localServiceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $localServiceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($localServiceType) && mb_strlen((string) $localServiceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $localServiceType)), __LINE__);
        }
        $this->LocalServiceType = $localServiceType;
        
        return $this;
    }
    /**
     * Get SpecialServices value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2|null
     */
    public function getSpecialServices(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2
    {
        return $this->SpecialServices;
    }
    /**
     * Set SpecialServices value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2 $specialServices
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ProductAndServices
     */
    public function setSpecialServices(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Services2 $specialServices = null): self
    {
        $this->SpecialServices = $specialServices;
        
        return $this;
    }
}
