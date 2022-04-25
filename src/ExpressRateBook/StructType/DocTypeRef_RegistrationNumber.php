<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RegistrationNumber StructType
 * @subpackage Structs
 */
class DocTypeRef_RegistrationNumber extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Registration Number
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The NumberTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Type of the registration number. Please refer to the DHL EXPRESS - MyDHL API - SOAP Developer Guide for valid enumeration values. For more information please contact your local DHL Express API representative.
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $NumberTypeCode = null;
    /**
     * The NumberIssuerCountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 2 character code of the country where the Registration Number has been issued by
     * - base: xsd:token
     * - maxLength: 2
     * - minLength: 2
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $NumberIssuerCountryCode = null;
    /**
     * Constructor method for docTypeRef_RegistrationNumber
     * @uses DocTypeRef_RegistrationNumber::setNumber()
     * @uses DocTypeRef_RegistrationNumber::setNumberTypeCode()
     * @uses DocTypeRef_RegistrationNumber::setNumberIssuerCountryCode()
     * @param string $number
     * @param string $numberTypeCode
     * @param string $numberIssuerCountryCode
     */
    public function __construct(?string $number = null, ?string $numberTypeCode = null, ?string $numberIssuerCountryCode = null)
    {
        $this
            ->setNumber($number)
            ->setNumberTypeCode($numberTypeCode)
            ->setNumberIssuerCountryCode($numberIssuerCountryCode);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($number) && mb_strlen((string) $number) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($number) && mb_strlen((string) $number) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get NumberTypeCode value
     * @return string|null
     */
    public function getNumberTypeCode(): ?string
    {
        return $this->NumberTypeCode;
    }
    /**
     * Set NumberTypeCode value
     * @param string $numberTypeCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber
     */
    public function setNumberTypeCode(?string $numberTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($numberTypeCode) && !is_string($numberTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberTypeCode, true), gettype($numberTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($numberTypeCode) && mb_strlen((string) $numberTypeCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $numberTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numberTypeCode) && mb_strlen((string) $numberTypeCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $numberTypeCode)), __LINE__);
        }
        $this->NumberTypeCode = $numberTypeCode;
        
        return $this;
    }
    /**
     * Get NumberIssuerCountryCode value
     * @return string|null
     */
    public function getNumberIssuerCountryCode(): ?string
    {
        return $this->NumberIssuerCountryCode;
    }
    /**
     * Set NumberIssuerCountryCode value
     * @param string $numberIssuerCountryCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber
     */
    public function setNumberIssuerCountryCode(?string $numberIssuerCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($numberIssuerCountryCode) && !is_string($numberIssuerCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberIssuerCountryCode, true), gettype($numberIssuerCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($numberIssuerCountryCode) && mb_strlen((string) $numberIssuerCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $numberIssuerCountryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($numberIssuerCountryCode) && mb_strlen((string) $numberIssuerCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $numberIssuerCountryCode)), __LINE__);
        }
        $this->NumberIssuerCountryCode = $numberIssuerCountryCode;
        
        return $this;
    }
}
