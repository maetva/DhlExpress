<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipmentEvent extends AbstractStructArrayBase
{
    /**
     * The ArrayOfShipmentEventItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent[]
     */
    protected ?array $ArrayOfShipmentEventItem = null;
    /**
     * Constructor method for ArrayOfShipmentEvent
     * @uses ArrayOfShipmentEvent::setArrayOfShipmentEventItem()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent[] $arrayOfShipmentEventItem
     */
    public function __construct(?array $arrayOfShipmentEventItem = null)
    {
        $this
            ->setArrayOfShipmentEventItem($arrayOfShipmentEventItem);
    }
    /**
     * Get ArrayOfShipmentEventItem value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent[]
     */
    public function getArrayOfShipmentEventItem(): ?array
    {
        return $this->ArrayOfShipmentEventItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfShipmentEventItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfShipmentEventItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfShipmentEventItemForArrayConstraintsFromSetArrayOfShipmentEventItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShipmentEventArrayOfShipmentEventItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentEventArrayOfShipmentEventItemItem instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent) {
                $invalidValues[] = is_object($arrayOfShipmentEventArrayOfShipmentEventItemItem) ? get_class($arrayOfShipmentEventArrayOfShipmentEventItemItem) : sprintf('%s(%s)', gettype($arrayOfShipmentEventArrayOfShipmentEventItemItem), var_export($arrayOfShipmentEventArrayOfShipmentEventItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfShipmentEventItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfShipmentEventItem value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent[] $arrayOfShipmentEventItem
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent
     */
    public function setArrayOfShipmentEventItem(?array $arrayOfShipmentEventItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfShipmentEventItemArrayErrorMessage = self::validateArrayOfShipmentEventItemForArrayConstraintsFromSetArrayOfShipmentEventItem($arrayOfShipmentEventItem))) {
            throw new InvalidArgumentException($arrayOfShipmentEventItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfShipmentEventItem) && count($arrayOfShipmentEventItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfShipmentEventItem)), __LINE__);
        }
        $this->ArrayOfShipmentEventItem = $arrayOfShipmentEventItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent|null
     */
    public function current(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent|null
     */
    public function item($index): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent|null
     */
    public function first(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent|null
     */
    public function last(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent|null
     */
    public function offsetGet($offset): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent $item
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent) {
            throw new InvalidArgumentException(sprintf('The ArrayOfShipmentEventItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfShipmentEventItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfShipmentEventItem';
    }
}
