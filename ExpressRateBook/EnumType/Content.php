<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Content EnumType
 * @subpackage Enumerations
 */
class Content extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DOCUMENTS'
     * @return string 'DOCUMENTS'
     */
    const VALUE_DOCUMENTS = 'DOCUMENTS';
    /**
     * Constant for value 'NON_DOCUMENTS'
     * @return string 'NON_DOCUMENTS'
     */
    const VALUE_NON_DOCUMENTS = 'NON_DOCUMENTS';
    /**
     * Return allowed values
     * @uses self::VALUE_DOCUMENTS
     * @uses self::VALUE_NON_DOCUMENTS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOCUMENTS,
            self::VALUE_NON_DOCUMENTS,
        ];
    }
}
