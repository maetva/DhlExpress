<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_TotalChargeTypes StructType
 * @subpackage Structs
 */
class DocTypeRef_TotalChargeTypes extends AbstractStructBase
{
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: This is the currency of the rated shipment for the product listed
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The TotalChargeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType[]
     */
    protected ?array $TotalChargeType = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for docTypeRef_TotalChargeTypes
     * @uses DocTypeRef_TotalChargeTypes::setCurrency()
     * @uses DocTypeRef_TotalChargeTypes::setTotalChargeType()
     * @uses DocTypeRef_TotalChargeTypes::setType()
     * @param string $currency
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType[] $totalChargeType
     * @param string $type
     */
    public function __construct(?string $currency = null, ?array $totalChargeType = null, ?string $type = null)
    {
        $this
            ->setCurrency($currency)
            ->setTotalChargeType($totalChargeType)
            ->setType($type);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get TotalChargeType value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType[]
     */
    public function getTotalChargeType(): ?array
    {
        return $this->TotalChargeType;
    }
    /**
     * This method is responsible for validating the values passed to the setTotalChargeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTotalChargeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTotalChargeTypeForArrayConstraintsFromSetTotalChargeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_TotalChargeTypesTotalChargeTypeItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_TotalChargeTypesTotalChargeTypeItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType) {
                $invalidValues[] = is_object($docTypeRef_TotalChargeTypesTotalChargeTypeItem) ? get_class($docTypeRef_TotalChargeTypesTotalChargeTypeItem) : sprintf('%s(%s)', gettype($docTypeRef_TotalChargeTypesTotalChargeTypeItem), var_export($docTypeRef_TotalChargeTypesTotalChargeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TotalChargeType property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TotalChargeType value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType[] $totalChargeType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes
     */
    public function setTotalChargeType(?array $totalChargeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($totalChargeTypeArrayErrorMessage = self::validateTotalChargeTypeForArrayConstraintsFromSetTotalChargeType($totalChargeType))) {
            throw new InvalidArgumentException($totalChargeTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($totalChargeType) && count($totalChargeType) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($totalChargeType)), __LINE__);
        }
        $this->TotalChargeType = $totalChargeType;
        
        return $this;
    }
    /**
     * Add item to TotalChargeType value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes
     */
    public function addToTotalChargeType(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType) {
            throw new InvalidArgumentException(sprintf('The TotalChargeType property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\TotalChargeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->TotalChargeType) && count($this->TotalChargeType) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->TotalChargeType)), __LINE__);
        }
        $this->TotalChargeType[] = $item;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
