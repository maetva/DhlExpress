<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QRCodeImageFormat EnumType
 * Meta information extracted from the WSDL
 * - documentation: QRCode Image Format
 * @subpackage Enumerations
 */
class QRCodeImageFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const VALUE_PNG = 'PNG';
    /**
     * Return allowed values
     * @uses self::VALUE_PNG
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PNG,
        ];
    }
}
