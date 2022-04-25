<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalQuantityDefinitionsType StructType
 * @subpackage Structs
 */
class AdditionalQuantityDefinitionsType extends AbstractStructBase
{
    /**
     * The AdditionalQuantityDefinition
     * Meta information extracted from the WSDL
     * - documentation: Additional quantities for the line item
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType[]
     */
    protected ?array $AdditionalQuantityDefinition = null;
    /**
     * Constructor method for AdditionalQuantityDefinitionsType
     * @uses AdditionalQuantityDefinitionsType::setAdditionalQuantityDefinition()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType[] $additionalQuantityDefinition
     */
    public function __construct(?array $additionalQuantityDefinition = null)
    {
        $this
            ->setAdditionalQuantityDefinition($additionalQuantityDefinition);
    }
    /**
     * Get AdditionalQuantityDefinition value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType[]
     */
    public function getAdditionalQuantityDefinition(): ?array
    {
        return $this->AdditionalQuantityDefinition;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalQuantityDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalQuantityDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalQuantityDefinitionForArrayConstraintsFromSetAdditionalQuantityDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem) {
            // validation for constraint: itemType
            if (!$additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType) {
                $invalidValues[] = is_object($additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem) ? get_class($additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem) : sprintf('%s(%s)', gettype($additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem), var_export($additionalQuantityDefinitionsTypeAdditionalQuantityDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalQuantityDefinition property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalQuantityDefinition value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType[] $additionalQuantityDefinition
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType
     */
    public function setAdditionalQuantityDefinition(?array $additionalQuantityDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalQuantityDefinitionArrayErrorMessage = self::validateAdditionalQuantityDefinitionForArrayConstraintsFromSetAdditionalQuantityDefinition($additionalQuantityDefinition))) {
            throw new InvalidArgumentException($additionalQuantityDefinitionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($additionalQuantityDefinition) && count($additionalQuantityDefinition) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($additionalQuantityDefinition)), __LINE__);
        }
        $this->AdditionalQuantityDefinition = $additionalQuantityDefinition;
        
        return $this;
    }
    /**
     * Add item to AdditionalQuantityDefinition value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionsType
     */
    public function addToAdditionalQuantityDefinition(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType) {
            throw new InvalidArgumentException(sprintf('The AdditionalQuantityDefinition property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\AdditionalQuantityDefinitionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->AdditionalQuantityDefinition) && count($this->AdditionalQuantityDefinition) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->AdditionalQuantityDefinition)), __LINE__);
        }
        $this->AdditionalQuantityDefinition[] = $item;
        
        return $this;
    }
}
