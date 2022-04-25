<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDataTextEntry StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer Data Texts that would like to be printed in COMMERCIAL_INVOICE_04 template
 * @subpackage Structs
 */
class CustomerDataTextEntry extends AbstractStructBase
{
    /**
     * The CustomerDataTextNumber
     * Meta information extracted from the WSDL
     * - documentation: Customer Data Text Entry Item Number that would like to be printed in COMMERCIAL_INVOICE_04 template
     * - base: xsd:token
     * - maxLength: 1
     * - minLength: 1
     * - pattern: ([1-6])*
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CustomerDataTextNumber = null;
    /**
     * The CustomerDataText
     * Meta information extracted from the WSDL
     * - documentation: Customer Data Text Entry Text value that would like to be printed in COMMERCIAL_INVOICE_04 template | Customs Invoice - Customer Data Text in COMMERCIAL_INVOICE_04 template
     * - base: xsd:string
     * - maxLength: 45
     * @var string|null
     */
    protected ?string $CustomerDataText = null;
    /**
     * Constructor method for CustomerDataTextEntry
     * @uses CustomerDataTextEntry::setCustomerDataTextNumber()
     * @uses CustomerDataTextEntry::setCustomerDataText()
     * @param string $customerDataTextNumber
     * @param string $customerDataText
     */
    public function __construct(?string $customerDataTextNumber = null, ?string $customerDataText = null)
    {
        $this
            ->setCustomerDataTextNumber($customerDataTextNumber)
            ->setCustomerDataText($customerDataText);
    }
    /**
     * Get CustomerDataTextNumber value
     * @return string|null
     */
    public function getCustomerDataTextNumber(): ?string
    {
        return $this->CustomerDataTextNumber;
    }
    /**
     * Set CustomerDataTextNumber value
     * @param string $customerDataTextNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntry
     */
    public function setCustomerDataTextNumber(?string $customerDataTextNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerDataTextNumber) && !is_string($customerDataTextNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerDataTextNumber, true), gettype($customerDataTextNumber)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($customerDataTextNumber) && mb_strlen((string) $customerDataTextNumber) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $customerDataTextNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($customerDataTextNumber) && mb_strlen((string) $customerDataTextNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $customerDataTextNumber)), __LINE__);
        }
        // validation for constraint: pattern(([1-6])*)
        if (!is_null($customerDataTextNumber) && !preg_match('/([1-6])*/', $customerDataTextNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([1-6])*/', var_export($customerDataTextNumber, true)), __LINE__);
        }
        $this->CustomerDataTextNumber = $customerDataTextNumber;
        
        return $this;
    }
    /**
     * Get CustomerDataText value
     * @return string|null
     */
    public function getCustomerDataText(): ?string
    {
        return $this->CustomerDataText;
    }
    /**
     * Set CustomerDataText value
     * @param string $customerDataText
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerDataTextEntry
     */
    public function setCustomerDataText(?string $customerDataText = null): self
    {
        // validation for constraint: string
        if (!is_null($customerDataText) && !is_string($customerDataText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerDataText, true), gettype($customerDataText)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($customerDataText) && mb_strlen((string) $customerDataText) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $customerDataText)), __LINE__);
        }
        $this->CustomerDataText = $customerDataText;
        
        return $this;
    }
}
