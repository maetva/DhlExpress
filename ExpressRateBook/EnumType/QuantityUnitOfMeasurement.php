<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QuantityUnitOfMeasurement EnumType
 * Meta information extracted from the WSDL
 * - documentation: Quantity unit of measurement used in custom invoice purposes. UOM Description BOX Boxes 2GM Centigram 2M Centimeters 2M3 Cubic Centimeters 3M3 Cubic Feet M3 Cubic Meters DPR Dozen Pairs DOZ Dozen 2NO Each PCS Pieces GM Grams GRS
 * Gross KG Kilograms L Liters M Meters 3GM Milligrams 3L Milliliters X No Unit Required NO Number 2KG Ounces PRS Pairs 2L Gallons 3KG Pounds CM2 Square Centimeters 2M2 Square Feet 3M2 Square Inches M2 Square Meters 4M2 Square Yards 3M Yards
 * @subpackage Enumerations
 */
class QuantityUnitOfMeasurement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UOM'
     * @return string 'UOM'
     */
    const VALUE_UOM = 'UOM';
    /**
     * Constant for value 'BOX'
     * @return string 'BOX'
     */
    const VALUE_BOX = 'BOX';
    /**
     * Constant for value '2GM'
     * @return string '2GM'
     */
    const VALUE_2_GM = '2GM';
    /**
     * Constant for value '2M'
     * @return string '2M'
     */
    const VALUE_2_M = '2M';
    /**
     * Constant for value '2M3'
     * @return string '2M3'
     */
    const VALUE_2_M_3_1 = '2M3';
    /**
     * Constant for value '3M3'
     * @return string '3M3'
     */
    const VALUE_3_M_3 = '3M3';
    /**
     * Constant for value 'M3'
     * @return string 'M3'
     */
    const VALUE_M_3 = 'M3';
    /**
     * Constant for value 'DPR'
     * @return string 'DPR'
     */
    const VALUE_DPR = 'DPR';
    /**
     * Constant for value 'DOZ'
     * @return string 'DOZ'
     */
    const VALUE_DOZ = 'DOZ';
    /**
     * Constant for value '2NO'
     * @return string '2NO'
     */
    const VALUE_2_NO = '2NO';
    /**
     * Constant for value 'PCS'
     * @return string 'PCS'
     */
    const VALUE_PCS = 'PCS';
    /**
     * Constant for value 'GM'
     * @return string 'GM'
     */
    const VALUE_GM = 'GM';
    /**
     * Constant for value 'GRS'
     * @return string 'GRS'
     */
    const VALUE_GRS = 'GRS';
    /**
     * Constant for value 'KG'
     * @return string 'KG'
     */
    const VALUE_KG = 'KG';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value '3GM'
     * @return string '3GM'
     */
    const VALUE_3_GM = '3GM';
    /**
     * Constant for value '3L'
     * @return string '3L'
     */
    const VALUE_3_L = '3L';
    /**
     * Constant for value 'X'
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Constant for value 'NO'
     * @return string 'NO'
     */
    const VALUE_NO = 'NO';
    /**
     * Constant for value '2KG'
     * @return string '2KG'
     */
    const VALUE_2_KG = '2KG';
    /**
     * Constant for value 'PRS'
     * @return string 'PRS'
     */
    const VALUE_PRS = 'PRS';
    /**
     * Constant for value '2L'
     * @return string '2L'
     */
    const VALUE_2_L = '2L';
    /**
     * Constant for value '3KG'
     * @return string '3KG'
     */
    const VALUE_3_KG = '3KG';
    /**
     * Constant for value 'CM2'
     * @return string 'CM2'
     */
    const VALUE_CM_2 = 'CM2';
    /**
     * Constant for value '2M2'
     * @return string '2M2'
     */
    const VALUE_2_M_2 = '2M2';
    /**
     * Constant for value '3M2'
     * @return string '3M2'
     */
    const VALUE_3_M_2 = '3M2';
    /**
     * Constant for value 'M2'
     * @return string 'M2'
     */
    const VALUE_M_2 = 'M2';
    /**
     * Constant for value '4M2'
     * @return string '4M2'
     */
    const VALUE_4_M_2 = '4M2';
    /**
     * Constant for value '3M'
     * @return string '3M'
     */
    const VALUE_3_M = '3M';
    /**
     * Constant for value 'CM'
     * @return string 'CM'
     */
    const VALUE_CM = 'CM';
    /**
     * Constant for value 'CONE'
     * @return string 'CONE'
     */
    const VALUE_CONE = 'CONE';
    /**
     * Constant for value 'CT'
     * @return string 'CT'
     */
    const VALUE_CT = 'CT';
    /**
     * Constant for value 'EA'
     * @return string 'EA'
     */
    const VALUE_EA = 'EA';
    /**
     * Constant for value 'LBS'
     * @return string 'LBS'
     */
    const VALUE_LBS = 'LBS';
    /**
     * Constant for value 'RILL'
     * @return string 'RILL'
     */
    const VALUE_RILL = 'RILL';
    /**
     * Constant for value 'ROLL'
     * @return string 'ROLL'
     */
    const VALUE_ROLL = 'ROLL';
    /**
     * Constant for value 'SET'
     * @return string 'SET'
     */
    const VALUE_SET = 'SET';
    /**
     * Constant for value 'TU'
     * @return string 'TU'
     */
    const VALUE_TU = 'TU';
    /**
     * Constant for value 'YDS'
     * @return string 'YDS'
     */
    const VALUE_YDS = 'YDS';
    /**
     * Return allowed values
     * @uses self::VALUE_UOM
     * @uses self::VALUE_BOX
     * @uses self::VALUE_2_GM
     * @uses self::VALUE_2_M_1
     * @uses self::VALUE_2_M_3_1
     * @uses self::VALUE_3_M_3
     * @uses self::VALUE_M_3
     * @uses self::VALUE_DPR
     * @uses self::VALUE_DOZ
     * @uses self::VALUE_2_NO
     * @uses self::VALUE_PCS
     * @uses self::VALUE_GM
     * @uses self::VALUE_GRS
     * @uses self::VALUE_KG
     * @uses self::VALUE_L
     * @uses self::VALUE_M
     * @uses self::VALUE_3_GM
     * @uses self::VALUE_3_L
     * @uses self::VALUE_X
     * @uses self::VALUE_NO
     * @uses self::VALUE_2_KG
     * @uses self::VALUE_PRS
     * @uses self::VALUE_2_L
     * @uses self::VALUE_3_KG
     * @uses self::VALUE_CM_2
     * @uses self::VALUE_2_M_2
     * @uses self::VALUE_3_M_2
     * @uses self::VALUE_M_2
     * @uses self::VALUE_4_M_2
     * @uses self::VALUE_3_M
     * @uses self::VALUE_CM
     * @uses self::VALUE_CONE
     * @uses self::VALUE_CT
     * @uses self::VALUE_EA
     * @uses self::VALUE_LBS
     * @uses self::VALUE_RILL
     * @uses self::VALUE_ROLL
     * @uses self::VALUE_SET
     * @uses self::VALUE_TU
     * @uses self::VALUE_YDS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UOM,
            self::VALUE_BOX,
            self::VALUE_2_GM,
            self::VALUE_2_M_1,
            self::VALUE_2_M_3_1,
            self::VALUE_3_M_3,
            self::VALUE_M_3,
            self::VALUE_DPR,
            self::VALUE_DOZ,
            self::VALUE_2_NO,
            self::VALUE_PCS,
            self::VALUE_GM,
            self::VALUE_GRS,
            self::VALUE_KG,
            self::VALUE_L,
            self::VALUE_M,
            self::VALUE_3_GM,
            self::VALUE_3_L,
            self::VALUE_X,
            self::VALUE_NO,
            self::VALUE_2_KG,
            self::VALUE_PRS,
            self::VALUE_2_L,
            self::VALUE_3_KG,
            self::VALUE_CM_2,
            self::VALUE_2_M_2,
            self::VALUE_3_M_2,
            self::VALUE_M_2,
            self::VALUE_4_M_2,
            self::VALUE_3_M,
            self::VALUE_CM,
            self::VALUE_CONE,
            self::VALUE_CT,
            self::VALUE_EA,
            self::VALUE_LBS,
            self::VALUE_RILL,
            self::VALUE_ROLL,
            self::VALUE_SET,
            self::VALUE_TU,
            self::VALUE_YDS,
        ];
    }
}
