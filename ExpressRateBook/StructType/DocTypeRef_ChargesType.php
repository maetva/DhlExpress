<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ChargesType StructType
 * @subpackage Structs
 */
class DocTypeRef_ChargesType extends AbstractStructBase
{
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: This the currency for all line item charges listed in the Charge section
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The Charge
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
     */
    protected ?array $Charge = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for docTypeRef_ChargesType
     * @uses DocTypeRef_ChargesType::setCurrency()
     * @uses DocTypeRef_ChargesType::setCharge()
     * @uses DocTypeRef_ChargesType::setType()
     * @param string $currency
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     * @param string $type
     */
    public function __construct(?string $currency = null, ?array $charge = null, ?string $type = null)
    {
        $this
            ->setCurrency($currency)
            ->setCharge($charge)
            ->setType($type);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargesType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get Charge value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
     */
    public function getCharge(): ?array
    {
        return $this->Charge;
    }
    /**
     * This method is responsible for validating the values passed to the setCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChargeForArrayConstraintsFromSetCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ChargesTypeChargeItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ChargesTypeChargeItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
                $invalidValues[] = is_object($docTypeRef_ChargesTypeChargeItem) ? get_class($docTypeRef_ChargesTypeChargeItem) : sprintf('%s(%s)', gettype($docTypeRef_ChargesTypeChargeItem), var_export($docTypeRef_ChargesTypeChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charge property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charge value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargesType
     */
    public function setCharge(?array $charge = null): self
    {
        // validation for constraint: array
        if ('' !== ($chargeArrayErrorMessage = self::validateChargeForArrayConstraintsFromSetCharge($charge))) {
            throw new InvalidArgumentException($chargeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($charge) && count($charge) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($charge)), __LINE__);
        }
        $this->Charge = $charge;
        
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargesType
     */
    public function addToCharge(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
            throw new InvalidArgumentException(sprintf('The Charge property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Charge) && count($this->Charge) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Charge)), __LINE__);
        }
        $this->Charge[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargesType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
