<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCondition ArrayType
 * @subpackage Arrays
 */
class ArrayOfCondition extends AbstractStructArrayBase
{
    /**
     * The ArrayOfConditionItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition[]
     */
    protected ?array $ArrayOfConditionItem = null;
    /**
     * Constructor method for ArrayOfCondition
     * @uses ArrayOfCondition::setArrayOfConditionItem()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition[] $arrayOfConditionItem
     */
    public function __construct(?array $arrayOfConditionItem = null)
    {
        $this
            ->setArrayOfConditionItem($arrayOfConditionItem);
    }
    /**
     * Get ArrayOfConditionItem value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition[]
     */
    public function getArrayOfConditionItem(): ?array
    {
        return $this->ArrayOfConditionItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfConditionItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfConditionItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfConditionItemForArrayConstraintsFromSetArrayOfConditionItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfConditionArrayOfConditionItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfConditionArrayOfConditionItemItem instanceof \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition) {
                $invalidValues[] = is_object($arrayOfConditionArrayOfConditionItemItem) ? get_class($arrayOfConditionArrayOfConditionItemItem) : sprintf('%s(%s)', gettype($arrayOfConditionArrayOfConditionItemItem), var_export($arrayOfConditionArrayOfConditionItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfConditionItem property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfConditionItem value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition[] $arrayOfConditionItem
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition
     */
    public function setArrayOfConditionItem(?array $arrayOfConditionItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfConditionItemArrayErrorMessage = self::validateArrayOfConditionItemForArrayConstraintsFromSetArrayOfConditionItem($arrayOfConditionItem))) {
            throw new InvalidArgumentException($arrayOfConditionItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfConditionItem) && count($arrayOfConditionItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfConditionItem)), __LINE__);
        }
        $this->ArrayOfConditionItem = $arrayOfConditionItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition|null
     */
    public function current(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition|null
     */
    public function item($index): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition|null
     */
    public function first(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition|null
     */
    public function last(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition|null
     */
    public function offsetGet($offset): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition $item
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition) {
            throw new InvalidArgumentException(sprintf('The ArrayOfConditionItem property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Condition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfConditionItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfConditionItem';
    }
}
