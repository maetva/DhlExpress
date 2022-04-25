<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_AddressType StructType
 * @subpackage Structs
 */
class DocTypeRef_AddressType extends AbstractStructBase
{
    /**
     * The StreetLines
     * Meta information extracted from the WSDL
     * - documentation: The street line should contain street name and number
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetLines = null;
    /**
     * The StreetName
     * Meta information extracted from the WSDL
     * - documentation: Street name should be sent as separate attribute if feasible
     * - base: xsd:token
     * - maxLength: 250
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetName = null;
    /**
     * The BuildingName
     * Meta information extracted from the WSDL
     * - documentation: Building name
     * - base: xsd:token
     * - maxLength: 50
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $BuildingName = null;
    /**
     * The StreetNumber
     * Meta information extracted from the WSDL
     * - documentation: Street number should be sent as separate attribute, if feasible. | Street number should be sent as separate attribute, if feasible
     * - base: xsd:token
     * - maxLength: 50
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetNumber = null;
    /**
     * The StreetLines2
     * Meta information extracted from the WSDL
     * - documentation: Additional address information
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
     * - documentation: Additional address information
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StreetLines3 = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - documentation: City name
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The StateOrProvinceCode
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter state code for the USA only
     * - base: xsd:token
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $StateOrProvinceCode = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: Postal code
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
     * - documentation: ISO 2 character code of the country. | ISO 2 character code for country | ISO 2 character codes of the Shipper/Recipient country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The Suburb
     * Meta information extracted from the WSDL
     * - documentation: Suburb name
     * - base: xsd:string
     * - maxLength: 45
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Suburb = null;
    /**
     * The StateOrProvinceName
     * Meta information extracted from the WSDL
     * - documentation: State Or Province Name
     * - base: xsd:string
     * - maxLength: 35
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvinceName = null;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CountryName = null;
    /**
     * Constructor method for docTypeRef_AddressType
     * @uses DocTypeRef_AddressType::setStreetLines()
     * @uses DocTypeRef_AddressType::setStreetName()
     * @uses DocTypeRef_AddressType::setBuildingName()
     * @uses DocTypeRef_AddressType::setStreetNumber()
     * @uses DocTypeRef_AddressType::setStreetLines2()
     * @uses DocTypeRef_AddressType::setStreetLines3()
     * @uses DocTypeRef_AddressType::setCity()
     * @uses DocTypeRef_AddressType::setStateOrProvinceCode()
     * @uses DocTypeRef_AddressType::setPostalCode()
     * @uses DocTypeRef_AddressType::setCountryCode()
     * @uses DocTypeRef_AddressType::setSuburb()
     * @uses DocTypeRef_AddressType::setStateOrProvinceName()
     * @uses DocTypeRef_AddressType::setCountryName()
     * @param string $streetLines
     * @param string $streetName
     * @param string $buildingName
     * @param string $streetNumber
     * @param string $streetLines2
     * @param string $streetLines3
     * @param string $city
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $countryCode
     * @param string $suburb
     * @param string $stateOrProvinceName
     * @param string $countryName
     */
    public function __construct(?string $streetLines = null, ?string $streetName = null, ?string $buildingName = null, ?string $streetNumber = null, ?string $streetLines2 = null, ?string $streetLines3 = null, ?string $city = null, ?string $stateOrProvinceCode = null, ?string $postalCode = null, ?string $countryCode = null, ?string $suburb = null, ?string $stateOrProvinceName = null, ?string $countryName = null)
    {
        $this
            ->setStreetLines($streetLines)
            ->setStreetName($streetName)
            ->setBuildingName($buildingName)
            ->setStreetNumber($streetNumber)
            ->setStreetLines2($streetLines2)
            ->setStreetLines3($streetLines3)
            ->setCity($city)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode)
            ->setSuburb($suburb)
            ->setStateOrProvinceName($stateOrProvinceName)
            ->setCountryName($countryName);
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * Get BuildingName value
     * @return string|null
     */
    public function getBuildingName(): ?string
    {
        return $this->BuildingName;
    }
    /**
     * Set BuildingName value
     * @param string $buildingName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
     */
    public function setBuildingName(?string $buildingName = null): self
    {
        // validation for constraint: string
        if (!is_null($buildingName) && !is_string($buildingName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buildingName, true), gettype($buildingName)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($buildingName) && mb_strlen((string) $buildingName) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $buildingName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($buildingName) && mb_strlen((string) $buildingName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $buildingName)), __LINE__);
        }
        $this->BuildingName = $buildingName;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
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
     * Get Suburb value
     * @return string|null
     */
    public function getSuburb(): ?string
    {
        return $this->Suburb;
    }
    /**
     * Set Suburb value
     * @param string $suburb
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
     */
    public function setSuburb(?string $suburb = null): self
    {
        // validation for constraint: string
        if (!is_null($suburb) && !is_string($suburb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suburb, true), gettype($suburb)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($suburb) && mb_strlen((string) $suburb) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $suburb)), __LINE__);
        }
        $this->Suburb = $suburb;
        
        return $this;
    }
    /**
     * Get StateOrProvinceName value
     * @return string|null
     */
    public function getStateOrProvinceName(): ?string
    {
        return $this->StateOrProvinceName;
    }
    /**
     * Set StateOrProvinceName value
     * @param string $stateOrProvinceName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
     */
    public function setStateOrProvinceName(?string $stateOrProvinceName = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceName) && !is_string($stateOrProvinceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvinceName, true), gettype($stateOrProvinceName)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($stateOrProvinceName) && mb_strlen((string) $stateOrProvinceName) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $stateOrProvinceName)), __LINE__);
        }
        $this->StateOrProvinceName = $stateOrProvinceName;
        
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType
     */
    public function setCountryName(?string $countryName = null): self
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryName, true), gettype($countryName)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($countryName) && mb_strlen((string) $countryName) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $countryName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($countryName) && mb_strlen((string) $countryName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        
        return $this;
    }
}
