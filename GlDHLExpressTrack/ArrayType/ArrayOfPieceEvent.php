<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPieceEvent ArrayType
 * @subpackage Arrays
 */
class ArrayOfPieceEvent extends AbstractStructArrayBase
{
    /**
     * The ArrayOfPieceEventItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent[]
     */
    protected ?array $ArrayOfPieceEventItem = null;
    /**
     * Constructor method for ArrayOfPieceEvent
     * @uses ArrayOfPieceEvent::setArrayOfPieceEventItem()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent[] $arrayOfPieceEventItem
     */
    public function __construct(?array $arrayOfPieceEventItem = null)
    {
        $this
            ->setArrayOfPieceEventItem($arrayOfPieceEventItem);
    }
    /**
     * Get ArrayOfPieceEventItem value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent[]
     */
    public function getArrayOfPieceEventItem(): ?array
    {
        return $this->ArrayOfPieceEventItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfPieceEventItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfPieceEventItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfPieceEventItemForArrayConstraintsFromSetArrayOfPieceEventItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPieceEventArrayOfPieceEventItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPieceEventArrayOfPieceEventItemItem instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent) {
                $invalidValues[] = is_object($arrayOfPieceEventArrayOfPieceEventItemItem) ? get_class($arrayOfPieceEventArrayOfPieceEventItemItem) : sprintf('%s(%s)', gettype($arrayOfPieceEventArrayOfPieceEventItemItem), var_export($arrayOfPieceEventArrayOfPieceEventItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfPieceEventItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfPieceEventItem value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent[] $arrayOfPieceEventItem
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent
     */
    public function setArrayOfPieceEventItem(?array $arrayOfPieceEventItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfPieceEventItemArrayErrorMessage = self::validateArrayOfPieceEventItemForArrayConstraintsFromSetArrayOfPieceEventItem($arrayOfPieceEventItem))) {
            throw new InvalidArgumentException($arrayOfPieceEventItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfPieceEventItem) && count($arrayOfPieceEventItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfPieceEventItem)), __LINE__);
        }
        $this->ArrayOfPieceEventItem = $arrayOfPieceEventItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent|null
     */
    public function current(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent|null
     */
    public function item($index): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent|null
     */
    public function first(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent|null
     */
    public function last(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent|null
     */
    public function offsetGet($offset): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent $item
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent) {
            throw new InvalidArgumentException(sprintf('The ArrayOfPieceEventItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfPieceEventItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfPieceEventItem';
    }
}
