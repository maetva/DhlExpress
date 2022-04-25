<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ItemType StructType
 * @subpackage Structs
 */
class DocTypeRef_ItemType extends AbstractStructBase
{
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Item line number
     * @var int|null
     */
    protected ?int $ItemNumber = null;
    /**
     * The Charge
     * Meta information extracted from the WSDL
     * - maxOccurs: 50
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
     */
    protected ?array $Charge = null;
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Notification|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\Notification $Notification = null;
    /**
     * Constructor method for docTypeRef_ItemType
     * @uses DocTypeRef_ItemType::setItemNumber()
     * @uses DocTypeRef_ItemType::setCharge()
     * @uses DocTypeRef_ItemType::setNotification()
     * @param int $itemNumber
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Notification $notification
     */
    public function __construct(?int $itemNumber = null, ?array $charge = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\Notification $notification = null)
    {
        $this
            ->setItemNumber($itemNumber)
            ->setCharge($charge)
            ->setNotification($notification);
    }
    /**
     * Get ItemNumber value
     * @return int|null
     */
    public function getItemNumber(): ?int
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param int $itemNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType
     */
    public function setItemNumber(?int $itemNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($itemNumber) && !(is_int($itemNumber) || ctype_digit($itemNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        
        return $this;
    }
    /**
     * Get Charge value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[]
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
        foreach ($values as $docTypeRef_ItemTypeChargeItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ItemTypeChargeItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
                $invalidValues[] = is_object($docTypeRef_ItemTypeChargeItem) ? get_class($docTypeRef_ItemTypeChargeItem) : sprintf('%s(%s)', gettype($docTypeRef_ItemTypeChargeItem), var_export($docTypeRef_ItemTypeChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charge property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charge value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType[] $charge
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType
     */
    public function setCharge(?array $charge = null): self
    {
        // validation for constraint: array
        if ('' !== ($chargeArrayErrorMessage = self::validateChargeForArrayConstraintsFromSetCharge($charge))) {
            throw new InvalidArgumentException($chargeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($charge) && count($charge) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 50', count($charge)), __LINE__);
        }
        $this->Charge = $charge;
        
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType
     */
    public function addToCharge(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType) {
            throw new InvalidArgumentException(sprintf('The Charge property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ChargeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($this->Charge) && count($this->Charge) >= 50) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 50', count($this->Charge)), __LINE__);
        }
        $this->Charge[] = $item;
        
        return $this;
    }
    /**
     * Get Notification value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Notification|null
     */
    public function getNotification(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\Notification
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Notification $notification
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemType
     */
    public function setNotification(?\Maetva\DhlExpress\ExpressRateBook\StructType\Notification $notification = null): self
    {
        $this->Notification = $notification;
        
        return $this;
    }
}
