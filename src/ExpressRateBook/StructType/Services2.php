<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Services2 StructType
 * @subpackage Structs
 */
class Services2 extends AbstractStructBase
{
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Service2[]
     */
    protected ?array $Service = null;
    /**
     * Constructor method for Services2
     * @uses Services2::setService()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Service2[] $service
     */
    public function __construct(?array $service = null)
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Service2[]
     */
    public function getService(): ?array
    {
        return $this->Service;
    }
    /**
     * This method is responsible for validating the values passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintsFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $services2ServiceItem) {
            // validation for constraint: itemType
            if (!$services2ServiceItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Service2) {
                $invalidValues[] = is_object($services2ServiceItem) ? get_class($services2ServiceItem) : sprintf('%s(%s)', gettype($services2ServiceItem), var_export($services2ServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Service2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Service value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Service2[] $service
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Services2
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintsFromSetService($service))) {
            throw new InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($service) && count($service) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($service)), __LINE__);
        }
        $this->Service = $service;
        
        return $this;
    }
    /**
     * Add item to Service value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Service2 $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Services2
     */
    public function addToService(\Maetva\DhlExpress\ExpressRateBook\StructType\Service2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Service2) {
            throw new InvalidArgumentException(sprintf('The Service property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Service2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Service) && count($this->Service) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Service)), __LINE__);
        }
        $this->Service[] = $item;
        
        return $this;
    }
}
