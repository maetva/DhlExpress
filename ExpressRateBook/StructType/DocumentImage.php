<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentImage StructType
 * Meta information extracted from the WSDL
 * - documentation: Custom Clearance Document Image
 * @subpackage Structs
 */
class DocumentImage extends AbstractStructBase
{
    /**
     * The DocumentImageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentImageType = null;
    /**
     * The DocumentImage
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $DocumentImage = null;
    /**
     * The DocumentImageFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentImageFormat = null;
    /**
     * Constructor method for DocumentImage
     * @uses DocumentImage::setDocumentImageType()
     * @uses DocumentImage::setDocumentImage()
     * @uses DocumentImage::setDocumentImageFormat()
     * @param string $documentImageType
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     * @param string $documentImageFormat
     */
    public function __construct(?string $documentImageType = null, ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null, ?string $documentImageFormat = null)
    {
        $this
            ->setDocumentImageType($documentImageType)
            ->setDocumentImage($documentImage)
            ->setDocumentImageFormat($documentImageFormat);
    }
    /**
     * Get DocumentImageType value
     * @return string|null
     */
    public function getDocumentImageType(): ?string
    {
        return $this->DocumentImageType;
    }
    /**
     * Set DocumentImageType value
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageType::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $documentImageType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage
     */
    public function setDocumentImageType(?string $documentImageType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageType::valueIsValid($documentImageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageType', is_array($documentImageType) ? implode(', ', $documentImageType) : var_export($documentImageType, true), implode(', ', \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageType::getValidValues())), __LINE__);
        }
        $this->DocumentImageType = $documentImageType;
        
        return $this;
    }
    /**
     * Get DocumentImage value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    public function getDocumentImage(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage
    {
        return $this->DocumentImage;
    }
    /**
     * Set DocumentImage value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage
     */
    public function setDocumentImage(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null): self
    {
        $this->DocumentImage = $documentImage;
        
        return $this;
    }
    /**
     * Get DocumentImageFormat value
     * @return string|null
     */
    public function getDocumentImageFormat(): ?string
    {
        return $this->DocumentImageFormat;
    }
    /**
     * Set DocumentImageFormat value
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageFormat::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageFormat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $documentImageFormat
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage
     */
    public function setDocumentImageFormat(?string $documentImageFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageFormat::valueIsValid($documentImageFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageFormat', is_array($documentImageFormat) ? implode(', ', $documentImageFormat) : var_export($documentImageFormat, true), implode(', ', \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\DocumentImageFormat::getValidValues())), __LINE__);
        }
        $this->DocumentImageFormat = $documentImageFormat;
        
        return $this;
    }
}
