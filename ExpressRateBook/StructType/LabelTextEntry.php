<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelTextEntry StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label templates
 * @subpackage Structs
 */
class LabelTextEntry extends AbstractStructBase
{
    /**
     * The LabelNumber
     * Meta information extracted from the WSDL
     * - documentation: Barcode sequence number
     * - base: xsd:token
     * - maxLength: 1
     * - minLength: 1
     * - pattern: ([1-6])*
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LabelNumber = null;
    /**
     * The LabelCaption
     * Meta information extracted from the WSDL
     * - documentation: The caption to be printed in the tag value
     * - base: xsd:token
     * - maxLength: 20
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LabelCaption = null;
    /**
     * The LabelDescription
     * Meta information extracted from the WSDL
     * - documentation: The value to be printed for the respective tag in caption. eg. “SALES”, “50”, “CN”,” SG Regional”
     * - base: xsd:token
     * - maxLength: 40
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LabelDescription = null;
    /**
     * Constructor method for LabelTextEntry
     * @uses LabelTextEntry::setLabelNumber()
     * @uses LabelTextEntry::setLabelCaption()
     * @uses LabelTextEntry::setLabelDescription()
     * @param string $labelNumber
     * @param string $labelCaption
     * @param string $labelDescription
     */
    public function __construct(?string $labelNumber = null, ?string $labelCaption = null, ?string $labelDescription = null)
    {
        $this
            ->setLabelNumber($labelNumber)
            ->setLabelCaption($labelCaption)
            ->setLabelDescription($labelDescription);
    }
    /**
     * Get LabelNumber value
     * @return string|null
     */
    public function getLabelNumber(): ?string
    {
        return $this->LabelNumber;
    }
    /**
     * Set LabelNumber value
     * @param string $labelNumber
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry
     */
    public function setLabelNumber(?string $labelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($labelNumber) && !is_string($labelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelNumber, true), gettype($labelNumber)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($labelNumber) && mb_strlen((string) $labelNumber) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $labelNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($labelNumber) && mb_strlen((string) $labelNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $labelNumber)), __LINE__);
        }
        // validation for constraint: pattern(([1-6])*)
        if (!is_null($labelNumber) && !preg_match('/([1-6])*/', $labelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([1-6])*/', var_export($labelNumber, true)), __LINE__);
        }
        $this->LabelNumber = $labelNumber;
        
        return $this;
    }
    /**
     * Get LabelCaption value
     * @return string|null
     */
    public function getLabelCaption(): ?string
    {
        return $this->LabelCaption;
    }
    /**
     * Set LabelCaption value
     * @param string $labelCaption
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry
     */
    public function setLabelCaption(?string $labelCaption = null): self
    {
        // validation for constraint: string
        if (!is_null($labelCaption) && !is_string($labelCaption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelCaption, true), gettype($labelCaption)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($labelCaption) && mb_strlen((string) $labelCaption) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $labelCaption)), __LINE__);
        }
        $this->LabelCaption = $labelCaption;
        
        return $this;
    }
    /**
     * Get LabelDescription value
     * @return string|null
     */
    public function getLabelDescription(): ?string
    {
        return $this->LabelDescription;
    }
    /**
     * Set LabelDescription value
     * @param string $labelDescription
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry
     */
    public function setLabelDescription(?string $labelDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($labelDescription) && !is_string($labelDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelDescription, true), gettype($labelDescription)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($labelDescription) && mb_strlen((string) $labelDescription) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $labelDescription)), __LINE__);
        }
        $this->LabelDescription = $labelDescription;
        
        return $this;
    }
}
