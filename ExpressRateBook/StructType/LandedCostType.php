<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LandedCostType StructType
 * @subpackage Structs
 */
class LandedCostType extends AbstractStructBase
{
    /**
     * The GetItemCostBreakdown
     * Meta information extracted from the WSDL
     * - documentation: If the value is "Y", the item cost breakdown will be returned.
     * @var string|null
     */
    protected ?string $GetItemCostBreakdown = null;
    /**
     * The ShipmentCurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: This will be used for other amount section if the specific currency code is not provided.
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipmentCurrencyCode = null;
    /**
     * The ShipmentPurpose
     * Meta information extracted from the WSDL
     * - documentation: Possible values: "COMMERCIAL" "PERSONAL"
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentPurpose = null;
    /**
     * The ShipmentTransportationMode
     * Meta information extracted from the WSDL
     * - documentation: Possible value: "AIR" "OCEAN" "GROUND"
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentTransportationMode = null;
    /**
     * The MerchantSelectedCarrierName
     * Meta information extracted from the WSDL
     * - documentation: Carrier Name from Merchant Example: DHL, UPS, FEDEX
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MerchantSelectedCarrierName = null;
    /**
     * The Items
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType $Items = null;
    /**
     * The ShipmentMonetaryAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType $ShipmentMonetaryAmount = null;
    /**
     * The GetTariffFormula
     * Meta information extracted from the WSDL
     * - documentation: when set to “Y”, the service returns the Tariff Rate Formula for the duty/tax/fee calculation on Shipment or/and Line Item Level
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetTariffFormula = null;
    /**
     * The GetQuotationID
     * Meta information extracted from the WSDL
     * - documentation: when set to “Y”, the service returns the unique quotation id for successful landed cost estimation which may be used internally to correlate the estimated landed cost and actual cost charged
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetQuotationID = null;
    /**
     * The GetDetailedLineItemLevelStatus
     * Meta information extracted from the WSDL
     * - documentation: when set to “Y”, the service returns line item level number error
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetDetailedLineItemLevelStatus = null;
    /**
     * Constructor method for LandedCostType
     * @uses LandedCostType::setGetItemCostBreakdown()
     * @uses LandedCostType::setShipmentCurrencyCode()
     * @uses LandedCostType::setShipmentPurpose()
     * @uses LandedCostType::setShipmentTransportationMode()
     * @uses LandedCostType::setMerchantSelectedCarrierName()
     * @uses LandedCostType::setItems()
     * @uses LandedCostType::setShipmentMonetaryAmount()
     * @uses LandedCostType::setGetTariffFormula()
     * @uses LandedCostType::setGetQuotationID()
     * @uses LandedCostType::setGetDetailedLineItemLevelStatus()
     * @param string $getItemCostBreakdown
     * @param string $shipmentCurrencyCode
     * @param string $shipmentPurpose
     * @param string $shipmentTransportationMode
     * @param string $merchantSelectedCarrierName
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType $items
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType $shipmentMonetaryAmount
     * @param string $getTariffFormula
     * @param string $getQuotationID
     * @param string $getDetailedLineItemLevelStatus
     */
    public function __construct(?string $getItemCostBreakdown = null, ?string $shipmentCurrencyCode = null, ?string $shipmentPurpose = null, ?string $shipmentTransportationMode = null, ?string $merchantSelectedCarrierName = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType $items = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType $shipmentMonetaryAmount = null, ?string $getTariffFormula = null, ?string $getQuotationID = null, ?string $getDetailedLineItemLevelStatus = null)
    {
        $this
            ->setGetItemCostBreakdown($getItemCostBreakdown)
            ->setShipmentCurrencyCode($shipmentCurrencyCode)
            ->setShipmentPurpose($shipmentPurpose)
            ->setShipmentTransportationMode($shipmentTransportationMode)
            ->setMerchantSelectedCarrierName($merchantSelectedCarrierName)
            ->setItems($items)
            ->setShipmentMonetaryAmount($shipmentMonetaryAmount)
            ->setGetTariffFormula($getTariffFormula)
            ->setGetQuotationID($getQuotationID)
            ->setGetDetailedLineItemLevelStatus($getDetailedLineItemLevelStatus);
    }
    /**
     * Get GetItemCostBreakdown value
     * @return string|null
     */
    public function getGetItemCostBreakdown(): ?string
    {
        return $this->GetItemCostBreakdown;
    }
    /**
     * Set GetItemCostBreakdown value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetItemCostBreakdown2::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetItemCostBreakdown2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getItemCostBreakdown
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setGetItemCostBreakdown(?string $getItemCostBreakdown = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetItemCostBreakdown2::valueIsValid($getItemCostBreakdown)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetItemCostBreakdown2', is_array($getItemCostBreakdown) ? implode(', ', $getItemCostBreakdown) : var_export($getItemCostBreakdown, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetItemCostBreakdown2::getValidValues())), __LINE__);
        }
        $this->GetItemCostBreakdown = $getItemCostBreakdown;
        
        return $this;
    }
    /**
     * Get ShipmentCurrencyCode value
     * @return string|null
     */
    public function getShipmentCurrencyCode(): ?string
    {
        return $this->ShipmentCurrencyCode;
    }
    /**
     * Set ShipmentCurrencyCode value
     * @param string $shipmentCurrencyCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setShipmentCurrencyCode(?string $shipmentCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentCurrencyCode) && !is_string($shipmentCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentCurrencyCode, true), gettype($shipmentCurrencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($shipmentCurrencyCode) && mb_strlen((string) $shipmentCurrencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $shipmentCurrencyCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($shipmentCurrencyCode) && mb_strlen((string) $shipmentCurrencyCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $shipmentCurrencyCode)), __LINE__);
        }
        $this->ShipmentCurrencyCode = $shipmentCurrencyCode;
        
        return $this;
    }
    /**
     * Get ShipmentPurpose value
     * @return string|null
     */
    public function getShipmentPurpose(): ?string
    {
        return $this->ShipmentPurpose;
    }
    /**
     * Set ShipmentPurpose value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentPurpose2::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentPurpose2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shipmentPurpose
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setShipmentPurpose(?string $shipmentPurpose = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentPurpose2::valueIsValid($shipmentPurpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentPurpose2', is_array($shipmentPurpose) ? implode(', ', $shipmentPurpose) : var_export($shipmentPurpose, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentPurpose2::getValidValues())), __LINE__);
        }
        $this->ShipmentPurpose = $shipmentPurpose;
        
        return $this;
    }
    /**
     * Get ShipmentTransportationMode value
     * @return string|null
     */
    public function getShipmentTransportationMode(): ?string
    {
        return $this->ShipmentTransportationMode;
    }
    /**
     * Set ShipmentTransportationMode value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentTransportationMode2::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentTransportationMode2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shipmentTransportationMode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setShipmentTransportationMode(?string $shipmentTransportationMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentTransportationMode2::valueIsValid($shipmentTransportationMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentTransportationMode2', is_array($shipmentTransportationMode) ? implode(', ', $shipmentTransportationMode) : var_export($shipmentTransportationMode, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentTransportationMode2::getValidValues())), __LINE__);
        }
        $this->ShipmentTransportationMode = $shipmentTransportationMode;
        
        return $this;
    }
    /**
     * Get MerchantSelectedCarrierName value
     * @return string|null
     */
    public function getMerchantSelectedCarrierName(): ?string
    {
        return $this->MerchantSelectedCarrierName;
    }
    /**
     * Set MerchantSelectedCarrierName value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MerchantSelectedCarrierName2::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MerchantSelectedCarrierName2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $merchantSelectedCarrierName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setMerchantSelectedCarrierName(?string $merchantSelectedCarrierName = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MerchantSelectedCarrierName2::valueIsValid($merchantSelectedCarrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MerchantSelectedCarrierName2', is_array($merchantSelectedCarrierName) ? implode(', ', $merchantSelectedCarrierName) : var_export($merchantSelectedCarrierName, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\MerchantSelectedCarrierName2::getValidValues())), __LINE__);
        }
        $this->MerchantSelectedCarrierName = $merchantSelectedCarrierName;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType|null
     */
    public function getItems(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType $items
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setItems(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get ShipmentMonetaryAmount value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType|null
     */
    public function getShipmentMonetaryAmount(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType
    {
        return $this->ShipmentMonetaryAmount;
    }
    /**
     * Set ShipmentMonetaryAmount value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType $shipmentMonetaryAmount
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setShipmentMonetaryAmount(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType $shipmentMonetaryAmount = null): self
    {
        $this->ShipmentMonetaryAmount = $shipmentMonetaryAmount;
        
        return $this;
    }
    /**
     * Get GetTariffFormula value
     * @return string|null
     */
    public function getGetTariffFormula(): ?string
    {
        return $this->GetTariffFormula;
    }
    /**
     * Set GetTariffFormula value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TariffFormula::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TariffFormula::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getTariffFormula
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setGetTariffFormula(?string $getTariffFormula = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TariffFormula::valueIsValid($getTariffFormula)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TariffFormula', is_array($getTariffFormula) ? implode(', ', $getTariffFormula) : var_export($getTariffFormula, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TariffFormula::getValidValues())), __LINE__);
        }
        $this->GetTariffFormula = $getTariffFormula;
        
        return $this;
    }
    /**
     * Get GetQuotationID value
     * @return string|null
     */
    public function getGetQuotationID(): ?string
    {
        return $this->GetQuotationID;
    }
    /**
     * Set GetQuotationID value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetQuotationID::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetQuotationID::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getQuotationID
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setGetQuotationID(?string $getQuotationID = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetQuotationID::valueIsValid($getQuotationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetQuotationID', is_array($getQuotationID) ? implode(', ', $getQuotationID) : var_export($getQuotationID, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetQuotationID::getValidValues())), __LINE__);
        }
        $this->GetQuotationID = $getQuotationID;
        
        return $this;
    }
    /**
     * Get GetDetailedLineItemLevelStatus value
     * @return string|null
     */
    public function getGetDetailedLineItemLevelStatus(): ?string
    {
        return $this->GetDetailedLineItemLevelStatus;
    }
    /**
     * Set GetDetailedLineItemLevelStatus value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetDetailedLineItemLevelStatus::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetDetailedLineItemLevelStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getDetailedLineItemLevelStatus
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LandedCostType
     */
    public function setGetDetailedLineItemLevelStatus(?string $getDetailedLineItemLevelStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetDetailedLineItemLevelStatus::valueIsValid($getDetailedLineItemLevelStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetDetailedLineItemLevelStatus', is_array($getDetailedLineItemLevelStatus) ? implode(', ', $getDetailedLineItemLevelStatus) : var_export($getDetailedLineItemLevelStatus, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetDetailedLineItemLevelStatus::getValidValues())), __LINE__);
        }
        $this->GetDetailedLineItemLevelStatus = $getDetailedLineItemLevelStatus;
        
        return $this;
    }
}
