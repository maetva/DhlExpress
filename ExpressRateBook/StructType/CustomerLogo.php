<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerLogo StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer Logo Image to be printed in transport label
 * @subpackage Structs
 */
class CustomerLogo extends AbstractStructBase
{
    /**
     * The LogoImage
     * Meta information extracted from the WSDL
     * - documentation: Customer Logo Image
     * - base: xsd:base64Binary
     * - maxLength: 1048576
     * @var string|null
     */
    protected ?string $LogoImage = null;
    /**
     * The LogoImageFormat
     * @var string|null
     */
    protected ?string $LogoImageFormat = null;
    /**
     * Constructor method for CustomerLogo
     * @uses CustomerLogo::setLogoImage()
     * @uses CustomerLogo::setLogoImageFormat()
     * @param string $logoImage
     * @param string $logoImageFormat
     */
    public function __construct(?string $logoImage = null, ?string $logoImageFormat = null)
    {
        $this
            ->setLogoImage($logoImage)
            ->setLogoImageFormat($logoImageFormat);
    }
    /**
     * Get LogoImage value
     * @return string|null
     */
    public function getLogoImage(): ?string
    {
        return $this->LogoImage;
    }
    /**
     * Set LogoImage value
     * @param string $logoImage
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerLogo
     */
    public function setLogoImage(?string $logoImage = null): self
    {
        // validation for constraint: string
        if (!is_null($logoImage) && !is_string($logoImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoImage, true), gettype($logoImage)), __LINE__);
        }
        // validation for constraint: maxLength(1048576)
        if (!is_null($logoImage) && mb_strlen((string) $logoImage) > 1048576) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1048576', mb_strlen((string) $logoImage)), __LINE__);
        }
        $this->LogoImage = $logoImage;
        
        return $this;
    }
    /**
     * Get LogoImageFormat value
     * @return string|null
     */
    public function getLogoImageFormat(): ?string
    {
        return $this->LogoImageFormat;
    }
    /**
     * Set LogoImageFormat value
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\LogoImageFormat::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\LogoImageFormat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logoImageFormat
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerLogo
     */
    public function setLogoImageFormat(?string $logoImageFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\LogoImageFormat::valueIsValid($logoImageFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\LogoImageFormat', is_array($logoImageFormat) ? implode(', ', $logoImageFormat) : var_export($logoImageFormat, true), implode(', ', \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\LogoImageFormat::getValidValues())), __LINE__);
        }
        $this->LogoImageFormat = $logoImageFormat;
        
        return $this;
    }
}
