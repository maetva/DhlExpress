<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Service StructType
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: Enter the DHL Express Service code you wish to add – i.e. II for insurance
     * - base: xsd:string
     * - maxLength: 6
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The ServiceValue
     * Meta information extracted from the WSDL
     * - documentation: Monetary value of service (currently only applicable for Insurance)
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - minOccurs: 0
     * - totalDigits: 18
     * @var float|null
     */
    protected ?float $ServiceValue = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Currency code
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The PaymentCode
     * Meta information extracted from the WSDL
     * - documentation: Payment Code
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PaymentCode = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: For future use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - documentation: For future use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The TextInstruction
     * Meta information extracted from the WSDL
     * - documentation: For future use.
     * - base: xsd:string
     * - maxLength: 50
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $TextInstruction = null;
    /**
     * The PaymentMethods
     * Meta information extracted from the WSDL
     * - documentation: To indicate the payment method code
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods $PaymentMethods = null;
    /**
     * Constructor method for Service
     * @uses Service::setServiceType()
     * @uses Service::setServiceValue()
     * @uses Service::setCurrencyCode()
     * @uses Service::setPaymentCode()
     * @uses Service::setStartDate()
     * @uses Service::setEndDate()
     * @uses Service::setTextInstruction()
     * @uses Service::setPaymentMethods()
     * @param string $serviceType
     * @param float $serviceValue
     * @param string $currencyCode
     * @param string $paymentCode
     * @param string $startDate
     * @param string $endDate
     * @param string $textInstruction
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods $paymentMethods
     */
    public function __construct(?string $serviceType = null, ?float $serviceValue = null, ?string $currencyCode = null, ?string $paymentCode = null, ?string $startDate = null, ?string $endDate = null, ?string $textInstruction = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods $paymentMethods = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setServiceValue($serviceValue)
            ->setCurrencyCode($currencyCode)
            ->setPaymentCode($paymentCode)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTextInstruction($textInstruction)
            ->setPaymentMethods($paymentMethods);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $serviceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get ServiceValue value
     * @return float|null
     */
    public function getServiceValue(): ?float
    {
        return $this->ServiceValue;
    }
    /**
     * Set ServiceValue value
     * @param float $serviceValue
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setServiceValue(?float $serviceValue = null): self
    {
        // validation for constraint: float
        if (!is_null($serviceValue) && !(is_float($serviceValue) || is_numeric($serviceValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($serviceValue, true), gettype($serviceValue)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($serviceValue) && mb_strlen(mb_substr((string) $serviceValue, false !== mb_strpos((string) $serviceValue, '.') ? mb_strpos((string) $serviceValue, '.') + 1 : mb_strlen((string) $serviceValue))) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($serviceValue, true), mb_strlen(mb_substr((string) $serviceValue, mb_strpos((string) $serviceValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($serviceValue) && mb_strlen(preg_replace('/(\D)/', '', (string) $serviceValue)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($serviceValue, true), mb_strlen(preg_replace('/(\D)/', '', (string) $serviceValue))), __LINE__);
        }
        $this->ServiceValue = $serviceValue;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
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
     * Get PaymentCode value
     * @return string|null
     */
    public function getPaymentCode(): ?string
    {
        return $this->PaymentCode;
    }
    /**
     * Set PaymentCode value
     * @param string $paymentCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setPaymentCode(?string $paymentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentCode) && !is_string($paymentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCode, true), gettype($paymentCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($paymentCode) && mb_strlen((string) $paymentCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $paymentCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($paymentCode) && mb_strlen((string) $paymentCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $paymentCode)), __LINE__);
        }
        $this->PaymentCode = $paymentCode;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get TextInstruction value
     * @return string|null
     */
    public function getTextInstruction(): ?string
    {
        return $this->TextInstruction;
    }
    /**
     * Set TextInstruction value
     * @param string $textInstruction
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setTextInstruction(?string $textInstruction = null): self
    {
        // validation for constraint: string
        if (!is_null($textInstruction) && !is_string($textInstruction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textInstruction, true), gettype($textInstruction)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($textInstruction) && mb_strlen((string) $textInstruction) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $textInstruction)), __LINE__);
        }
        $this->TextInstruction = $textInstruction;
        
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods|null
     */
    public function getPaymentMethods(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods $paymentMethods
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service
     */
    public function setPaymentMethods(?\Maetva\DhlExpress\ExpressRateBook\StructType\PaymentMethods $paymentMethods = null): self
    {
        $this->PaymentMethods = $paymentMethods;
        
        return $this;
    }
}
