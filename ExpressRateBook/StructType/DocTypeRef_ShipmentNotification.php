<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipmentNotification StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipmentNotification extends AbstractStructBase
{
    /**
     * The NotificationMethod
     * Meta information extracted from the WSDL
     * - documentation: The notification method to be sent. Valid value: EMAIL
     * - minOccurs: 1
     * @var string
     */
    protected string $NotificationMethod;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - documentation: Email address of the party to receive email notification
     * - base: xsd:token
     * - maxLength: 70
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The BespokeMessage
     * Meta information extracted from the WSDL
     * - documentation: Additional message to be added to the body of the mail | Customer additional information to the email notification
     * - base: xsd:token
     * - maxLength: 250
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $BespokeMessage = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: LanguageCode used in the email content. The possible values are; eng, (Default) eng, British zho, Chinese Traditional chi, Chinese Simplified | Shipment Email Notification Language Code | eng for English
     * - base: xsd:string
     * - default: eng
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * The LanguageCountryCode
     * Meta information extracted from the WSDL
     * - documentation: Language country code. The supported country code area as below; CH GB US | ISO 2 character codes of the Shipper/Recipient country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageCountryCode = null;
    /**
     * Constructor method for docTypeRef_ShipmentNotification
     * @uses DocTypeRef_ShipmentNotification::setNotificationMethod()
     * @uses DocTypeRef_ShipmentNotification::setEmailAddress()
     * @uses DocTypeRef_ShipmentNotification::setBespokeMessage()
     * @uses DocTypeRef_ShipmentNotification::setLanguageCode()
     * @uses DocTypeRef_ShipmentNotification::setLanguageCountryCode()
     * @param string $notificationMethod
     * @param string $emailAddress
     * @param string $bespokeMessage
     * @param string $languageCode
     * @param string $languageCountryCode
     */
    public function __construct(string $notificationMethod, ?string $emailAddress = null, ?string $bespokeMessage = null, ?string $languageCode = 'eng', ?string $languageCountryCode = null)
    {
        $this
            ->setNotificationMethod($notificationMethod)
            ->setEmailAddress($emailAddress)
            ->setBespokeMessage($bespokeMessage)
            ->setLanguageCode($languageCode)
            ->setLanguageCountryCode($languageCountryCode);
    }
    /**
     * Get NotificationMethod value
     * @return string
     */
    public function getNotificationMethod(): string
    {
        return $this->NotificationMethod;
    }
    /**
     * Set NotificationMethod value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NotificationMethod::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NotificationMethod::getValidValues()
     * @throws InvalidArgumentException
     * @param string $notificationMethod
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
     */
    public function setNotificationMethod(string $notificationMethod): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NotificationMethod::valueIsValid($notificationMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NotificationMethod', is_array($notificationMethod) ? implode(', ', $notificationMethod) : var_export($notificationMethod, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\NotificationMethod::getValidValues())), __LINE__);
        }
        $this->NotificationMethod = $notificationMethod;
        
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($emailAddress) && mb_strlen((string) $emailAddress) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $emailAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($emailAddress) && mb_strlen((string) $emailAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get BespokeMessage value
     * @return string|null
     */
    public function getBespokeMessage(): ?string
    {
        return $this->BespokeMessage;
    }
    /**
     * Set BespokeMessage value
     * @param string $bespokeMessage
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
     */
    public function setBespokeMessage(?string $bespokeMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($bespokeMessage) && !is_string($bespokeMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bespokeMessage, true), gettype($bespokeMessage)), __LINE__);
        }
        // validation for constraint: maxLength(250)
        if (!is_null($bespokeMessage) && mb_strlen((string) $bespokeMessage) > 250) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 250', mb_strlen((string) $bespokeMessage)), __LINE__);
        }
        $this->BespokeMessage = $bespokeMessage;
        
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
     */
    public function setLanguageCode(?string $languageCode = 'eng'): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
    /**
     * Get LanguageCountryCode value
     * @return string|null
     */
    public function getLanguageCountryCode(): ?string
    {
        return $this->LanguageCountryCode;
    }
    /**
     * Set LanguageCountryCode value
     * @param string $languageCountryCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
     */
    public function setLanguageCountryCode(?string $languageCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCountryCode) && !is_string($languageCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCountryCode, true), gettype($languageCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        $this->LanguageCountryCode = $languageCountryCode;
        
        return $this;
    }
}
