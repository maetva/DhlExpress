<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemType StructType
 * @subpackage Structs
 */
class ItemType extends AbstractStructBase
{
    /**
     * The GoodsCharacteristics
     * Meta information extracted from the WSDL
     * - documentation: Additional goods characteristics associated to the line item.
     * - minOccurs: 1
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType
     */
    protected \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType $GoodsCharacteristics;
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Line item number
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemNumber = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Item name
     * - base: xsd:string
     * - maxLength: 512
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - documentation: Item full description
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Remark = null;
    /**
     * The ManufacturingCountryCode
     * Meta information extracted from the WSDL
     * - documentation: Item country code of manufacture
     * - base: xsd:token
     * - maxLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ManufacturingCountryCode = null;
    /**
     * The SKUPartNumber
     * Meta information extracted from the WSDL
     * - documentation: Item part number
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKUPartNumber = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $Quantity = null;
    /**
     * The QuantityType
     * Meta information extracted from the WSDL
     * - documentation: Item quantity unit of measure: PRT=Part/Article, BOX=Box
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QuantityType = null;
    /**
     * The UnitPrice
     * Meta information extracted from the WSDL
     * - documentation: Product unit price
     * - base: xsd:decimal
     * - fractionDigits: 5
     * - minOccurs: 0
     * - totalDigits: 20
     * @var float|null
     */
    protected ?float $UnitPrice = null;
    /**
     * The UnitPriceCurrencyCode
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $UnitPriceCurrencyCode = null;
    /**
     * The CustomsValue
     * Meta information extracted from the WSDL
     * - documentation: Customs value
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 18
     * @var float|null
     */
    protected ?float $CustomsValue = null;
    /**
     * The CustomsValueCurrencyCode
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CustomsValueCurrencyCode = null;
    /**
     * The HarmonizedSystemCode
     * Meta information extracted from the WSDL
     * - documentation: Item 10-char HS code
     * - base: xsd:string
     * - maxLength: 18
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HarmonizedSystemCode = null;
    /**
     * The ItemWeight
     * Meta information extracted from the WSDL
     * - documentation: Item weight
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $ItemWeight = null;
    /**
     * The ItemWeightUnitofMeasurement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemWeightUnitofMeasurement = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Item category
     * - base: xsd:string
     * - maxLength: 50
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - documentation: Item brand name
     * - base: xsd:string
     * - maxLength: 50
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Brand = null;
    /**
     * The AdditionalQuantityDefinitions
     * Meta information extracted from the WSDL
     * - documentation: Additional quantity and UOM types associated to the line item.
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType $AdditionalQuantityDefinitions = null;
    /**
     * The EstimatedTariffRateType
     * Meta information extracted from the WSDL
     * - documentation: Tariff Rate Type
     * - base: xsd:token
     * - maxLength: 25
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $EstimatedTariffRateType = null;
    /**
     * Constructor method for ItemType
     * @uses ItemType::setGoodsCharacteristics()
     * @uses ItemType::setItemNumber()
     * @uses ItemType::setDescription()
     * @uses ItemType::setRemark()
     * @uses ItemType::setManufacturingCountryCode()
     * @uses ItemType::setSKUPartNumber()
     * @uses ItemType::setQuantity()
     * @uses ItemType::setQuantityType()
     * @uses ItemType::setUnitPrice()
     * @uses ItemType::setUnitPriceCurrencyCode()
     * @uses ItemType::setCustomsValue()
     * @uses ItemType::setCustomsValueCurrencyCode()
     * @uses ItemType::setHarmonizedSystemCode()
     * @uses ItemType::setItemWeight()
     * @uses ItemType::setItemWeightUnitofMeasurement()
     * @uses ItemType::setCategory()
     * @uses ItemType::setBrand()
     * @uses ItemType::setAdditionalQuantityDefinitions()
     * @uses ItemType::setEstimatedTariffRateType()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType $goodsCharacteristics
     * @param int $itemNumber
     * @param string $description
     * @param string $remark
     * @param string $manufacturingCountryCode
     * @param string $sKUPartNumber
     * @param float $quantity
     * @param string $quantityType
     * @param float $unitPrice
     * @param string $unitPriceCurrencyCode
     * @param float $customsValue
     * @param string $customsValueCurrencyCode
     * @param string $harmonizedSystemCode
     * @param float $itemWeight
     * @param string $itemWeightUnitofMeasurement
     * @param string $category
     * @param string $brand
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType $additionalQuantityDefinitions
     * @param string $estimatedTariffRateType
     */
    public function __construct(\Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType $goodsCharacteristics, ?int $itemNumber = null, ?string $description = null, ?string $remark = null, ?string $manufacturingCountryCode = null, ?string $sKUPartNumber = null, ?float $quantity = null, ?string $quantityType = null, ?float $unitPrice = null, ?string $unitPriceCurrencyCode = null, ?float $customsValue = null, ?string $customsValueCurrencyCode = null, ?string $harmonizedSystemCode = null, ?float $itemWeight = null, ?string $itemWeightUnitofMeasurement = null, ?string $category = null, ?string $brand = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType $additionalQuantityDefinitions = null, ?string $estimatedTariffRateType = null)
    {
        $this
            ->setGoodsCharacteristics($goodsCharacteristics)
            ->setItemNumber($itemNumber)
            ->setDescription($description)
            ->setRemark($remark)
            ->setManufacturingCountryCode($manufacturingCountryCode)
            ->setSKUPartNumber($sKUPartNumber)
            ->setQuantity($quantity)
            ->setQuantityType($quantityType)
            ->setUnitPrice($unitPrice)
            ->setUnitPriceCurrencyCode($unitPriceCurrencyCode)
            ->setCustomsValue($customsValue)
            ->setCustomsValueCurrencyCode($customsValueCurrencyCode)
            ->setHarmonizedSystemCode($harmonizedSystemCode)
            ->setItemWeight($itemWeight)
            ->setItemWeightUnitofMeasurement($itemWeightUnitofMeasurement)
            ->setCategory($category)
            ->setBrand($brand)
            ->setAdditionalQuantityDefinitions($additionalQuantityDefinitions)
            ->setEstimatedTariffRateType($estimatedTariffRateType);
    }
    /**
     * Get GoodsCharacteristics value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType
     */
    public function getGoodsCharacteristics(): \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType
    {
        return $this->GoodsCharacteristics;
    }
    /**
     * Set GoodsCharacteristics value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType $goodsCharacteristics
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setGoodsCharacteristics(\Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType $goodsCharacteristics): self
    {
        $this->GoodsCharacteristics = $goodsCharacteristics;

        return $this;
    }
    /**
     * Get ItemNumber value
     * @return int|null
     */
    public function getItemNumber(): ?int
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param int $itemNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setItemNumber(?int $itemNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($itemNumber) && !(is_int($itemNumber) || ctype_digit($itemNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;

        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(512)
        if (!is_null($description) && mb_strlen((string) $description) > 512) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 512', mb_strlen((string) $description)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($description) && mb_strlen((string) $description) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $description)), __LINE__);
        }
        $this->Description = $description;

        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($remark) && mb_strlen((string) $remark) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $remark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($remark) && mb_strlen((string) $remark) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $remark)), __LINE__);
        }
        $this->Remark = $remark;

        return $this;
    }
    /**
     * Get ManufacturingCountryCode value
     * @return string|null
     */
    public function getManufacturingCountryCode(): ?string
    {
        return $this->ManufacturingCountryCode;
    }
    /**
     * Set ManufacturingCountryCode value
     * @param string $manufacturingCountryCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setManufacturingCountryCode(?string $manufacturingCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($manufacturingCountryCode) && !is_string($manufacturingCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manufacturingCountryCode, true), gettype($manufacturingCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($manufacturingCountryCode) && mb_strlen((string) $manufacturingCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $manufacturingCountryCode)), __LINE__);
        }
        $this->ManufacturingCountryCode = $manufacturingCountryCode;

        return $this;
    }
    /**
     * Get SKUPartNumber value
     * @return string|null
     */
    public function getSKUPartNumber(): ?string
    {
        return $this->SKUPartNumber;
    }
    /**
     * Set SKUPartNumber value
     * @param string $sKUPartNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setSKUPartNumber(?string $sKUPartNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sKUPartNumber) && !is_string($sKUPartNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKUPartNumber, true), gettype($sKUPartNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($sKUPartNumber) && mb_strlen((string) $sKUPartNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $sKUPartNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sKUPartNumber) && mb_strlen((string) $sKUPartNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $sKUPartNumber)), __LINE__);
        }
        $this->SKUPartNumber = $sKUPartNumber;

        return $this;
    }
    /**
     * Get Quantity value
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param float $quantity
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setQuantity(?float $quantity = null): self
    {
        // validation for constraint: float
        if (!is_null($quantity) && !(is_float($quantity) || is_numeric($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($quantity) && mb_strlen(mb_substr((string) $quantity, false !== mb_strpos((string) $quantity, '.') ? mb_strpos((string) $quantity, '.') + 1 : mb_strlen((string) $quantity))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($quantity, true), mb_strlen(mb_substr((string) $quantity, mb_strpos((string) $quantity, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($quantity) && mb_strlen(preg_replace('/(\D)/', '', (string) $quantity)) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($quantity, true), mb_strlen(preg_replace('/(\D)/', '', (string) $quantity))), __LINE__);
        }
        $this->Quantity = $quantity;

        return $this;
    }
    /**
     * Get QuantityType value
     * @return string|null
     */
    public function getQuantityType(): ?string
    {
        return $this->QuantityType;
    }
    /**
     * Set QuantityType value
     * @param string $quantityType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setQuantityType(?string $quantityType = null): self
    {
        // validation for constraint: string
        if (!is_null($quantityType) && !is_string($quantityType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantityType, true), gettype($quantityType)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($quantityType) && mb_strlen((string) $quantityType) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $quantityType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($quantityType) && mb_strlen((string) $quantityType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $quantityType)), __LINE__);
        }
        $this->QuantityType = $quantityType;

        return $this;
    }
    /**
     * Get UnitPrice value
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param float $unitPrice
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        // validation for constraint: fractionDigits(5)
        if (!is_null($unitPrice) && mb_strlen(mb_substr((string) $unitPrice, false !== mb_strpos((string) $unitPrice, '.') ? mb_strpos((string) $unitPrice, '.') + 1 : mb_strlen((string) $unitPrice))) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 5 fraction digits, %d given', var_export($unitPrice, true), mb_strlen(mb_substr((string) $unitPrice, mb_strpos((string) $unitPrice, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(20)
        if (!is_null($unitPrice) && mb_strlen(preg_replace('/(\D)/', '', (string) $unitPrice)) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 20 digits, "%d" given', var_export($unitPrice, true), mb_strlen(preg_replace('/(\D)/', '', (string) $unitPrice))), __LINE__);
        }
        $this->UnitPrice = $unitPrice;

        return $this;
    }
    /**
     * Get UnitPriceCurrencyCode value
     * @return string|null
     */
    public function getUnitPriceCurrencyCode(): ?string
    {
        return $this->UnitPriceCurrencyCode;
    }
    /**
     * Set UnitPriceCurrencyCode value
     * @param string $unitPriceCurrencyCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setUnitPriceCurrencyCode(?string $unitPriceCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($unitPriceCurrencyCode) && !is_string($unitPriceCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitPriceCurrencyCode, true), gettype($unitPriceCurrencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($unitPriceCurrencyCode) && mb_strlen((string) $unitPriceCurrencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $unitPriceCurrencyCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($unitPriceCurrencyCode) && mb_strlen((string) $unitPriceCurrencyCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $unitPriceCurrencyCode)), __LINE__);
        }
        $this->UnitPriceCurrencyCode = $unitPriceCurrencyCode;

        return $this;
    }
    /**
     * Get CustomsValue value
     * @return float|null
     */
    public function getCustomsValue(): ?float
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param float $customsValue
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setCustomsValue(?float $customsValue = null): self
    {
        // validation for constraint: float
        if (!is_null($customsValue) && !(is_float($customsValue) || is_numeric($customsValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($customsValue) && mb_strlen(mb_substr((string) $customsValue, false !== mb_strpos((string) $customsValue, '.') ? mb_strpos((string) $customsValue, '.') + 1 : mb_strlen((string) $customsValue))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($customsValue, true), mb_strlen(mb_substr((string) $customsValue, mb_strpos((string) $customsValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($customsValue) && mb_strlen(preg_replace('/(\D)/', '', (string) $customsValue)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($customsValue, true), mb_strlen(preg_replace('/(\D)/', '', (string) $customsValue))), __LINE__);
        }
        $this->CustomsValue = $customsValue;

        return $this;
    }
    /**
     * Get CustomsValueCurrencyCode value
     * @return string|null
     */
    public function getCustomsValueCurrencyCode(): ?string
    {
        return $this->CustomsValueCurrencyCode;
    }
    /**
     * Set CustomsValueCurrencyCode value
     * @param string $customsValueCurrencyCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setCustomsValueCurrencyCode(?string $customsValueCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customsValueCurrencyCode) && !is_string($customsValueCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsValueCurrencyCode, true), gettype($customsValueCurrencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($customsValueCurrencyCode) && mb_strlen((string) $customsValueCurrencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $customsValueCurrencyCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($customsValueCurrencyCode) && mb_strlen((string) $customsValueCurrencyCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $customsValueCurrencyCode)), __LINE__);
        }
        $this->CustomsValueCurrencyCode = $customsValueCurrencyCode;

        return $this;
    }
    /**
     * Get HarmonizedSystemCode value
     * @return string|null
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->HarmonizedSystemCode;
    }
    /**
     * Set HarmonizedSystemCode value
     * @param string $harmonizedSystemCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setHarmonizedSystemCode(?string $harmonizedSystemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($harmonizedSystemCode) && !is_string($harmonizedSystemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($harmonizedSystemCode, true), gettype($harmonizedSystemCode)), __LINE__);
        }
        // validation for constraint: maxLength(18)
        if (!is_null($harmonizedSystemCode) && mb_strlen((string) $harmonizedSystemCode) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 18', mb_strlen((string) $harmonizedSystemCode)), __LINE__);
        }
        $this->HarmonizedSystemCode = $harmonizedSystemCode;

        return $this;
    }
    /**
     * Get ItemWeight value
     * @return float|null
     */
    public function getItemWeight(): ?float
    {
        return $this->ItemWeight;
    }
    /**
     * Set ItemWeight value
     * @param float $itemWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setItemWeight(?float $itemWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($itemWeight) && !(is_float($itemWeight) || is_numeric($itemWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemWeight, true), gettype($itemWeight)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($itemWeight) && mb_strlen(mb_substr((string) $itemWeight, false !== mb_strpos((string) $itemWeight, '.') ? mb_strpos((string) $itemWeight, '.') + 1 : mb_strlen((string) $itemWeight))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($itemWeight, true), mb_strlen(mb_substr((string) $itemWeight, mb_strpos((string) $itemWeight, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(15, 12)
        if (!is_null($itemWeight) && mb_strlen(preg_replace('/(\D)/', '', (string) $itemWeight)) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($itemWeight, true), mb_strlen(preg_replace('/(\D)/', '', (string) $itemWeight))), __LINE__);
        }
        $this->ItemWeight = $itemWeight;

        return $this;
    }
    /**
     * Get ItemWeightUnitofMeasurement value
     * @return string|null
     */
    public function getItemWeightUnitofMeasurement(): ?string
    {
        return $this->ItemWeightUnitofMeasurement;
    }
    /**
     * Set ItemWeightUnitofMeasurement value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemWeightUnitofMeasurement
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setItemWeightUnitofMeasurement(?string $itemWeightUnitofMeasurement = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::valueIsValid($itemWeightUnitofMeasurement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2', is_array($itemWeightUnitofMeasurement) ? implode(', ', $itemWeightUnitofMeasurement) : var_export($itemWeightUnitofMeasurement, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::getValidValues())), __LINE__);
        }
        $this->ItemWeightUnitofMeasurement = $itemWeightUnitofMeasurement;

        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($category) && mb_strlen((string) $category) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $category)), __LINE__);
        }
        $this->Category = $category;

        return $this;
    }
    /**
     * Get Brand value
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param string $brand
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($brand) && mb_strlen((string) $brand) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $brand)), __LINE__);
        }
        $this->Brand = $brand;

        return $this;
    }
    /**
     * Get AdditionalQuantityDefinitions value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType|null
     */
    public function getAdditionalQuantityDefinitions(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType
    {
        return $this->AdditionalQuantityDefinitions;
    }
    /**
     * Set AdditionalQuantityDefinitions value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType $additionalQuantityDefinitions
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setAdditionalQuantityDefinitions(?\Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType $additionalQuantityDefinitions = null): self
    {
        $this->AdditionalQuantityDefinitions = $additionalQuantityDefinitions;

        return $this;
    }
    /**
     * Get EstimatedTariffRateType value
     * @return string|null
     */
    public function getEstimatedTariffRateType(): ?string
    {
        return $this->EstimatedTariffRateType;
    }
    /**
     * Set EstimatedTariffRateType value
     * @param string $estimatedTariffRateType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemType
     */
    public function setEstimatedTariffRateType(?string $estimatedTariffRateType = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedTariffRateType) && !is_string($estimatedTariffRateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedTariffRateType, true), gettype($estimatedTariffRateType)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($estimatedTariffRateType) && mb_strlen((string) $estimatedTariffRateType) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $estimatedTariffRateType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($estimatedTariffRateType) && mb_strlen((string) $estimatedTariffRateType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $estimatedTariffRateType)), __LINE__);
        }
        $this->EstimatedTariffRateType = $estimatedTariffRateType;

        return $this;
    }
}
