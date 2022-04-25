<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Billing StructType
 * @subpackage Structs
 */
class Billing extends AbstractStructBase
{
    /**
     * The ShipperAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The DHL account number used for the shipment. Used as the shipper account number. Please note if you use this billing section then the above 'Account'tag is not needed. 'ShipperAccountNumber' is mandatory then.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipperAccountNumber = null;
    /**
     * The ShippingPaymentType
     * @var string|null
     */
    protected ?string $ShippingPaymentType = null;
    /**
     * The BillingAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The DHL account number used for the shipment, if ShippingPaymentType is equal to R or T.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $BillingAccountNumber = null;
    /**
     * The DutyAndTaxPayerAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The DHL account number used for duties and tax payments.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $DutyAndTaxPayerAccountNumber = null;
    /**
     * The ShipmentPrepaidTotalCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge $ShipmentPrepaidTotalCharge = null;
    /**
     * Constructor method for Billing
     * @uses Billing::setShipperAccountNumber()
     * @uses Billing::setShippingPaymentType()
     * @uses Billing::setBillingAccountNumber()
     * @uses Billing::setDutyAndTaxPayerAccountNumber()
     * @uses Billing::setShipmentPrepaidTotalCharge()
     * @param string $shipperAccountNumber
     * @param string $shippingPaymentType
     * @param string $billingAccountNumber
     * @param string $dutyAndTaxPayerAccountNumber
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge $shipmentPrepaidTotalCharge
     */
    public function __construct(?string $shipperAccountNumber = null, ?string $shippingPaymentType = null, ?string $billingAccountNumber = null, ?string $dutyAndTaxPayerAccountNumber = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge $shipmentPrepaidTotalCharge = null)
    {
        $this
            ->setShipperAccountNumber($shipperAccountNumber)
            ->setShippingPaymentType($shippingPaymentType)
            ->setBillingAccountNumber($billingAccountNumber)
            ->setDutyAndTaxPayerAccountNumber($dutyAndTaxPayerAccountNumber)
            ->setShipmentPrepaidTotalCharge($shipmentPrepaidTotalCharge);
    }
    /**
     * Get ShipperAccountNumber value
     * @return string|null
     */
    public function getShipperAccountNumber(): ?string
    {
        return $this->ShipperAccountNumber;
    }
    /**
     * Set ShipperAccountNumber value
     * @param string $shipperAccountNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing
     */
    public function setShipperAccountNumber(?string $shipperAccountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAccountNumber) && !is_string($shipperAccountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAccountNumber, true), gettype($shipperAccountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($shipperAccountNumber) && mb_strlen((string) $shipperAccountNumber) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $shipperAccountNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($shipperAccountNumber) && mb_strlen((string) $shipperAccountNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $shipperAccountNumber)), __LINE__);
        }
        $this->ShipperAccountNumber = $shipperAccountNumber;
        
        return $this;
    }
    /**
     * Get ShippingPaymentType value
     * @return string|null
     */
    public function getShippingPaymentType(): ?string
    {
        return $this->ShippingPaymentType;
    }
    /**
     * Set ShippingPaymentType value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingPaymentType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing
     */
    public function setShippingPaymentType(?string $shippingPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType::valueIsValid($shippingPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType', is_array($shippingPaymentType) ? implode(', ', $shippingPaymentType) : var_export($shippingPaymentType, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType::getValidValues())), __LINE__);
        }
        $this->ShippingPaymentType = $shippingPaymentType;
        
        return $this;
    }
    /**
     * Get BillingAccountNumber value
     * @return string|null
     */
    public function getBillingAccountNumber(): ?string
    {
        return $this->BillingAccountNumber;
    }
    /**
     * Set BillingAccountNumber value
     * @param string $billingAccountNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing
     */
    public function setBillingAccountNumber(?string $billingAccountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($billingAccountNumber) && !is_string($billingAccountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAccountNumber, true), gettype($billingAccountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($billingAccountNumber) && mb_strlen((string) $billingAccountNumber) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $billingAccountNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($billingAccountNumber) && mb_strlen((string) $billingAccountNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $billingAccountNumber)), __LINE__);
        }
        $this->BillingAccountNumber = $billingAccountNumber;
        
        return $this;
    }
    /**
     * Get DutyAndTaxPayerAccountNumber value
     * @return string|null
     */
    public function getDutyAndTaxPayerAccountNumber(): ?string
    {
        return $this->DutyAndTaxPayerAccountNumber;
    }
    /**
     * Set DutyAndTaxPayerAccountNumber value
     * @param string $dutyAndTaxPayerAccountNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing
     */
    public function setDutyAndTaxPayerAccountNumber(?string $dutyAndTaxPayerAccountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($dutyAndTaxPayerAccountNumber) && !is_string($dutyAndTaxPayerAccountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dutyAndTaxPayerAccountNumber, true), gettype($dutyAndTaxPayerAccountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($dutyAndTaxPayerAccountNumber) && mb_strlen((string) $dutyAndTaxPayerAccountNumber) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $dutyAndTaxPayerAccountNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($dutyAndTaxPayerAccountNumber) && mb_strlen((string) $dutyAndTaxPayerAccountNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $dutyAndTaxPayerAccountNumber)), __LINE__);
        }
        $this->DutyAndTaxPayerAccountNumber = $dutyAndTaxPayerAccountNumber;
        
        return $this;
    }
    /**
     * Get ShipmentPrepaidTotalCharge value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge|null
     */
    public function getShipmentPrepaidTotalCharge(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge
    {
        return $this->ShipmentPrepaidTotalCharge;
    }
    /**
     * Set ShipmentPrepaidTotalCharge value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge $shipmentPrepaidTotalCharge
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing
     */
    public function setShipmentPrepaidTotalCharge(?\Maetva\DhlExpress\ExpressRateBook\StructType\ShipmentPrepaidTotalCharge $shipmentPrepaidTotalCharge = null): self
    {
        $this->ShipmentPrepaidTotalCharge = $shipmentPrepaidTotalCharge;
        
        return $this;
    }
}
