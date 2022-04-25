<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelOptions StructType
 * Meta information extracted from the WSDL
 * - documentation: Label options that available for transport label, waybill document, shipment receipt and custom invoice document
 * @subpackage Structs
 */
class LabelOptions extends AbstractStructBase
{
    /**
     * The CustomerLogo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo $CustomerLogo = null;
    /**
     * The CustomerBarcode
     * Meta information extracted from the WSDL
     * - documentation: Customer barcode to be printed on supported transport label templates
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode $CustomerBarcode = null;
    /**
     * The PrinterDPI
     * Meta information extracted from the WSDL
     * - documentation: Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output
     * - base: xsd:positiveInteger
     * - maxInclusive: 300
     * - minInclusive: 200
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PrinterDPI = null;
    /**
     * The RequestWaybillDocument
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestWaybillDocument = null;
    /**
     * The HideAccountInWaybillDocument
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HideAccountInWaybillDocument = null;
    /**
     * The NumberOfWaybillDocumentCopies
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumberOfWaybillDocumentCopies = null;
    /**
     * The RequestDHLCustomsInvoice
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestDHLCustomsInvoice = null;
    /**
     * The DHLCustomsInvoiceLanguageCode
     * Meta information extracted from the WSDL
     * - documentation: DHL Customs Invoice Language Code | eng for English
     * - base: xsd:string
     * - default: eng
     * - maxLength: 3
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DHLCustomsInvoiceLanguageCode = null;
    /**
     * The DHLCustomsInvoiceLanguageCountryCode
     * Meta information extracted from the WSDL
     * - documentation: DHL Customs Invoice Language Country Code
     * - base: xsd:token
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $DHLCustomsInvoiceLanguageCountryCode = null;
    /**
     * The DHLCustomsInvoiceType
     * Meta information extracted from the WSDL
     * - default: COMMERCIAL_INVOICE
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DHLCustomsInvoiceType = null;
    /**
     * The RequestShipmentReceipt
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestShipmentReceipt = null;
    /**
     * The DetachOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions $DetachOptions = null;
    /**
     * The RequestBarcodeInfo
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestBarcodeInfo = null;
    /**
     * The RequestLabelsToFitA4
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestLabelsToFitA4 = null;
    /**
     * The RequestDHLLogoOnLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestDHLLogoOnLabel = null;
    /**
     * The RequestTransportLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestTransportLabel = null;
    /**
     * The RequestQRCode
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestQRCode = null;
    /**
     * Constructor method for LabelOptions
     * @uses LabelOptions::setCustomerLogo()
     * @uses LabelOptions::setCustomerBarcode()
     * @uses LabelOptions::setPrinterDPI()
     * @uses LabelOptions::setRequestWaybillDocument()
     * @uses LabelOptions::setHideAccountInWaybillDocument()
     * @uses LabelOptions::setNumberOfWaybillDocumentCopies()
     * @uses LabelOptions::setRequestDHLCustomsInvoice()
     * @uses LabelOptions::setDHLCustomsInvoiceLanguageCode()
     * @uses LabelOptions::setDHLCustomsInvoiceLanguageCountryCode()
     * @uses LabelOptions::setDHLCustomsInvoiceType()
     * @uses LabelOptions::setRequestShipmentReceipt()
     * @uses LabelOptions::setDetachOptions()
     * @uses LabelOptions::setRequestBarcodeInfo()
     * @uses LabelOptions::setRequestLabelsToFitA4()
     * @uses LabelOptions::setRequestDHLLogoOnLabel()
     * @uses LabelOptions::setRequestTransportLabel()
     * @uses LabelOptions::setRequestQRCode()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo $customerLogo
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode $customerBarcode
     * @param int $printerDPI
     * @param string $requestWaybillDocument
     * @param string $hideAccountInWaybillDocument
     * @param string $numberOfWaybillDocumentCopies
     * @param string $requestDHLCustomsInvoice
     * @param string $dHLCustomsInvoiceLanguageCode
     * @param string $dHLCustomsInvoiceLanguageCountryCode
     * @param string $dHLCustomsInvoiceType
     * @param string $requestShipmentReceipt
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions $detachOptions
     * @param string $requestBarcodeInfo
     * @param string $requestLabelsToFitA4
     * @param string $requestDHLLogoOnLabel
     * @param string $requestTransportLabel
     * @param string $requestQRCode
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo $customerLogo = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode $customerBarcode = null, ?int $printerDPI = null, ?string $requestWaybillDocument = null, ?string $hideAccountInWaybillDocument = null, ?string $numberOfWaybillDocumentCopies = null, ?string $requestDHLCustomsInvoice = null, ?string $dHLCustomsInvoiceLanguageCode = 'eng', ?string $dHLCustomsInvoiceLanguageCountryCode = null, ?string $dHLCustomsInvoiceType = null, ?string $requestShipmentReceipt = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions $detachOptions = null, ?string $requestBarcodeInfo = null, ?string $requestLabelsToFitA4 = null, ?string $requestDHLLogoOnLabel = null, ?string $requestTransportLabel = null, ?string $requestQRCode = null)
    {
        $this
            ->setCustomerLogo($customerLogo)
            ->setCustomerBarcode($customerBarcode)
            ->setPrinterDPI($printerDPI)
            ->setRequestWaybillDocument($requestWaybillDocument)
            ->setHideAccountInWaybillDocument($hideAccountInWaybillDocument)
            ->setNumberOfWaybillDocumentCopies($numberOfWaybillDocumentCopies)
            ->setRequestDHLCustomsInvoice($requestDHLCustomsInvoice)
            ->setDHLCustomsInvoiceLanguageCode($dHLCustomsInvoiceLanguageCode)
            ->setDHLCustomsInvoiceLanguageCountryCode($dHLCustomsInvoiceLanguageCountryCode)
            ->setDHLCustomsInvoiceType($dHLCustomsInvoiceType)
            ->setRequestShipmentReceipt($requestShipmentReceipt)
            ->setDetachOptions($detachOptions)
            ->setRequestBarcodeInfo($requestBarcodeInfo)
            ->setRequestLabelsToFitA4($requestLabelsToFitA4)
            ->setRequestDHLLogoOnLabel($requestDHLLogoOnLabel)
            ->setRequestTransportLabel($requestTransportLabel)
            ->setRequestQRCode($requestQRCode);
    }
    /**
     * Get CustomerLogo value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo|null
     */
    public function getCustomerLogo(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo
    {
        return $this->CustomerLogo;
    }
    /**
     * Set CustomerLogo value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo $customerLogo
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setCustomerLogo(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerLogo $customerLogo = null): self
    {
        $this->CustomerLogo = $customerLogo;
        
        return $this;
    }
    /**
     * Get CustomerBarcode value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode|null
     */
    public function getCustomerBarcode(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode
    {
        return $this->CustomerBarcode;
    }
    /**
     * Set CustomerBarcode value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode $customerBarcode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setCustomerBarcode(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerBarcode $customerBarcode = null): self
    {
        $this->CustomerBarcode = $customerBarcode;
        
        return $this;
    }
    /**
     * Get PrinterDPI value
     * @return int|null
     */
    public function getPrinterDPI(): ?int
    {
        return $this->PrinterDPI;
    }
    /**
     * Set PrinterDPI value
     * @param int $printerDPI
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setPrinterDPI(?int $printerDPI = null): self
    {
        // validation for constraint: int
        if (!is_null($printerDPI) && !(is_int($printerDPI) || ctype_digit($printerDPI))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printerDPI, true), gettype($printerDPI)), __LINE__);
        }
        // validation for constraint: maxInclusive(300)
        if (!is_null($printerDPI) && $printerDPI > 300) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 300', var_export($printerDPI, true)), __LINE__);
        }
        // validation for constraint: minInclusive(200)
        if (!is_null($printerDPI) && $printerDPI < 200) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 200', var_export($printerDPI, true)), __LINE__);
        }
        $this->PrinterDPI = $printerDPI;
        
        return $this;
    }
    /**
     * Get RequestWaybillDocument value
     * @return string|null
     */
    public function getRequestWaybillDocument(): ?string
    {
        return $this->RequestWaybillDocument;
    }
    /**
     * Set RequestWaybillDocument value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestWaybillDocument::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestWaybillDocument::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestWaybillDocument
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestWaybillDocument(?string $requestWaybillDocument = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestWaybillDocument::valueIsValid($requestWaybillDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestWaybillDocument', is_array($requestWaybillDocument) ? implode(', ', $requestWaybillDocument) : var_export($requestWaybillDocument, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestWaybillDocument::getValidValues())), __LINE__);
        }
        $this->RequestWaybillDocument = $requestWaybillDocument;
        
        return $this;
    }
    /**
     * Get HideAccountInWaybillDocument value
     * @return string|null
     */
    public function getHideAccountInWaybillDocument(): ?string
    {
        return $this->HideAccountInWaybillDocument;
    }
    /**
     * Set HideAccountInWaybillDocument value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\HideAccountInWaybillDocument::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\HideAccountInWaybillDocument::getValidValues()
     * @throws InvalidArgumentException
     * @param string $hideAccountInWaybillDocument
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setHideAccountInWaybillDocument(?string $hideAccountInWaybillDocument = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\HideAccountInWaybillDocument::valueIsValid($hideAccountInWaybillDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\HideAccountInWaybillDocument', is_array($hideAccountInWaybillDocument) ? implode(', ', $hideAccountInWaybillDocument) : var_export($hideAccountInWaybillDocument, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\HideAccountInWaybillDocument::getValidValues())), __LINE__);
        }
        $this->HideAccountInWaybillDocument = $hideAccountInWaybillDocument;
        
        return $this;
    }
    /**
     * Get NumberOfWaybillDocumentCopies value
     * @return string|null
     */
    public function getNumberOfWaybillDocumentCopies(): ?string
    {
        return $this->NumberOfWaybillDocumentCopies;
    }
    /**
     * Set NumberOfWaybillDocumentCopies value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NumberOfWaybillDocumentCopies::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NumberOfWaybillDocumentCopies::getValidValues()
     * @throws InvalidArgumentException
     * @param string $numberOfWaybillDocumentCopies
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setNumberOfWaybillDocumentCopies(?string $numberOfWaybillDocumentCopies = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NumberOfWaybillDocumentCopies::valueIsValid($numberOfWaybillDocumentCopies)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NumberOfWaybillDocumentCopies', is_array($numberOfWaybillDocumentCopies) ? implode(', ', $numberOfWaybillDocumentCopies) : var_export($numberOfWaybillDocumentCopies, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NumberOfWaybillDocumentCopies::getValidValues())), __LINE__);
        }
        $this->NumberOfWaybillDocumentCopies = $numberOfWaybillDocumentCopies;
        
        return $this;
    }
    /**
     * Get RequestDHLCustomsInvoice value
     * @return string|null
     */
    public function getRequestDHLCustomsInvoice(): ?string
    {
        return $this->RequestDHLCustomsInvoice;
    }
    /**
     * Set RequestDHLCustomsInvoice value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLCustomsInvoice::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLCustomsInvoice::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestDHLCustomsInvoice
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestDHLCustomsInvoice(?string $requestDHLCustomsInvoice = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLCustomsInvoice::valueIsValid($requestDHLCustomsInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLCustomsInvoice', is_array($requestDHLCustomsInvoice) ? implode(', ', $requestDHLCustomsInvoice) : var_export($requestDHLCustomsInvoice, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLCustomsInvoice::getValidValues())), __LINE__);
        }
        $this->RequestDHLCustomsInvoice = $requestDHLCustomsInvoice;
        
        return $this;
    }
    /**
     * Get DHLCustomsInvoiceLanguageCode value
     * @return string|null
     */
    public function getDHLCustomsInvoiceLanguageCode(): ?string
    {
        return $this->DHLCustomsInvoiceLanguageCode;
    }
    /**
     * Set DHLCustomsInvoiceLanguageCode value
     * @param string $dHLCustomsInvoiceLanguageCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setDHLCustomsInvoiceLanguageCode(?string $dHLCustomsInvoiceLanguageCode = 'eng'): self
    {
        // validation for constraint: string
        if (!is_null($dHLCustomsInvoiceLanguageCode) && !is_string($dHLCustomsInvoiceLanguageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHLCustomsInvoiceLanguageCode, true), gettype($dHLCustomsInvoiceLanguageCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($dHLCustomsInvoiceLanguageCode) && mb_strlen((string) $dHLCustomsInvoiceLanguageCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $dHLCustomsInvoiceLanguageCode)), __LINE__);
        }
        $this->DHLCustomsInvoiceLanguageCode = $dHLCustomsInvoiceLanguageCode;
        
        return $this;
    }
    /**
     * Get DHLCustomsInvoiceLanguageCountryCode value
     * @return string|null
     */
    public function getDHLCustomsInvoiceLanguageCountryCode(): ?string
    {
        return $this->DHLCustomsInvoiceLanguageCountryCode;
    }
    /**
     * Set DHLCustomsInvoiceLanguageCountryCode value
     * @param string $dHLCustomsInvoiceLanguageCountryCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setDHLCustomsInvoiceLanguageCountryCode(?string $dHLCustomsInvoiceLanguageCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($dHLCustomsInvoiceLanguageCountryCode) && !is_string($dHLCustomsInvoiceLanguageCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHLCustomsInvoiceLanguageCountryCode, true), gettype($dHLCustomsInvoiceLanguageCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($dHLCustomsInvoiceLanguageCountryCode) && mb_strlen((string) $dHLCustomsInvoiceLanguageCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $dHLCustomsInvoiceLanguageCountryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($dHLCustomsInvoiceLanguageCountryCode) && mb_strlen((string) $dHLCustomsInvoiceLanguageCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $dHLCustomsInvoiceLanguageCountryCode)), __LINE__);
        }
        $this->DHLCustomsInvoiceLanguageCountryCode = $dHLCustomsInvoiceLanguageCountryCode;
        
        return $this;
    }
    /**
     * Get DHLCustomsInvoiceType value
     * @return string|null
     */
    public function getDHLCustomsInvoiceType(): ?string
    {
        return $this->DHLCustomsInvoiceType;
    }
    /**
     * Set DHLCustomsInvoiceType value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DHLCustomsInvoiceType::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DHLCustomsInvoiceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dHLCustomsInvoiceType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setDHLCustomsInvoiceType(?string $dHLCustomsInvoiceType = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DHLCustomsInvoiceType::valueIsValid($dHLCustomsInvoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DHLCustomsInvoiceType', is_array($dHLCustomsInvoiceType) ? implode(', ', $dHLCustomsInvoiceType) : var_export($dHLCustomsInvoiceType, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DHLCustomsInvoiceType::getValidValues())), __LINE__);
        }
        $this->DHLCustomsInvoiceType = $dHLCustomsInvoiceType;
        
        return $this;
    }
    /**
     * Get RequestShipmentReceipt value
     * @return string|null
     */
    public function getRequestShipmentReceipt(): ?string
    {
        return $this->RequestShipmentReceipt;
    }
    /**
     * Set RequestShipmentReceipt value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestShipmentReceipt::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestShipmentReceipt::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestShipmentReceipt
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestShipmentReceipt(?string $requestShipmentReceipt = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestShipmentReceipt::valueIsValid($requestShipmentReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestShipmentReceipt', is_array($requestShipmentReceipt) ? implode(', ', $requestShipmentReceipt) : var_export($requestShipmentReceipt, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestShipmentReceipt::getValidValues())), __LINE__);
        }
        $this->RequestShipmentReceipt = $requestShipmentReceipt;
        
        return $this;
    }
    /**
     * Get DetachOptions value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions|null
     */
    public function getDetachOptions(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
    {
        return $this->DetachOptions;
    }
    /**
     * Set DetachOptions value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions $detachOptions
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setDetachOptions(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions $detachOptions = null): self
    {
        $this->DetachOptions = $detachOptions;
        
        return $this;
    }
    /**
     * Get RequestBarcodeInfo value
     * @return string|null
     */
    public function getRequestBarcodeInfo(): ?string
    {
        return $this->RequestBarcodeInfo;
    }
    /**
     * Set RequestBarcodeInfo value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestBarcodeInfo::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestBarcodeInfo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestBarcodeInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestBarcodeInfo(?string $requestBarcodeInfo = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestBarcodeInfo::valueIsValid($requestBarcodeInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestBarcodeInfo', is_array($requestBarcodeInfo) ? implode(', ', $requestBarcodeInfo) : var_export($requestBarcodeInfo, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestBarcodeInfo::getValidValues())), __LINE__);
        }
        $this->RequestBarcodeInfo = $requestBarcodeInfo;
        
        return $this;
    }
    /**
     * Get RequestLabelsToFitA4 value
     * @return string|null
     */
    public function getRequestLabelsToFitA4(): ?string
    {
        return $this->RequestLabelsToFitA4;
    }
    /**
     * Set RequestLabelsToFitA4 value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestLabelsToFitA4::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestLabelsToFitA4::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestLabelsToFitA4
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestLabelsToFitA4(?string $requestLabelsToFitA4 = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestLabelsToFitA4::valueIsValid($requestLabelsToFitA4)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestLabelsToFitA4', is_array($requestLabelsToFitA4) ? implode(', ', $requestLabelsToFitA4) : var_export($requestLabelsToFitA4, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestLabelsToFitA4::getValidValues())), __LINE__);
        }
        $this->RequestLabelsToFitA4 = $requestLabelsToFitA4;
        
        return $this;
    }
    /**
     * Get RequestDHLLogoOnLabel value
     * @return string|null
     */
    public function getRequestDHLLogoOnLabel(): ?string
    {
        return $this->RequestDHLLogoOnLabel;
    }
    /**
     * Set RequestDHLLogoOnLabel value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLLogoOnLabel::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLLogoOnLabel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestDHLLogoOnLabel
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestDHLLogoOnLabel(?string $requestDHLLogoOnLabel = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLLogoOnLabel::valueIsValid($requestDHLLogoOnLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLLogoOnLabel', is_array($requestDHLLogoOnLabel) ? implode(', ', $requestDHLLogoOnLabel) : var_export($requestDHLLogoOnLabel, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestDHLLogoOnLabel::getValidValues())), __LINE__);
        }
        $this->RequestDHLLogoOnLabel = $requestDHLLogoOnLabel;
        
        return $this;
    }
    /**
     * Get RequestTransportLabel value
     * @return string|null
     */
    public function getRequestTransportLabel(): ?string
    {
        return $this->RequestTransportLabel;
    }
    /**
     * Set RequestTransportLabel value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransportLabel::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransportLabel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestTransportLabel
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestTransportLabel(?string $requestTransportLabel = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransportLabel::valueIsValid($requestTransportLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransportLabel', is_array($requestTransportLabel) ? implode(', ', $requestTransportLabel) : var_export($requestTransportLabel, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransportLabel::getValidValues())), __LINE__);
        }
        $this->RequestTransportLabel = $requestTransportLabel;
        
        return $this;
    }
    /**
     * Get RequestQRCode value
     * @return string|null
     */
    public function getRequestQRCode(): ?string
    {
        return $this->RequestQRCode;
    }
    /**
     * Set RequestQRCode value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestQRCode::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestQRCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestQRCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
     */
    public function setRequestQRCode(?string $requestQRCode = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestQRCode::valueIsValid($requestQRCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestQRCode', is_array($requestQRCode) ? implode(', ', $requestQRCode) : var_export($requestQRCode, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestQRCode::getValidValues())), __LINE__);
        }
        $this->RequestQRCode = $requestQRCode;
        
        return $this;
    }
}
