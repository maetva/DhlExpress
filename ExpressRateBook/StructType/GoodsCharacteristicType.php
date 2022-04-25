<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GoodsCharacteristicType StructType
 * @subpackage Structs
 */
class GoodsCharacteristicType extends AbstractStructBase
{
    /**
     * The CharacteristicCode
     * Meta information extracted from the WSDL
     * - documentation: Characteristic code
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 0
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string
     */
    protected string $CharacteristicCode;
    /**
     * The CharacteristicValue
     * Meta information extracted from the WSDL
     * - documentation: Characteristic value
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * - minOccurs: 1
     * - whiteSpace: collapse
     * @var string
     */
    protected string $CharacteristicValue;
    /**
     * Constructor method for GoodsCharacteristicType
     * @uses GoodsCharacteristicType::setCharacteristicCode()
     * @uses GoodsCharacteristicType::setCharacteristicValue()
     * @param string $characteristicCode
     * @param string $characteristicValue
     */
    public function __construct(string $characteristicCode, string $characteristicValue)
    {
        $this
            ->setCharacteristicCode($characteristicCode)
            ->setCharacteristicValue($characteristicValue);
    }
    /**
     * Get CharacteristicCode value
     * @return string
     */
    public function getCharacteristicCode(): string
    {
        return $this->CharacteristicCode;
    }
    /**
     * Set CharacteristicCode value
     * @param string $characteristicCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\GoodsCharacteristicType
     */
    public function setCharacteristicCode(string $characteristicCode): self
    {
        // validation for constraint: string
        if (!is_null($characteristicCode) && !is_string($characteristicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($characteristicCode, true), gettype($characteristicCode)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($characteristicCode) && mb_strlen((string) $characteristicCode) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $characteristicCode)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($characteristicCode) && mb_strlen((string) $characteristicCode) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $characteristicCode)), __LINE__);
        }
        $this->CharacteristicCode = $characteristicCode;
        
        return $this;
    }
    /**
     * Get CharacteristicValue value
     * @return string
     */
    public function getCharacteristicValue(): string
    {
        return $this->CharacteristicValue;
    }
    /**
     * Set CharacteristicValue value
     * @param string $characteristicValue
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\GoodsCharacteristicType
     */
    public function setCharacteristicValue(string $characteristicValue): self
    {
        // validation for constraint: string
        if (!is_null($characteristicValue) && !is_string($characteristicValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($characteristicValue, true), gettype($characteristicValue)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($characteristicValue) && mb_strlen((string) $characteristicValue) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $characteristicValue)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($characteristicValue) && mb_strlen((string) $characteristicValue) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $characteristicValue)), __LINE__);
        }
        $this->CharacteristicValue = $characteristicValue;
        
        return $this;
    }
}
