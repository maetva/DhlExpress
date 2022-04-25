<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipmentInfoType StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipmentInfoType extends AbstractStructBase
{
    /**
     * The DropOffType
     * @var string|null
     */
    protected ?string $DropOffType = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The shipping product requested for this shipment, corresponding to the DHL Global Product codes. | Optional DHL service - global code
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The LocalServiceType
     * Meta information extracted from the WSDL
     * - documentation: DHL “local / country specific” Product Code used to ship the items. Important when shipping domestic products – please consult your DHL Express IT consultant if needed. | Local Product Code | Optional DHL local product code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalServiceType = null;
    /**
     * The Account
     * Meta information extracted from the WSDL
     * - documentation: The customer account to be used as payer in the request. If the 'Account' tag is used then there is no need to populate the Billing section further down below in this table as the 'Account' tag will override any other accounts
     * entered.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Account = null;
    /**
     * The Billing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing $Billing = null;
    /**
     * The SpecialServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services $SpecialServices = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: The currency of the monetary values presented in the request.
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The UnitOfMeasurement
     * Meta information extracted from the WSDL
     * - documentation: SI=the preferred system of weights and measures for Italian trade and commerce; SU=the preferred system of weights and measures for U.S. trade and commerce; Weight unit: if Type is SI it can be KG (kilograms), if Type is SU it can be
     * LB (pounds). Dimention unit: if Type is SI it can be CM, if Type is SU it can be IN (inch)
     * @var string|null
     */
    protected ?string $UnitOfMeasurement = null;
    /**
     * The ShipmentIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: The shipment identification number does not need to be transmitted in the request as the operation will assign a new number and return it in the response. Only used when UseOwnShipmentdentificationNumber set to Y and this feature
     * enabled within customer profile.
     * - base: xsd:token
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipmentIdentificationNumber = null;
    /**
     * The UseOwnShipmentIdentificationNumber
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UseOwnShipmentIdentificationNumber = null;
    /**
     * The LabelType
     * Meta information extracted from the WSDL
     * - documentation: The label type used in the operation. Valid enumeration; PDF ZPL EPL LP2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LabelType = null;
    /**
     * The LabelTemplate
     * Meta information extracted from the WSDL
     * - documentation: Any valid DHL Express label template (please contact your DHL Express IT representative for a list of labels) – If this node is left blank then the default DHL ecommerce label template will be used. Possible values;
     * ECOM26_84_A4_001 (default) ECOM26_84_001 ECOM_TC_A4 ECOM26_A6_002 ECOM26_84CI_001 ECOM_A4_RU_002 ECOM26_84CI_002 ECOM26_84CI_003 ECOM26_84_LBBX_001
     * - base: xsd:token
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LabelTemplate = null;
    /**
     * The ArchiveLabelTemplate
     * Meta information extracted from the WSDL
     * - documentation: Any valid DHL Express archive label template (please contact your DHL Express IT representative for a list of labels) – If this node is left blank then the default DHL ecommerce label template will be used. Possible values;
     * ARCH_8X4_A4_002 ARCH_8X4 ARCH_6X4 ARCH_A4_RU_002
     * - base: xsd:token
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ArchiveLabelTemplate = null;
    /**
     * The QRCodeTemplate
     * Meta information extracted from the WSDL
     * - documentation: QRCodeTemplate - possible value : QR_1_00_LL_PNG_001 | QRCodeTemplate
     * - base: xsd:token
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $QRCodeTemplate = null;
    /**
     * The QRCodeImageFormat
     * Meta information extracted from the WSDL
     * - documentation: The QRCodeImageFormat node conveys the QRCode image type used in the operation. It is an optional field. If this tag is not included, then the default of PNG image format will be used. | QR Code Image Format
     * - base: xsd:token
     * - maxLength: 4
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $QRCodeImageFormat = null;
    /**
     * The CustomsInvoiceTemplate
     * Meta information extracted from the WSDL
     * - documentation: Custom invoice template name. Possible values: - COMMERCIAL_INVOICE_04 (only to be used for preparing Loose BBX shipment) - COMMERCIAL_INVOICE_P_10 - COMMERCIAL_INVOICE_L_10
     * - base: xsd:token
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomsInvoiceTemplate = null;
    /**
     * The ShipmentReceiptTemplate
     * Meta information extracted from the WSDL
     * - documentation: Shipment receipt template name. Possible value; SHIP_RECPT_A4_RU_002
     * - base: xsd:token
     * - maxLength: 25
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentReceiptTemplate = null;
    /**
     * The PaperlessTradeEnabled
     * Meta information extracted from the WSDL
     * - documentation: Possible values (case sensitive): - true - false - 0 - 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PaperlessTradeEnabled = null;
    /**
     * The PaperlessTradeImage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaperlessTradeImage = null;
    /**
     * The DocumentImages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages $DocumentImages = null;
    /**
     * The LabelOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions $LabelOptions = null;
    /**
     * The ShipmentReferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences $ShipmentReferences = null;
    /**
     * The ParentShipmentIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: Parent (Mother) Shipment ID number used for Break Bulk Shipments (BBX)
     * - base: xsd:token
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ParentShipmentIdentificationNumber = null;
    /**
     * The RequestTransliterateResponse
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestTransliterateResponse = null;
    /**
     * The RequestAdditionalInformation
     * Meta information extracted from the WSDL
     * - documentation: This field is to have additional information in the shipment response. The default value is N, the response message will return as per request message. No additional field is included
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestAdditionalInformation = null;
    /**
     * The RequestEstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - documentation: This field is to request to return Estimated Delivery Date (EDD) details to be returned in Create Shipment response. The default value is N, where no additional fields related to Estimated Delivery Date is included in response.
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestEstimatedDeliveryDate = null;
    /**
     * The EstimatedDeliveryDateType
     * Meta information extracted from the WSDL
     * - documentation: This field is to allow customer to define the EDD type.
     * - default: QDDC
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryDateType = null;
    /**
     * The RequestPickupDetails
     * Meta information extracted from the WSDL
     * - documentation: Pickup related details such as ReadyByTime, CallInTime, Pickup Location Additional Day to be returned in the Create Shipment response
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestPickupDetails = null;
    /**
     * The ParentShipmentServiceType
     * Meta information extracted from the WSDL
     * - documentation: Loose BBX Parent's Shipment Global Product Code
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ParentShipmentServiceType = null;
    /**
     * The ParentShipmentPackagesCount
     * Meta information extracted from the WSDL
     * - documentation: Loose BBX Parent's Shipment Total of Packages Count
     * - base: xsd:positiveInteger
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ParentShipmentPackagesCount = null;
    /**
     * Constructor method for docTypeRef_ShipmentInfoType
     * @uses DocTypeRef_ShipmentInfoType::setDropOffType()
     * @uses DocTypeRef_ShipmentInfoType::setServiceType()
     * @uses DocTypeRef_ShipmentInfoType::setLocalServiceType()
     * @uses DocTypeRef_ShipmentInfoType::setAccount()
     * @uses DocTypeRef_ShipmentInfoType::setBilling()
     * @uses DocTypeRef_ShipmentInfoType::setSpecialServices()
     * @uses DocTypeRef_ShipmentInfoType::setCurrency()
     * @uses DocTypeRef_ShipmentInfoType::setUnitOfMeasurement()
     * @uses DocTypeRef_ShipmentInfoType::setShipmentIdentificationNumber()
     * @uses DocTypeRef_ShipmentInfoType::setUseOwnShipmentIdentificationNumber()
     * @uses DocTypeRef_ShipmentInfoType::setLabelType()
     * @uses DocTypeRef_ShipmentInfoType::setLabelTemplate()
     * @uses DocTypeRef_ShipmentInfoType::setArchiveLabelTemplate()
     * @uses DocTypeRef_ShipmentInfoType::setQRCodeTemplate()
     * @uses DocTypeRef_ShipmentInfoType::setQRCodeImageFormat()
     * @uses DocTypeRef_ShipmentInfoType::setCustomsInvoiceTemplate()
     * @uses DocTypeRef_ShipmentInfoType::setShipmentReceiptTemplate()
     * @uses DocTypeRef_ShipmentInfoType::setPaperlessTradeEnabled()
     * @uses DocTypeRef_ShipmentInfoType::setPaperlessTradeImage()
     * @uses DocTypeRef_ShipmentInfoType::setDocumentImages()
     * @uses DocTypeRef_ShipmentInfoType::setLabelOptions()
     * @uses DocTypeRef_ShipmentInfoType::setShipmentReferences()
     * @uses DocTypeRef_ShipmentInfoType::setParentShipmentIdentificationNumber()
     * @uses DocTypeRef_ShipmentInfoType::setRequestTransliterateResponse()
     * @uses DocTypeRef_ShipmentInfoType::setRequestAdditionalInformation()
     * @uses DocTypeRef_ShipmentInfoType::setRequestEstimatedDeliveryDate()
     * @uses DocTypeRef_ShipmentInfoType::setEstimatedDeliveryDateType()
     * @uses DocTypeRef_ShipmentInfoType::setRequestPickupDetails()
     * @uses DocTypeRef_ShipmentInfoType::setParentShipmentServiceType()
     * @uses DocTypeRef_ShipmentInfoType::setParentShipmentPackagesCount()
     * @param string $dropOffType
     * @param string $serviceType
     * @param string $localServiceType
     * @param string $account
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing $billing
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services $specialServices
     * @param string $currency
     * @param string $unitOfMeasurement
     * @param string $shipmentIdentificationNumber
     * @param string $useOwnShipmentIdentificationNumber
     * @param string $labelType
     * @param string $labelTemplate
     * @param string $archiveLabelTemplate
     * @param string $qRCodeTemplate
     * @param string $qRCodeImageFormat
     * @param string $customsInvoiceTemplate
     * @param string $shipmentReceiptTemplate
     * @param bool $paperlessTradeEnabled
     * @param string $paperlessTradeImage
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages $documentImages
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions $labelOptions
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences $shipmentReferences
     * @param string $parentShipmentIdentificationNumber
     * @param string $requestTransliterateResponse
     * @param string $requestAdditionalInformation
     * @param string $requestEstimatedDeliveryDate
     * @param string $estimatedDeliveryDateType
     * @param string $requestPickupDetails
     * @param string $parentShipmentServiceType
     * @param int $parentShipmentPackagesCount
     */
    public function __construct(?string $dropOffType = null, ?string $serviceType = null, ?string $localServiceType = null, ?string $account = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing $billing = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services $specialServices = null, ?string $currency = null, ?string $unitOfMeasurement = null, ?string $shipmentIdentificationNumber = null, ?string $useOwnShipmentIdentificationNumber = null, ?string $labelType = null, ?string $labelTemplate = null, ?string $archiveLabelTemplate = null, ?string $qRCodeTemplate = null, ?string $qRCodeImageFormat = null, ?string $customsInvoiceTemplate = null, ?string $shipmentReceiptTemplate = null, ?bool $paperlessTradeEnabled = null, ?string $paperlessTradeImage = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages $documentImages = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions $labelOptions = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences $shipmentReferences = null, ?string $parentShipmentIdentificationNumber = null, ?string $requestTransliterateResponse = null, ?string $requestAdditionalInformation = null, ?string $requestEstimatedDeliveryDate = null, ?string $estimatedDeliveryDateType = null, ?string $requestPickupDetails = null, ?string $parentShipmentServiceType = null, ?int $parentShipmentPackagesCount = null)
    {
        $this
            ->setDropOffType($dropOffType)
            ->setServiceType($serviceType)
            ->setLocalServiceType($localServiceType)
            ->setAccount($account)
            ->setBilling($billing)
            ->setSpecialServices($specialServices)
            ->setCurrency($currency)
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setShipmentIdentificationNumber($shipmentIdentificationNumber)
            ->setUseOwnShipmentIdentificationNumber($useOwnShipmentIdentificationNumber)
            ->setLabelType($labelType)
            ->setLabelTemplate($labelTemplate)
            ->setArchiveLabelTemplate($archiveLabelTemplate)
            ->setQRCodeTemplate($qRCodeTemplate)
            ->setQRCodeImageFormat($qRCodeImageFormat)
            ->setCustomsInvoiceTemplate($customsInvoiceTemplate)
            ->setShipmentReceiptTemplate($shipmentReceiptTemplate)
            ->setPaperlessTradeEnabled($paperlessTradeEnabled)
            ->setPaperlessTradeImage($paperlessTradeImage)
            ->setDocumentImages($documentImages)
            ->setLabelOptions($labelOptions)
            ->setShipmentReferences($shipmentReferences)
            ->setParentShipmentIdentificationNumber($parentShipmentIdentificationNumber)
            ->setRequestTransliterateResponse($requestTransliterateResponse)
            ->setRequestAdditionalInformation($requestAdditionalInformation)
            ->setRequestEstimatedDeliveryDate($requestEstimatedDeliveryDate)
            ->setEstimatedDeliveryDateType($estimatedDeliveryDateType)
            ->setRequestPickupDetails($requestPickupDetails)
            ->setParentShipmentServiceType($parentShipmentServiceType)
            ->setParentShipmentPackagesCount($parentShipmentPackagesCount);
    }
    /**
     * Get DropOffType value
     * @return string|null
     */
    public function getDropOffType(): ?string
    {
        return $this->DropOffType;
    }
    /**
     * Set DropOffType value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DropOffType::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DropOffType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dropOffType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setDropOffType(?string $dropOffType = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DropOffType::valueIsValid($dropOffType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DropOffType', is_array($dropOffType) ? implode(', ', $dropOffType) : var_export($dropOffType, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\DropOffType::getValidValues())), __LINE__);
        }
        $this->DropOffType = $dropOffType;
        
        return $this;
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get LocalServiceType value
     * @return string|null
     */
    public function getLocalServiceType(): ?string
    {
        return $this->LocalServiceType;
    }
    /**
     * Set LocalServiceType value
     * @param string $localServiceType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setLocalServiceType(?string $localServiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($localServiceType) && !is_string($localServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localServiceType, true), gettype($localServiceType)), __LINE__);
        }
        $this->LocalServiceType = $localServiceType;
        
        return $this;
    }
    /**
     * Get Account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param string $account
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($account) && mb_strlen((string) $account) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $account)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($account) && mb_strlen((string) $account) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $account)), __LINE__);
        }
        $this->Account = $account;
        
        return $this;
    }
    /**
     * Get Billing value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing|null
     */
    public function getBilling(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing
    {
        return $this->Billing;
    }
    /**
     * Set Billing value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing $billing
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setBilling(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Billing $billing = null): self
    {
        $this->Billing = $billing;
        
        return $this;
    }
    /**
     * Get SpecialServices value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services|null
     */
    public function getSpecialServices(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services
    {
        return $this->SpecialServices;
    }
    /**
     * Set SpecialServices value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services $specialServices
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setSpecialServices(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Services $specialServices = null): self
    {
        $this->SpecialServices = $specialServices;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($currency) && mb_strlen((string) $currency) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $currency)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($currency) && mb_strlen((string) $currency) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get UnitOfMeasurement value
     * @return string|null
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->UnitOfMeasurement;
    }
    /**
     * Set UnitOfMeasurement value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UnitOfMeasurement::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UnitOfMeasurement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $unitOfMeasurement
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UnitOfMeasurement::valueIsValid($unitOfMeasurement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UnitOfMeasurement', is_array($unitOfMeasurement) ? implode(', ', $unitOfMeasurement) : var_export($unitOfMeasurement, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UnitOfMeasurement::getValidValues())), __LINE__);
        }
        $this->UnitOfMeasurement = $unitOfMeasurement;
        
        return $this;
    }
    /**
     * Get ShipmentIdentificationNumber value
     * @return string|null
     */
    public function getShipmentIdentificationNumber(): ?string
    {
        return $this->ShipmentIdentificationNumber;
    }
    /**
     * Set ShipmentIdentificationNumber value
     * @param string $shipmentIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setShipmentIdentificationNumber(?string $shipmentIdentificationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentIdentificationNumber) && !is_string($shipmentIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentIdentificationNumber, true), gettype($shipmentIdentificationNumber)), __LINE__);
        }
        $this->ShipmentIdentificationNumber = $shipmentIdentificationNumber;
        
        return $this;
    }
    /**
     * Get UseOwnShipmentIdentificationNumber value
     * @return string|null
     */
    public function getUseOwnShipmentIdentificationNumber(): ?string
    {
        return $this->UseOwnShipmentIdentificationNumber;
    }
    /**
     * Set UseOwnShipmentIdentificationNumber value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnShipmentIdentificationNumber::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnShipmentIdentificationNumber::getValidValues()
     * @throws InvalidArgumentException
     * @param string $useOwnShipmentIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setUseOwnShipmentIdentificationNumber(?string $useOwnShipmentIdentificationNumber = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnShipmentIdentificationNumber::valueIsValid($useOwnShipmentIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnShipmentIdentificationNumber', is_array($useOwnShipmentIdentificationNumber) ? implode(', ', $useOwnShipmentIdentificationNumber) : var_export($useOwnShipmentIdentificationNumber, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnShipmentIdentificationNumber::getValidValues())), __LINE__);
        }
        $this->UseOwnShipmentIdentificationNumber = $useOwnShipmentIdentificationNumber;
        
        return $this;
    }
    /**
     * Get LabelType value
     * @return string|null
     */
    public function getLabelType(): ?string
    {
        return $this->LabelType;
    }
    /**
     * Set LabelType value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\LabelType::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\LabelType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $labelType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setLabelType(?string $labelType = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\LabelType::valueIsValid($labelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\LabelType', is_array($labelType) ? implode(', ', $labelType) : var_export($labelType, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\LabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;
        
        return $this;
    }
    /**
     * Get LabelTemplate value
     * @return string|null
     */
    public function getLabelTemplate(): ?string
    {
        return $this->LabelTemplate;
    }
    /**
     * Set LabelTemplate value
     * @param string $labelTemplate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setLabelTemplate(?string $labelTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($labelTemplate) && !is_string($labelTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelTemplate, true), gettype($labelTemplate)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($labelTemplate) && mb_strlen((string) $labelTemplate) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $labelTemplate)), __LINE__);
        }
        $this->LabelTemplate = $labelTemplate;
        
        return $this;
    }
    /**
     * Get ArchiveLabelTemplate value
     * @return string|null
     */
    public function getArchiveLabelTemplate(): ?string
    {
        return $this->ArchiveLabelTemplate;
    }
    /**
     * Set ArchiveLabelTemplate value
     * @param string $archiveLabelTemplate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setArchiveLabelTemplate(?string $archiveLabelTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($archiveLabelTemplate) && !is_string($archiveLabelTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($archiveLabelTemplate, true), gettype($archiveLabelTemplate)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($archiveLabelTemplate) && mb_strlen((string) $archiveLabelTemplate) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $archiveLabelTemplate)), __LINE__);
        }
        $this->ArchiveLabelTemplate = $archiveLabelTemplate;
        
        return $this;
    }
    /**
     * Get QRCodeTemplate value
     * @return string|null
     */
    public function getQRCodeTemplate(): ?string
    {
        return $this->QRCodeTemplate;
    }
    /**
     * Set QRCodeTemplate value
     * @param string $qRCodeTemplate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setQRCodeTemplate(?string $qRCodeTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($qRCodeTemplate) && !is_string($qRCodeTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qRCodeTemplate, true), gettype($qRCodeTemplate)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($qRCodeTemplate) && mb_strlen((string) $qRCodeTemplate) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $qRCodeTemplate)), __LINE__);
        }
        $this->QRCodeTemplate = $qRCodeTemplate;
        
        return $this;
    }
    /**
     * Get QRCodeImageFormat value
     * @return string|null
     */
    public function getQRCodeImageFormat(): ?string
    {
        return $this->QRCodeImageFormat;
    }
    /**
     * Set QRCodeImageFormat value
     * @param string $qRCodeImageFormat
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setQRCodeImageFormat(?string $qRCodeImageFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($qRCodeImageFormat) && !is_string($qRCodeImageFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qRCodeImageFormat, true), gettype($qRCodeImageFormat)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($qRCodeImageFormat) && mb_strlen((string) $qRCodeImageFormat) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $qRCodeImageFormat)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($qRCodeImageFormat) && mb_strlen((string) $qRCodeImageFormat) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $qRCodeImageFormat)), __LINE__);
        }
        $this->QRCodeImageFormat = $qRCodeImageFormat;
        
        return $this;
    }
    /**
     * Get CustomsInvoiceTemplate value
     * @return string|null
     */
    public function getCustomsInvoiceTemplate(): ?string
    {
        return $this->CustomsInvoiceTemplate;
    }
    /**
     * Set CustomsInvoiceTemplate value
     * @param string $customsInvoiceTemplate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setCustomsInvoiceTemplate(?string $customsInvoiceTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($customsInvoiceTemplate) && !is_string($customsInvoiceTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsInvoiceTemplate, true), gettype($customsInvoiceTemplate)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($customsInvoiceTemplate) && mb_strlen((string) $customsInvoiceTemplate) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $customsInvoiceTemplate)), __LINE__);
        }
        $this->CustomsInvoiceTemplate = $customsInvoiceTemplate;
        
        return $this;
    }
    /**
     * Get ShipmentReceiptTemplate value
     * @return string|null
     */
    public function getShipmentReceiptTemplate(): ?string
    {
        return $this->ShipmentReceiptTemplate;
    }
    /**
     * Set ShipmentReceiptTemplate value
     * @param string $shipmentReceiptTemplate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setShipmentReceiptTemplate(?string $shipmentReceiptTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentReceiptTemplate) && !is_string($shipmentReceiptTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentReceiptTemplate, true), gettype($shipmentReceiptTemplate)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($shipmentReceiptTemplate) && mb_strlen((string) $shipmentReceiptTemplate) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $shipmentReceiptTemplate)), __LINE__);
        }
        $this->ShipmentReceiptTemplate = $shipmentReceiptTemplate;
        
        return $this;
    }
    /**
     * Get PaperlessTradeEnabled value
     * @return bool|null
     */
    public function getPaperlessTradeEnabled(): ?bool
    {
        return $this->PaperlessTradeEnabled;
    }
    /**
     * Set PaperlessTradeEnabled value
     * @param bool $paperlessTradeEnabled
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setPaperlessTradeEnabled(?bool $paperlessTradeEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paperlessTradeEnabled) && !is_bool($paperlessTradeEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paperlessTradeEnabled, true), gettype($paperlessTradeEnabled)), __LINE__);
        }
        $this->PaperlessTradeEnabled = $paperlessTradeEnabled;
        
        return $this;
    }
    /**
     * Get PaperlessTradeImage value
     * @return string|null
     */
    public function getPaperlessTradeImage(): ?string
    {
        return $this->PaperlessTradeImage;
    }
    /**
     * Set PaperlessTradeImage value
     * @param string $paperlessTradeImage
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setPaperlessTradeImage(?string $paperlessTradeImage = null): self
    {
        // validation for constraint: string
        if (!is_null($paperlessTradeImage) && !is_string($paperlessTradeImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paperlessTradeImage, true), gettype($paperlessTradeImage)), __LINE__);
        }
        $this->PaperlessTradeImage = $paperlessTradeImage;
        
        return $this;
    }
    /**
     * Get DocumentImages value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages|null
     */
    public function getDocumentImages(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages
    {
        return $this->DocumentImages;
    }
    /**
     * Set DocumentImages value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages $documentImages
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setDocumentImages(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages $documentImages = null): self
    {
        $this->DocumentImages = $documentImages;
        
        return $this;
    }
    /**
     * Get LabelOptions value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions|null
     */
    public function getLabelOptions(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions
    {
        return $this->LabelOptions;
    }
    /**
     * Set LabelOptions value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions $labelOptions
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setLabelOptions(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelOptions $labelOptions = null): self
    {
        $this->LabelOptions = $labelOptions;
        
        return $this;
    }
    /**
     * Get ShipmentReferences value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences|null
     */
    public function getShipmentReferences(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences
    {
        return $this->ShipmentReferences;
    }
    /**
     * Set ShipmentReferences value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences $shipmentReferences
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setShipmentReferences(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ShipmentReferences $shipmentReferences = null): self
    {
        $this->ShipmentReferences = $shipmentReferences;
        
        return $this;
    }
    /**
     * Get ParentShipmentIdentificationNumber value
     * @return string|null
     */
    public function getParentShipmentIdentificationNumber(): ?string
    {
        return $this->ParentShipmentIdentificationNumber;
    }
    /**
     * Set ParentShipmentIdentificationNumber value
     * @param string $parentShipmentIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setParentShipmentIdentificationNumber(?string $parentShipmentIdentificationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parentShipmentIdentificationNumber) && !is_string($parentShipmentIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentShipmentIdentificationNumber, true), gettype($parentShipmentIdentificationNumber)), __LINE__);
        }
        $this->ParentShipmentIdentificationNumber = $parentShipmentIdentificationNumber;
        
        return $this;
    }
    /**
     * Get RequestTransliterateResponse value
     * @return string|null
     */
    public function getRequestTransliterateResponse(): ?string
    {
        return $this->RequestTransliterateResponse;
    }
    /**
     * Set RequestTransliterateResponse value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransliterateResponse::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransliterateResponse::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestTransliterateResponse
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setRequestTransliterateResponse(?string $requestTransliterateResponse = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransliterateResponse::valueIsValid($requestTransliterateResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransliterateResponse', is_array($requestTransliterateResponse) ? implode(', ', $requestTransliterateResponse) : var_export($requestTransliterateResponse, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestTransliterateResponse::getValidValues())), __LINE__);
        }
        $this->RequestTransliterateResponse = $requestTransliterateResponse;
        
        return $this;
    }
    /**
     * Get RequestAdditionalInformation value
     * @return string|null
     */
    public function getRequestAdditionalInformation(): ?string
    {
        return $this->RequestAdditionalInformation;
    }
    /**
     * Set RequestAdditionalInformation value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestAdditionalInformation::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestAdditionalInformation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestAdditionalInformation
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setRequestAdditionalInformation(?string $requestAdditionalInformation = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestAdditionalInformation::valueIsValid($requestAdditionalInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestAdditionalInformation', is_array($requestAdditionalInformation) ? implode(', ', $requestAdditionalInformation) : var_export($requestAdditionalInformation, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestAdditionalInformation::getValidValues())), __LINE__);
        }
        $this->RequestAdditionalInformation = $requestAdditionalInformation;
        
        return $this;
    }
    /**
     * Get RequestEstimatedDeliveryDate value
     * @return string|null
     */
    public function getRequestEstimatedDeliveryDate(): ?string
    {
        return $this->RequestEstimatedDeliveryDate;
    }
    /**
     * Set RequestEstimatedDeliveryDate value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestEstimatedDeliveryDate::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestEstimatedDeliveryDate::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestEstimatedDeliveryDate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setRequestEstimatedDeliveryDate(?string $requestEstimatedDeliveryDate = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestEstimatedDeliveryDate::valueIsValid($requestEstimatedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestEstimatedDeliveryDate', is_array($requestEstimatedDeliveryDate) ? implode(', ', $requestEstimatedDeliveryDate) : var_export($requestEstimatedDeliveryDate, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestEstimatedDeliveryDate::getValidValues())), __LINE__);
        }
        $this->RequestEstimatedDeliveryDate = $requestEstimatedDeliveryDate;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryDateType value
     * @return string|null
     */
    public function getEstimatedDeliveryDateType(): ?string
    {
        return $this->EstimatedDeliveryDateType;
    }
    /**
     * Set EstimatedDeliveryDateType value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryDateType::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryDateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $estimatedDeliveryDateType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setEstimatedDeliveryDateType(?string $estimatedDeliveryDateType = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryDateType::valueIsValid($estimatedDeliveryDateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryDateType', is_array($estimatedDeliveryDateType) ? implode(', ', $estimatedDeliveryDateType) : var_export($estimatedDeliveryDateType, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryDateType::getValidValues())), __LINE__);
        }
        $this->EstimatedDeliveryDateType = $estimatedDeliveryDateType;
        
        return $this;
    }
    /**
     * Get RequestPickupDetails value
     * @return string|null
     */
    public function getRequestPickupDetails(): ?string
    {
        return $this->RequestPickupDetails;
    }
    /**
     * Set RequestPickupDetails value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestPickupDetails::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestPickupDetails::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestPickupDetails
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setRequestPickupDetails(?string $requestPickupDetails = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestPickupDetails::valueIsValid($requestPickupDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestPickupDetails', is_array($requestPickupDetails) ? implode(', ', $requestPickupDetails) : var_export($requestPickupDetails, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\RequestPickupDetails::getValidValues())), __LINE__);
        }
        $this->RequestPickupDetails = $requestPickupDetails;
        
        return $this;
    }
    /**
     * Get ParentShipmentServiceType value
     * @return string|null
     */
    public function getParentShipmentServiceType(): ?string
    {
        return $this->ParentShipmentServiceType;
    }
    /**
     * Set ParentShipmentServiceType value
     * @param string $parentShipmentServiceType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setParentShipmentServiceType(?string $parentShipmentServiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($parentShipmentServiceType) && !is_string($parentShipmentServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentShipmentServiceType, true), gettype($parentShipmentServiceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($parentShipmentServiceType) && mb_strlen((string) $parentShipmentServiceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $parentShipmentServiceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($parentShipmentServiceType) && mb_strlen((string) $parentShipmentServiceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $parentShipmentServiceType)), __LINE__);
        }
        $this->ParentShipmentServiceType = $parentShipmentServiceType;
        
        return $this;
    }
    /**
     * Get ParentShipmentPackagesCount value
     * @return int|null
     */
    public function getParentShipmentPackagesCount(): ?int
    {
        return $this->ParentShipmentPackagesCount;
    }
    /**
     * Set ParentShipmentPackagesCount value
     * @param int $parentShipmentPackagesCount
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
     */
    public function setParentShipmentPackagesCount(?int $parentShipmentPackagesCount = null): self
    {
        // validation for constraint: int
        if (!is_null($parentShipmentPackagesCount) && !(is_int($parentShipmentPackagesCount) || ctype_digit($parentShipmentPackagesCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentShipmentPackagesCount, true), gettype($parentShipmentPackagesCount)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($parentShipmentPackagesCount) && $parentShipmentPackagesCount < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($parentShipmentPackagesCount, true)), __LINE__);
        }
        $this->ParentShipmentPackagesCount = $parentShipmentPackagesCount;
        
        return $this;
    }
}
