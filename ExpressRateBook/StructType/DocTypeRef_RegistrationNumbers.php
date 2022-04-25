<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RegistrationNumbers StructType
 * @subpackage Structs
 */
class DocTypeRef_RegistrationNumbers extends AbstractStructBase
{
    /**
     * The RegistrationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 50
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber[]
     */
    protected ?array $RegistrationNumber = null;
    /**
     * Constructor method for docTypeRef_RegistrationNumbers
     * @uses DocTypeRef_RegistrationNumbers::setRegistrationNumber()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber[] $registrationNumber
     */
    public function __construct(?array $registrationNumber = null)
    {
        $this
            ->setRegistrationNumber($registrationNumber);
    }
    /**
     * Get RegistrationNumber value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber[]
     */
    public function getRegistrationNumber(): ?array
    {
        return $this->RegistrationNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistrationNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrationNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistrationNumberForArrayConstraintsFromSetRegistrationNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_RegistrationNumbersRegistrationNumberItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_RegistrationNumbersRegistrationNumberItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber) {
                $invalidValues[] = is_object($docTypeRef_RegistrationNumbersRegistrationNumberItem) ? get_class($docTypeRef_RegistrationNumbersRegistrationNumberItem) : sprintf('%s(%s)', gettype($docTypeRef_RegistrationNumbersRegistrationNumberItem), var_export($docTypeRef_RegistrationNumbersRegistrationNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistrationNumber property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RegistrationNumber value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber[] $registrationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers
     */
    public function setRegistrationNumber(?array $registrationNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($registrationNumberArrayErrorMessage = self::validateRegistrationNumberForArrayConstraintsFromSetRegistrationNumber($registrationNumber))) {
            throw new InvalidArgumentException($registrationNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($registrationNumber) && count($registrationNumber) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 50', count($registrationNumber)), __LINE__);
        }
        $this->RegistrationNumber = $registrationNumber;
        
        return $this;
    }
    /**
     * Add item to RegistrationNumber value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumbers
     */
    public function addToRegistrationNumber(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber) {
            throw new InvalidArgumentException(sprintf('The RegistrationNumber property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RegistrationNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($this->RegistrationNumber) && count($this->RegistrationNumber) >= 50) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 50', count($this->RegistrationNumber)), __LINE__);
        }
        $this->RegistrationNumber[] = $item;
        
        return $this;
    }
}
