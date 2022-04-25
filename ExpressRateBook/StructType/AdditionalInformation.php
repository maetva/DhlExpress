<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional Informations for export line item
 * @subpackage Structs
 */
class AdditionalInformation extends AbstractStructBase
{
    /**
     * The AdditionalInformationText
     * Meta information extracted from the WSDL
     * - documentation: Export line item's additional information text that can be printed in customs invoice.
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $AdditionalInformationText = null;
    /**
     * The BillingCode
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $BillingCode = null;
    /**
     * The OriginServiceArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType $OriginServiceArea = null;
    /**
     * The DestinationServiceArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType $DestinationServiceArea = null;
    /**
     * The Ship
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType $Ship = null;
    /**
     * The VolumetricWeight
     * Meta information extracted from the WSDL
     * - documentation: Dimensional Weight
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $VolumetricWeight = null;
    /**
     * The DHLRoutingCode
     * Meta information extracted from the WSDL
     * - documentation: Routing Code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DHLRoutingCode = null;
    /**
     * The DHLRoutingDataID
     * Meta information extracted from the WSDL
     * - documentation: Routing Code Identifier
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DHLRoutingDataID = null;
    /**
     * The ServiceContentCode
     * Meta information extracted from the WSDL
     * - documentation: Product Content Code
     * - base: xsd:token
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceContentCode = null;
    /**
     * The ServiceHandlingFeatureCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes $ServiceHandlingFeatureCodes = null;
    /**
     * The DeliveryDateCode
     * Meta information extracted from the WSDL
     * - documentation: Delivery Date Code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryDateCode = null;
    /**
     * The DeliveryTimeCode
     * Meta information extracted from the WSDL
     * - documentation: Delivery Time Code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryTimeCode = null;
    /**
     * Constructor method for AdditionalInformation
     * @uses AdditionalInformation::setAdditionalInformationText()
     * @uses AdditionalInformation::setBillingCode()
     * @uses AdditionalInformation::setOriginServiceArea()
     * @uses AdditionalInformation::setDestinationServiceArea()
     * @uses AdditionalInformation::setShip()
     * @uses AdditionalInformation::setVolumetricWeight()
     * @uses AdditionalInformation::setDHLRoutingCode()
     * @uses AdditionalInformation::setDHLRoutingDataID()
     * @uses AdditionalInformation::setServiceContentCode()
     * @uses AdditionalInformation::setServiceHandlingFeatureCodes()
     * @uses AdditionalInformation::setDeliveryDateCode()
     * @uses AdditionalInformation::setDeliveryTimeCode()
     * @param string $additionalInformationText
     * @param string $billingCode
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType $originServiceArea
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType $destinationServiceArea
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType $ship
     * @param float $volumetricWeight
     * @param string $dHLRoutingCode
     * @param string $dHLRoutingDataID
     * @param string $serviceContentCode
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes $serviceHandlingFeatureCodes
     * @param string $deliveryDateCode
     * @param string $deliveryTimeCode
     */
    public function __construct(?string $additionalInformationText = null, ?string $billingCode = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType $originServiceArea = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType $destinationServiceArea = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType $ship = null, ?float $volumetricWeight = null, ?string $dHLRoutingCode = null, ?string $dHLRoutingDataID = null, ?string $serviceContentCode = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes $serviceHandlingFeatureCodes = null, ?string $deliveryDateCode = null, ?string $deliveryTimeCode = null)
    {
        $this
            ->setAdditionalInformationText($additionalInformationText)
            ->setBillingCode($billingCode)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setShip($ship)
            ->setVolumetricWeight($volumetricWeight)
            ->setDHLRoutingCode($dHLRoutingCode)
            ->setDHLRoutingDataID($dHLRoutingDataID)
            ->setServiceContentCode($serviceContentCode)
            ->setServiceHandlingFeatureCodes($serviceHandlingFeatureCodes)
            ->setDeliveryDateCode($deliveryDateCode)
            ->setDeliveryTimeCode($deliveryTimeCode);
    }
    /**
     * Get AdditionalInformationText value
     * @return string|null
     */
    public function getAdditionalInformationText(): ?string
    {
        return $this->AdditionalInformationText;
    }
    /**
     * Set AdditionalInformationText value
     * @param string $additionalInformationText
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setAdditionalInformationText(?string $additionalInformationText = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalInformationText) && !is_string($additionalInformationText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInformationText, true), gettype($additionalInformationText)), __LINE__);
        }
        $this->AdditionalInformationText = $additionalInformationText;

        return $this;
    }
    /**
     * Get BillingCode value
     * @return string|null
     */
    public function getBillingCode(): ?string
    {
        return $this->BillingCode;
    }
    /**
     * Set BillingCode value
     * @param string $billingCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setBillingCode(?string $billingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($billingCode) && !is_string($billingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCode, true), gettype($billingCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($billingCode) && mb_strlen((string) $billingCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $billingCode)), __LINE__);
        }
        $this->BillingCode = $billingCode;

        return $this;
    }
    /**
     * Get OriginServiceArea value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType|null
     */
    public function getOriginServiceArea(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType
    {
        return $this->OriginServiceArea;
    }
    /**
     * Set OriginServiceArea value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType $originServiceArea
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setOriginServiceArea(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OriginServiceAreaType $originServiceArea = null): self
    {
        $this->OriginServiceArea = $originServiceArea;

        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType|null
     */
    public function getDestinationServiceArea(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType $destinationServiceArea
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setDestinationServiceArea(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DestinationServiceAreaType $destinationServiceArea = null): self
    {
        $this->DestinationServiceArea = $destinationServiceArea;

        return $this;
    }
    /**
     * Get Ship value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType|null
     */
    public function getShip(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
    {
        return $this->Ship;
    }
    /**
     * Set Ship value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType $ship
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setShip(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType $ship = null): self
    {
        $this->Ship = $ship;

        return $this;
    }
    /**
     * Get VolumetricWeight value
     * @return float|null
     */
    public function getVolumetricWeight(): ?float
    {
        return $this->VolumetricWeight;
    }
    /**
     * Set VolumetricWeight value
     * @param float $volumetricWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setVolumetricWeight(?float $volumetricWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($volumetricWeight) && !(is_float($volumetricWeight) || is_numeric($volumetricWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volumetricWeight, true), gettype($volumetricWeight)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($volumetricWeight) && mb_strlen(mb_substr((string) $volumetricWeight, false !== mb_strpos((string) $volumetricWeight, '.') ? mb_strpos((string) $volumetricWeight, '.') + 1 : mb_strlen((string) $volumetricWeight))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($volumetricWeight, true), mb_strlen(mb_substr((string) $volumetricWeight, mb_strpos((string) $volumetricWeight, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($volumetricWeight) && mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight)) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($volumetricWeight, true), mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight))), __LINE__);
        }
        $this->VolumetricWeight = $volumetricWeight;

        return $this;
    }
    /**
     * Get DHLRoutingCode value
     * @return string|null
     */
    public function getDHLRoutingCode(): ?string
    {
        return $this->DHLRoutingCode;
    }
    /**
     * Set DHLRoutingCode value
     * @param string $dHLRoutingCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setDHLRoutingCode(?string $dHLRoutingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($dHLRoutingCode) && !is_string($dHLRoutingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHLRoutingCode, true), gettype($dHLRoutingCode)), __LINE__);
        }
        $this->DHLRoutingCode = $dHLRoutingCode;

        return $this;
    }
    /**
     * Get DHLRoutingDataID value
     * @return string|null
     */
    public function getDHLRoutingDataID(): ?string
    {
        return $this->DHLRoutingDataID;
    }
    /**
     * Set DHLRoutingDataID value
     * @param string $dHLRoutingDataID
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setDHLRoutingDataID(?string $dHLRoutingDataID = null): self
    {
        // validation for constraint: string
        if (!is_null($dHLRoutingDataID) && !is_string($dHLRoutingDataID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHLRoutingDataID, true), gettype($dHLRoutingDataID)), __LINE__);
        }
        $this->DHLRoutingDataID = $dHLRoutingDataID;

        return $this;
    }
    /**
     * Get ServiceContentCode value
     * @return string|null
     */
    public function getServiceContentCode(): ?string
    {
        return $this->ServiceContentCode;
    }
    /**
     * Set ServiceContentCode value
     * @param string $serviceContentCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setServiceContentCode(?string $serviceContentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceContentCode) && !is_string($serviceContentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceContentCode, true), gettype($serviceContentCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceContentCode) && mb_strlen((string) $serviceContentCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceContentCode)), __LINE__);
        }
        $this->ServiceContentCode = $serviceContentCode;

        return $this;
    }
    /**
     * Get ServiceHandlingFeatureCodes value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes|null
     */
    public function getServiceHandlingFeatureCodes(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes
    {
        return $this->ServiceHandlingFeatureCodes;
    }
    /**
     * Set ServiceHandlingFeatureCodes value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes $serviceHandlingFeatureCodes
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setServiceHandlingFeatureCodes(?\Maetva\DhlExpress\ExpressRateBook\StructType\ServiceHandlingFeatureCodes $serviceHandlingFeatureCodes = null): self
    {
        $this->ServiceHandlingFeatureCodes = $serviceHandlingFeatureCodes;

        return $this;
    }
    /**
     * Get DeliveryDateCode value
     * @return string|null
     */
    public function getDeliveryDateCode(): ?string
    {
        return $this->DeliveryDateCode;
    }
    /**
     * Set DeliveryDateCode value
     * @param string $deliveryDateCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setDeliveryDateCode(?string $deliveryDateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDateCode) && !is_string($deliveryDateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDateCode, true), gettype($deliveryDateCode)), __LINE__);
        }
        $this->DeliveryDateCode = $deliveryDateCode;

        return $this;
    }
    /**
     * Get DeliveryTimeCode value
     * @return string|null
     */
    public function getDeliveryTimeCode(): ?string
    {
        return $this->DeliveryTimeCode;
    }
    /**
     * Set DeliveryTimeCode value
     * @param string $deliveryTimeCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\AdditionalInformation
     */
    public function setDeliveryTimeCode(?string $deliveryTimeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTimeCode) && !is_string($deliveryTimeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTimeCode, true), gettype($deliveryTimeCode)), __LINE__);
        }
        $this->DeliveryTimeCode = $deliveryTimeCode;

        return $this;
    }
}
