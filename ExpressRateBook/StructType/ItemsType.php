<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemsType StructType
 * @subpackage Structs
 */
class ItemsType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Repeating Line Items and their corresponding details e.g as stated in a Commercial Invoice
     * - maxOccurs: 1000
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType[]
     */
    protected ?array $Item = null;
    /**
     * Constructor method for ItemsType
     * @uses ItemsType::setItem()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType[] $item
     */
    public function __construct(?array $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType[]
     */
    public function getItem(): ?array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemsTypeItemItem) {
            // validation for constraint: itemType
            if (!$itemsTypeItemItem instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType) {
                $invalidValues[] = is_object($itemsTypeItemItem) ? get_class($itemsTypeItemItem) : sprintf('%s(%s)', gettype($itemsTypeItemItem), var_export($itemsTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType[] $item
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemsType
     */
    public function setItem(?array $item = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($item) && count($item) > 1000) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($item)), __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType $item
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemsType
     */
    public function addToItem(\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->Item) && count($this->Item) >= 1000) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->Item)), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
