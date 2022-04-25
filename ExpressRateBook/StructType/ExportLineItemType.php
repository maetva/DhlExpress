<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportLineItemType StructType
 * @subpackage Structs
 */
class ExportLineItemType extends AbstractStructBase
{
    /**
     * The CommodityCode
     * Meta information extracted from the WSDL
     * - documentation: Export Commodity code for the shipment at item line level | Commodity codes for shipment type
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommodityCode = null;
    /**
     * The ImportCommodityCode
     * Meta information extracted from the WSDL
     * - documentation: Import Commodity code for the shipment at item line level | Commodity codes for shipment type
     * - base: xsd:string
     * - maxLength: 18
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImportCommodityCode = null;
    /**
     * The ExportReasonType
     * Meta information extracted from the WSDL
     * - documentation: Reason for Export. Possible values: PERMANENT TEMPORARY RETURN USED_EXHIBITION_GOODS_TO_ORIGIN INTERCOMPANY_USE COMMERCIAL_PURPOSE_OR_SALE PERSONAL_BELONGINGS_OR_PERSONAL_USE SAMPLE GIFT RETURN_TO_ORIGIN WARRANTY_REPLACEMENT
     * DIPLOMATIC_GOODS DEFENCE_MATERIAL | Export reason code (Permanent, Temporary,Return)
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExportReasonType = null;
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Serial number for the items | Export line item number
     * - base: xsd:positiveInteger
     * - maxInclusive: 999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $ItemNumber = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Number of pieces of a particular line item
     * - base: xsd:integer
     * - maxInclusive: 1000000000
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The QuantityUnitOfMeasurement
     * @var string|null
     */
    protected ?string $QuantityUnitOfMeasurement = null;
    /**
     * The ItemDescription
     * Meta information extracted from the WSDL
     * - documentation: The description of the line item | Export line item description
     * - base: xsd:string
     * - maxLength: 512
     * @var string|null
     */
    protected ?string $ItemDescription = null;
    /**
     * The UnitPrice
     * Meta information extracted from the WSDL
     * - documentation: Monetary value of each line item
     * - base: xsd:decimal
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $UnitPrice = null;
    /**
     * The NetWeight
     * Meta information extracted from the WSDL
     * - documentation: Net weight of the line item
     * - base: xsd:decimal
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $NetWeight = null;
    /**
     * The GrossWeight
     * Meta information extracted from the WSDL
     * - documentation: Gross weight of the line item
     * - base: xsd:decimal
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $GrossWeight = null;
    /**
     * The ManufacturingCountryCode
     * Meta information extracted from the WSDL
     * - documentation: Manufacturing ISO country code | ISO 2 character codes of the Shipper/Recipient country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ManufacturingCountryCode = null;
    /**
     * The TaxesPaid
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TaxesPaid = null;
    /**
     * The AdditionalInformation
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice's Export Declaration Line Item's Additional Information Texts. This will be printed in Customs Invoice's template COMMERCIAL_INVOICE_04 or COMMERCIAL_INVOICE_P_10 or COMMERCIAL_INVOICE_L_10
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $AdditionalInformation = null;
    /**
     * The LicenseNumber
     * Meta information extracted from the WSDL
     * - documentation: Shipper export license to be used for Commercial Invoice template COMMERCIAL_INVOICE_07 printing purpose only. | Export license number
     * - base: xsd:string
     * - maxLength: 16
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LicenseNumber = null;
    /**
     * The ItemReferences
     * Meta information extracted from the WSDL
     * - documentation: Invoice line item level reference numbers and their type codes.
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences $ItemReferences = null;
    /**
     * The CustomsPaperworks
     * Meta information extracted from the WSDL
     * - documentation: Invoice line item level Customs documents and their type codes
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks $CustomsPaperworks = null;
    /**
     * Constructor method for ExportLineItemType
     * @uses ExportLineItemType::setCommodityCode()
     * @uses ExportLineItemType::setImportCommodityCode()
     * @uses ExportLineItemType::setExportReasonType()
     * @uses ExportLineItemType::setItemNumber()
     * @uses ExportLineItemType::setQuantity()
     * @uses ExportLineItemType::setQuantityUnitOfMeasurement()
     * @uses ExportLineItemType::setItemDescription()
     * @uses ExportLineItemType::setUnitPrice()
     * @uses ExportLineItemType::setNetWeight()
     * @uses ExportLineItemType::setGrossWeight()
     * @uses ExportLineItemType::setManufacturingCountryCode()
     * @uses ExportLineItemType::setTaxesPaid()
     * @uses ExportLineItemType::setAdditionalInformation()
     * @uses ExportLineItemType::setLicenseNumber()
     * @uses ExportLineItemType::setItemReferences()
     * @uses ExportLineItemType::setCustomsPaperworks()
     * @param string $commodityCode
     * @param string $importCommodityCode
     * @param string $exportReasonType
     * @param int $itemNumber
     * @param int $quantity
     * @param string $quantityUnitOfMeasurement
     * @param string $itemDescription
     * @param float $unitPrice
     * @param float $netWeight
     * @param float $grossWeight
     * @param string $manufacturingCountryCode
     * @param string $taxesPaid
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation
     * @param string $licenseNumber
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences $itemReferences
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks $customsPaperworks
     */
    public function __construct(?string $commodityCode = null, ?string $importCommodityCode = null, ?string $exportReasonType = null, ?int $itemNumber = null, ?int $quantity = null, ?string $quantityUnitOfMeasurement = null, ?string $itemDescription = null, ?float $unitPrice = null, ?float $netWeight = null, ?float $grossWeight = null, ?string $manufacturingCountryCode = null, ?string $taxesPaid = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation = null, ?string $licenseNumber = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences $itemReferences = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks $customsPaperworks = null)
    {
        $this
            ->setCommodityCode($commodityCode)
            ->setImportCommodityCode($importCommodityCode)
            ->setExportReasonType($exportReasonType)
            ->setItemNumber($itemNumber)
            ->setQuantity($quantity)
            ->setQuantityUnitOfMeasurement($quantityUnitOfMeasurement)
            ->setItemDescription($itemDescription)
            ->setUnitPrice($unitPrice)
            ->setNetWeight($netWeight)
            ->setGrossWeight($grossWeight)
            ->setManufacturingCountryCode($manufacturingCountryCode)
            ->setTaxesPaid($taxesPaid)
            ->setAdditionalInformation($additionalInformation)
            ->setLicenseNumber($licenseNumber)
            ->setItemReferences($itemReferences)
            ->setCustomsPaperworks($customsPaperworks);
    }
    /**
     * Get CommodityCode value
     * @return string|null
     */
    public function getCommodityCode(): ?string
    {
        return $this->CommodityCode;
    }
    /**
     * Set CommodityCode value
     * @param string $commodityCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setCommodityCode(?string $commodityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($commodityCode) && !is_string($commodityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commodityCode, true), gettype($commodityCode)), __LINE__);
        }
        $this->CommodityCode = $commodityCode;
        
        return $this;
    }
    /**
     * Get ImportCommodityCode value
     * @return string|null
     */
    public function getImportCommodityCode(): ?string
    {
        return $this->ImportCommodityCode;
    }
    /**
     * Set ImportCommodityCode value
     * @param string $importCommodityCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setImportCommodityCode(?string $importCommodityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($importCommodityCode) && !is_string($importCommodityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importCommodityCode, true), gettype($importCommodityCode)), __LINE__);
        }
        // validation for constraint: maxLength(18)
        if (!is_null($importCommodityCode) && mb_strlen((string) $importCommodityCode) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 18', mb_strlen((string) $importCommodityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($importCommodityCode) && mb_strlen((string) $importCommodityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $importCommodityCode)), __LINE__);
        }
        $this->ImportCommodityCode = $importCommodityCode;
        
        return $this;
    }
    /**
     * Get ExportReasonType value
     * @return string|null
     */
    public function getExportReasonType(): ?string
    {
        return $this->ExportReasonType;
    }
    /**
     * Set ExportReasonType value
     * @param string $exportReasonType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setExportReasonType(?string $exportReasonType = null): self
    {
        // validation for constraint: string
        if (!is_null($exportReasonType) && !is_string($exportReasonType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportReasonType, true), gettype($exportReasonType)), __LINE__);
        }
        $this->ExportReasonType = $exportReasonType;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setItemNumber(?int $itemNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($itemNumber) && !(is_int($itemNumber) || ctype_digit($itemNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($itemNumber) && $itemNumber > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($itemNumber, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($itemNumber) && $itemNumber < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($itemNumber, true)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        // validation for constraint: maxInclusive(1000000000)
        if (!is_null($quantity) && $quantity > 1000000000) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 1000000000', var_export($quantity, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($quantity) && $quantity < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($quantity, true)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get QuantityUnitOfMeasurement value
     * @return string|null
     */
    public function getQuantityUnitOfMeasurement(): ?string
    {
        return $this->QuantityUnitOfMeasurement;
    }
    /**
     * Set QuantityUnitOfMeasurement value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\QuantityUnitOfMeasurement::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\QuantityUnitOfMeasurement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $quantityUnitOfMeasurement
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setQuantityUnitOfMeasurement(?string $quantityUnitOfMeasurement = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\QuantityUnitOfMeasurement::valueIsValid($quantityUnitOfMeasurement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\QuantityUnitOfMeasurement', is_array($quantityUnitOfMeasurement) ? implode(', ', $quantityUnitOfMeasurement) : var_export($quantityUnitOfMeasurement, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\QuantityUnitOfMeasurement::getValidValues())), __LINE__);
        }
        $this->QuantityUnitOfMeasurement = $quantityUnitOfMeasurement;
        
        return $this;
    }
    /**
     * Get ItemDescription value
     * @return string|null
     */
    public function getItemDescription(): ?string
    {
        return $this->ItemDescription;
    }
    /**
     * Set ItemDescription value
     * @param string $itemDescription
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setItemDescription(?string $itemDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemDescription, true), gettype($itemDescription)), __LINE__);
        }
        // validation for constraint: maxLength(512)
        if (!is_null($itemDescription) && mb_strlen((string) $itemDescription) > 512) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 512', mb_strlen((string) $itemDescription)), __LINE__);
        }
        $this->ItemDescription = $itemDescription;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->UnitPrice = $unitPrice;
        
        return $this;
    }
    /**
     * Get NetWeight value
     * @return float|null
     */
    public function getNetWeight(): ?float
    {
        return $this->NetWeight;
    }
    /**
     * Set NetWeight value
     * @param float $netWeight
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setNetWeight(?float $netWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($netWeight) && !(is_float($netWeight) || is_numeric($netWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netWeight, true), gettype($netWeight)), __LINE__);
        }
        $this->NetWeight = $netWeight;
        
        return $this;
    }
    /**
     * Get GrossWeight value
     * @return float|null
     */
    public function getGrossWeight(): ?float
    {
        return $this->GrossWeight;
    }
    /**
     * Set GrossWeight value
     * @param float $grossWeight
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setGrossWeight(?float $grossWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($grossWeight) && !(is_float($grossWeight) || is_numeric($grossWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossWeight, true), gettype($grossWeight)), __LINE__);
        }
        $this->GrossWeight = $grossWeight;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
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
        // validation for constraint: minLength(2)
        if (!is_null($manufacturingCountryCode) && mb_strlen((string) $manufacturingCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $manufacturingCountryCode)), __LINE__);
        }
        $this->ManufacturingCountryCode = $manufacturingCountryCode;
        
        return $this;
    }
    /**
     * Get TaxesPaid value
     * @return string|null
     */
    public function getTaxesPaid(): ?string
    {
        return $this->TaxesPaid;
    }
    /**
     * Set TaxesPaid value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TaxesPaid::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TaxesPaid::getValidValues()
     * @throws InvalidArgumentException
     * @param string $taxesPaid
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setTaxesPaid(?string $taxesPaid = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TaxesPaid::valueIsValid($taxesPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TaxesPaid', is_array($taxesPaid) ? implode(', ', $taxesPaid) : var_export($taxesPaid, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\TaxesPaid::getValidValues())), __LINE__);
        }
        $this->TaxesPaid = $taxesPaid;
        
        return $this;
    }
    /**
     * Get AdditionalInformation value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation|null
     */
    public function getAdditionalInformation(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation
    {
        return $this->AdditionalInformation;
    }
    /**
     * Set AdditionalInformation value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setAdditionalInformation(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation = null): self
    {
        $this->AdditionalInformation = $additionalInformation;
        
        return $this;
    }
    /**
     * Get LicenseNumber value
     * @return string|null
     */
    public function getLicenseNumber(): ?string
    {
        return $this->LicenseNumber;
    }
    /**
     * Set LicenseNumber value
     * @param string $licenseNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setLicenseNumber(?string $licenseNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($licenseNumber) && !is_string($licenseNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licenseNumber, true), gettype($licenseNumber)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($licenseNumber) && mb_strlen((string) $licenseNumber) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $licenseNumber)), __LINE__);
        }
        $this->LicenseNumber = $licenseNumber;
        
        return $this;
    }
    /**
     * Get ItemReferences value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences|null
     */
    public function getItemReferences(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences
    {
        return $this->ItemReferences;
    }
    /**
     * Set ItemReferences value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences $itemReferences
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setItemReferences(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ItemReferences $itemReferences = null): self
    {
        $this->ItemReferences = $itemReferences;
        
        return $this;
    }
    /**
     * Get CustomsPaperworks value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks|null
     */
    public function getCustomsPaperworks(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks
    {
        return $this->CustomsPaperworks;
    }
    /**
     * Set CustomsPaperworks value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks $customsPaperworks
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
     */
    public function setCustomsPaperworks(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks $customsPaperworks = null): self
    {
        $this->CustomsPaperworks = $customsPaperworks;
        
        return $this;
    }
}
