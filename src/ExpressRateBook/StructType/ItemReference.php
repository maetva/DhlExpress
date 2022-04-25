<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemReference StructType
 * Meta information extracted from the WSDL
 * - documentation: Customs Invoice Reference entry
 * @subpackage Structs
 */
class ItemReference extends AbstractStructBase
{
    /**
     * The ItemReferenceType
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's Type | Export Declaration line items's Reference Type code. Possible values: Code Description AAJ Delivery Order ABW Stock Keeping Unit AFE Export Control Commodity number (ECCN) ALX Model BRD Brand
     * DGC Dangerous Goods Content Identifier DTC DDTC Eligibility Indicator DTM DDTC UOM DTQ DDTC Quantity DTR DDTC Registration No ECN Export Clearance Number INB In Bond shipment ITR DDTC ITAR Exemption No MAK Make MID Manufacturers Identification Code
     * OED Original Export Date OET Original Export OB Tracking ID OID Order ID OOR Original Outbound Carrier PAN Part No PON Purchase Order Number SE Serial number SON Sales order No SME DDTC SME Indicator USM DDTC USML Category Code Please refer to the
     * DHL EXPRESS - MyDHL API - SOAP Developer Guide for valid enumeration values. For more information please contact your local DHL Express API representative.
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ItemReferenceType = null;
    /**
     * The ItemReferenceNumber
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's Number | Export Declaration line items's Reference Number
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    protected ?string $ItemReferenceNumber = null;
    /**
     * Constructor method for ItemReference
     * @uses ItemReference::setItemReferenceType()
     * @uses ItemReference::setItemReferenceNumber()
     * @param string $itemReferenceType
     * @param string $itemReferenceNumber
     */
    public function __construct(?string $itemReferenceType = null, ?string $itemReferenceNumber = null)
    {
        $this
            ->setItemReferenceType($itemReferenceType)
            ->setItemReferenceNumber($itemReferenceNumber);
    }
    /**
     * Get ItemReferenceType value
     * @return string|null
     */
    public function getItemReferenceType(): ?string
    {
        return $this->ItemReferenceType;
    }
    /**
     * Set ItemReferenceType value
     * @param string $itemReferenceType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference
     */
    public function setItemReferenceType(?string $itemReferenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemReferenceType) && !is_string($itemReferenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReferenceType, true), gettype($itemReferenceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($itemReferenceType) && mb_strlen((string) $itemReferenceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $itemReferenceType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($itemReferenceType) && mb_strlen((string) $itemReferenceType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $itemReferenceType)), __LINE__);
        }
        $this->ItemReferenceType = $itemReferenceType;
        
        return $this;
    }
    /**
     * Get ItemReferenceNumber value
     * @return string|null
     */
    public function getItemReferenceNumber(): ?string
    {
        return $this->ItemReferenceNumber;
    }
    /**
     * Set ItemReferenceNumber value
     * @param string $itemReferenceNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ItemReference
     */
    public function setItemReferenceNumber(?string $itemReferenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($itemReferenceNumber) && !is_string($itemReferenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReferenceNumber, true), gettype($itemReferenceNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($itemReferenceNumber) && mb_strlen((string) $itemReferenceNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $itemReferenceNumber)), __LINE__);
        }
        $this->ItemReferenceNumber = $itemReferenceNumber;
        
        return $this;
    }
}
