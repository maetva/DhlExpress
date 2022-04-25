<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ContactInfoType StructType
 * @subpackage Structs
 */
class DocTypeRef_ContactInfoType extends AbstractStructBase
{
    /**
     * The Contact
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $Contact = null;
    /**
     * The Address
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType $Address = null;
    /**
     * The RegistrationNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers $RegistrationNumbers = null;
    /**
     * The BankDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails $BankDetails = null;
    /**
     * The BusinessPartyTypeCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BusinessPartyTypeCode = null;
    /**
     * Constructor method for docTypeRef_ContactInfoType
     * @uses DocTypeRef_ContactInfoType::setContact()
     * @uses DocTypeRef_ContactInfoType::setAddress()
     * @uses DocTypeRef_ContactInfoType::setRegistrationNumbers()
     * @uses DocTypeRef_ContactInfoType::setBankDetails()
     * @uses DocTypeRef_ContactInfoType::setBusinessPartyTypeCode()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType $address
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers $registrationNumbers
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails $bankDetails
     * @param string $businessPartyTypeCode
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType $address = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers $registrationNumbers = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails $bankDetails = null, ?string $businessPartyTypeCode = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address)
            ->setRegistrationNumbers($registrationNumbers)
            ->setBankDetails($bankDetails)
            ->setBusinessPartyTypeCode($businessPartyTypeCode);
    }
    /**
     * Get Contact value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType|null
     */
    public function getContact(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
     */
    public function setContact(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact = null): self
    {
        $this->Contact = $contact;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType|null
     */
    public function getAddress(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType $address
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
     */
    public function setAddress(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get RegistrationNumbers value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers|null
     */
    public function getRegistrationNumbers(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers
    {
        return $this->RegistrationNumbers;
    }
    /**
     * Set RegistrationNumbers value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers $registrationNumbers
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
     */
    public function setRegistrationNumbers(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers $registrationNumbers = null): self
    {
        $this->RegistrationNumbers = $registrationNumbers;
        
        return $this;
    }
    /**
     * Get BankDetails value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails|null
     */
    public function getBankDetails(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails
    {
        return $this->BankDetails;
    }
    /**
     * Set BankDetails value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails $bankDetails
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
     */
    public function setBankDetails(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails $bankDetails = null): self
    {
        $this->BankDetails = $bankDetails;
        
        return $this;
    }
    /**
     * Get BusinessPartyTypeCode value
     * @return string|null
     */
    public function getBusinessPartyTypeCode(): ?string
    {
        return $this->BusinessPartyTypeCode;
    }
    /**
     * Set BusinessPartyTypeCode value
     * @param string $businessPartyTypeCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
     */
    public function setBusinessPartyTypeCode(?string $businessPartyTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($businessPartyTypeCode) && !is_string($businessPartyTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessPartyTypeCode, true), gettype($businessPartyTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($businessPartyTypeCode) && mb_strlen((string) $businessPartyTypeCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $businessPartyTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($businessPartyTypeCode) && mb_strlen((string) $businessPartyTypeCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $businessPartyTypeCode)), __LINE__);
        }
        $this->BusinessPartyTypeCode = $businessPartyTypeCode;
        
        return $this;
    }
}
