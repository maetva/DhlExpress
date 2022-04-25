<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceHeader StructType
 * @subpackage Structs
 */
class ServiceHeader extends AbstractStructBase
{
    /**
     * The MessageTime
     * @var string|null
     */
    protected ?string $MessageTime = null;
    /**
     * The MessageReference
     * Meta information extracted from the WSDL
     * - documentation: The unique message reference
     * - base: xsd:string
     * - maxLength: 36
     * - minLength: 28
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $MessageReference = null;
    /**
     * The WebstorePlatform
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WebstorePlatform = null;
    /**
     * The WebstorePlatformVersion
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WebstorePlatformVersion = null;
    /**
     * The ShippingSystemPlatform
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingSystemPlatform = null;
    /**
     * The ShippingSystemPlatformVersion
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingSystemPlatformVersion = null;
    /**
     * The PlugIn
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlugIn = null;
    /**
     * The PlugInVersion
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlugInVersion = null;
    /**
     * Constructor method for ServiceHeader
     * @uses ServiceHeader::setMessageTime()
     * @uses ServiceHeader::setMessageReference()
     * @uses ServiceHeader::setWebstorePlatform()
     * @uses ServiceHeader::setWebstorePlatformVersion()
     * @uses ServiceHeader::setShippingSystemPlatform()
     * @uses ServiceHeader::setShippingSystemPlatformVersion()
     * @uses ServiceHeader::setPlugIn()
     * @uses ServiceHeader::setPlugInVersion()
     * @param string $messageTime
     * @param string $messageReference
     * @param string $webstorePlatform
     * @param string $webstorePlatformVersion
     * @param string $shippingSystemPlatform
     * @param string $shippingSystemPlatformVersion
     * @param string $plugIn
     * @param string $plugInVersion
     */
    public function __construct(?string $messageTime = null, ?string $messageReference = null, ?string $webstorePlatform = null, ?string $webstorePlatformVersion = null, ?string $shippingSystemPlatform = null, ?string $shippingSystemPlatformVersion = null, ?string $plugIn = null, ?string $plugInVersion = null)
    {
        $this
            ->setMessageTime($messageTime)
            ->setMessageReference($messageReference)
            ->setWebstorePlatform($webstorePlatform)
            ->setWebstorePlatformVersion($webstorePlatformVersion)
            ->setShippingSystemPlatform($shippingSystemPlatform)
            ->setShippingSystemPlatformVersion($shippingSystemPlatformVersion)
            ->setPlugIn($plugIn)
            ->setPlugInVersion($plugInVersion);
    }
    /**
     * Get MessageTime value
     * @return string|null
     */
    public function getMessageTime(): ?string
    {
        return $this->MessageTime;
    }
    /**
     * Set MessageTime value
     * @param string $messageTime
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setMessageTime(?string $messageTime = null): self
    {
        // validation for constraint: string
        if (!is_null($messageTime) && !is_string($messageTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageTime, true), gettype($messageTime)), __LINE__);
        }
        $this->MessageTime = $messageTime;
        
        return $this;
    }
    /**
     * Get MessageReference value
     * @return string|null
     */
    public function getMessageReference(): ?string
    {
        return $this->MessageReference;
    }
    /**
     * Set MessageReference value
     * @param string $messageReference
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setMessageReference(?string $messageReference = null): self
    {
        // validation for constraint: string
        if (!is_null($messageReference) && !is_string($messageReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageReference, true), gettype($messageReference)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($messageReference) && mb_strlen((string) $messageReference) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $messageReference)), __LINE__);
        }
        // validation for constraint: minLength(28)
        if (!is_null($messageReference) && mb_strlen((string) $messageReference) < 28) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 28', mb_strlen((string) $messageReference)), __LINE__);
        }
        $this->MessageReference = $messageReference;
        
        return $this;
    }
    /**
     * Get WebstorePlatform value
     * @return string|null
     */
    public function getWebstorePlatform(): ?string
    {
        return $this->WebstorePlatform;
    }
    /**
     * Set WebstorePlatform value
     * @param string $webstorePlatform
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setWebstorePlatform(?string $webstorePlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($webstorePlatform) && !is_string($webstorePlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webstorePlatform, true), gettype($webstorePlatform)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($webstorePlatform) && mb_strlen((string) $webstorePlatform) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $webstorePlatform)), __LINE__);
        }
        $this->WebstorePlatform = $webstorePlatform;
        
        return $this;
    }
    /**
     * Get WebstorePlatformVersion value
     * @return string|null
     */
    public function getWebstorePlatformVersion(): ?string
    {
        return $this->WebstorePlatformVersion;
    }
    /**
     * Set WebstorePlatformVersion value
     * @param string $webstorePlatformVersion
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setWebstorePlatformVersion(?string $webstorePlatformVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($webstorePlatformVersion) && !is_string($webstorePlatformVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webstorePlatformVersion, true), gettype($webstorePlatformVersion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($webstorePlatformVersion) && mb_strlen((string) $webstorePlatformVersion) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $webstorePlatformVersion)), __LINE__);
        }
        $this->WebstorePlatformVersion = $webstorePlatformVersion;
        
        return $this;
    }
    /**
     * Get ShippingSystemPlatform value
     * @return string|null
     */
    public function getShippingSystemPlatform(): ?string
    {
        return $this->ShippingSystemPlatform;
    }
    /**
     * Set ShippingSystemPlatform value
     * @param string $shippingSystemPlatform
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setShippingSystemPlatform(?string $shippingSystemPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingSystemPlatform) && !is_string($shippingSystemPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingSystemPlatform, true), gettype($shippingSystemPlatform)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($shippingSystemPlatform) && mb_strlen((string) $shippingSystemPlatform) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $shippingSystemPlatform)), __LINE__);
        }
        $this->ShippingSystemPlatform = $shippingSystemPlatform;
        
        return $this;
    }
    /**
     * Get ShippingSystemPlatformVersion value
     * @return string|null
     */
    public function getShippingSystemPlatformVersion(): ?string
    {
        return $this->ShippingSystemPlatformVersion;
    }
    /**
     * Set ShippingSystemPlatformVersion value
     * @param string $shippingSystemPlatformVersion
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setShippingSystemPlatformVersion(?string $shippingSystemPlatformVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingSystemPlatformVersion) && !is_string($shippingSystemPlatformVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingSystemPlatformVersion, true), gettype($shippingSystemPlatformVersion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($shippingSystemPlatformVersion) && mb_strlen((string) $shippingSystemPlatformVersion) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $shippingSystemPlatformVersion)), __LINE__);
        }
        $this->ShippingSystemPlatformVersion = $shippingSystemPlatformVersion;
        
        return $this;
    }
    /**
     * Get PlugIn value
     * @return string|null
     */
    public function getPlugIn(): ?string
    {
        return $this->PlugIn;
    }
    /**
     * Set PlugIn value
     * @param string $plugIn
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setPlugIn(?string $plugIn = null): self
    {
        // validation for constraint: string
        if (!is_null($plugIn) && !is_string($plugIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plugIn, true), gettype($plugIn)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($plugIn) && mb_strlen((string) $plugIn) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $plugIn)), __LINE__);
        }
        $this->PlugIn = $plugIn;
        
        return $this;
    }
    /**
     * Get PlugInVersion value
     * @return string|null
     */
    public function getPlugInVersion(): ?string
    {
        return $this->PlugInVersion;
    }
    /**
     * Set PlugInVersion value
     * @param string $plugInVersion
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceHeader
     */
    public function setPlugInVersion(?string $plugInVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($plugInVersion) && !is_string($plugInVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plugInVersion, true), gettype($plugInVersion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($plugInVersion) && mb_strlen((string) $plugInVersion) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $plugInVersion)), __LINE__);
        }
        $this->PlugInVersion = $plugInVersion;
        
        return $this;
    }
}
