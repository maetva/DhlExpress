<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GoodsCharacteristicsType StructType
 * @subpackage Structs
 */
class GoodsCharacteristicsType extends AbstractStructBase
{
    /**
     * The GoodsCharacteristic
     * Meta information extracted from the WSDL
     * - documentation: Goods characteristics for the line item
     * - maxOccurs: 999
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType[]
     */
    protected ?array $GoodsCharacteristic = null;
    /**
     * Constructor method for GoodsCharacteristicsType
     * @uses GoodsCharacteristicsType::setGoodsCharacteristic()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType[] $goodsCharacteristic
     */
    public function __construct(?array $goodsCharacteristic = null)
    {
        $this
            ->setGoodsCharacteristic($goodsCharacteristic);
    }
    /**
     * Get GoodsCharacteristic value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType[]
     */
    public function getGoodsCharacteristic(): ?array
    {
        return $this->GoodsCharacteristic;
    }
    /**
     * This method is responsible for validating the values passed to the setGoodsCharacteristic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoodsCharacteristic method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoodsCharacteristicForArrayConstraintsFromSetGoodsCharacteristic(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $goodsCharacteristicsTypeGoodsCharacteristicItem) {
            // validation for constraint: itemType
            if (!$goodsCharacteristicsTypeGoodsCharacteristicItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType) {
                $invalidValues[] = is_object($goodsCharacteristicsTypeGoodsCharacteristicItem) ? get_class($goodsCharacteristicsTypeGoodsCharacteristicItem) : sprintf('%s(%s)', gettype($goodsCharacteristicsTypeGoodsCharacteristicItem), var_export($goodsCharacteristicsTypeGoodsCharacteristicItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GoodsCharacteristic property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GoodsCharacteristic value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType[] $goodsCharacteristic
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType
     */
    public function setGoodsCharacteristic(?array $goodsCharacteristic = null): self
    {
        // validation for constraint: array
        if ('' !== ($goodsCharacteristicArrayErrorMessage = self::validateGoodsCharacteristicForArrayConstraintsFromSetGoodsCharacteristic($goodsCharacteristic))) {
            throw new InvalidArgumentException($goodsCharacteristicArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($goodsCharacteristic) && count($goodsCharacteristic) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($goodsCharacteristic)), __LINE__);
        }
        $this->GoodsCharacteristic = $goodsCharacteristic;
        
        return $this;
    }
    /**
     * Add item to GoodsCharacteristic value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicsType
     */
    public function addToGoodsCharacteristic(\Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType) {
            throw new InvalidArgumentException(sprintf('The GoodsCharacteristic property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\GoodsCharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GoodsCharacteristic) && count($this->GoodsCharacteristic) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GoodsCharacteristic)), __LINE__);
        }
        $this->GoodsCharacteristic[] = $item;
        
        return $this;
    }
}
