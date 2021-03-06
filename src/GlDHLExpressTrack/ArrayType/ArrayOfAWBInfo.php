<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAWBInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfAWBInfo extends AbstractStructArrayBase
{
    /**
     * The ArrayOfAWBInfoItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo[]
     */
    protected ?array $ArrayOfAWBInfoItem = null;
    /**
     * Constructor method for ArrayOfAWBInfo
     * @uses ArrayOfAWBInfo::setArrayOfAWBInfoItem()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo[] $arrayOfAWBInfoItem
     */
    public function __construct(?array $arrayOfAWBInfoItem = null)
    {
        $this
            ->setArrayOfAWBInfoItem($arrayOfAWBInfoItem);
    }
    /**
     * Get ArrayOfAWBInfoItem value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo[]
     */
    public function getArrayOfAWBInfoItem(): ?array
    {
        return $this->ArrayOfAWBInfoItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfAWBInfoItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfAWBInfoItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfAWBInfoItemForArrayConstraintsFromSetArrayOfAWBInfoItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAWBInfoArrayOfAWBInfoItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfAWBInfoArrayOfAWBInfoItemItem instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo) {
                $invalidValues[] = is_object($arrayOfAWBInfoArrayOfAWBInfoItemItem) ? get_class($arrayOfAWBInfoArrayOfAWBInfoItemItem) : sprintf('%s(%s)', gettype($arrayOfAWBInfoArrayOfAWBInfoItemItem), var_export($arrayOfAWBInfoArrayOfAWBInfoItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfAWBInfoItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfAWBInfoItem value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo[] $arrayOfAWBInfoItem
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
     */
    public function setArrayOfAWBInfoItem(?array $arrayOfAWBInfoItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfAWBInfoItemArrayErrorMessage = self::validateArrayOfAWBInfoItemForArrayConstraintsFromSetArrayOfAWBInfoItem($arrayOfAWBInfoItem))) {
            throw new InvalidArgumentException($arrayOfAWBInfoItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfAWBInfoItem) && count($arrayOfAWBInfoItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfAWBInfoItem)), __LINE__);
        }
        $this->ArrayOfAWBInfoItem = $arrayOfAWBInfoItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function current(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function item($index): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function first(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function last(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function offsetGet($offset): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo $item
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo) {
            throw new InvalidArgumentException(sprintf('The ArrayOfAWBInfoItem property can only contain items of type \Maetva\DhlExpress\GlDHLExpressTrack\StructType\AWBInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfAWBInfoItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfAWBInfoItem';
    }
}
