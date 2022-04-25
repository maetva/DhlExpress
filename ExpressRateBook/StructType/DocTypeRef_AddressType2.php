<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_AddressType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_AddressType2 extends AbstractStructBase
{
    /**
     * The StreetLines
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient's street address.
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetLines = null;
    /**
     * The StreetLines2
     * Meta information extracted from the WSDL
     * - documentation: Additional shipper/recipient address information, preferably room or floor.
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetLines2 = null;
    /**
     * The StreetLines3
     * Meta information extracted from the WSDL
     * - documentation: Additional shipper address information, preferably department name.
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetLines3 = null;
    /**
     * The StreetName
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient's street name.
     * - base: xsd:token
     * - maxLength: 250
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetName = null;
    /**
     * The StreetNumber
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient's street number.
     * - base: xsd:token
     * - maxLength: 50
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetNumber = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient city name
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The CityDistrict
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient city district/county name
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CityDistrict = null;
    /**
     * The StateOrProvinceCode
     * Meta information extracted from the WSDL
     * - documentation: 2 letter state code for the USA only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvinceCode = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: The shipper/recipient postal code
     * - base: xsd:token
     * - maxLength: 12
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - base: s1:CountryCode2
     * - maxLength: 2
     * - minLength: 2
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $Contact = null;
    /**
     * Constructor method for docTypeRef_AddressType2
     * @uses DocTypeRef_AddressType2::setStreetLines()
     * @uses DocTypeRef_AddressType2::setStreetLines2()
     * @uses DocTypeRef_AddressType2::setStreetLines3()
     * @uses DocTypeRef_AddressType2::setStreetName()
     * @uses DocTypeRef_AddressType2::setStreetNumber()
     * @uses DocTypeRef_AddressType2::setCity()
     * @uses DocTypeRef_AddressType2::setCityDistrict()
     * @uses DocTypeRef_AddressType2::setStateOrProvinceCode()
     * @uses DocTypeRef_AddressType2::setPostalCode()
     * @uses DocTypeRef_AddressType2::setCountryCode()
     * @uses DocTypeRef_AddressType2::setContact()
     * @param string $streetLines
     * @param string $streetLines2
     * @param string $streetLines3
     * @param string $streetName
     * @param string $streetNumber
     * @param string $city
     * @param string $cityDistrict
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $countryCode
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact
     */
    public function __construct(?string $streetLines = null, ?string $streetLines2 = null, ?string $streetLines3 = null, ?string $streetName = null, ?string $streetNumber = null, ?string $city = null, ?string $cityDistrict = null, ?string $stateOrProvinceCode = null, ?string $postalCode = null, ?string $countryCode = null, ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact = null)
    {
        $this
            ->setStreetLines($streetLines)
            ->setStreetLines2($streetLines2)
            ->setStreetLines3($streetLines3)
            ->setStreetName($streetName)
            ->setStreetNumber($streetNumber)
            ->setCity($city)
            ->setCityDistrict($cityDistrict)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode)
            ->setContact($contact);
    }
    /**
     * Get StreetLines value
     * @return string|null
     */
    public function getStreetLines(): ?string
    {
        return $this->StreetLines;
    }
    /**
     * Set StreetLines value
     * @param string $streetLines
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStreetLines(?string $streetLines = null): self
    {
        // validation for constraint: string
        if (!is_null($streetLines) && !is_string($streetLines)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetLines, true), gettype($streetLines)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($streetLines) && mb_strlen((string) $streetLines) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $streetLines)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($streetLines) && mb_strlen((string) $streetLines) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $streetLines)), __LINE__);
        }
        $this->StreetLines = $streetLines;
        
        return $this;
    }
    /**
     * Get StreetLines2 value
     * @return string|null
     */
    public function getStreetLines2(): ?string
    {
        return $this->StreetLines2;
    }
    /**
     * Set StreetLines2 value
     * @param string $streetLines2
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStreetLines2(?string $streetLines2 = null): self
    {
        // validation for constraint: string
        if (!is_null($streetLines2) && !is_string($streetLines2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetLines2, true), gettype($streetLines2)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($streetLines2) && mb_strlen((string) $streetLines2) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $streetLines2)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($streetLines2) && mb_strlen((string) $streetLines2) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $streetLines2)), __LINE__);
        }
        $this->StreetLines2 = $streetLines2;
        
        return $this;
    }
    /**
     * Get StreetLines3 value
     * @return string|null
     */
    public function getStreetLines3(): ?string
    {
        return $this->StreetLines3;
    }
    /**
     * Set StreetLines3 value
     * @param string $streetLines3
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStreetLines3(?string $streetLines3 = null): self
    {
        // validation for constraint: string
        if (!is_null($streetLines3) && !is_string($streetLines3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetLines3, true), gettype($streetLines3)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($streetLines3) && mb_strlen((string) $streetLines3) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $streetLines3)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($streetLines3) && mb_strlen((string) $streetLines3) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $streetLines3)), __LINE__);
        }
        $this->StreetLines3 = $streetLines3;
        
        return $this;
    }
    /**
     * Get StreetName value
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->StreetName;
    }
    /**
     * Set StreetName value
     * @param string $streetName
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStreetName(?string $streetName = null): self
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
        }
        // validation for constraint: maxLength(250)
        if (!is_null($streetName) && mb_strlen((string) $streetName) > 250) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 250', mb_strlen((string) $streetName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($streetName) && mb_strlen((string) $streetName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $streetName)), __LINE__);
        }
        $this->StreetName = $streetName;
        
        return $this;
    }
    /**
     * Get StreetNumber value
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->StreetNumber;
    }
    /**
     * Set StreetNumber value
     * @param string $streetNumber
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStreetNumber(?string $streetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNumber, true), gettype($streetNumber)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($streetNumber) && mb_strlen((string) $streetNumber) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $streetNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($streetNumber) && mb_strlen((string) $streetNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $streetNumber)), __LINE__);
        }
        $this->StreetNumber = $streetNumber;
        
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($city) && mb_strlen((string) $city) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $city)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($city) && mb_strlen((string) $city) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $city)), __LINE__);
        }
        $this->City = $city;
        
        return $this;
    }
    /**
     * Get CityDistrict value
     * @return string|null
     */
    public function getCityDistrict(): ?string
    {
        return $this->CityDistrict;
    }
    /**
     * Set CityDistrict value
     * @param string $cityDistrict
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setCityDistrict(?string $cityDistrict = null): self
    {
        // validation for constraint: string
        if (!is_null($cityDistrict) && !is_string($cityDistrict)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityDistrict, true), gettype($cityDistrict)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($cityDistrict) && mb_strlen((string) $cityDistrict) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $cityDistrict)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cityDistrict) && mb_strlen((string) $cityDistrict) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cityDistrict)), __LINE__);
        }
        $this->CityDistrict = $cityDistrict;
        
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode(): ?string
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setStateOrProvinceCode(?string $stateOrProvinceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvinceCode, true), gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($postalCode) && mb_strlen((string) $postalCode) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $postalCode)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($postalCode) && mb_strlen((string) $postalCode) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get Contact value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType|null
     */
    public function getContact(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
     */
    public function setContact(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactType $contact = null): self
    {
        $this->Contact = $contact;
        
        return $this;
    }
}
