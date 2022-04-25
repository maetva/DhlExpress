<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAWBNumber ArrayType
 * @subpackage Arrays
 */
class ArrayOfAWBNumber extends AbstractStructArrayBase
{
    /**
     * The ArrayOfAWBNumberItem
     * Meta information extracted from the WSDL
     * - documentation: DHL Waybill number
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 100
     * - minLength: 10
     * - whiteSpace: preserve
     * @var string[]
     */
    protected ?array $ArrayOfAWBNumberItem = null;
    /**
     * Constructor method for ArrayOfAWBNumber
     * @uses ArrayOfAWBNumber::setArrayOfAWBNumberItem()
     * @param string[] $arrayOfAWBNumberItem
     */
    public function __construct(?array $arrayOfAWBNumberItem = null)
    {
        $this
            ->setArrayOfAWBNumberItem($arrayOfAWBNumberItem);
    }
    /**
     * Get ArrayOfAWBNumberItem value
     * @return string[]
     */
    public function getArrayOfAWBNumberItem(): ?array
    {
        return $this->ArrayOfAWBNumberItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfAWBNumberItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfAWBNumberItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfAWBNumberItemForArrayConstraintsFromSetArrayOfAWBNumberItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAWBNumberArrayOfAWBNumberItemItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfAWBNumberArrayOfAWBNumberItemItem)) {
                $invalidValues[] = is_object($arrayOfAWBNumberArrayOfAWBNumberItemItem) ? get_class($arrayOfAWBNumberArrayOfAWBNumberItemItem) : sprintf('%s(%s)', gettype($arrayOfAWBNumberArrayOfAWBNumberItemItem), var_export($arrayOfAWBNumberArrayOfAWBNumberItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfAWBNumberItem property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setArrayOfAWBNumberItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfAWBNumberItem method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfAWBNumberItemForMaxLengthConstraintFromSetArrayOfAWBNumberItem($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAWBNumberArrayOfAWBNumberItemItem) {
            // validation for constraint: maxLength(11)
            if (mb_strlen((string) $arrayOfAWBNumberArrayOfAWBNumberItemItem) > 11) {
                $invalidValues[] = var_export($arrayOfAWBNumberArrayOfAWBNumberItemItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 11', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setArrayOfAWBNumberItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfAWBNumberItem method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfAWBNumberItemForMinLengthConstraintFromSetArrayOfAWBNumberItem($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAWBNumberArrayOfAWBNumberItemItem) {
            // validation for constraint: minLength(10)
            if (mb_strlen((string) $arrayOfAWBNumberArrayOfAWBNumberItemItem) < 10) {
                $invalidValues[] = var_export($arrayOfAWBNumberArrayOfAWBNumberItemItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 10', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfAWBNumberItem value
     * @throws InvalidArgumentException
     * @param string[] $arrayOfAWBNumberItem
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber
     */
    public function setArrayOfAWBNumberItem(?array $arrayOfAWBNumberItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfAWBNumberItemArrayErrorMessage = self::validateArrayOfAWBNumberItemForArrayConstraintsFromSetArrayOfAWBNumberItem($arrayOfAWBNumberItem))) {
            throw new InvalidArgumentException($arrayOfAWBNumberItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(11)
        if ('' !== ($arrayOfAWBNumberItemMaxLengthErrorMessage = self::validateArrayOfAWBNumberItemForMaxLengthConstraintFromSetArrayOfAWBNumberItem($arrayOfAWBNumberItem))) {
            throw new InvalidArgumentException($arrayOfAWBNumberItemMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfAWBNumberItem) && count($arrayOfAWBNumberItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfAWBNumberItem)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if ('' !== ($arrayOfAWBNumberItemMinLengthErrorMessage = self::validateArrayOfAWBNumberItemForMinLengthConstraintFromSetArrayOfAWBNumberItem($arrayOfAWBNumberItem))) {
            throw new InvalidArgumentException($arrayOfAWBNumberItemMinLengthErrorMessage, __LINE__);
        }
        $this->ArrayOfAWBNumberItem = $arrayOfAWBNumberItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ArrayOfAWBNumberItem property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfAWBNumberItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfAWBNumberItem';
    }
}
