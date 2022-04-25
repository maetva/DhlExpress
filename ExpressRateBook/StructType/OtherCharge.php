<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherCharge StructType
 * Meta information extracted from the WSDL
 * - documentation: Other Charge caption and its charge value
 * @subpackage Structs
 */
class OtherCharge extends AbstractStructBase
{
    /**
     * The Caption
     * Meta information extracted from the WSDL
     * - documentation: Other Charge caption | Other Charges Caption
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Caption = null;
    /**
     * The ChargeValue
     * Meta information extracted from the WSDL
     * - documentation: Charge value can be passed to print in this field
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 18
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $ChargeValue = null;
    /**
     * The ChargeType
     * Meta information extracted from the WSDL
     * - documentation: ChargeType is mandatory element together with ChargeValue and provides more detail as to categorize the charge being provided. Possible values: ADMIN - Administration Charge/Fee/Cost DELIV - Delivery Charge/Fee/Cost DOCUM -
     * Documentation Charge/Fee/Cost EXPED - Expedite Charge/Fee/Cost EXCHA - Export Charge/Fee/Cost FRCST - Freight/Shipping Charge/Fee/Cost SSRGE - Fuel Surcharge LOGST - Logistic Charge/Fee/Cost SOTHR - Other Charge/Fee/Cost SPKGN - Packaging/Packing
     * Charge/Fee/Cost PICUP - Pickup Charge/Fee/Cost HRCRG - Handling Charge/Fee/Cost VATCR - VAT Charge/Fee/Cost INSCH - Insurance Cost (Fee) REVCH - Reverse Charge
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeType = null;
    /**
     * Constructor method for OtherCharge
     * @uses OtherCharge::setCaption()
     * @uses OtherCharge::setChargeValue()
     * @uses OtherCharge::setChargeType()
     * @param string $caption
     * @param float $chargeValue
     * @param string $chargeType
     */
    public function __construct(?string $caption = null, ?float $chargeValue = null, ?string $chargeType = null)
    {
        $this
            ->setCaption($caption)
            ->setChargeValue($chargeValue)
            ->setChargeType($chargeType);
    }
    /**
     * Get Caption value
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param string $caption
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharge
     */
    public function setCaption(?string $caption = null): self
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caption, true), gettype($caption)), __LINE__);
        }
        $this->Caption = $caption;
        
        return $this;
    }
    /**
     * Get ChargeValue value
     * @return float|null
     */
    public function getChargeValue(): ?float
    {
        return $this->ChargeValue;
    }
    /**
     * Set ChargeValue value
     * @param float $chargeValue
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharge
     */
    public function setChargeValue(?float $chargeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($chargeValue) && !(is_float($chargeValue) || is_numeric($chargeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($chargeValue, true), gettype($chargeValue)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($chargeValue) && mb_strlen(mb_substr((string) $chargeValue, false !== mb_strpos((string) $chargeValue, '.') ? mb_strpos((string) $chargeValue, '.') + 1 : mb_strlen((string) $chargeValue))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($chargeValue, true), mb_strlen(mb_substr((string) $chargeValue, mb_strpos((string) $chargeValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($chargeValue) && mb_strlen(preg_replace('/(\D)/', '', (string) $chargeValue)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($chargeValue, true), mb_strlen(preg_replace('/(\D)/', '', (string) $chargeValue))), __LINE__);
        }
        $this->ChargeValue = $chargeValue;
        
        return $this;
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType(): ?string
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ChargeType::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ChargeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $chargeType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\OtherCharge
     */
    public function setChargeType(?string $chargeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\ChargeType::valueIsValid($chargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\ChargeType', is_array($chargeType) ? implode(', ', $chargeType) : var_export($chargeType, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\ChargeType::getValidValues())), __LINE__);
        }
        $this->ChargeType = $chargeType;
        
        return $this;
    }
}
