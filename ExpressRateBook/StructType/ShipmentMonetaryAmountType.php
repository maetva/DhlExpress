<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentMonetaryAmountType StructType
 * @subpackage Structs
 */
class ShipmentMonetaryAmountType extends AbstractStructBase
{
    /**
     * The Charges
     * Meta information extracted from the WSDL
     * - documentation: The additional charges from merchant that they would like to aggregate and sum up as part of Total Landed Cost; Additional charges from the merchant e.g Insurance charge, freight charge
     * - maxOccurs: 20
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType[]
     */
    protected ?array $Charges = null;
    /**
     * Constructor method for ShipmentMonetaryAmountType
     * @uses ShipmentMonetaryAmountType::setCharges()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType[] $charges
     */
    public function __construct(?array $charges = null)
    {
        $this
            ->setCharges($charges);
    }
    /**
     * Get Charges value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType[]
     */
    public function getCharges(): ?array
    {
        return $this->Charges;
    }
    /**
     * This method is responsible for validating the values passed to the setCharges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharges method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChargesForArrayConstraintsFromSetCharges(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentMonetaryAmountTypeChargesItem) {
            // validation for constraint: itemType
            if (!$shipmentMonetaryAmountTypeChargesItem instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType) {
                $invalidValues[] = is_object($shipmentMonetaryAmountTypeChargesItem) ? get_class($shipmentMonetaryAmountTypeChargesItem) : sprintf('%s(%s)', gettype($shipmentMonetaryAmountTypeChargesItem), var_export($shipmentMonetaryAmountTypeChargesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charges property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charges value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType[] $charges
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType
     */
    public function setCharges(?array $charges = null): self
    {
        // validation for constraint: array
        if ('' !== ($chargesArrayErrorMessage = self::validateChargesForArrayConstraintsFromSetCharges($charges))) {
            throw new InvalidArgumentException($chargesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($charges) && count($charges) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 20', count($charges)), __LINE__);
        }
        $this->Charges = $charges;
        
        return $this;
    }
    /**
     * Add item to Charges value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType $item
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ShipmentMonetaryAmountType
     */
    public function addToCharges(\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType) {
            throw new InvalidArgumentException(sprintf('The Charges property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ChargesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($this->Charges) && count($this->Charges) >= 20) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 20', count($this->Charges)), __LINE__);
        }
        $this->Charges[] = $item;
        
        return $this;
    }
}
