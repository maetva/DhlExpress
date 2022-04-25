<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPieceInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfPieceInfo extends AbstractStructArrayBase
{
    /**
     * The ArrayOfPieceInfoItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo[]
     */
    protected ?array $ArrayOfPieceInfoItem = null;
    /**
     * Constructor method for ArrayOfPieceInfo
     * @uses ArrayOfPieceInfo::setArrayOfPieceInfoItem()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo[] $arrayOfPieceInfoItem
     */
    public function __construct(?array $arrayOfPieceInfoItem = null)
    {
        $this
            ->setArrayOfPieceInfoItem($arrayOfPieceInfoItem);
    }
    /**
     * Get ArrayOfPieceInfoItem value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo[]
     */
    public function getArrayOfPieceInfoItem(): ?array
    {
        return $this->ArrayOfPieceInfoItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfPieceInfoItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfPieceInfoItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfPieceInfoItemForArrayConstraintsFromSetArrayOfPieceInfoItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPieceInfoArrayOfPieceInfoItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPieceInfoArrayOfPieceInfoItemItem instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo) {
                $invalidValues[] = is_object($arrayOfPieceInfoArrayOfPieceInfoItemItem) ? get_class($arrayOfPieceInfoArrayOfPieceInfoItemItem) : sprintf('%s(%s)', gettype($arrayOfPieceInfoArrayOfPieceInfoItemItem), var_export($arrayOfPieceInfoArrayOfPieceInfoItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfPieceInfoItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfPieceInfoItem value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo[] $arrayOfPieceInfoItem
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo
     */
    public function setArrayOfPieceInfoItem(?array $arrayOfPieceInfoItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfPieceInfoItemArrayErrorMessage = self::validateArrayOfPieceInfoItemForArrayConstraintsFromSetArrayOfPieceInfoItem($arrayOfPieceInfoItem))) {
            throw new InvalidArgumentException($arrayOfPieceInfoItemArrayErrorMessage, __LINE__);
        }
        $this->ArrayOfPieceInfoItem = $arrayOfPieceInfoItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo|null
     */
    public function current(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo|null
     */
    public function item($index): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo|null
     */
    public function first(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo|null
     */
    public function last(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo|null
     */
    public function offsetGet($offset): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo $item
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo) {
            throw new InvalidArgumentException(sprintf('The ArrayOfPieceInfoItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfPieceInfoItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfPieceInfoItem';
    }
}
