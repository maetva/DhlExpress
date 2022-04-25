<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Consignee StructType
 * @subpackage Structs
 */
class Consignee extends AbstractStructBase
{
    /**
     * The City
     * Meta information extracted from the WSDL
     * - documentation: City name
     * - base: xsd:string
     * - maxLength: 35
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $City = null;
    /**
     * The Suburb
     * Meta information extracted from the WSDL
     * - documentation: Suburb
     * - base: xsd:string
     * - maxLength: 35
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Suburb = null;
    /**
     * The StateOrProvinceCode
     * Meta information extracted from the WSDL
     * - documentation: State or province code
     * - base: xsd:string
     * - maxLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvinceCode = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: Full postal/zip code for address
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 2 character code of country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * Constructor method for Consignee
     * @uses Consignee::setCity()
     * @uses Consignee::setSuburb()
     * @uses Consignee::setStateOrProvinceCode()
     * @uses Consignee::setPostalCode()
     * @uses Consignee::setCountryCode()
     * @param string $city
     * @param string $suburb
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $countryCode
     */
    public function __construct(?string $city = null, ?string $suburb = null, ?string $stateOrProvinceCode = null, ?string $postalCode = null, ?string $countryCode = null)
    {
        $this
            ->setCity($city)
            ->setSuburb($suburb)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($city) && mb_strlen((string) $city) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $city)), __LINE__);
        }
        $this->City = $city;
        
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
     */
    public function setSuburb(?string $suburb = null): self
    {
        // validation for constraint: string
        if (!is_null($suburb) && !is_string($suburb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suburb, true), gettype($suburb)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($suburb) && mb_strlen((string) $suburb) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $suburb)), __LINE__);
        }
        $this->Suburb = $suburb;
        
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
     */
    public function setStateOrProvinceCode(?string $stateOrProvinceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvinceCode, true), gettype($stateOrProvinceCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($stateOrProvinceCode) && mb_strlen((string) $stateOrProvinceCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $stateOrProvinceCode)), __LINE__);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
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
}
