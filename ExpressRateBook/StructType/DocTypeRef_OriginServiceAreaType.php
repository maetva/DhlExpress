<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_OriginServiceAreaType StructType
 * @subpackage Structs
 */
class DocTypeRef_OriginServiceAreaType extends AbstractStructBase
{
    /**
     * The FacilityCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Facility Code for the origin
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
     * - documentation: The DHL Service Area Code for the origin of the Shipment
     * - base: xsd:token
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceAreaCode = null;
    /**
     * The OutboundSortCode
     * Meta information extracted from the WSDL
     * - documentation: Outbound Sort Code of Origin
     * - base: xsd:token
     * - maxLength: 4
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $OutboundSortCode = null;
    /**
     * Constructor method for docTypeRef_OriginServiceAreaType
     * @uses DocTypeRef_OriginServiceAreaType::setFacilityCode()
     * @uses DocTypeRef_OriginServiceAreaType::setServiceAreaCode()
     * @uses DocTypeRef_OriginServiceAreaType::setOutboundSortCode()
     * @param string $facilityCode
     * @param string $serviceAreaCode
     * @param string $outboundSortCode
     */
    public function __construct(?string $facilityCode = null, ?string $serviceAreaCode = null, ?string $outboundSortCode = null)
    {
        $this
            ->setFacilityCode($facilityCode)
            ->setServiceAreaCode($serviceAreaCode)
            ->setOutboundSortCode($outboundSortCode);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType
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
     * Get OutboundSortCode value
     * @return string|null
     */
    public function getOutboundSortCode(): ?string
    {
        return $this->OutboundSortCode;
    }
    /**
     * Set OutboundSortCode value
     * @param string $outboundSortCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType
     */
    public function setOutboundSortCode(?string $outboundSortCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outboundSortCode) && !is_string($outboundSortCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outboundSortCode, true), gettype($outboundSortCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($outboundSortCode) && mb_strlen((string) $outboundSortCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $outboundSortCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($outboundSortCode) && mb_strlen((string) $outboundSortCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $outboundSortCode)), __LINE__);
        }
        $this->OutboundSortCode = $outboundSortCode;
        
        return $this;
    }
}
