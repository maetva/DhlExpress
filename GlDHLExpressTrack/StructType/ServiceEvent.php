<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceEvent StructType
 * @subpackage Structs
 */
class ServiceEvent extends AbstractStructBase
{
    /**
     * The EventCode
     * Meta information extracted from the WSDL
     * - documentation: The event code for this specific event.
     * - base: xsd:string
     * - length: 2
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $EventCode = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the event
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for ServiceEvent
     * @uses ServiceEvent::setEventCode()
     * @uses ServiceEvent::setDescription()
     * @param string $eventCode
     * @param string $description
     */
    public function __construct(?string $eventCode = null, ?string $description = null)
    {
        $this
            ->setEventCode($eventCode)
            ->setDescription($description);
    }
    /**
     * Get EventCode value
     * @return string|null
     */
    public function getEventCode(): ?string
    {
        return $this->EventCode;
    }
    /**
     * Set EventCode value
     * @param string $eventCode
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent
     */
    public function setEventCode(?string $eventCode = null): self
    {
        // validation for constraint: string
        if (!is_null($eventCode) && !is_string($eventCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventCode, true), gettype($eventCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($eventCode) && mb_strlen((string) $eventCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $eventCode)), __LINE__);
        }
        $this->EventCode = $eventCode;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent
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
