<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NotificationMethod EnumType
 * @subpackage Enumerations
 */
class NotificationMethod extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMAIL,
        ];
    }
}
