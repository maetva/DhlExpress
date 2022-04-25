<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductsAndServices2 StructType
 * @subpackage Structs
 */
class ProductsAndServices2 extends AbstractStructBase
{
    /**
     * The ProductAndServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices[]
     */
    protected ?array $ProductAndServices = null;
    /**
     * Constructor method for ProductsAndServices2
     * @uses ProductsAndServices2::setProductAndServices()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices[] $productAndServices
     */
    public function __construct(?array $productAndServices = null)
    {
        $this
            ->setProductAndServices($productAndServices);
    }
    /**
     * Get ProductAndServices value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices[]
     */
    public function getProductAndServices(): ?array
    {
        return $this->ProductAndServices;
    }
    /**
     * This method is responsible for validating the values passed to the setProductAndServices method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductAndServices method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductAndServicesForArrayConstraintsFromSetProductAndServices(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $productsAndServices2ProductAndServicesItem) {
            // validation for constraint: itemType
            if (!$productsAndServices2ProductAndServicesItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices) {
                $invalidValues[] = is_object($productsAndServices2ProductAndServicesItem) ? get_class($productsAndServices2ProductAndServicesItem) : sprintf('%s(%s)', gettype($productsAndServices2ProductAndServicesItem), var_export($productsAndServices2ProductAndServicesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductAndServices property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductAndServices value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices[] $productAndServices
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2
     */
    public function setProductAndServices(?array $productAndServices = null): self
    {
        // validation for constraint: array
        if ('' !== ($productAndServicesArrayErrorMessage = self::validateProductAndServicesForArrayConstraintsFromSetProductAndServices($productAndServices))) {
            throw new InvalidArgumentException($productAndServicesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($productAndServices) && count($productAndServices) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($productAndServices)), __LINE__);
        }
        $this->ProductAndServices = $productAndServices;
        
        return $this;
    }
    /**
     * Add item to ProductAndServices value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2
     */
    public function addToProductAndServices(\Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices) {
            throw new InvalidArgumentException(sprintf('The ProductAndServices property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\ProductAndServices, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ProductAndServices) && count($this->ProductAndServices) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ProductAndServices)), __LINE__);
        }
        $this->ProductAndServices[] = $item;
        
        return $this;
    }
}
