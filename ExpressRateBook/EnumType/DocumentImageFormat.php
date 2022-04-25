<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentImageFormat EnumType
 * Meta information extracted from the WSDL
 * - documentation: Custom Clearance Document Image Format
 * @subpackage Enumerations
 */
class DocumentImageFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
    /**
     * Constant for value 'TIFF'
     * @return string 'TIFF'
     */
    const VALUE_TIFF = 'TIFF';
    /**
     * Constant for value 'GIF'
     * @return string 'GIF'
     */
    const VALUE_GIF = 'GIF';
    /**
     * Constant for value 'JPEG'
     * @return string 'JPEG'
     */
    const VALUE_JPEG = 'JPEG';
    /**
     * Return allowed values
     * @uses self::VALUE_PDF
     * @uses self::VALUE_PNG
     * @uses self::VALUE_TIFF
     * @uses self::VALUE_GIF
     * @uses self::VALUE_JPEG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PDF,
            self::VALUE_PNG,
            self::VALUE_TIFF,
            self::VALUE_GIF,
            self::VALUE_JPEG,
        ];
    }
}
