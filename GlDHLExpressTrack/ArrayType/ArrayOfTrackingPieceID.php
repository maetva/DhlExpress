<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrackingPieceID ArrayType
 * @subpackage Arrays
 */
class ArrayOfTrackingPieceID extends AbstractStructArrayBase
{
    /**
     * The ArrayOfTrackingPieceIDItem
     * Meta information extracted from the WSDL
     * - documentation: DHL Piece ID
     * - base: xsd:string
     * - maxLength: 35
     * - maxOccurs: 100
     * - minLength: 1
     * - whiteSpace: preserve
     * @var string[]
     */
    protected ?array $ArrayOfTrackingPieceIDItem = null;
    /**
     * Constructor method for ArrayOfTrackingPieceID
     * @uses ArrayOfTrackingPieceID::setArrayOfTrackingPieceIDItem()
     * @param string[] $arrayOfTrackingPieceIDItem
     */
    public function __construct(?array $arrayOfTrackingPieceIDItem = null)
    {
        $this
            ->setArrayOfTrackingPieceIDItem($arrayOfTrackingPieceIDItem);
    }
    /**
     * Get ArrayOfTrackingPieceIDItem value
     * @return string[]
     */
    public function getArrayOfTrackingPieceIDItem(): ?array
    {
        return $this->ArrayOfTrackingPieceIDItem;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfTrackingPieceIDItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfTrackingPieceIDItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfTrackingPieceIDItemForArrayConstraintsFromSetArrayOfTrackingPieceIDItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem)) {
                $invalidValues[] = is_object($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) ? get_class($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) : sprintf('%s(%s)', gettype($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem), var_export($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfTrackingPieceIDItem property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setArrayOfTrackingPieceIDItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfTrackingPieceIDItem method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfTrackingPieceIDItemForMaxLengthConstraintFromSetArrayOfTrackingPieceIDItem($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) {
            // validation for constraint: maxLength(35)
            if (mb_strlen((string) $arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) > 35) {
                $invalidValues[] = var_export($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 35', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setArrayOfTrackingPieceIDItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfTrackingPieceIDItem method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfTrackingPieceIDItemForMinLengthConstraintFromSetArrayOfTrackingPieceIDItem($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem) < 1) {
                $invalidValues[] = var_export($arrayOfTrackingPieceIDArrayOfTrackingPieceIDItemItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfTrackingPieceIDItem value
     * @throws InvalidArgumentException
     * @param string[] $arrayOfTrackingPieceIDItem
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID
     */
    public function setArrayOfTrackingPieceIDItem(?array $arrayOfTrackingPieceIDItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfTrackingPieceIDItemArrayErrorMessage = self::validateArrayOfTrackingPieceIDItemForArrayConstraintsFromSetArrayOfTrackingPieceIDItem($arrayOfTrackingPieceIDItem))) {
            throw new InvalidArgumentException($arrayOfTrackingPieceIDItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(35)
        if ('' !== ($arrayOfTrackingPieceIDItemMaxLengthErrorMessage = self::validateArrayOfTrackingPieceIDItemForMaxLengthConstraintFromSetArrayOfTrackingPieceIDItem($arrayOfTrackingPieceIDItem))) {
            throw new InvalidArgumentException($arrayOfTrackingPieceIDItemMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($arrayOfTrackingPieceIDItem) && count($arrayOfTrackingPieceIDItem) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($arrayOfTrackingPieceIDItem)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($arrayOfTrackingPieceIDItemMinLengthErrorMessage = self::validateArrayOfTrackingPieceIDItemForMinLengthConstraintFromSetArrayOfTrackingPieceIDItem($arrayOfTrackingPieceIDItem))) {
            throw new InvalidArgumentException($arrayOfTrackingPieceIDItemMinLengthErrorMessage, __LINE__);
        }
        $this->ArrayOfTrackingPieceIDItem = $arrayOfTrackingPieceIDItem;
        
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ArrayOfTrackingPieceIDItem property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfTrackingPieceIDItem
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfTrackingPieceIDItem';
    }
}
