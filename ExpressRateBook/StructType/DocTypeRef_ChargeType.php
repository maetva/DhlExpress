<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ChargeType StructType
 * @subpackage Structs
 */
class DocTypeRef_ChargeType extends AbstractStructBase
{
    /**
     * The ChargeCode
     * Meta information extracted from the WSDL
     * - documentation: Global Product Code or Optional Special Services | Special service or extra charge code – this is the code you would have to use in the ShipmentRequest message if you wish to add an optional Service such as Insurance
     * - base: xsd:string
     * - maxLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeCode = null;
    /**
     * The LocalChargeCode
     * Meta information extracted from the WSDL
     * - documentation: Local service code
     * - base: xsd:string
     * - maxLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalChargeCode = null;
    /**
     * The ChargeType
     * Meta information extracted from the WSDL
     * - documentation: Global Product Name or Optional Special Services | Name of the Value Added Service/Charge Type
     * @var string|null
     */
    protected ?string $ChargeType = null;
    /**
     * The ChargeAmount
     * Meta information extracted from the WSDL
     * - documentation: PackageCharge or the Weight Charge or Special Services Charge | The charge amount of the line item charge
     * @var string|null
     */
    protected ?string $ChargeAmount = null;
    /**
     * The ChargeName
     * Meta information extracted from the WSDL
     * - documentation: Name of the charge
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeName = null;
    /**
     * The ChargeCurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Currency code of the charge
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeCurrencyCode = null;
    /**
     * The ChargeCodeTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Special service charge code type for service
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeCodeTypeCode = null;
    /**
     * The BillingServiceInd
     * Meta information extracted from the WSDL
     * - documentation: Indicator if there is any discount allowed
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BillingServiceInd = null;
    /**
     * The CustomerAgreementInd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerAgreementInd = null;
    /**
     * The MarketedServiceInd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MarketedServiceInd = null;
    /**
     * The ChargeBreakdown
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown $ChargeBreakdown = null;
    /**
     * The TariffRateFormula
     * Meta information extracted from the WSDL
     * - documentation: Formula used for charges (duty/tax/fee) calculation
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TariffRateFormula = null;
    /**
     * Constructor method for docTypeRef_ChargeType
     * @uses DocTypeRef_ChargeType::setChargeCode()
     * @uses DocTypeRef_ChargeType::setLocalChargeCode()
     * @uses DocTypeRef_ChargeType::setChargeType()
     * @uses DocTypeRef_ChargeType::setChargeAmount()
     * @uses DocTypeRef_ChargeType::setChargeName()
     * @uses DocTypeRef_ChargeType::setChargeCurrencyCode()
     * @uses DocTypeRef_ChargeType::setChargeCodeTypeCode()
     * @uses DocTypeRef_ChargeType::setBillingServiceInd()
     * @uses DocTypeRef_ChargeType::setCustomerAgreementInd()
     * @uses DocTypeRef_ChargeType::setMarketedServiceInd()
     * @uses DocTypeRef_ChargeType::setChargeBreakdown()
     * @uses DocTypeRef_ChargeType::setTariffRateFormula()
     * @param string $chargeCode
     * @param string $localChargeCode
     * @param string $chargeType
     * @param string $chargeAmount
     * @param string $chargeName
     * @param string $chargeCurrencyCode
     * @param string $chargeCodeTypeCode
     * @param string $billingServiceInd
     * @param string $customerAgreementInd
     * @param string $marketedServiceInd
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown $chargeBreakdown
     * @param string $tariffRateFormula
     */
    public function __construct(?string $chargeCode = null, ?string $localChargeCode = null, ?string $chargeType = null, ?string $chargeAmount = null, ?string $chargeName = null, ?string $chargeCurrencyCode = null, ?string $chargeCodeTypeCode = null, ?string $billingServiceInd = null, ?string $customerAgreementInd = null, ?string $marketedServiceInd = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown $chargeBreakdown = null, ?string $tariffRateFormula = null)
    {
        $this
            ->setChargeCode($chargeCode)
            ->setLocalChargeCode($localChargeCode)
            ->setChargeType($chargeType)
            ->setChargeAmount($chargeAmount)
            ->setChargeName($chargeName)
            ->setChargeCurrencyCode($chargeCurrencyCode)
            ->setChargeCodeTypeCode($chargeCodeTypeCode)
            ->setBillingServiceInd($billingServiceInd)
            ->setCustomerAgreementInd($customerAgreementInd)
            ->setMarketedServiceInd($marketedServiceInd)
            ->setChargeBreakdown($chargeBreakdown)
            ->setTariffRateFormula($tariffRateFormula);
    }
    /**
     * Get ChargeCode value
     * @return string|null
     */
    public function getChargeCode(): ?string
    {
        return $this->ChargeCode;
    }
    /**
     * Set ChargeCode value
     * @param string $chargeCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeCode(?string $chargeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeCode) && !is_string($chargeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeCode, true), gettype($chargeCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($chargeCode) && mb_strlen((string) $chargeCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $chargeCode)), __LINE__);
        }
        $this->ChargeCode = $chargeCode;
        
        return $this;
    }
    /**
     * Get LocalChargeCode value
     * @return string|null
     */
    public function getLocalChargeCode(): ?string
    {
        return $this->LocalChargeCode;
    }
    /**
     * Set LocalChargeCode value
     * @param string $localChargeCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setLocalChargeCode(?string $localChargeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($localChargeCode) && !is_string($localChargeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localChargeCode, true), gettype($localChargeCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($localChargeCode) && mb_strlen((string) $localChargeCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $localChargeCode)), __LINE__);
        }
        $this->LocalChargeCode = $localChargeCode;
        
        return $this;
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
     * @param string $chargeType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeType(?string $chargeType = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeType, true), gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return string|null
     */
    public function getChargeAmount(): ?string
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param string $chargeAmount
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeAmount(?string $chargeAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeAmount) && !is_string($chargeAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeAmount, true), gettype($chargeAmount)), __LINE__);
        }
        $this->ChargeAmount = $chargeAmount;
        
        return $this;
    }
    /**
     * Get ChargeName value
     * @return string|null
     */
    public function getChargeName(): ?string
    {
        return $this->ChargeName;
    }
    /**
     * Set ChargeName value
     * @param string $chargeName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeName(?string $chargeName = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeName) && !is_string($chargeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeName, true), gettype($chargeName)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($chargeName) && mb_strlen((string) $chargeName) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $chargeName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($chargeName) && mb_strlen((string) $chargeName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $chargeName)), __LINE__);
        }
        $this->ChargeName = $chargeName;
        
        return $this;
    }
    /**
     * Get ChargeCurrencyCode value
     * @return string|null
     */
    public function getChargeCurrencyCode(): ?string
    {
        return $this->ChargeCurrencyCode;
    }
    /**
     * Set ChargeCurrencyCode value
     * @param string $chargeCurrencyCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeCurrencyCode(?string $chargeCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeCurrencyCode) && !is_string($chargeCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeCurrencyCode, true), gettype($chargeCurrencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($chargeCurrencyCode) && mb_strlen((string) $chargeCurrencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $chargeCurrencyCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($chargeCurrencyCode) && mb_strlen((string) $chargeCurrencyCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $chargeCurrencyCode)), __LINE__);
        }
        $this->ChargeCurrencyCode = $chargeCurrencyCode;
        
        return $this;
    }
    /**
     * Get ChargeCodeTypeCode value
     * @return string|null
     */
    public function getChargeCodeTypeCode(): ?string
    {
        return $this->ChargeCodeTypeCode;
    }
    /**
     * Set ChargeCodeTypeCode value
     * @param string $chargeCodeTypeCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeCodeTypeCode(?string $chargeCodeTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeCodeTypeCode) && !is_string($chargeCodeTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeCodeTypeCode, true), gettype($chargeCodeTypeCode)), __LINE__);
        }
        $this->ChargeCodeTypeCode = $chargeCodeTypeCode;
        
        return $this;
    }
    /**
     * Get BillingServiceInd value
     * @return string|null
     */
    public function getBillingServiceInd(): ?string
    {
        return $this->BillingServiceInd;
    }
    /**
     * Set BillingServiceInd value
     * @param string $billingServiceInd
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setBillingServiceInd(?string $billingServiceInd = null): self
    {
        // validation for constraint: string
        if (!is_null($billingServiceInd) && !is_string($billingServiceInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingServiceInd, true), gettype($billingServiceInd)), __LINE__);
        }
        $this->BillingServiceInd = $billingServiceInd;
        
        return $this;
    }
    /**
     * Get CustomerAgreementInd value
     * @return string|null
     */
    public function getCustomerAgreementInd(): ?string
    {
        return $this->CustomerAgreementInd;
    }
    /**
     * Set CustomerAgreementInd value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\CustomerAgreementInd::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\CustomerAgreementInd::getValidValues()
     * @throws InvalidArgumentException
     * @param string $customerAgreementInd
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setCustomerAgreementInd(?string $customerAgreementInd = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\CustomerAgreementInd::valueIsValid($customerAgreementInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\CustomerAgreementInd', is_array($customerAgreementInd) ? implode(', ', $customerAgreementInd) : var_export($customerAgreementInd, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\CustomerAgreementInd::getValidValues())), __LINE__);
        }
        $this->CustomerAgreementInd = $customerAgreementInd;
        
        return $this;
    }
    /**
     * Get MarketedServiceInd value
     * @return string|null
     */
    public function getMarketedServiceInd(): ?string
    {
        return $this->MarketedServiceInd;
    }
    /**
     * Set MarketedServiceInd value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MarketedServiceInd::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MarketedServiceInd::getValidValues()
     * @throws InvalidArgumentException
     * @param string $marketedServiceInd
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setMarketedServiceInd(?string $marketedServiceInd = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MarketedServiceInd::valueIsValid($marketedServiceInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MarketedServiceInd', is_array($marketedServiceInd) ? implode(', ', $marketedServiceInd) : var_export($marketedServiceInd, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MarketedServiceInd::getValidValues())), __LINE__);
        }
        $this->MarketedServiceInd = $marketedServiceInd;
        
        return $this;
    }
    /**
     * Get ChargeBreakdown value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown|null
     */
    public function getChargeBreakdown(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown
    {
        return $this->ChargeBreakdown;
    }
    /**
     * Set ChargeBreakdown value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown $chargeBreakdown
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setChargeBreakdown(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ChargeBreakdown $chargeBreakdown = null): self
    {
        $this->ChargeBreakdown = $chargeBreakdown;
        
        return $this;
    }
    /**
     * Get TariffRateFormula value
     * @return string|null
     */
    public function getTariffRateFormula(): ?string
    {
        return $this->TariffRateFormula;
    }
    /**
     * Set TariffRateFormula value
     * @param string $tariffRateFormula
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType
     */
    public function setTariffRateFormula(?string $tariffRateFormula = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffRateFormula) && !is_string($tariffRateFormula)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffRateFormula, true), gettype($tariffRateFormula)), __LINE__);
        }
        $this->TariffRateFormula = $tariffRateFormula;
        
        return $this;
    }
}
