<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPrepaidTotalCharge StructType
 * @subpackage Structs
 */
class ShipmentPrepaidTotalCharge extends AbstractStructBase
{
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Payment currency code
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount of payment
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - totalDigits: 18
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: Payment method. Valid enumeration: CASH
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * Constructor method for ShipmentPrepaidTotalCharge
     * @uses ShipmentPrepaidTotalCharge::setCurrencyCode()
     * @uses ShipmentPrepaidTotalCharge::setAmount()
     * @uses ShipmentPrepaidTotalCharge::setPaymentMethod()
     * @param string $currencyCode
     * @param float $amount
     * @param string $paymentMethod
     */
    public function __construct(?string $currencyCode = null, ?float $amount = null, ?string $paymentMethod = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setAmount($amount)
            ->setPaymentMethod($paymentMethod);
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
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge
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
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($amount) && mb_strlen(mb_substr((string) $amount, false !== mb_strpos((string) $amount, '.') ? mb_strpos((string) $amount, '.') + 1 : mb_strlen((string) $amount))) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($amount, true), mb_strlen(mb_substr((string) $amount, mb_strpos((string) $amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($amount) && mb_strlen(preg_replace('/(\D)/', '', (string) $amount)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($amount, true), mb_strlen(preg_replace('/(\D)/', '', (string) $amount))), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param string $paymentMethod
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
}
