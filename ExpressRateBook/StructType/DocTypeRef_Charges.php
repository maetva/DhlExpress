<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Charges StructType
 * @subpackage Structs
 */
class DocTypeRef_Charges extends AbstractStructBase
{
    /**
     * The Charge
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
     */
    protected ?array $Charge = null;
    /**
     * Constructor method for docTypeRef_Charges
     * @uses DocTypeRef_Charges::setCharge()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     */
    public function __construct(?array $charge = null)
    {
        $this
            ->setCharge($charge);
    }
    /**
     * Get Charge value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
     */
    public function getCharge(): ?array
    {
        return $this->Charge;
    }
    /**
     * This method is responsible for validating the values passed to the setCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChargeForArrayConstraintsFromSetCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ChargesChargeItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ChargesChargeItem instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
                $invalidValues[] = is_object($docTypeRef_ChargesChargeItem) ? get_class($docTypeRef_ChargesChargeItem) : sprintf('%s(%s)', gettype($docTypeRef_ChargesChargeItem), var_export($docTypeRef_ChargesChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charge property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charge value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Charges
     */
    public function setCharge(?array $charge = null): self
    {
        // validation for constraint: array
        if ('' !== ($chargeArrayErrorMessage = self::validateChargeForArrayConstraintsFromSetCharge($charge))) {
            throw new InvalidArgumentException($chargeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($charge) && count($charge) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($charge)), __LINE__);
        }
        $this->Charge = $charge;
        
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType $item
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Charges
     */
    public function addToCharge(\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
            throw new InvalidArgumentException(sprintf('The Charge property can only contain items of type \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Charge) && count($this->Charge) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Charge)), __LINE__);
        }
        $this->Charge[] = $item;
        
        return $this;
    }
}
