<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerBarcode StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label templates
 * @subpackage Structs
 */
class CustomerBarcode extends AbstractStructBase
{
    /**
     * The BarcodeType
     * Meta information extracted from the WSDL
     * - documentation: The customer barcode type. The first barcode code type valid value is 93, 39 or 128.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BarcodeType = null;
    /**
     * The BarcodeContent
     * Meta information extracted from the WSDL
     * - documentation: Customer barcode code content
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BarcodeContent = null;
    /**
     * The TextBelowBarcode
     * Meta information extracted from the WSDL
     * - documentation: Text below customer barcode
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TextBelowBarcode = null;
    /**
     * Constructor method for CustomerBarcode
     * @uses CustomerBarcode::setBarcodeType()
     * @uses CustomerBarcode::setBarcodeContent()
     * @uses CustomerBarcode::setTextBelowBarcode()
     * @param string $barcodeType
     * @param string $barcodeContent
     * @param string $textBelowBarcode
     */
    public function __construct(?string $barcodeType = null, ?string $barcodeContent = null, ?string $textBelowBarcode = null)
    {
        $this
            ->setBarcodeType($barcodeType)
            ->setBarcodeContent($barcodeContent)
            ->setTextBelowBarcode($textBelowBarcode);
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerBarcode
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerBarcode
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomerBarcode
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
