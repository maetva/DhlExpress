<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_DestinationServiceAreaType StructType
 * @subpackage Structs
 */
class DocTypeRef_DestinationServiceAreaType extends AbstractStructBase
{
    /**
     * The FacilityCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Facility Code for the Destination
     * - base: xsd:token
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $FacilityCode = null;
    /**
     * The ServiceAreaCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Service Area Code for the destination of the Shipment
     * - base: xsd:token
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceAreaCode = null;
    /**
     * The InboundSortCode
     * Meta information extracted from the WSDL
     * - documentation: Inbound Sort Code of Destination
     * - base: xsd:token
     * - maxLength: 4
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $InboundSortCode = null;
    /**
     * Constructor method for docTypeRef_DestinationServiceAreaType
     * @uses DocTypeRef_DestinationServiceAreaType::setFacilityCode()
     * @uses DocTypeRef_DestinationServiceAreaType::setServiceAreaCode()
     * @uses DocTypeRef_DestinationServiceAreaType::setInboundSortCode()
     * @param string $facilityCode
     * @param string $serviceAreaCode
     * @param string $inboundSortCode
     */
    public function __construct(?string $facilityCode = null, ?string $serviceAreaCode = null, ?string $inboundSortCode = null)
    {
        $this
            ->setFacilityCode($facilityCode)
            ->setServiceAreaCode($serviceAreaCode)
            ->setInboundSortCode($inboundSortCode);
    }
    /**
     * Get FacilityCode value
     * @return string|null
     */
    public function getFacilityCode(): ?string
    {
        return $this->FacilityCode;
    }
    /**
     * Set FacilityCode value
     * @param string $facilityCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType
     */
    public function setFacilityCode(?string $facilityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($facilityCode) && !is_string($facilityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facilityCode, true), gettype($facilityCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($facilityCode) && mb_strlen((string) $facilityCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $facilityCode)), __LINE__);
        }
        $this->FacilityCode = $facilityCode;
        
        return $this;
    }
    /**
     * Get ServiceAreaCode value
     * @return string|null
     */
    public function getServiceAreaCode(): ?string
    {
        return $this->ServiceAreaCode;
    }
    /**
     * Set ServiceAreaCode value
     * @param string $serviceAreaCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType
     */
    public function setServiceAreaCode(?string $serviceAreaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceAreaCode) && !is_string($serviceAreaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAreaCode, true), gettype($serviceAreaCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceAreaCode) && mb_strlen((string) $serviceAreaCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceAreaCode)), __LINE__);
        }
        $this->ServiceAreaCode = $serviceAreaCode;
        
        return $this;
    }
    /**
     * Get InboundSortCode value
     * @return string|null
     */
    public function getInboundSortCode(): ?string
    {
        return $this->InboundSortCode;
    }
    /**
     * Set InboundSortCode value
     * @param string $inboundSortCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType
     */
    public function setInboundSortCode(?string $inboundSortCode = null): self
    {
        // validation for constraint: string
        if (!is_null($inboundSortCode) && !is_string($inboundSortCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inboundSortCode, true), gettype($inboundSortCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($inboundSortCode) && mb_strlen((string) $inboundSortCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $inboundSortCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($inboundSortCode) && mb_strlen((string) $inboundSortCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $inboundSortCode)), __LINE__);
        }
        $this->InboundSortCode = $inboundSortCode;
        
        return $this;
    }
}
