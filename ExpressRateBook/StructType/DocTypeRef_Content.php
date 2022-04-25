<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Content StructType
 * @subpackage Structs
 */
class DocTypeRef_Content extends AbstractStructBase
{
    /**
     * The ContentID
     * Meta information extracted from the WSDL
     * - documentation: Valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the relevant content ID code if you are shipping Dangerous Goods)
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 3
     * @var string|null
     */
    protected ?string $ContentID = null;
    /**
     * The DryIceTotalNetWeight
     * Meta information extracted from the WSDL
     * - documentation: This is a numeric string with up to 7 char (i.e. 1000,00 or 1000.00)
     * - base: xsd:string
     * - choice: DryIceTotalNetWeight | UNCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - maxLength: 7
     * - minLength: 1
     * @var string|null
     */
    protected ?string $DryIceTotalNetWeight = null;
    /**
     * The UNCode
     * Meta information extracted from the WSDL
     * - documentation: Comma separated UN codes – eg. “UN-7843268473”, “7843268473,123”
     * - base: xsd:string
     * - choice: DryIceTotalNetWeight | UNCode
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minLength: 1
     * @var string|null
     */
    protected ?string $UNCode = null;
    /**
     * Constructor method for docTypeRef_Content
     * @uses DocTypeRef_Content::setContentID()
     * @uses DocTypeRef_Content::setDryIceTotalNetWeight()
     * @uses DocTypeRef_Content::setUNCode()
     * @param string $contentID
     * @param string $dryIceTotalNetWeight
     * @param string $uNCode
     */
    public function __construct(?string $contentID = null, ?string $dryIceTotalNetWeight = null, ?string $uNCode = null)
    {
        $this
            ->setContentID($contentID)
            ->setDryIceTotalNetWeight($dryIceTotalNetWeight)
            ->setUNCode($uNCode);
    }
    /**
     * Get ContentID value
     * @return string|null
     */
    public function getContentID(): ?string
    {
        return $this->ContentID;
    }
    /**
     * Set ContentID value
     * @param string $contentID
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content
     */
    public function setContentID(?string $contentID = null): self
    {
        // validation for constraint: string
        if (!is_null($contentID) && !is_string($contentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentID, true), gettype($contentID)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($contentID) && mb_strlen((string) $contentID) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $contentID)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($contentID) && mb_strlen((string) $contentID) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $contentID)), __LINE__);
        }
        $this->ContentID = $contentID;
        
        return $this;
    }
    /**
     * Get DryIceTotalNetWeight value
     * @return string|null
     */
    public function getDryIceTotalNetWeight(): ?string
    {
        return isset($this->DryIceTotalNetWeight) ? $this->DryIceTotalNetWeight : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDryIceTotalNetWeight method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDryIceTotalNetWeight method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDryIceTotalNetWeightForChoiceConstraintsFromSetDryIceTotalNetWeight($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UNCode',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DryIceTotalNetWeight can\'t be set as the property %s is already set. Only one property must be set among these properties: DryIceTotalNetWeight, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DryIceTotalNetWeight value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $dryIceTotalNetWeight
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content
     */
    public function setDryIceTotalNetWeight(?string $dryIceTotalNetWeight = null): self
    {
        // validation for constraint: string
        if (!is_null($dryIceTotalNetWeight) && !is_string($dryIceTotalNetWeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dryIceTotalNetWeight, true), gettype($dryIceTotalNetWeight)), __LINE__);
        }
        // validation for constraint: choice(DryIceTotalNetWeight, UNCode)
        if ('' !== ($dryIceTotalNetWeightChoiceErrorMessage = self::validateDryIceTotalNetWeightForChoiceConstraintsFromSetDryIceTotalNetWeight($dryIceTotalNetWeight))) {
            throw new InvalidArgumentException($dryIceTotalNetWeightChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($dryIceTotalNetWeight) && mb_strlen((string) $dryIceTotalNetWeight) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen((string) $dryIceTotalNetWeight)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($dryIceTotalNetWeight) && mb_strlen((string) $dryIceTotalNetWeight) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $dryIceTotalNetWeight)), __LINE__);
        }
        if (is_null($dryIceTotalNetWeight) || (is_array($dryIceTotalNetWeight) && empty($dryIceTotalNetWeight))) {
            unset($this->DryIceTotalNetWeight);
        } else {
            $this->DryIceTotalNetWeight = $dryIceTotalNetWeight;
        }
        
        return $this;
    }
    /**
     * Get UNCode value
     * @return string|null
     */
    public function getUNCode(): ?string
    {
        return isset($this->UNCode) ? $this->UNCode : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUNCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUNCode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUNCodeForChoiceConstraintsFromSetUNCode($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DryIceTotalNetWeight',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UNCode can\'t be set as the property %s is already set. Only one property must be set among these properties: UNCode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UNCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $uNCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content
     */
    public function setUNCode(?string $uNCode = null): self
    {
        // validation for constraint: string
        if (!is_null($uNCode) && !is_string($uNCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uNCode, true), gettype($uNCode)), __LINE__);
        }
        // validation for constraint: choice(DryIceTotalNetWeight, UNCode)
        if ('' !== ($uNCodeChoiceErrorMessage = self::validateUNCodeForChoiceConstraintsFromSetUNCode($uNCode))) {
            throw new InvalidArgumentException($uNCodeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($uNCode) && mb_strlen((string) $uNCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $uNCode)), __LINE__);
        }
        if (is_null($uNCode) || (is_array($uNCode) && empty($uNCode))) {
            unset($this->UNCode);
        } else {
            $this->UNCode = $uNCode;
        }
        
        return $this;
    }
}
