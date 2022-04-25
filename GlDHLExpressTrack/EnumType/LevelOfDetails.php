<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LevelOfDetails EnumType
 * @subpackage Enumerations
 */
class LevelOfDetails extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ALL_CHECKPOINTS'
     * @return string 'ALL_CHECKPOINTS'
     */
    const VALUE_ALL_CHECKPOINTS = 'ALL_CHECKPOINTS';
    /**
     * Constant for value 'LAST_CHECKPOINT_ONLY'
     * @return string 'LAST_CHECKPOINT_ONLY'
     */
    const VALUE_LAST_CHECKPOINT_ONLY = 'LAST_CHECKPOINT_ONLY';
    /**
     * Constant for value 'ADVANCE_SHIPMENT'
     * @return string 'ADVANCE_SHIPMENT'
     */
    const VALUE_ADVANCE_SHIPMENT = 'ADVANCE_SHIPMENT';
    /**
     * Constant for value 'BBX_CHILDREN'
     * @return string 'BBX_CHILDREN'
     */
    const VALUE_BBX_CHILDREN = 'BBX_CHILDREN';
    /**
     * Constant for value 'SHIPMENT_DETAILS_ONLY'
     * @return string 'SHIPMENT_DETAILS_ONLY'
     */
    const VALUE_SHIPMENT_DETAILS_ONLY = 'SHIPMENT_DETAILS_ONLY';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL_CHECKPOINTS
     * @uses self::VALUE_LAST_CHECKPOINT_ONLY
     * @uses self::VALUE_ADVANCE_SHIPMENT
     * @uses self::VALUE_BBX_CHILDREN
     * @uses self::VALUE_SHIPMENT_DETAILS_ONLY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL_CHECKPOINTS,
            self::VALUE_LAST_CHECKPOINT_ONLY,
            self::VALUE_ADVANCE_SHIPMENT,
            self::VALUE_BBX_CHILDREN,
            self::VALUE_SHIPMENT_DETAILS_ONLY,
        ];
    }
}
