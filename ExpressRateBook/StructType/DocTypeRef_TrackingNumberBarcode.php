<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_TrackingNumberBarcode StructType
 * Meta information extracted from the WSDL
 * - documentation: Tracking number barcodes base64 image for each piece in create shipment request
 * @subpackage Structs
 */
class DocTypeRef_TrackingNumberBarcode extends AbstractStructBase
{
    /**
     * The TrackingNumberBarcodeContent
     * Meta information extracted from the WSDL
     * - base: xsd:base64Binary
     * @var string|null
     */
    protected ?string $TrackingNumberBarcodeContent = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $number = null;
    /**
     * Constructor method for docTypeRef_TrackingNumberBarcode
     * @uses DocTypeRef_TrackingNumberBarcode::setTrackingNumberBarcodeContent()
     * @uses DocTypeRef_TrackingNumberBarcode::setNumber()
     * @param string $trackingNumberBarcodeContent
     * @param int $number
     */
    public function __construct(?string $trackingNumberBarcodeContent = null, ?int $number = null)
    {
        $this
            ->setTrackingNumberBarcodeContent($trackingNumberBarcodeContent)
            ->setNumber($number);
    }
    /**
     * Get TrackingNumberBarcodeContent value
     * @return string|null
     */
    public function getTrackingNumberBarcodeContent(): ?string
    {
        return $this->TrackingNumberBarcodeContent;
    }
    /**
     * Set TrackingNumberBarcodeContent value
     * @param string $trackingNumberBarcodeContent
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode
     */
    public function setTrackingNumberBarcodeContent(?string $trackingNumberBarcodeContent = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingNumberBarcodeContent) && !is_string($trackingNumberBarcodeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumberBarcodeContent, true), gettype($trackingNumberBarcodeContent)), __LINE__);
        }
        $this->TrackingNumberBarcodeContent = $trackingNumberBarcodeContent;
        
        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcode
     */
    public function setNumber(?int $number = null): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($number) && $number > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($number, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($number) && $number < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($number, true)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
}
