<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ProviderType StructType
 * @subpackage Structs
 */
class DocTypeRef_ProviderType extends AbstractStructBase
{
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3[]
     */
    protected array $Notification;
    /**
     * The ServiceHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $ServiceHeader = null;
    /**
     * The Warning
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[]
     */
    protected ?array $Warning = null;
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType[]
     */
    protected ?array $Service = null;
    /**
     * The ExchangeRates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType $ExchangeRates = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * Constructor method for docTypeRef_ProviderType
     * @uses DocTypeRef_ProviderType::setNotification()
     * @uses DocTypeRef_ProviderType::setServiceHeader()
     * @uses DocTypeRef_ProviderType::setWarning()
     * @uses DocTypeRef_ProviderType::setService()
     * @uses DocTypeRef_ProviderType::setExchangeRates()
     * @uses DocTypeRef_ProviderType::setCode()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3[] $notification
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType[] $warning
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType[] $service
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType $exchangeRates
     * @param string $code
     */
    public function __construct(array $notification, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null, ?array $warning = null, ?array $service = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType $exchangeRates = null, ?string $code = null)
    {
        $this
            ->setNotification($notification)
            ->setServiceHeader($serviceHeader)
            ->setWarning($warning)
            ->setService($service)
            ->setExchangeRates($exchangeRates)
            ->setCode($code);
    }
    /**
     * Get Notification value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3[]
     */
    public function getNotification(): array
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
        foreach ($values as $docTypeRef_ProviderTypeNotificationItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ProviderTypeNotificationItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3) {
                $invalidValues[] = is_object($docTypeRef_ProviderTypeNotificationItem) ? get_class($docTypeRef_ProviderTypeNotificationItem) : sprintf('%s(%s)', gettype($docTypeRef_ProviderTypeNotificationItem), var_export($docTypeRef_ProviderTypeNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Notification value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3[] $notification
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function setNotification(array $notification): self
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
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3 $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function addToNotification(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3) {
            throw new InvalidArgumentException(sprintf('The Notification property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Notification) && count($this->Notification) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Notification)), __LINE__);
        }
        $this->Notification[] = $item;
        
        return $this;
    }
    /**
     * Get ServiceHeader value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    public function getServiceHeader(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function setServiceHeader(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
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
        foreach ($values as $docTypeRef_ProviderTypeWarningItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ProviderTypeWarningItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType) {
                $invalidValues[] = is_object($docTypeRef_ProviderTypeWarningItem) ? get_class($docTypeRef_ProviderTypeWarningItem) : sprintf('%s(%s)', gettype($docTypeRef_ProviderTypeWarningItem), var_export($docTypeRef_ProviderTypeWarningItem, true));
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
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
     * Get Service value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType[]
     */
    public function getService(): ?array
    {
        return $this->Service;
    }
    /**
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ProviderTypeServiceItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ProviderTypeServiceItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType) {
                $invalidValues[] = is_object($docTypeRef_ProviderTypeServiceItem) ? get_class($docTypeRef_ProviderTypeServiceItem) : sprintf('%s(%s)', gettype($docTypeRef_ProviderTypeServiceItem), var_export($docTypeRef_ProviderTypeServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType[] $service
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($service) && count($service) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($service)), __LINE__);
        }
        $this->Service = $service;
        
        return $this;
    }
    /**
     * Add item to Service value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function addToService(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType) {
            throw new InvalidArgumentException(sprintf('The Service property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Service) && count($this->Service) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Service)), __LINE__);
        }
        $this->Service[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangeRates value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType|null
     */
    public function getExchangeRates(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType
    {
        return $this->ExchangeRates;
    }
    /**
     * Set ExchangeRates value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType $exchangeRates
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function setExchangeRates(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType $exchangeRates = null): self
    {
        $this->ExchangeRates = $exchangeRates;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProviderType
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($code) && mb_strlen((string) $code) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
