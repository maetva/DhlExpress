<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ServiceAreaType StructType
 * @subpackage Structs
 */
class DocTypeRef_ServiceAreaType extends AbstractStructBase
{
    /**
     * The FacilityCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Facility Code for the Origin/Destination
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FacilityCode = null;
    /**
     * The ServiceAreaCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Service Area Code for the origin/destination of the Shipment
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceAreaCode = null;
    /**
     * Constructor method for docTypeRef_ServiceAreaType
     * @uses DocTypeRef_ServiceAreaType::setFacilityCode()
     * @uses DocTypeRef_ServiceAreaType::setServiceAreaCode()
     * @param string $facilityCode
     * @param string $serviceAreaCode
     */
    public function __construct(?string $facilityCode = null, ?string $serviceAreaCode = null)
    {
        $this
            ->setFacilityCode($facilityCode)
            ->setServiceAreaCode($serviceAreaCode);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType
     */
    public function setFacilityCode(?string $facilityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($facilityCode) && !is_string($facilityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facilityCode, true), gettype($facilityCode)), __LINE__);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType
     */
    public function setServiceAreaCode(?string $serviceAreaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceAreaCode) && !is_string($serviceAreaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAreaCode, true), gettype($serviceAreaCode)), __LINE__);
        }
        $this->ServiceAreaCode = $serviceAreaCode;
        
        return $this;
    }
}
