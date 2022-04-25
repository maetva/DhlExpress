<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for _x0040_account EnumType
 * @subpackage Enumerations
 */
class _x0040_account extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PAYOR_ACCOUNT'
     * @return string 'PAYOR_ACCOUNT'
     */
    const VALUE_PAYOR_ACCOUNT = 'PAYOR_ACCOUNT';
    /**
     * Constant for value 'RATED_ACCOUNT'
     * @return string 'RATED_ACCOUNT'
     */
    const VALUE_RATED_ACCOUNT = 'RATED_ACCOUNT';
    /**
     * Return allowed values
     * @uses self::VALUE_PAYOR_ACCOUNT
     * @uses self::VALUE_RATED_ACCOUNT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAYOR_ACCOUNT,
            self::VALUE_RATED_ACCOUNT,
        ];
    }
}
