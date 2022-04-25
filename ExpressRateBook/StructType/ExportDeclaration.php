<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportDeclaration StructType
 * @subpackage Structs
 */
class ExportDeclaration extends AbstractStructBase
{
    /**
     * The DestinationPort
     * Meta information extracted from the WSDL
     * - documentation: Destination port details
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DestinationPort = null;
    /**
     * The ExporterCode
     * Meta information extracted from the WSDL
     * - documentation: Exporter Code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExporterCode = null;
    /**
     * The ExporterID
     * Meta information extracted from the WSDL
     * - documentation: Exporter ID
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExporterID = null;
    /**
     * The ExportLicense
     * Meta information extracted from the WSDL
     * - documentation: Export license info | Export License
     * - base: xsd:string
     * - maxLength: 16
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExportLicense = null;
    /**
     * The ExportLineItems
     * Meta information extracted from the WSDL
     * - documentation: Specifics about each of the export line item
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems $ExportLineItems = null;
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
     * The ExportReason
     * Meta information extracted from the WSDL
     * - documentation: Export Reason
     * - base: xsd:string
     * - maxLength: 30
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExportReason = null;
    /**
     * The ImportLicense
     * Meta information extracted from the WSDL
     * - documentation: Consignee import license | "Import License"
     * - base: xsd:string
     * - maxLength: 16
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImportLicense = null;
    /**
     * The InvoiceDate
     * Meta information extracted from the WSDL
     * - documentation: The date component must be in the format: YYYY-MM-DD. This field is mandatory when RequestDHLCustomsInvoice = Y
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceDate = null;
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Invoice number. This field is mandatory when RequestDHLCustomsInvoice = Y.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceNumber = null;
    /**
     * The InvoiceDeclarationTexts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts $InvoiceDeclarationTexts = null;
    /**
     * The PlaceOfIncoterm
     * Meta information extracted from the WSDL
     * - documentation: Name of port of departure, shipment or destination, as required under the applicable delivery term.
     * - base: xsd:string
     * - maxLength: 256
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlaceOfIncoterm = null;
    /**
     * The ShipmentPurpose
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the shipment was sent for PERSONAL (e.g. Gift) or COMMERCIAL (e.g. Sale) reasons
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentPurpose = null;
    /**
     * The DocumentFunction
     * Meta information extracted from the WSDL
     * - documentation: Document function describes for what purpose was the document details captured and are planned to be used. IMPORT EXPORT BOTH
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentFunction = null;
    /**
     * The CustomsDocuments
     * Meta information extracted from the WSDL
     * - documentation: Associated documents for Customs
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments $CustomsDocuments = null;
    /**
     * The InvoiceSignatureDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails $InvoiceSignatureDetails = null;
    /**
     * The OtherCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges $OtherCharges = null;
    /**
     * The PackageMarks
     * Meta information extracted from the WSDL
     * - documentation: Package marks
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PackageMarks = null;
    /**
     * The PayerGSTVAT
     * Meta information extracted from the WSDL
     * - documentation: Payer GST VAT details
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayerGSTVAT = null;
    /**
     * The RecipientReference
     * Meta information extracted from the WSDL
     * - documentation: Recipient reference
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RecipientReference = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Remarks|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\Remarks $Remarks = null;
    /**
     * The TermsOfPayment
     * Meta information extracted from the WSDL
     * - documentation: Terms of payment
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TermsOfPayment = null;
    /**
     * The InvoiceTotalNetWeight
     * Meta information extracted from the WSDL
     * - documentation: Total of line item Net Weight
     * - base: xsd:decimal
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $InvoiceTotalNetWeight = null;
    /**
     * The InvoiceTotalGrossWeight
     * Meta information extracted from the WSDL
     * - documentation: Total of line item Gross Weight
     * - base: xsd:decimal
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $InvoiceTotalGrossWeight = null;
    /**
     * The InvoiceInstructions
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice's Instruction. This will be printed in Customs Invoice's template COMMERCIAL_INVOICE_04 | Shipment Instructions for Customs Invoice printing purposes in COMMERCIAL_INVOICE_04 template
     * - base: xsd:string
     * - maxLength: 300
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvoiceInstructions = null;
    /**
     * The CustomerDataTextEntries
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice's Customer Data Text Entries. This will be printed in Customs Invoice's template COMMERCIAL_INVOICE_04 (note: only to be used for preparing Loose BBX shipments)
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries $CustomerDataTextEntries = null;
    /**
     * The InvoiceReferences
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference Numbers and their type codes.
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences $InvoiceReferences = null;
    /**
     * Constructor method for ExportDeclaration
     * @uses ExportDeclaration::setDestinationPort()
     * @uses ExportDeclaration::setExporterCode()
     * @uses ExportDeclaration::setExporterID()
     * @uses ExportDeclaration::setExportLicense()
     * @uses ExportDeclaration::setExportLineItems()
     * @uses ExportDeclaration::setExportReasonType()
     * @uses ExportDeclaration::setExportReason()
     * @uses ExportDeclaration::setImportLicense()
     * @uses ExportDeclaration::setInvoiceDate()
     * @uses ExportDeclaration::setInvoiceNumber()
     * @uses ExportDeclaration::setInvoiceDeclarationTexts()
     * @uses ExportDeclaration::setPlaceOfIncoterm()
     * @uses ExportDeclaration::setShipmentPurpose()
     * @uses ExportDeclaration::setDocumentFunction()
     * @uses ExportDeclaration::setCustomsDocuments()
     * @uses ExportDeclaration::setInvoiceSignatureDetails()
     * @uses ExportDeclaration::setOtherCharges()
     * @uses ExportDeclaration::setPackageMarks()
     * @uses ExportDeclaration::setPayerGSTVAT()
     * @uses ExportDeclaration::setRecipientReference()
     * @uses ExportDeclaration::setRemarks()
     * @uses ExportDeclaration::setTermsOfPayment()
     * @uses ExportDeclaration::setInvoiceTotalNetWeight()
     * @uses ExportDeclaration::setInvoiceTotalGrossWeight()
     * @uses ExportDeclaration::setInvoiceInstructions()
     * @uses ExportDeclaration::setCustomerDataTextEntries()
     * @uses ExportDeclaration::setInvoiceReferences()
     * @param string $destinationPort
     * @param string $exporterCode
     * @param string $exporterID
     * @param string $exportLicense
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems $exportLineItems
     * @param string $exportReasonType
     * @param string $exportReason
     * @param string $importLicense
     * @param string $invoiceDate
     * @param string $invoiceNumber
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts $invoiceDeclarationTexts
     * @param string $placeOfIncoterm
     * @param string $shipmentPurpose
     * @param string $documentFunction
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments $customsDocuments
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails $invoiceSignatureDetails
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges $otherCharges
     * @param string $packageMarks
     * @param string $payerGSTVAT
     * @param string $recipientReference
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Remarks $remarks
     * @param string $termsOfPayment
     * @param float $invoiceTotalNetWeight
     * @param float $invoiceTotalGrossWeight
     * @param string $invoiceInstructions
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries $customerDataTextEntries
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences $invoiceReferences
     */
    public function __construct(?string $destinationPort = null, ?string $exporterCode = null, ?string $exporterID = null, ?string $exportLicense = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems $exportLineItems = null, ?string $exportReasonType = null, ?string $exportReason = null, ?string $importLicense = null, ?string $invoiceDate = null, ?string $invoiceNumber = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts $invoiceDeclarationTexts = null, ?string $placeOfIncoterm = null, ?string $shipmentPurpose = null, ?string $documentFunction = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments $customsDocuments = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails $invoiceSignatureDetails = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges $otherCharges = null, ?string $packageMarks = null, ?string $payerGSTVAT = null, ?string $recipientReference = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\Remarks $remarks = null, ?string $termsOfPayment = null, ?float $invoiceTotalNetWeight = null, ?float $invoiceTotalGrossWeight = null, ?string $invoiceInstructions = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries $customerDataTextEntries = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences $invoiceReferences = null)
    {
        $this
            ->setDestinationPort($destinationPort)
            ->setExporterCode($exporterCode)
            ->setExporterID($exporterID)
            ->setExportLicense($exportLicense)
            ->setExportLineItems($exportLineItems)
            ->setExportReasonType($exportReasonType)
            ->setExportReason($exportReason)
            ->setImportLicense($importLicense)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceNumber($invoiceNumber)
            ->setInvoiceDeclarationTexts($invoiceDeclarationTexts)
            ->setPlaceOfIncoterm($placeOfIncoterm)
            ->setShipmentPurpose($shipmentPurpose)
            ->setDocumentFunction($documentFunction)
            ->setCustomsDocuments($customsDocuments)
            ->setInvoiceSignatureDetails($invoiceSignatureDetails)
            ->setOtherCharges($otherCharges)
            ->setPackageMarks($packageMarks)
            ->setPayerGSTVAT($payerGSTVAT)
            ->setRecipientReference($recipientReference)
            ->setRemarks($remarks)
            ->setTermsOfPayment($termsOfPayment)
            ->setInvoiceTotalNetWeight($invoiceTotalNetWeight)
            ->setInvoiceTotalGrossWeight($invoiceTotalGrossWeight)
            ->setInvoiceInstructions($invoiceInstructions)
            ->setCustomerDataTextEntries($customerDataTextEntries)
            ->setInvoiceReferences($invoiceReferences);
    }
    /**
     * Get DestinationPort value
     * @return string|null
     */
    public function getDestinationPort(): ?string
    {
        return $this->DestinationPort;
    }
    /**
     * Set DestinationPort value
     * @param string $destinationPort
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setDestinationPort(?string $destinationPort = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationPort) && !is_string($destinationPort)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationPort, true), gettype($destinationPort)), __LINE__);
        }
        $this->DestinationPort = $destinationPort;
        
        return $this;
    }
    /**
     * Get ExporterCode value
     * @return string|null
     */
    public function getExporterCode(): ?string
    {
        return $this->ExporterCode;
    }
    /**
     * Set ExporterCode value
     * @param string $exporterCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setExporterCode(?string $exporterCode = null): self
    {
        // validation for constraint: string
        if (!is_null($exporterCode) && !is_string($exporterCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exporterCode, true), gettype($exporterCode)), __LINE__);
        }
        $this->ExporterCode = $exporterCode;
        
        return $this;
    }
    /**
     * Get ExporterID value
     * @return string|null
     */
    public function getExporterID(): ?string
    {
        return $this->ExporterID;
    }
    /**
     * Set ExporterID value
     * @param string $exporterID
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setExporterID(?string $exporterID = null): self
    {
        // validation for constraint: string
        if (!is_null($exporterID) && !is_string($exporterID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exporterID, true), gettype($exporterID)), __LINE__);
        }
        $this->ExporterID = $exporterID;
        
        return $this;
    }
    /**
     * Get ExportLicense value
     * @return string|null
     */
    public function getExportLicense(): ?string
    {
        return $this->ExportLicense;
    }
    /**
     * Set ExportLicense value
     * @param string $exportLicense
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setExportLicense(?string $exportLicense = null): self
    {
        // validation for constraint: string
        if (!is_null($exportLicense) && !is_string($exportLicense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportLicense, true), gettype($exportLicense)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($exportLicense) && mb_strlen((string) $exportLicense) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $exportLicense)), __LINE__);
        }
        $this->ExportLicense = $exportLicense;
        
        return $this;
    }
    /**
     * Get ExportLineItems value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems|null
     */
    public function getExportLineItems(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems
    {
        return $this->ExportLineItems;
    }
    /**
     * Set ExportLineItems value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems $exportLineItems
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setExportLineItems(?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems $exportLineItems = null): self
    {
        $this->ExportLineItems = $exportLineItems;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
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
     * Get ExportReason value
     * @return string|null
     */
    public function getExportReason(): ?string
    {
        return $this->ExportReason;
    }
    /**
     * Set ExportReason value
     * @param string $exportReason
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setExportReason(?string $exportReason = null): self
    {
        // validation for constraint: string
        if (!is_null($exportReason) && !is_string($exportReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportReason, true), gettype($exportReason)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($exportReason) && mb_strlen((string) $exportReason) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $exportReason)), __LINE__);
        }
        $this->ExportReason = $exportReason;
        
        return $this;
    }
    /**
     * Get ImportLicense value
     * @return string|null
     */
    public function getImportLicense(): ?string
    {
        return $this->ImportLicense;
    }
    /**
     * Set ImportLicense value
     * @param string $importLicense
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setImportLicense(?string $importLicense = null): self
    {
        // validation for constraint: string
        if (!is_null($importLicense) && !is_string($importLicense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importLicense, true), gettype($importLicense)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($importLicense) && mb_strlen((string) $importLicense) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $importLicense)), __LINE__);
        }
        $this->ImportLicense = $importLicense;
        
        return $this;
    }
    /**
     * Get InvoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->InvoiceDate;
    }
    /**
     * Set InvoiceDate value
     * @param string $invoiceDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->InvoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get InvoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get InvoiceDeclarationTexts value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts|null
     */
    public function getInvoiceDeclarationTexts(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts
    {
        return $this->InvoiceDeclarationTexts;
    }
    /**
     * Set InvoiceDeclarationTexts value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts $invoiceDeclarationTexts
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceDeclarationTexts(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts $invoiceDeclarationTexts = null): self
    {
        $this->InvoiceDeclarationTexts = $invoiceDeclarationTexts;
        
        return $this;
    }
    /**
     * Get PlaceOfIncoterm value
     * @return string|null
     */
    public function getPlaceOfIncoterm(): ?string
    {
        return $this->PlaceOfIncoterm;
    }
    /**
     * Set PlaceOfIncoterm value
     * @param string $placeOfIncoterm
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setPlaceOfIncoterm(?string $placeOfIncoterm = null): self
    {
        // validation for constraint: string
        if (!is_null($placeOfIncoterm) && !is_string($placeOfIncoterm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeOfIncoterm, true), gettype($placeOfIncoterm)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($placeOfIncoterm) && mb_strlen((string) $placeOfIncoterm) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $placeOfIncoterm)), __LINE__);
        }
        $this->PlaceOfIncoterm = $placeOfIncoterm;
        
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPurpose::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPurpose::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shipmentPurpose
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setShipmentPurpose(?string $shipmentPurpose = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPurpose::valueIsValid($shipmentPurpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPurpose', is_array($shipmentPurpose) ? implode(', ', $shipmentPurpose) : var_export($shipmentPurpose, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\ShipmentPurpose::getValidValues())), __LINE__);
        }
        $this->ShipmentPurpose = $shipmentPurpose;
        
        return $this;
    }
    /**
     * Get DocumentFunction value
     * @return string|null
     */
    public function getDocumentFunction(): ?string
    {
        return $this->DocumentFunction;
    }
    /**
     * Set DocumentFunction value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DocumentFunction::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DocumentFunction::getValidValues()
     * @throws InvalidArgumentException
     * @param string $documentFunction
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setDocumentFunction(?string $documentFunction = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\DocumentFunction::valueIsValid($documentFunction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\DocumentFunction', is_array($documentFunction) ? implode(', ', $documentFunction) : var_export($documentFunction, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\DocumentFunction::getValidValues())), __LINE__);
        }
        $this->DocumentFunction = $documentFunction;
        
        return $this;
    }
    /**
     * Get CustomsDocuments value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments|null
     */
    public function getCustomsDocuments(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments
    {
        return $this->CustomsDocuments;
    }
    /**
     * Set CustomsDocuments value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments $customsDocuments
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setCustomsDocuments(?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocuments $customsDocuments = null): self
    {
        $this->CustomsDocuments = $customsDocuments;
        
        return $this;
    }
    /**
     * Get InvoiceSignatureDetails value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails|null
     */
    public function getInvoiceSignatureDetails(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails
    {
        return $this->InvoiceSignatureDetails;
    }
    /**
     * Set InvoiceSignatureDetails value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails $invoiceSignatureDetails
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceSignatureDetails(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails $invoiceSignatureDetails = null): self
    {
        $this->InvoiceSignatureDetails = $invoiceSignatureDetails;
        
        return $this;
    }
    /**
     * Get OtherCharges value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges|null
     */
    public function getOtherCharges(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges
    {
        return $this->OtherCharges;
    }
    /**
     * Set OtherCharges value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges $otherCharges
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setOtherCharges(?\Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharges $otherCharges = null): self
    {
        $this->OtherCharges = $otherCharges;
        
        return $this;
    }
    /**
     * Get PackageMarks value
     * @return string|null
     */
    public function getPackageMarks(): ?string
    {
        return $this->PackageMarks;
    }
    /**
     * Set PackageMarks value
     * @param string $packageMarks
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setPackageMarks(?string $packageMarks = null): self
    {
        // validation for constraint: string
        if (!is_null($packageMarks) && !is_string($packageMarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageMarks, true), gettype($packageMarks)), __LINE__);
        }
        $this->PackageMarks = $packageMarks;
        
        return $this;
    }
    /**
     * Get PayerGSTVAT value
     * @return string|null
     */
    public function getPayerGSTVAT(): ?string
    {
        return $this->PayerGSTVAT;
    }
    /**
     * Set PayerGSTVAT value
     * @param string $payerGSTVAT
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setPayerGSTVAT(?string $payerGSTVAT = null): self
    {
        // validation for constraint: string
        if (!is_null($payerGSTVAT) && !is_string($payerGSTVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerGSTVAT, true), gettype($payerGSTVAT)), __LINE__);
        }
        $this->PayerGSTVAT = $payerGSTVAT;
        
        return $this;
    }
    /**
     * Get RecipientReference value
     * @return string|null
     */
    public function getRecipientReference(): ?string
    {
        return $this->RecipientReference;
    }
    /**
     * Set RecipientReference value
     * @param string $recipientReference
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setRecipientReference(?string $recipientReference = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientReference) && !is_string($recipientReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientReference, true), gettype($recipientReference)), __LINE__);
        }
        $this->RecipientReference = $recipientReference;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Remarks|null
     */
    public function getRemarks(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\Remarks
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Remarks $remarks
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setRemarks(?\Maetva\DhlExpress\ExpressRateBook\StructType\Remarks $remarks = null): self
    {
        $this->Remarks = $remarks;
        
        return $this;
    }
    /**
     * Get TermsOfPayment value
     * @return string|null
     */
    public function getTermsOfPayment(): ?string
    {
        return $this->TermsOfPayment;
    }
    /**
     * Set TermsOfPayment value
     * @param string $termsOfPayment
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setTermsOfPayment(?string $termsOfPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($termsOfPayment) && !is_string($termsOfPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termsOfPayment, true), gettype($termsOfPayment)), __LINE__);
        }
        $this->TermsOfPayment = $termsOfPayment;
        
        return $this;
    }
    /**
     * Get InvoiceTotalNetWeight value
     * @return float|null
     */
    public function getInvoiceTotalNetWeight(): ?float
    {
        return $this->InvoiceTotalNetWeight;
    }
    /**
     * Set InvoiceTotalNetWeight value
     * @param float $invoiceTotalNetWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceTotalNetWeight(?float $invoiceTotalNetWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceTotalNetWeight) && !(is_float($invoiceTotalNetWeight) || is_numeric($invoiceTotalNetWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceTotalNetWeight, true), gettype($invoiceTotalNetWeight)), __LINE__);
        }
        $this->InvoiceTotalNetWeight = $invoiceTotalNetWeight;
        
        return $this;
    }
    /**
     * Get InvoiceTotalGrossWeight value
     * @return float|null
     */
    public function getInvoiceTotalGrossWeight(): ?float
    {
        return $this->InvoiceTotalGrossWeight;
    }
    /**
     * Set InvoiceTotalGrossWeight value
     * @param float $invoiceTotalGrossWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceTotalGrossWeight(?float $invoiceTotalGrossWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceTotalGrossWeight) && !(is_float($invoiceTotalGrossWeight) || is_numeric($invoiceTotalGrossWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceTotalGrossWeight, true), gettype($invoiceTotalGrossWeight)), __LINE__);
        }
        $this->InvoiceTotalGrossWeight = $invoiceTotalGrossWeight;
        
        return $this;
    }
    /**
     * Get InvoiceInstructions value
     * @return string|null
     */
    public function getInvoiceInstructions(): ?string
    {
        return $this->InvoiceInstructions;
    }
    /**
     * Set InvoiceInstructions value
     * @param string $invoiceInstructions
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceInstructions(?string $invoiceInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceInstructions) && !is_string($invoiceInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceInstructions, true), gettype($invoiceInstructions)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($invoiceInstructions) && mb_strlen((string) $invoiceInstructions) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $invoiceInstructions)), __LINE__);
        }
        $this->InvoiceInstructions = $invoiceInstructions;
        
        return $this;
    }
    /**
     * Get CustomerDataTextEntries value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries|null
     */
    public function getCustomerDataTextEntries(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries
    {
        return $this->CustomerDataTextEntries;
    }
    /**
     * Set CustomerDataTextEntries value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries $customerDataTextEntries
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setCustomerDataTextEntries(?\Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntries $customerDataTextEntries = null): self
    {
        $this->CustomerDataTextEntries = $customerDataTextEntries;
        
        return $this;
    }
    /**
     * Get InvoiceReferences value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences|null
     */
    public function getInvoiceReferences(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences
    {
        return $this->InvoiceReferences;
    }
    /**
     * Set InvoiceReferences value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences $invoiceReferences
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportDeclaration
     */
    public function setInvoiceReferences(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences $invoiceReferences = null): self
    {
        $this->InvoiceReferences = $invoiceReferences;
        
        return $this;
    }
}
