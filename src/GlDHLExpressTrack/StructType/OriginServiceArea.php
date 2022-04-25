<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginServiceArea StructType
 * @subpackage Structs
 */
class OriginServiceArea extends AbstractStructBase
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
     * The OutboundSortCode
     * Meta information extracted from the WSDL
     * - documentation: Outbound Sort Code of Origin (currently not available)
     * - base: xsd:string
     * - length: 4
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $OutboundSortCode = null;
    /**
     * Constructor method for OriginServiceArea
     * @uses OriginServiceArea::setServiceAreaCode()
     * @uses OriginServiceArea::setDescription()
     * @uses OriginServiceArea::setOutboundSortCode()
     * @param string $serviceAreaCode
     * @param string $description
     * @param string $outboundSortCode
     */
    public function __construct(?string $serviceAreaCode = null, ?string $description = null, ?string $outboundSortCode = null)
    {
        $this
            ->setServiceAreaCode($serviceAreaCode)
            ->setDescription($description)
            ->setOutboundSortCode($outboundSortCode);
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
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\OriginServiceArea
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
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\OriginServiceArea
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
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\OriginServiceArea
     */
    public function setOutboundSortCode(?string $outboundSortCode = null): self
    {
        // validation for constraint: string
        if (!is_null($outboundSortCode) && !is_string($outboundSortCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outboundSortCode, true), gettype($outboundSortCode)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($outboundSortCode) && mb_strlen((string) $outboundSortCode) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen((string) $outboundSortCode)), __LINE__);
        }
        $this->OutboundSortCode = $outboundSortCode;
        
        return $this;
    }
}
