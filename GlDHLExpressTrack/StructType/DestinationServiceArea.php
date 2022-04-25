<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationServiceArea StructType
 * @subpackage Structs
 */
class DestinationServiceArea extends AbstractStructBase
{
    /**
     * The ServiceAreaCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Service Area Code for the origin/destination of the Shipment
     * - base: xsd:string
     * - length: 3
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $ServiceAreaCode = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the Service Area Code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The FacilityCode
     * Meta information extracted from the WSDL
     * - documentation: The DHL Facility Code for the Destination
     * - base: xsd:string
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $FacilityCode = null;
    /**
     * The InboundSortCode
     * Meta information extracted from the WSDL
     * - documentation: Inbound Sort Code of Destination (currently not available)
     * - base: xsd:string
     * - length: 4
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $InboundSortCode = null;
    /**
     * Constructor method for DestinationServiceArea
     * @uses DestinationServiceArea::setServiceAreaCode()
     * @uses DestinationServiceArea::setDescription()
     * @uses DestinationServiceArea::setFacilityCode()
     * @uses DestinationServiceArea::setInboundSortCode()
     * @param string $serviceAreaCode
     * @param string $description
     * @param string $facilityCode
     * @param string $inboundSortCode
     */
    public function __construct(?string $serviceAreaCode = null, ?string $description = null, ?string $facilityCode = null, ?string $inboundSortCode = null)
    {
        $this
            ->setServiceAreaCode($serviceAreaCode)
            ->setDescription($description)
            ->setFacilityCode($facilityCode)
            ->setInboundSortCode($inboundSortCode);
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea
     */
    public function setServiceAreaCode(?string $serviceAreaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceAreaCode) && !is_string($serviceAreaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAreaCode, true), gettype($serviceAreaCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($serviceAreaCode) && mb_strlen((string) $serviceAreaCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $serviceAreaCode)), __LINE__);
        }
        $this->ServiceAreaCode = $serviceAreaCode;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea
     */
    public function setInboundSortCode(?string $inboundSortCode = null): self
    {
        // validation for constraint: string
        if (!is_null($inboundSortCode) && !is_string($inboundSortCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inboundSortCode, true), gettype($inboundSortCode)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($inboundSortCode) && mb_strlen((string) $inboundSortCode) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen((string) $inboundSortCode)), __LINE__);
        }
        $this->InboundSortCode = $inboundSortCode;
        
        return $this;
    }
}
