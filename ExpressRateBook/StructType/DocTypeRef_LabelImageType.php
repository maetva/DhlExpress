<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_LabelImageType StructType
 * @subpackage Structs
 */
class DocTypeRef_LabelImageType extends AbstractStructBase
{
    /**
     * The LabelImageFormat
     * Meta information extracted from the WSDL
     * - documentation: Mapped from Request Document. Currently always “PDF”
     * - base: xsd:token
     * - maxLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LabelImageFormat = null;
    /**
     * The GraphicImage
     * Meta information extracted from the WSDL
     * - documentation: This field contains the actual label as Base64 Binary. There will be one document containing all the labels for each package/piece on separate pages.
     * @var string|null
     */
    protected ?string $GraphicImage = null;
    /**
     * The HTMLImage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HTMLImage = null;
    /**
     * Constructor method for docTypeRef_LabelImageType
     * @uses DocTypeRef_LabelImageType::setLabelImageFormat()
     * @uses DocTypeRef_LabelImageType::setGraphicImage()
     * @uses DocTypeRef_LabelImageType::setHTMLImage()
     * @param string $labelImageFormat
     * @param string $graphicImage
     * @param string $hTMLImage
     */
    public function __construct(?string $labelImageFormat = null, ?string $graphicImage = null, ?string $hTMLImage = null)
    {
        $this
            ->setLabelImageFormat($labelImageFormat)
            ->setGraphicImage($graphicImage)
            ->setHTMLImage($hTMLImage);
    }
    /**
     * Get LabelImageFormat value
     * @return string|null
     */
    public function getLabelImageFormat(): ?string
    {
        return $this->LabelImageFormat;
    }
    /**
     * Set LabelImageFormat value
     * @param string $labelImageFormat
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_LabelImageType
     */
    public function setLabelImageFormat(?string $labelImageFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($labelImageFormat) && !is_string($labelImageFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelImageFormat, true), gettype($labelImageFormat)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($labelImageFormat) && mb_strlen((string) $labelImageFormat) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $labelImageFormat)), __LINE__);
        }
        $this->LabelImageFormat = $labelImageFormat;
        
        return $this;
    }
    /**
     * Get GraphicImage value
     * @return string|null
     */
    public function getGraphicImage(): ?string
    {
        return $this->GraphicImage;
    }
    /**
     * Set GraphicImage value
     * @param string $graphicImage
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_LabelImageType
     */
    public function setGraphicImage(?string $graphicImage = null): self
    {
        // validation for constraint: string
        if (!is_null($graphicImage) && !is_string($graphicImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($graphicImage, true), gettype($graphicImage)), __LINE__);
        }
        $this->GraphicImage = $graphicImage;
        
        return $this;
    }
    /**
     * Get HTMLImage value
     * @return string|null
     */
    public function getHTMLImage(): ?string
    {
        return $this->HTMLImage;
    }
    /**
     * Set HTMLImage value
     * @param string $hTMLImage
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_LabelImageType
     */
    public function setHTMLImage(?string $hTMLImage = null): self
    {
        // validation for constraint: string
        if (!is_null($hTMLImage) && !is_string($hTMLImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hTMLImage, true), gettype($hTMLImage)), __LINE__);
        }
        $this->HTMLImage = $hTMLImage;
        
        return $this;
    }
}
