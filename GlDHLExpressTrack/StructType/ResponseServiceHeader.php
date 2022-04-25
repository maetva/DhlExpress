<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseServiceHeader StructType
 * @subpackage Structs
 */
class ResponseServiceHeader extends AbstractStructBase
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
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO Language Code
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * The LanguageScriptCode
     * Meta information extracted from the WSDL
     * - documentation: Script Code
     * - base: xsd:string
     * - maxLength: 4
     * - minLength: 4
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageScriptCode = null;
    /**
     * The LanguageCountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 2 character code of country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageCountryCode = null;
    /**
     * The ServiceInvocationID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceInvocationID = null;
    /**
     * Constructor method for ResponseServiceHeader
     * @uses ResponseServiceHeader::setMessageTime()
     * @uses ResponseServiceHeader::setMessageReference()
     * @uses ResponseServiceHeader::setLanguageCode()
     * @uses ResponseServiceHeader::setLanguageScriptCode()
     * @uses ResponseServiceHeader::setLanguageCountryCode()
     * @uses ResponseServiceHeader::setServiceInvocationID()
     * @param string $messageTime
     * @param string $messageReference
     * @param string $languageCode
     * @param string $languageScriptCode
     * @param string $languageCountryCode
     * @param string $serviceInvocationID
     */
    public function __construct(?string $messageTime = null, ?string $messageReference = null, ?string $languageCode = null, ?string $languageScriptCode = null, ?string $languageCountryCode = null, ?string $serviceInvocationID = null)
    {
        $this
            ->setMessageTime($messageTime)
            ->setMessageReference($messageReference)
            ->setLanguageCode($languageCode)
            ->setLanguageScriptCode($languageScriptCode)
            ->setLanguageCountryCode($languageCountryCode)
            ->setServiceInvocationID($serviceInvocationID);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
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
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
    /**
     * Get LanguageScriptCode value
     * @return string|null
     */
    public function getLanguageScriptCode(): ?string
    {
        return $this->LanguageScriptCode;
    }
    /**
     * Set LanguageScriptCode value
     * @param string $languageScriptCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
     */
    public function setLanguageScriptCode(?string $languageScriptCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageScriptCode) && !is_string($languageScriptCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageScriptCode, true), gettype($languageScriptCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($languageScriptCode) && mb_strlen((string) $languageScriptCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $languageScriptCode)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($languageScriptCode) && mb_strlen((string) $languageScriptCode) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $languageScriptCode)), __LINE__);
        }
        $this->LanguageScriptCode = $languageScriptCode;
        
        return $this;
    }
    /**
     * Get LanguageCountryCode value
     * @return string|null
     */
    public function getLanguageCountryCode(): ?string
    {
        return $this->LanguageCountryCode;
    }
    /**
     * Set LanguageCountryCode value
     * @param string $languageCountryCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
     */
    public function setLanguageCountryCode(?string $languageCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCountryCode) && !is_string($languageCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCountryCode, true), gettype($languageCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        $this->LanguageCountryCode = $languageCountryCode;
        
        return $this;
    }
    /**
     * Get ServiceInvocationID value
     * @return string|null
     */
    public function getServiceInvocationID(): ?string
    {
        return $this->ServiceInvocationID;
    }
    /**
     * Set ServiceInvocationID value
     * @param string $serviceInvocationID
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ResponseServiceHeader
     */
    public function setServiceInvocationID(?string $serviceInvocationID = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceInvocationID) && !is_string($serviceInvocationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceInvocationID, true), gettype($serviceInvocationID)), __LINE__);
        }
        $this->ServiceInvocationID = $serviceInvocationID;
        
        return $this;
    }
}
