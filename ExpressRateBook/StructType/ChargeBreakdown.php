<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeBreakdown StructType
 * @subpackage Structs
 */
class ChargeBreakdown extends AbstractStructBase
{
    /**
     * The Breakdown
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown[]
     */
    protected ?array $Breakdown = null;
    /**
     * Constructor method for ChargeBreakdown
     * @uses ChargeBreakdown::setBreakdown()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown[] $breakdown
     */
    public function __construct(?array $breakdown = null)
    {
        $this
            ->setBreakdown($breakdown);
    }
    /**
     * Get Breakdown value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown[]
     */
    public function getBreakdown(): ?array
    {
        return $this->Breakdown;
    }
    /**
     * This method is responsible for validating the values passed to the setBreakdown method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBreakdown method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBreakdownForArrayConstraintsFromSetBreakdown(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $chargeBreakdownBreakdownItem) {
            // validation for constraint: itemType
            if (!$chargeBreakdownBreakdownItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown) {
                $invalidValues[] = is_object($chargeBreakdownBreakdownItem) ? get_class($chargeBreakdownBreakdownItem) : sprintf('%s(%s)', gettype($chargeBreakdownBreakdownItem), var_export($chargeBreakdownBreakdownItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Breakdown property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Breakdown value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown[] $breakdown
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ChargeBreakdown
     */
    public function setBreakdown(?array $breakdown = null): self
    {
        // validation for constraint: array
        if ('' !== ($breakdownArrayErrorMessage = self::validateBreakdownForArrayConstraintsFromSetBreakdown($breakdown))) {
            throw new InvalidArgumentException($breakdownArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($breakdown) && count($breakdown) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($breakdown)), __LINE__);
        }
        $this->Breakdown = $breakdown;
        
        return $this;
    }
    /**
     * Add item to Breakdown value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ChargeBreakdown
     */
    public function addToBreakdown(\Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown) {
            throw new InvalidArgumentException(sprintf('The Breakdown property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Breakdown) && count($this->Breakdown) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Breakdown)), __LINE__);
        }
        $this->Breakdown[] = $item;
        
        return $this;
    }
}
