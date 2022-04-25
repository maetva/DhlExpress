<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_WeightType StructType
 * @subpackage Structs
 */
class DocTypeRef_WeightType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Sum of the weight of the individual pieces/packages the rating request is for. Minimum allowed weight is 0.1kg – please see your DHL Account rate card for more information on minimum and maximum weights per piece.
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 12
     * @var float|null
     */
    protected ?float $Value = null;
    /**
     * Constructor method for docTypeRef_WeightType
     * @uses DocTypeRef_WeightType::setValue()
     * @param float $value
     */
    public function __construct(?float $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($value) && mb_strlen(mb_substr((string) $value, false !== mb_strpos((string) $value, '.') ? mb_strpos((string) $value, '.') + 1 : mb_strlen((string) $value))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($value, true), mb_strlen(mb_substr((string) $value, mb_strpos((string) $value, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($value) && mb_strlen(preg_replace('/(\D)/', '', (string) $value)) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($value, true), mb_strlen(preg_replace('/(\D)/', '', (string) $value))), __LINE__);
        }
        $this->Value = $value;

        return $this;
    }
}
