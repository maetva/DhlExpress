<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ContactType1 StructType
 * @subpackage Structs
 */
class DocTypeRef_ContactType1 extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - documentation: A contact name of a person
     * - base: xsd:token
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PersonName = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - documentation: The company name the person is working in
     * - base: xsd:token
     * - maxLength: 100
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: The contact person phone number
     * - base: xsd:token
     * - maxLength: 70
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PhoneNumber = null;
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - documentation: The email address of the contact person
     * - base: xsd:token
     * - maxLength: 70
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The MobilePhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: The mobile phone number of the contact person
     * - base: xsd:token
     * - maxLength: 70
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $MobilePhoneNumber = null;
    /**
     * Constructor method for docTypeRef_ContactType1
     * @uses DocTypeRef_ContactType1::setPersonName()
     * @uses DocTypeRef_ContactType1::setCompanyName()
     * @uses DocTypeRef_ContactType1::setPhoneNumber()
     * @uses DocTypeRef_ContactType1::setEmailAddress()
     * @uses DocTypeRef_ContactType1::setMobilePhoneNumber()
     * @param string $personName
     * @param string $companyName
     * @param string $phoneNumber
     * @param string $emailAddress
     * @param string $mobilePhoneNumber
     */
    public function __construct(?string $personName = null, ?string $companyName = null, ?string $phoneNumber = null, ?string $emailAddress = null, ?string $mobilePhoneNumber = null)
    {
        $this
            ->setPersonName($personName)
            ->setCompanyName($companyName)
            ->setPhoneNumber($phoneNumber)
            ->setEmailAddress($emailAddress)
            ->setMobilePhoneNumber($mobilePhoneNumber);
    }
    /**
     * Get PersonName value
     * @return string|null
     */
    public function getPersonName(): ?string
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param string $personName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType1
     */
    public function setPersonName(?string $personName = null): self
    {
        // validation for constraint: string
        if (!is_null($personName) && !is_string($personName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personName, true), gettype($personName)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($personName) && mb_strlen((string) $personName) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $personName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($personName) && mb_strlen((string) $personName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $personName)), __LINE__);
        }
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType1
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($companyName) && mb_strlen((string) $companyName) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $companyName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($companyName) && mb_strlen((string) $companyName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType1
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($phoneNumber) && mb_strlen((string) $phoneNumber) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $phoneNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($phoneNumber) && mb_strlen((string) $phoneNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType1
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
     * Get MobilePhoneNumber value
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->MobilePhoneNumber;
    }
    /**
     * Set MobilePhoneNumber value
     * @param string $mobilePhoneNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType1
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhoneNumber) && !is_string($mobilePhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhoneNumber, true), gettype($mobilePhoneNumber)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($mobilePhoneNumber) && mb_strlen((string) $mobilePhoneNumber) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $mobilePhoneNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($mobilePhoneNumber) && mb_strlen((string) $mobilePhoneNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $mobilePhoneNumber)), __LINE__);
        }
        $this->MobilePhoneNumber = $mobilePhoneNumber;
        
        return $this;
    }
}
