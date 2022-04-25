<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentInfo2 EnumType
 * Meta information extracted from the WSDL
 * - documentation: CFR = Cost And Freight CIF = Cost, Insurance And Freight CIP = Carriage And Insurance Paid To CPT = Carriage Paid To DAF = Delivered At Frontier DDP = Delivered Duty Paid DDU = Delivered Duty Unpaid DAP = Delivered At Place (formerly
 * DDU) DEQ = Delivered Ex Quay (Duty Paid) DES = Delivered Ex Ship EXW = Ex Works FAS = Free Alongside Ship FCA = Free Carrier FOB = Free On Board
 * @subpackage Enumerations
 */
class PaymentInfo2 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CFR'
     * @return string 'CFR'
     */
    const VALUE_CFR = 'CFR';
    /**
     * Constant for value 'CIF'
     * @return string 'CIF'
     */
    const VALUE_CIF = 'CIF';
    /**
     * Constant for value 'CIP'
     * @return string 'CIP'
     */
    const VALUE_CIP = 'CIP';
    /**
     * Constant for value 'CPT'
     * @return string 'CPT'
     */
    const VALUE_CPT = 'CPT';
    /**
     * Constant for value 'DAF'
     * @return string 'DAF'
     */
    const VALUE_DAF = 'DAF';
    /**
     * Constant for value 'DDP'
     * @return string 'DDP'
     */
    const VALUE_DDP = 'DDP';
    /**
     * Constant for value 'DDU'
     * @return string 'DDU'
     */
    const VALUE_DDU = 'DDU';
    /**
     * Constant for value 'DAP'
     * @return string 'DAP'
     */
    const VALUE_DAP = 'DAP';
    /**
     * Constant for value 'DEQ'
     * @return string 'DEQ'
     */
    const VALUE_DEQ = 'DEQ';
    /**
     * Constant for value 'DES'
     * @return string 'DES'
     */
    const VALUE_DES = 'DES';
    /**
     * Constant for value 'EXW'
     * @return string 'EXW'
     */
    const VALUE_EXW = 'EXW';
    /**
     * Constant for value 'FAS'
     * @return string 'FAS'
     */
    const VALUE_FAS = 'FAS';
    /**
     * Constant for value 'FCA'
     * @return string 'FCA'
     */
    const VALUE_FCA = 'FCA';
    /**
     * Constant for value 'FOB'
     * @return string 'FOB'
     */
    const VALUE_FOB = 'FOB';
    /**
     * Return allowed values
     * @uses self::VALUE_CFR
     * @uses self::VALUE_CIF
     * @uses self::VALUE_CIP
     * @uses self::VALUE_CPT
     * @uses self::VALUE_DAF
     * @uses self::VALUE_DDP
     * @uses self::VALUE_DDU
     * @uses self::VALUE_DAP
     * @uses self::VALUE_DEQ
     * @uses self::VALUE_DES
     * @uses self::VALUE_EXW
     * @uses self::VALUE_FAS
     * @uses self::VALUE_FCA
     * @uses self::VALUE_FOB
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CFR,
            self::VALUE_CIF,
            self::VALUE_CIP,
            self::VALUE_CPT,
            self::VALUE_DAF,
            self::VALUE_DDP,
            self::VALUE_DDU,
            self::VALUE_DAP,
            self::VALUE_DEQ,
            self::VALUE_DES,
            self::VALUE_EXW,
            self::VALUE_FAS,
            self::VALUE_FCA,
            self::VALUE_FOB,
        ];
    }
}
