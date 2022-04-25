<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Billing2 StructType
 * @subpackage Structs
 */
class Billing2 extends AbstractStructBase
{
    /**
     * The ShipperAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: The DHL account number used for the shipment. Used as the shipper account number. Please note if you use this billing section then the above 'Account' tag is not needed. 'ShipperAccountNumber' is mandatory then.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 1
     * - whiteSpace: preserve
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
     * - documentation: The DHL account number used for the shipment, if ShippingPaymentType is equal to R or T
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $BillingAccountNumber = null;
    /**
     * Constructor method for Billing2
     * @uses Billing2::setShipperAccountNumber()
     * @uses Billing2::setShippingPaymentType()
     * @uses Billing2::setBillingAccountNumber()
     * @param string $shipperAccountNumber
     * @param string $shippingPaymentType
     * @param string $billingAccountNumber
     */
    public function __construct(?string $shipperAccountNumber = null, ?string $shippingPaymentType = null, ?string $billingAccountNumber = null)
    {
        $this
            ->setShipperAccountNumber($shipperAccountNumber)
            ->setShippingPaymentType($shippingPaymentType)
            ->setBillingAccountNumber($billingAccountNumber);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2
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
        // validation for constraint: minLength(1)
        if (!is_null($shipperAccountNumber) && mb_strlen((string) $shipperAccountNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $shipperAccountNumber)), __LINE__);
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingPaymentType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2
     */
    public function setShippingPaymentType(?string $shippingPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType2::valueIsValid($shippingPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType2', is_array($shippingPaymentType) ? implode(', ', $shippingPaymentType) : var_export($shippingPaymentType, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPaymentType2::getValidValues())), __LINE__);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2
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
        // validation for constraint: minLength(1)
        if (!is_null($billingAccountNumber) && mb_strlen((string) $billingAccountNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $billingAccountNumber)), __LINE__);
        }
        $this->BillingAccountNumber = $billingAccountNumber;
        
        return $this;
    }
}
