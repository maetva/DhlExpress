<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceArea StructType
 * @subpackage Structs
 */
class ServiceArea extends AbstractStructBase
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
     * - documentation: The description of the service area code.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for ServiceArea
     * @uses ServiceArea::setServiceAreaCode()
     * @uses ServiceArea::setDescription()
     * @param string $serviceAreaCode
     * @param string $description
     */
    public function __construct(?string $serviceAreaCode = null, ?string $description = null)
    {
        $this
            ->setServiceAreaCode($serviceAreaCode)
            ->setDescription($description);
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea
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
}
