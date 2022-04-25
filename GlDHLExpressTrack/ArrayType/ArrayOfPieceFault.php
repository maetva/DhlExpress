<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPieceFault ArrayType
 * @subpackage Arrays
 */
class ArrayOfPieceFault extends AbstractStructArrayBase
{
    /**
     * The ArrayOfPieceFaultItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault[]
     */
    protected ?array $ArrayOfPieceFaultItem = null;
    /**
     * Constructor method for ArrayOfPieceFault
     * @uses ArrayOfPieceFault::setArrayOfPieceFaultItem()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault[] $arrayOfPieceFaultItem
     */
    public function __construct(?array $arrayOfPieceFaultItem = null)
    {
        $this
            ->setArrayOfPieceFaultItem($arrayOfPieceFaultItem);
    }
    /**
     * Get ArrayOfPieceFaultItem value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault[]
     */
    public function getArrayOfPieceFaultItem(): ?array
    {
        return $this->ArrayOfPieceFaultItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfPieceFaultItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfPieceFaultItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfPieceFaultItemForArrayConstraintsFromSetArrayOfPieceFaultItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPieceFaultArrayOfPieceFaultItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPieceFaultArrayOfPieceFaultItemItem instanceof \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault) {
                $invalidValues[] = is_object($arrayOfPieceFaultArrayOfPieceFaultItemItem) ? get_class($arrayOfPieceFaultArrayOfPieceFaultItemItem) : sprintf('%s(%s)', gettype($arrayOfPieceFaultArrayOfPieceFaultItemItem), var_export($arrayOfPieceFaultArrayOfPieceFaultItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfPieceFaultItem property can only contain items of type \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfPieceFaultItem value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault[] $arrayOfPieceFaultItem
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault
     */
    public function setArrayOfPieceFaultItem(?array $arrayOfPieceFaultItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfPieceFaultItemArrayErrorMessage = self::validateArrayOfPieceFaultItemForArrayConstraintsFromSetArrayOfPieceFaultItem($arrayOfPieceFaultItem))) {
            throw new InvalidArgumentException($arrayOfPieceFaultItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfPieceFaultItem) && count($arrayOfPieceFaultItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfPieceFaultItem)), __LINE__);
        }
        $this->ArrayOfPieceFaultItem = $arrayOfPieceFaultItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault|null
     */
    public function current(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault|null
     */
    public function item($index): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault|null
     */
    public function first(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault|null
     */
    public function last(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault|null
     */
    public function offsetGet($offset): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault $item
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault) {
            throw new InvalidArgumentException(sprintf('The ArrayOfPieceFaultItem property can only contain items of type \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfPieceFaultItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfPieceFaultItem';
    }
}
