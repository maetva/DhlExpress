<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBarcode StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label - ECOM26_84CI_003 templates
 * @subpackage Structs
 */
class LabelBarcode extends AbstractStructBase
{
    /**
     * The BarcodeNumber
     * Meta information extracted from the WSDL
     * - documentation: Barcode number
     * - base: xsd:token
     * - maxLength: 1
     * - minLength: 1
     * - pattern: ([1-2])*
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $BarcodeNumber = null;
    /**
     * The BarcodeType
     * Meta information extracted from the WSDL
     * - documentation: The Symbology code for this barcode is 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BarcodeType = null;
    /**
     * The BarcodeContent
     * Meta information extracted from the WSDL
     * - documentation: Barcode content
     * @var string|null
     */
    protected ?string $BarcodeContent = null;
    /**
     * The TextBelowBarcode
     * Meta information extracted from the WSDL
     * - documentation: Text below barcode
     * @var string|null
     */
    protected ?string $TextBelowBarcode = null;
    /**
     * Constructor method for LabelBarcode
     * @uses LabelBarcode::setBarcodeNumber()
     * @uses LabelBarcode::setBarcodeType()
     * @uses LabelBarcode::setBarcodeContent()
     * @uses LabelBarcode::setTextBelowBarcode()
     * @param string $barcodeNumber
     * @param string $barcodeType
     * @param string $barcodeContent
     * @param string $textBelowBarcode
     */
    public function __construct(?string $barcodeNumber = null, ?string $barcodeType = null, ?string $barcodeContent = null, ?string $textBelowBarcode = null)
    {
        $this
            ->setBarcodeNumber($barcodeNumber)
            ->setBarcodeType($barcodeType)
            ->setBarcodeContent($barcodeContent)
            ->setTextBelowBarcode($textBelowBarcode);
    }
    /**
     * Get BarcodeNumber value
     * @return string|null
     */
    public function getBarcodeNumber(): ?string
    {
        return $this->BarcodeNumber;
    }
    /**
     * Set BarcodeNumber value
     * @param string $barcodeNumber
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode
     */
    public function setBarcodeNumber(?string $barcodeNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeNumber) && !is_string($barcodeNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeNumber, true), gettype($barcodeNumber)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($barcodeNumber) && mb_strlen((string) $barcodeNumber) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $barcodeNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($barcodeNumber) && mb_strlen((string) $barcodeNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $barcodeNumber)), __LINE__);
        }
        // validation for constraint: pattern(([1-2])*)
        if (!is_null($barcodeNumber) && !preg_match('/([1-2])*/', $barcodeNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([1-2])*/', var_export($barcodeNumber, true)), __LINE__);
        }
        $this->BarcodeNumber = $barcodeNumber;
        
        return $this;
    }
    /**
     * Get BarcodeType value
     * @return string|null
     */
    public function getBarcodeType(): ?string
    {
        return $this->BarcodeType;
    }
    /**
     * Set BarcodeType value
     * @param string $barcodeType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode
     */
    public function setBarcodeType(?string $barcodeType = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeType) && !is_string($barcodeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeType, true), gettype($barcodeType)), __LINE__);
        }
        $this->BarcodeType = $barcodeType;
        
        return $this;
    }
    /**
     * Get BarcodeContent value
     * @return string|null
     */
    public function getBarcodeContent(): ?string
    {
        return $this->BarcodeContent;
    }
    /**
     * Set BarcodeContent value
     * @param string $barcodeContent
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode
     */
    public function setBarcodeContent(?string $barcodeContent = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeContent) && !is_string($barcodeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeContent, true), gettype($barcodeContent)), __LINE__);
        }
        $this->BarcodeContent = $barcodeContent;
        
        return $this;
    }
    /**
     * Get TextBelowBarcode value
     * @return string|null
     */
    public function getTextBelowBarcode(): ?string
    {
        return $this->TextBelowBarcode;
    }
    /**
     * Set TextBelowBarcode value
     * @param string $textBelowBarcode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode
     */
    public function setTextBelowBarcode(?string $textBelowBarcode = null): self
    {
        // validation for constraint: string
        if (!is_null($textBelowBarcode) && !is_string($textBelowBarcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textBelowBarcode, true), gettype($textBelowBarcode)), __LINE__);
        }
        $this->TextBelowBarcode = $textBelowBarcode;
        
        return $this;
    }
}
