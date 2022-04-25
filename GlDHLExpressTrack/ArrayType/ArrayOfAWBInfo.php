<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo[]
     */
    protected ?array $ArrayOfAWBInfoItem = null;
    /**
     * Constructor method for ArrayOfAWBInfo
     * @uses ArrayOfAWBInfo::setArrayOfAWBInfoItem()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo[] $arrayOfAWBInfoItem
     */
    public function __construct(?array $arrayOfAWBInfoItem = null)
    {
        $this
            ->setArrayOfAWBInfoItem($arrayOfAWBInfoItem);
    }
    /**
     * Get ArrayOfAWBInfoItem value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo[]
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
            if (!$arrayOfAWBInfoArrayOfAWBInfoItemItem instanceof \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo) {
                $invalidValues[] = is_object($arrayOfAWBInfoArrayOfAWBInfoItemItem) ? get_class($arrayOfAWBInfoArrayOfAWBInfoItemItem) : sprintf('%s(%s)', gettype($arrayOfAWBInfoArrayOfAWBInfoItemItem), var_export($arrayOfAWBInfoArrayOfAWBInfoItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfAWBInfoItem property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfAWBInfoItem value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo[] $arrayOfAWBInfoItem
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
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
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function current(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function item($index): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function first(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function last(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo|null
     */
    public function offsetGet($offset): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo $item
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo) {
            throw new InvalidArgumentException(sprintf('The ArrayOfAWBInfoItem property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\AWBInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
