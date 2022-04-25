<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Document StructType
 * @subpackage Structs
 */
class DocTypeRef_Document extends AbstractStructBase
{
    /**
     * The DocumentName
     * Meta information extracted from the WSDL
     * - documentation: The name of the document
     * @var string|null
     */
    protected ?string $DocumentName = null;
    /**
     * The DocumentFormat
     * Meta information extracted from the WSDL
     * - documentation: Format of the document
     * - base: xsd:token
     * - maxLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $DocumentFormat = null;
    /**
     * The DocumentImage
     * Meta information extracted from the WSDL
     * - documentation: Image of the document
     * @var string|null
     */
    protected ?string $DocumentImage = null;
    /**
     * Constructor method for docTypeRef_Document
     * @uses DocTypeRef_Document::setDocumentName()
     * @uses DocTypeRef_Document::setDocumentFormat()
     * @uses DocTypeRef_Document::setDocumentImage()
     * @param string $documentName
     * @param string $documentFormat
     * @param string $documentImage
     */
    public function __construct(?string $documentName = null, ?string $documentFormat = null, ?string $documentImage = null)
    {
        $this
            ->setDocumentName($documentName)
            ->setDocumentFormat($documentFormat)
            ->setDocumentImage($documentImage);
    }
    /**
     * Get DocumentName value
     * @return string|null
     */
    public function getDocumentName(): ?string
    {
        return $this->DocumentName;
    }
    /**
     * Set DocumentName value
     * @param string $documentName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Document
     */
    public function setDocumentName(?string $documentName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->DocumentName = $documentName;
        
        return $this;
    }
    /**
     * Get DocumentFormat value
     * @return string|null
     */
    public function getDocumentFormat(): ?string
    {
        return $this->DocumentFormat;
    }
    /**
     * Set DocumentFormat value
     * @param string $documentFormat
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Document
     */
    public function setDocumentFormat(?string $documentFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($documentFormat) && !is_string($documentFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentFormat, true), gettype($documentFormat)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($documentFormat) && mb_strlen((string) $documentFormat) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $documentFormat)), __LINE__);
        }
        $this->DocumentFormat = $documentFormat;
        
        return $this;
    }
    /**
     * Get DocumentImage value
     * @return string|null
     */
    public function getDocumentImage(): ?string
    {
        return $this->DocumentImage;
    }
    /**
     * Set DocumentImage value
     * @param string $documentImage
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Document
     */
    public function setDocumentImage(?string $documentImage = null): self
    {
        // validation for constraint: string
        if (!is_null($documentImage) && !is_string($documentImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentImage, true), gettype($documentImage)), __LINE__);
        }
        $this->DocumentImage = $documentImage;
        
        return $this;
    }
}
