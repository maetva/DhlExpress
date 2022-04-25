<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogoImageFormat EnumType
 * Meta information extracted from the WSDL
 * - documentation: Customer Logo Image Format
 * @subpackage Enumerations
 */
class LogoImageFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
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
     * Constant for value 'JPG'
     * @return string 'JPG'
     */
    const VALUE_JPG = 'JPG';
    /**
     * Return allowed values
     * @uses self::VALUE_PNG
     * @uses self::VALUE_GIF
     * @uses self::VALUE_JPEG
     * @uses self::VALUE_JPG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PNG,
            self::VALUE_GIF,
            self::VALUE_JPEG,
            self::VALUE_JPG,
        ];
    }
}
