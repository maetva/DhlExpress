<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QRCode StructType
 * Meta information extracted from the WSDL
 * - documentation: QR Code details
 * @subpackage Structs
 */
class QRCode extends AbstractStructBase
{
    /**
     * The ImageFormat
     * Meta information extracted from the WSDL
     * - documentation: QR Code Image Format
     * - base: xsd:token
     * - maxLength: 4
     * - minLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ImageFormat = null;
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - documentation: QR Code Image in base64 binary format
     * @var string|null
     */
    protected ?string $Image = null;
    /**
     * Constructor method for QRCode
     * @uses QRCode::setImageFormat()
     * @uses QRCode::setImage()
     * @param string $imageFormat
     * @param string $image
     */
    public function __construct(?string $imageFormat = null, ?string $image = null)
    {
        $this
            ->setImageFormat($imageFormat)
            ->setImage($image);
    }
    /**
     * Get ImageFormat value
     * @return string|null
     */
    public function getImageFormat(): ?string
    {
        return $this->ImageFormat;
    }
    /**
     * Set ImageFormat value
     * @param string $imageFormat
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode
     */
    public function setImageFormat(?string $imageFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($imageFormat) && !is_string($imageFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageFormat, true), gettype($imageFormat)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($imageFormat) && mb_strlen((string) $imageFormat) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $imageFormat)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($imageFormat) && mb_strlen((string) $imageFormat) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $imageFormat)), __LINE__);
        }
        $this->ImageFormat = $imageFormat;
        
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->Image = $image;
        
        return $this;
    }
}
