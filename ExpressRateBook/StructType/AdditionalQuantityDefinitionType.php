<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalQuantityDefinitionType StructType
 * @subpackage Structs
 */
class AdditionalQuantityDefinitionType extends AbstractStructBase
{
    /**
     * The AdditionalQuantity
     * Meta information extracted from the WSDL
     * - documentation: An Item's additional quantity value: example is percent of alcohol
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $AdditionalQuantity = null;
    /**
     * The AdditionalQuantityType
     * Meta information extracted from the WSDL
     * - documentation: Item additional quantity value UOM: example PFL=percent of alcohol
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 1
     * @var string|null
     */
    protected ?string $AdditionalQuantityType = null;
    /**
     * Constructor method for AdditionalQuantityDefinitionType
     * @uses AdditionalQuantityDefinitionType::setAdditionalQuantity()
     * @uses AdditionalQuantityDefinitionType::setAdditionalQuantityType()
     * @param float $additionalQuantity
     * @param string $additionalQuantityType
     */
    public function __construct(?float $additionalQuantity = null, ?string $additionalQuantityType = null)
    {
        $this
            ->setAdditionalQuantity($additionalQuantity)
            ->setAdditionalQuantityType($additionalQuantityType);
    }
    /**
     * Get AdditionalQuantity value
     * @return float|null
     */
    public function getAdditionalQuantity(): ?float
    {
        return $this->AdditionalQuantity;
    }
    /**
     * Set AdditionalQuantity value
     * @param float $additionalQuantity
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionType
     */
    public function setAdditionalQuantity(?float $additionalQuantity = null): self
    {
        // validation for constraint: float
        if (!is_null($additionalQuantity) && !(is_float($additionalQuantity) || is_numeric($additionalQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($additionalQuantity, true), gettype($additionalQuantity)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($additionalQuantity) && mb_strlen(mb_substr((string) $additionalQuantity, false !== mb_strpos((string) $additionalQuantity, '.') ? mb_strpos((string) $additionalQuantity, '.') + 1 : mb_strlen((string) $additionalQuantity))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($additionalQuantity, true), mb_strlen(mb_substr((string) $additionalQuantity, mb_strpos((string) $additionalQuantity, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(15, 12)
        if (!is_null($additionalQuantity) && mb_strlen(preg_replace('/(\D)/', '', (string) $additionalQuantity)) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($additionalQuantity, true), mb_strlen(preg_replace('/(\D)/', '', (string) $additionalQuantity))), __LINE__);
        }
        $this->AdditionalQuantity = $additionalQuantity;
        
        return $this;
    }
    /**
     * Get AdditionalQuantityType value
     * @return string|null
     */
    public function getAdditionalQuantityType(): ?string
    {
        return $this->AdditionalQuantityType;
    }
    /**
     * Set AdditionalQuantityType value
     * @param string $additionalQuantityType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionType
     */
    public function setAdditionalQuantityType(?string $additionalQuantityType = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalQuantityType) && !is_string($additionalQuantityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalQuantityType, true), gettype($additionalQuantityType)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($additionalQuantityType) && mb_strlen((string) $additionalQuantityType) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $additionalQuantityType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($additionalQuantityType) && mb_strlen((string) $additionalQuantityType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $additionalQuantityType)), __LINE__);
        }
        $this->AdditionalQuantityType = $additionalQuantityType;
        
        return $this;
    }
}
