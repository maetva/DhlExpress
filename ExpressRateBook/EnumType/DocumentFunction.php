<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentFunction EnumType
 * Meta information extracted from the WSDL
 * - documentation: Document function describes for what purpose was the document details captured and are planned to be used. IMPORT EXPORT BOTH
 * @subpackage Enumerations
 */
class DocumentFunction extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IMPORT'
     * @return string 'IMPORT'
     */
    const VALUE_IMPORT = 'IMPORT';
    /**
     * Constant for value 'EXPORT'
     * @return string 'EXPORT'
     */
    const VALUE_EXPORT = 'EXPORT';
    /**
     * Constant for value 'BOTH'
     * @return string 'BOTH'
     */
    const VALUE_BOTH = 'BOTH';
    /**
     * Return allowed values
     * @uses self::VALUE_IMPORT
     * @uses self::VALUE_EXPORT
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IMPORT,
            self::VALUE_EXPORT,
            self::VALUE_BOTH,
        ];
    }
}
