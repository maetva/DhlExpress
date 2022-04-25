<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ItemsType StructType
 * @subpackage Structs
 */
class DocTypeRef_ItemsType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType[]
     */
    protected ?array $Item = null;
    /**
     * Constructor method for docTypeRef_ItemsType
     * @uses DocTypeRef_ItemsType::setItem()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType[] $item
     */
    public function __construct(?array $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType[]
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
        foreach ($values as $docTypeRef_ItemsTypeItemItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ItemsTypeItemItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType) {
                $invalidValues[] = is_object($docTypeRef_ItemsTypeItemItem) ? get_class($docTypeRef_ItemsTypeItemItem) : sprintf('%s(%s)', gettype($docTypeRef_ItemsTypeItemItem), var_export($docTypeRef_ItemsTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType[] $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType
     */
    public function setItem(?array $item = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($item) && count($item) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($item)), __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType
     */
    public function addToItem(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Item) && count($this->Item) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Item)), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
