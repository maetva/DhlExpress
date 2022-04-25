<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_TrackingNumberBarcodes StructType
 * @subpackage Structs
 */
class DocTypeRef_TrackingNumberBarcodes extends AbstractStructBase
{
    /**
     * The TrackingNumberBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode[]
     */
    protected ?array $TrackingNumberBarcode = null;
    /**
     * Constructor method for docTypeRef_TrackingNumberBarcodes
     * @uses DocTypeRef_TrackingNumberBarcodes::setTrackingNumberBarcode()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode[] $trackingNumberBarcode
     */
    public function __construct(?array $trackingNumberBarcode = null)
    {
        $this
            ->setTrackingNumberBarcode($trackingNumberBarcode);
    }
    /**
     * Get TrackingNumberBarcode value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode[]
     */
    public function getTrackingNumberBarcode(): ?array
    {
        return $this->TrackingNumberBarcode;
    }
    /**
     * This method is responsible for validating the values passed to the setTrackingNumberBarcode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrackingNumberBarcode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrackingNumberBarcodeForArrayConstraintsFromSetTrackingNumberBarcode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode) {
                $invalidValues[] = is_object($docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem) ? get_class($docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem) : sprintf('%s(%s)', gettype($docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem), var_export($docTypeRef_TrackingNumberBarcodesTrackingNumberBarcodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TrackingNumberBarcode property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TrackingNumberBarcode value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode[] $trackingNumberBarcode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes
     */
    public function setTrackingNumberBarcode(?array $trackingNumberBarcode = null): self
    {
        // validation for constraint: array
        if ('' !== ($trackingNumberBarcodeArrayErrorMessage = self::validateTrackingNumberBarcodeForArrayConstraintsFromSetTrackingNumberBarcode($trackingNumberBarcode))) {
            throw new InvalidArgumentException($trackingNumberBarcodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($trackingNumberBarcode) && count($trackingNumberBarcode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($trackingNumberBarcode)), __LINE__);
        }
        $this->TrackingNumberBarcode = $trackingNumberBarcode;
        
        return $this;
    }
    /**
     * Add item to TrackingNumberBarcode value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes
     */
    public function addToTrackingNumberBarcode(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode) {
            throw new InvalidArgumentException(sprintf('The TrackingNumberBarcode property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TrackingNumberBarcode) && count($this->TrackingNumberBarcode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TrackingNumberBarcode)), __LINE__);
        }
        $this->TrackingNumberBarcode[] = $item;
        
        return $this;
    }
}
