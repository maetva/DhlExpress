<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfChildShipmentIdentificationNumbers ArrayType
 * @subpackage Arrays
 */
class ArrayOfChildShipmentIdentificationNumbers extends AbstractStructArrayBase
{
    /**
     * The ChildShipmentIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: The children AWB numbers of requested Mother AWB Number
     * - base: xsd:string
     * - maxLength: 11
     * - maxOccurs: 100
     * - minLength: 10
     * - minOccurs: 1
     * - whiteSpace: preserve
     * @var string[]
     */
    protected array $ChildShipmentIdentificationNumber;
    /**
     * Constructor method for ArrayOfChildShipmentIdentificationNumbers
     * @uses ArrayOfChildShipmentIdentificationNumbers::setChildShipmentIdentificationNumber()
     * @param string[] $childShipmentIdentificationNumber
     */
    public function __construct(array $childShipmentIdentificationNumber)
    {
        $this
            ->setChildShipmentIdentificationNumber($childShipmentIdentificationNumber);
    }
    /**
     * Get ChildShipmentIdentificationNumber value
     * @return string[]
     */
    public function getChildShipmentIdentificationNumber(): array
    {
        return $this->ChildShipmentIdentificationNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setChildShipmentIdentificationNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildShipmentIdentificationNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildShipmentIdentificationNumberForArrayConstraintsFromSetChildShipmentIdentificationNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem)) {
                $invalidValues[] = is_object($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) ? get_class($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) : sprintf('%s(%s)', gettype($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem), var_export($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildShipmentIdentificationNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setChildShipmentIdentificationNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildShipmentIdentificationNumber method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildShipmentIdentificationNumberForMaxLengthConstraintFromSetChildShipmentIdentificationNumber($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) {
            // validation for constraint: maxLength(11)
            if (mb_strlen((string) $arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) > 11) {
                $invalidValues[] = var_export($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 11', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setChildShipmentIdentificationNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildShipmentIdentificationNumber method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildShipmentIdentificationNumberForMinLengthConstraintFromSetChildShipmentIdentificationNumber($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) {
            // validation for constraint: minLength(10)
            if (mb_strlen((string) $arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem) < 10) {
                $invalidValues[] = var_export($arrayOfChildShipmentIdentificationNumbersChildShipmentIdentificationNumberItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 10', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChildShipmentIdentificationNumber value
     * @throws InvalidArgumentException
     * @param string[] $childShipmentIdentificationNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers
     */
    public function setChildShipmentIdentificationNumber(array $childShipmentIdentificationNumber): self
    {
        // validation for constraint: array
        if ('' !== ($childShipmentIdentificationNumberArrayErrorMessage = self::validateChildShipmentIdentificationNumberForArrayConstraintsFromSetChildShipmentIdentificationNumber($childShipmentIdentificationNumber))) {
            throw new InvalidArgumentException($childShipmentIdentificationNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(11)
        if ('' !== ($childShipmentIdentificationNumberMaxLengthErrorMessage = self::validateChildShipmentIdentificationNumberForMaxLengthConstraintFromSetChildShipmentIdentificationNumber($childShipmentIdentificationNumber))) {
            throw new InvalidArgumentException($childShipmentIdentificationNumberMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($childShipmentIdentificationNumber) && count($childShipmentIdentificationNumber) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($childShipmentIdentificationNumber)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if ('' !== ($childShipmentIdentificationNumberMinLengthErrorMessage = self::validateChildShipmentIdentificationNumberForMinLengthConstraintFromSetChildShipmentIdentificationNumber($childShipmentIdentificationNumber))) {
            throw new InvalidArgumentException($childShipmentIdentificationNumberMinLengthErrorMessage, __LINE__);
        }
        $this->ChildShipmentIdentificationNumber = $childShipmentIdentificationNumber;
        
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ChildShipmentIdentificationNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ChildShipmentIdentificationNumber
     */
    public function getAttributeName(): string
    {
        return 'ChildShipmentIdentificationNumber';
    }
}
