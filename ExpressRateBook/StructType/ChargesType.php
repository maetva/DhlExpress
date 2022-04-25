<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesType StructType
 * @subpackage Structs
 */
class ChargesType extends AbstractStructBase
{
    /**
     * The ChargeType
     * @var string|null
     */
    protected ?string $ChargeType = null;
    /**
     * The ChargeAmount
     * Meta information extracted from the WSDL
     * - documentation: The total charge amount of the specific charge
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 18
     * @var float|null
     */
    protected ?float $ChargeAmount = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: The currency code
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * Constructor method for ChargesType
     * @uses ChargesType::setChargeType()
     * @uses ChargesType::setChargeAmount()
     * @uses ChargesType::setCurrencyCode()
     * @param string $chargeType
     * @param float $chargeAmount
     * @param string $currencyCode
     */
    public function __construct(?string $chargeType = null, ?float $chargeAmount = null, ?string $currencyCode = null)
    {
        $this
            ->setChargeType($chargeType)
            ->setChargeAmount($chargeAmount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType(): ?string
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\ChargeType::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\ChargeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $chargeType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType
     */
    public function setChargeType(?string $chargeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\ChargeType::valueIsValid($chargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\ChargeType', is_array($chargeType) ? implode(', ', $chargeType) : var_export($chargeType, true), implode(', ', \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\ChargeType::getValidValues())), __LINE__);
        }
        $this->ChargeType = $chargeType;
        
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return float|null
     */
    public function getChargeAmount(): ?float
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param float $chargeAmount
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType
     */
    public function setChargeAmount(?float $chargeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($chargeAmount) && !(is_float($chargeAmount) || is_numeric($chargeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($chargeAmount, true), gettype($chargeAmount)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($chargeAmount) && mb_strlen(mb_substr((string) $chargeAmount, false !== mb_strpos((string) $chargeAmount, '.') ? mb_strpos((string) $chargeAmount, '.') + 1 : mb_strlen((string) $chargeAmount))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($chargeAmount, true), mb_strlen(mb_substr((string) $chargeAmount, mb_strpos((string) $chargeAmount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($chargeAmount) && mb_strlen(preg_replace('/(\D)/', '', (string) $chargeAmount)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($chargeAmount, true), mb_strlen(preg_replace('/(\D)/', '', (string) $chargeAmount))), __LINE__);
        }
        $this->ChargeAmount = $chargeAmount;
        
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($currencyCode) && mb_strlen((string) $currencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $currencyCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($currencyCode) && mb_strlen((string) $currencyCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
}
