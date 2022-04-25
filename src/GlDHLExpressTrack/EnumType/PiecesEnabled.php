<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PiecesEnabled EnumType
 * @subpackage Enumerations
 */
class PiecesEnabled extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * Meta information extracted from the WSDL
     * - documentation: S for Only Shipment Details
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'P'
     * Meta information extracted from the WSDL
     * - documentation: P for Only Piece Details
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'B'
     * Meta information extracted from the WSDL
     * - documentation: B for both Piece and Shipment Details
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_P
     * @uses self::VALUE_B
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_S,
            self::VALUE_P,
            self::VALUE_B,
        ];
    }
}
