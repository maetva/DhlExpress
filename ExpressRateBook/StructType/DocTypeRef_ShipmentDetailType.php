<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipmentDetailType StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipmentDetailType extends AbstractStructBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response $Response = null;
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2[]
     */
    protected ?array $Notification = null;
    /**
     * The Warning
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[]
     */
    protected ?array $Warning = null;
    /**
     * The PackagesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType $PackagesResult = null;
    /**
     * The LabelImage
     * Meta information extracted from the WSDL
     * - maxOccurs: 2000
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType[]
     */
    protected ?array $LabelImage = null;
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents $Documents = null;
    /**
     * The ShipmentIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: The shipment identification number also named airwaybill (AWB). This number can be used to track the progress of the shipment on the DHL webside.
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 10
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipmentIdentificationNumber = null;
    /**
     * The DispatchConfirmationNumber
     * Meta information extracted from the WSDL
     * - documentation: The booking reference number. This number should be used when interacting with the DHL customer service regarding the pickup process.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DispatchConfirmationNumber = null;
    /**
     * The OnDemandDeliveryURL
     * Meta information extracted from the WSDL
     * - documentation: The On Demand Delivery (ODD) URL link
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OnDemandDeliveryURL = null;
    /**
     * The TotalNet
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet[]
     */
    protected ?array $TotalNet = null;
    /**
     * The AdditionalInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $AdditionalInformation = null;
    /**
     * The BarcodeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo $BarcodeInfo = null;
    /**
     * The EstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate $EstimatedDeliveryDate = null;
    /**
     * The PickupDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails $PickupDetails = null;
    /**
     * Constructor method for docTypeRef_ShipmentDetailType
     * @uses DocTypeRef_ShipmentDetailType::setResponse()
     * @uses DocTypeRef_ShipmentDetailType::setNotification()
     * @uses DocTypeRef_ShipmentDetailType::setWarning()
     * @uses DocTypeRef_ShipmentDetailType::setPackagesResult()
     * @uses DocTypeRef_ShipmentDetailType::setLabelImage()
     * @uses DocTypeRef_ShipmentDetailType::setDocuments()
     * @uses DocTypeRef_ShipmentDetailType::setShipmentIdentificationNumber()
     * @uses DocTypeRef_ShipmentDetailType::setDispatchConfirmationNumber()
     * @uses DocTypeRef_ShipmentDetailType::setOnDemandDeliveryURL()
     * @uses DocTypeRef_ShipmentDetailType::setTotalNet()
     * @uses DocTypeRef_ShipmentDetailType::setAdditionalInformation()
     * @uses DocTypeRef_ShipmentDetailType::setBarcodeInfo()
     * @uses DocTypeRef_ShipmentDetailType::setEstimatedDeliveryDate()
     * @uses DocTypeRef_ShipmentDetailType::setPickupDetails()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response $response
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2[] $notification
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[] $warning
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType $packagesResult
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType[] $labelImage
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents $documents
     * @param string $shipmentIdentificationNumber
     * @param string $dispatchConfirmationNumber
     * @param string $onDemandDeliveryURL
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet[] $totalNet
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo $barcodeInfo
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate $estimatedDeliveryDate
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails $pickupDetails
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response $response = null, ?array $notification = null, ?array $warning = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType $packagesResult = null, ?array $labelImage = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents $documents = null, ?string $shipmentIdentificationNumber = null, ?string $dispatchConfirmationNumber = null, ?string $onDemandDeliveryURL = null, ?array $totalNet = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo $barcodeInfo = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate $estimatedDeliveryDate = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails $pickupDetails = null)
    {
        $this
            ->setResponse($response)
            ->setNotification($notification)
            ->setWarning($warning)
            ->setPackagesResult($packagesResult)
            ->setLabelImage($labelImage)
            ->setDocuments($documents)
            ->setShipmentIdentificationNumber($shipmentIdentificationNumber)
            ->setDispatchConfirmationNumber($dispatchConfirmationNumber)
            ->setOnDemandDeliveryURL($onDemandDeliveryURL)
            ->setTotalNet($totalNet)
            ->setAdditionalInformation($additionalInformation)
            ->setBarcodeInfo($barcodeInfo)
            ->setEstimatedDeliveryDate($estimatedDeliveryDate)
            ->setPickupDetails($pickupDetails);
    }
    /**
     * Get Response value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response|null
     */
    public function getResponse(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response $response
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setResponse(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Get Notification value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2[]
     */
    public function getNotification(): ?array
    {
        return $this->Notification;
    }
    /**
     * This method is responsible for validating the values passed to the setNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationForArrayConstraintsFromSetNotification(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ShipmentDetailTypeNotificationItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ShipmentDetailTypeNotificationItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2) {
                $invalidValues[] = is_object($docTypeRef_ShipmentDetailTypeNotificationItem) ? get_class($docTypeRef_ShipmentDetailTypeNotificationItem) : sprintf('%s(%s)', gettype($docTypeRef_ShipmentDetailTypeNotificationItem), var_export($docTypeRef_ShipmentDetailTypeNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Notification value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2[] $notification
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setNotification(?array $notification = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificationArrayErrorMessage = self::validateNotificationForArrayConstraintsFromSetNotification($notification))) {
            throw new InvalidArgumentException($notificationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($notification) && count($notification) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($notification)), __LINE__);
        }
        $this->Notification = $notification;
        
        return $this;
    }
    /**
     * Add item to Notification value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2 $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function addToNotification(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2) {
            throw new InvalidArgumentException(sprintf('The Notification property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Notification) && count($this->Notification) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Notification)), __LINE__);
        }
        $this->Notification[] = $item;
        
        return $this;
    }
    /**
     * Get Warning value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[]
     */
    public function getWarning(): ?array
    {
        return $this->Warning;
    }
    /**
     * This method is responsible for validating the values passed to the setWarning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarning method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarningForArrayConstraintsFromSetWarning(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ShipmentDetailTypeWarningItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ShipmentDetailTypeWarningItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType) {
                $invalidValues[] = is_object($docTypeRef_ShipmentDetailTypeWarningItem) ? get_class($docTypeRef_ShipmentDetailTypeWarningItem) : sprintf('%s(%s)', gettype($docTypeRef_ShipmentDetailTypeWarningItem), var_export($docTypeRef_ShipmentDetailTypeWarningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Warning property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Warning value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[] $warning
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setWarning(?array $warning = null): self
    {
        // validation for constraint: array
        if ('' !== ($warningArrayErrorMessage = self::validateWarningForArrayConstraintsFromSetWarning($warning))) {
            throw new InvalidArgumentException($warningArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($warning) && count($warning) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($warning)), __LINE__);
        }
        $this->Warning = $warning;
        
        return $this;
    }
    /**
     * Add item to Warning value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function addToWarning(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType) {
            throw new InvalidArgumentException(sprintf('The Warning property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Warning) && count($this->Warning) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Warning)), __LINE__);
        }
        $this->Warning[] = $item;
        
        return $this;
    }
    /**
     * Get PackagesResult value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType|null
     */
    public function getPackagesResult(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType
    {
        return $this->PackagesResult;
    }
    /**
     * Set PackagesResult value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType $packagesResult
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setPackagesResult(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType $packagesResult = null): self
    {
        $this->PackagesResult = $packagesResult;
        
        return $this;
    }
    /**
     * Get LabelImage value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType[]
     */
    public function getLabelImage(): ?array
    {
        return $this->LabelImage;
    }
    /**
     * This method is responsible for validating the values passed to the setLabelImage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabelImage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelImageForArrayConstraintsFromSetLabelImage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ShipmentDetailTypeLabelImageItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ShipmentDetailTypeLabelImageItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType) {
                $invalidValues[] = is_object($docTypeRef_ShipmentDetailTypeLabelImageItem) ? get_class($docTypeRef_ShipmentDetailTypeLabelImageItem) : sprintf('%s(%s)', gettype($docTypeRef_ShipmentDetailTypeLabelImageItem), var_export($docTypeRef_ShipmentDetailTypeLabelImageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LabelImage property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LabelImage value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType[] $labelImage
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setLabelImage(?array $labelImage = null): self
    {
        // validation for constraint: array
        if ('' !== ($labelImageArrayErrorMessage = self::validateLabelImageForArrayConstraintsFromSetLabelImage($labelImage))) {
            throw new InvalidArgumentException($labelImageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2000)
        if (is_array($labelImage) && count($labelImage) > 2000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2000', count($labelImage)), __LINE__);
        }
        $this->LabelImage = $labelImage;
        
        return $this;
    }
    /**
     * Add item to LabelImage value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function addToLabelImage(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType) {
            throw new InvalidArgumentException(sprintf('The LabelImage property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_LabelImageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2000)
        if (is_array($this->LabelImage) && count($this->LabelImage) >= 2000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2000', count($this->LabelImage)), __LINE__);
        }
        $this->LabelImage[] = $item;
        
        return $this;
    }
    /**
     * Get Documents value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents|null
     */
    public function getDocuments(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents $documents
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setDocuments(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents $documents = null): self
    {
        $this->Documents = $documents;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setShipmentIdentificationNumber(?string $shipmentIdentificationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentIdentificationNumber) && !is_string($shipmentIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentIdentificationNumber, true), gettype($shipmentIdentificationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($shipmentIdentificationNumber) && mb_strlen((string) $shipmentIdentificationNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $shipmentIdentificationNumber)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($shipmentIdentificationNumber) && mb_strlen((string) $shipmentIdentificationNumber) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $shipmentIdentificationNumber)), __LINE__);
        }
        $this->ShipmentIdentificationNumber = $shipmentIdentificationNumber;
        
        return $this;
    }
    /**
     * Get DispatchConfirmationNumber value
     * @return string|null
     */
    public function getDispatchConfirmationNumber(): ?string
    {
        return $this->DispatchConfirmationNumber;
    }
    /**
     * Set DispatchConfirmationNumber value
     * @param string $dispatchConfirmationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setDispatchConfirmationNumber(?string $dispatchConfirmationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchConfirmationNumber) && !is_string($dispatchConfirmationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchConfirmationNumber, true), gettype($dispatchConfirmationNumber)), __LINE__);
        }
        $this->DispatchConfirmationNumber = $dispatchConfirmationNumber;
        
        return $this;
    }
    /**
     * Get OnDemandDeliveryURL value
     * @return string|null
     */
    public function getOnDemandDeliveryURL(): ?string
    {
        return $this->OnDemandDeliveryURL;
    }
    /**
     * Set OnDemandDeliveryURL value
     * @param string $onDemandDeliveryURL
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setOnDemandDeliveryURL(?string $onDemandDeliveryURL = null): self
    {
        // validation for constraint: string
        if (!is_null($onDemandDeliveryURL) && !is_string($onDemandDeliveryURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($onDemandDeliveryURL, true), gettype($onDemandDeliveryURL)), __LINE__);
        }
        $this->OnDemandDeliveryURL = $onDemandDeliveryURL;
        
        return $this;
    }
    /**
     * Get TotalNet value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet[]
     */
    public function getTotalNet(): ?array
    {
        return $this->TotalNet;
    }
    /**
     * This method is responsible for validating the values passed to the setTotalNet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTotalNet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTotalNetForArrayConstraintsFromSetTotalNet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ShipmentDetailTypeTotalNetItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ShipmentDetailTypeTotalNetItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet) {
                $invalidValues[] = is_object($docTypeRef_ShipmentDetailTypeTotalNetItem) ? get_class($docTypeRef_ShipmentDetailTypeTotalNetItem) : sprintf('%s(%s)', gettype($docTypeRef_ShipmentDetailTypeTotalNetItem), var_export($docTypeRef_ShipmentDetailTypeTotalNetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TotalNet property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TotalNet value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet[] $totalNet
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setTotalNet(?array $totalNet = null): self
    {
        // validation for constraint: array
        if ('' !== ($totalNetArrayErrorMessage = self::validateTotalNetForArrayConstraintsFromSetTotalNet($totalNet))) {
            throw new InvalidArgumentException($totalNetArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($totalNet) && count($totalNet) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($totalNet)), __LINE__);
        }
        $this->TotalNet = $totalNet;
        
        return $this;
    }
    /**
     * Add item to TotalNet value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function addToTotalNet(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet) {
            throw new InvalidArgumentException(sprintf('The TotalNet property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNet, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TotalNet) && count($this->TotalNet) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TotalNet)), __LINE__);
        }
        $this->TotalNet[] = $item;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setAdditionalInformation(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalInformation $additionalInformation = null): self
    {
        $this->AdditionalInformation = $additionalInformation;
        
        return $this;
    }
    /**
     * Get BarcodeInfo value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo|null
     */
    public function getBarcodeInfo(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo
    {
        return $this->BarcodeInfo;
    }
    /**
     * Set BarcodeInfo value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo $barcodeInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setBarcodeInfo(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo $barcodeInfo = null): self
    {
        $this->BarcodeInfo = $barcodeInfo;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryDate value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate|null
     */
    public function getEstimatedDeliveryDate(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate $estimatedDeliveryDate
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setEstimatedDeliveryDate(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate $estimatedDeliveryDate = null): self
    {
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        
        return $this;
    }
    /**
     * Get PickupDetails value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails|null
     */
    public function getPickupDetails(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails
    {
        return $this->PickupDetails;
    }
    /**
     * Set PickupDetails value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails $pickupDetails
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function setPickupDetails(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PickupDetails $pickupDetails = null): self
    {
        $this->PickupDetails = $pickupDetails;
        
        return $this;
    }
}