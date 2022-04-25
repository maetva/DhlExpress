<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ExchangeRateType StructType
 * @subpackage Structs
 */
class DocTypeRef_ExchangeRateType extends AbstractStructBase
{
    /**
     * The ExchangeRate
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate[]
     */
    protected ?array $ExchangeRate = null;
    /**
     * Constructor method for docTypeRef_ExchangeRateType
     * @uses DocTypeRef_ExchangeRateType::setExchangeRate()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate[] $exchangeRate
     */
    public function __construct(?array $exchangeRate = null)
    {
        $this
            ->setExchangeRate($exchangeRate);
    }
    /**
     * Get ExchangeRate value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate[]
     */
    public function getExchangeRate(): ?array
    {
        return $this->ExchangeRate;
    }
    /**
     * This method is responsible for validating the values passed to the setExchangeRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExchangeRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExchangeRateForArrayConstraintsFromSetExchangeRate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ExchangeRateTypeExchangeRateItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ExchangeRateTypeExchangeRateItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate) {
                $invalidValues[] = is_object($docTypeRef_ExchangeRateTypeExchangeRateItem) ? get_class($docTypeRef_ExchangeRateTypeExchangeRateItem) : sprintf('%s(%s)', gettype($docTypeRef_ExchangeRateTypeExchangeRateItem), var_export($docTypeRef_ExchangeRateTypeExchangeRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExchangeRate property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExchangeRate value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate[] $exchangeRate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType
     */
    public function setExchangeRate(?array $exchangeRate = null): self
    {
        // validation for constraint: array
        if ('' !== ($exchangeRateArrayErrorMessage = self::validateExchangeRateForArrayConstraintsFromSetExchangeRate($exchangeRate))) {
            throw new InvalidArgumentException($exchangeRateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($exchangeRate) && count($exchangeRate) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($exchangeRate)), __LINE__);
        }
        $this->ExchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Add item to ExchangeRate value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ExchangeRateType
     */
    public function addToExchangeRate(\Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate) {
            throw new InvalidArgumentException(sprintf('The ExchangeRate property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\ExchangeRate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->ExchangeRate) && count($this->ExchangeRate) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->ExchangeRate)), __LINE__);
        }
        $this->ExchangeRate[] = $item;
        
        return $this;
    }
}
