<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RequestedShipmentType StructType
 * @subpackage Structs
 */
class DocTypeRef_RequestedShipmentType extends AbstractStructBase
{
    /**
     * The ShipmentInfo
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType $ShipmentInfo = null;
    /**
     * The ShipTimestamp
     * Meta information extracted from the WSDL
     * - documentation: Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of
     * the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g.
     * 2010-02-05T14:00:00 GMT+01:00).
     * - base: xsd:token
     * - maxLength: 29
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipTimestamp = null;
    /**
     * The PickupLocationCloseTime
     * Meta information extracted from the WSDL
     * - documentation: Identifies the customer cut-off time for courier pick-up. Only the time portions is expected to be used. The time is the local time on the shipper's country where the package is available to be picked-up, and the component must be in
     * the format: HH:MM using a 24 hour clock (e.g. 14:00).
     * - base: xsd:token
     * - maxLength: 5
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocationCloseTime = null;
    /**
     * The SpecialPickupInstruction
     * Meta information extracted from the WSDL
     * - documentation: Details special pickup instructions you may wish to send to the DHL Courier .
     * - base: xsd:string
     * - maxLength: 75
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $SpecialPickupInstruction = null;
    /**
     * The PickupLocation
     * Meta information extracted from the WSDL
     * - documentation: Provides information on where the package should be picked up by DHL courier.
     * - base: xsd:string
     * - maxLength: 80
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocation = null;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - documentation: Details the potential terms of trade for this specific shipment
     * @var string|null
     */
    protected ?string $PaymentInfo = null;
    /**
     * The InternationalDetail
     * Meta information extracted from the WSDL
     * - documentation: Conveys data elements for international shipping
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType $InternationalDetail = null;
    /**
     * The OnDemandDeliveryOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions = null;
    /**
     * The OnDemandDeliveryURLRequest
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OnDemandDeliveryURLRequest = null;
    /**
     * The Ship
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType $Ship = null;
    /**
     * The Packages
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType $Packages = null;
    /**
     * The DangerousGoods
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods $DangerousGoods = null;
    /**
     * The GetRateEstimates
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetRateEstimates = null;
    /**
     * The ShipmentNotifications
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications $ShipmentNotifications = null;
    /**
     * Constructor method for docTypeRef_RequestedShipmentType
     * @uses DocTypeRef_RequestedShipmentType::setShipmentInfo()
     * @uses DocTypeRef_RequestedShipmentType::setShipTimestamp()
     * @uses DocTypeRef_RequestedShipmentType::setPickupLocationCloseTime()
     * @uses DocTypeRef_RequestedShipmentType::setSpecialPickupInstruction()
     * @uses DocTypeRef_RequestedShipmentType::setPickupLocation()
     * @uses DocTypeRef_RequestedShipmentType::setPaymentInfo()
     * @uses DocTypeRef_RequestedShipmentType::setInternationalDetail()
     * @uses DocTypeRef_RequestedShipmentType::setOnDemandDeliveryOptions()
     * @uses DocTypeRef_RequestedShipmentType::setOnDemandDeliveryURLRequest()
     * @uses DocTypeRef_RequestedShipmentType::setShip()
     * @uses DocTypeRef_RequestedShipmentType::setPackages()
     * @uses DocTypeRef_RequestedShipmentType::setDangerousGoods()
     * @uses DocTypeRef_RequestedShipmentType::setGetRateEstimates()
     * @uses DocTypeRef_RequestedShipmentType::setShipmentNotifications()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType $shipmentInfo
     * @param string $shipTimestamp
     * @param string $pickupLocationCloseTime
     * @param string $specialPickupInstruction
     * @param string $pickupLocation
     * @param string $paymentInfo
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType $internationalDetail
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions $onDemandDeliveryOptions
     * @param string $onDemandDeliveryURLRequest
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType $ship
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType $packages
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods $dangerousGoods
     * @param string $getRateEstimates
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications $shipmentNotifications
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType $shipmentInfo = null, ?string $shipTimestamp = null, ?string $pickupLocationCloseTime = null, ?string $specialPickupInstruction = null, ?string $pickupLocation = null, ?string $paymentInfo = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType $internationalDetail = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions $onDemandDeliveryOptions = null, ?string $onDemandDeliveryURLRequest = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType $ship = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType $packages = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods $dangerousGoods = null, ?string $getRateEstimates = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications $shipmentNotifications = null)
    {
        $this
            ->setShipmentInfo($shipmentInfo)
            ->setShipTimestamp($shipTimestamp)
            ->setPickupLocationCloseTime($pickupLocationCloseTime)
            ->setSpecialPickupInstruction($specialPickupInstruction)
            ->setPickupLocation($pickupLocation)
            ->setPaymentInfo($paymentInfo)
            ->setInternationalDetail($internationalDetail)
            ->setOnDemandDeliveryOptions($onDemandDeliveryOptions)
            ->setOnDemandDeliveryURLRequest($onDemandDeliveryURLRequest)
            ->setShip($ship)
            ->setPackages($packages)
            ->setDangerousGoods($dangerousGoods)
            ->setGetRateEstimates($getRateEstimates)
            ->setShipmentNotifications($shipmentNotifications);
    }
    /**
     * Get ShipmentInfo value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType|null
     */
    public function getShipmentInfo(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType
    {
        return $this->ShipmentInfo;
    }
    /**
     * Set ShipmentInfo value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType $shipmentInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setShipmentInfo(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentInfoType $shipmentInfo = null): self
    {
        $this->ShipmentInfo = $shipmentInfo;
        
        return $this;
    }
    /**
     * Get ShipTimestamp value
     * @return string|null
     */
    public function getShipTimestamp(): ?string
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setShipTimestamp(?string $shipTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($shipTimestamp) && !is_string($shipTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipTimestamp, true), gettype($shipTimestamp)), __LINE__);
        }
        // validation for constraint: maxLength(29)
        if (!is_null($shipTimestamp) && mb_strlen((string) $shipTimestamp) > 29) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 29', mb_strlen((string) $shipTimestamp)), __LINE__);
        }
        $this->ShipTimestamp = $shipTimestamp;
        
        return $this;
    }
    /**
     * Get PickupLocationCloseTime value
     * @return string|null
     */
    public function getPickupLocationCloseTime(): ?string
    {
        return $this->PickupLocationCloseTime;
    }
    /**
     * Set PickupLocationCloseTime value
     * @param string $pickupLocationCloseTime
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setPickupLocationCloseTime(?string $pickupLocationCloseTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationCloseTime) && !is_string($pickupLocationCloseTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationCloseTime, true), gettype($pickupLocationCloseTime)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($pickupLocationCloseTime) && mb_strlen((string) $pickupLocationCloseTime) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $pickupLocationCloseTime)), __LINE__);
        }
        $this->PickupLocationCloseTime = $pickupLocationCloseTime;
        
        return $this;
    }
    /**
     * Get SpecialPickupInstruction value
     * @return string|null
     */
    public function getSpecialPickupInstruction(): ?string
    {
        return $this->SpecialPickupInstruction;
    }
    /**
     * Set SpecialPickupInstruction value
     * @param string $specialPickupInstruction
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setSpecialPickupInstruction(?string $specialPickupInstruction = null): self
    {
        // validation for constraint: string
        if (!is_null($specialPickupInstruction) && !is_string($specialPickupInstruction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specialPickupInstruction, true), gettype($specialPickupInstruction)), __LINE__);
        }
        // validation for constraint: maxLength(75)
        if (!is_null($specialPickupInstruction) && mb_strlen((string) $specialPickupInstruction) > 75) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 75', mb_strlen((string) $specialPickupInstruction)), __LINE__);
        }
        $this->SpecialPickupInstruction = $specialPickupInstruction;
        
        return $this;
    }
    /**
     * Get PickupLocation value
     * @return string|null
     */
    public function getPickupLocation(): ?string
    {
        return $this->PickupLocation;
    }
    /**
     * Set PickupLocation value
     * @param string $pickupLocation
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setPickupLocation(?string $pickupLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocation) && !is_string($pickupLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocation, true), gettype($pickupLocation)), __LINE__);
        }
        // validation for constraint: maxLength(80)
        if (!is_null($pickupLocation) && mb_strlen((string) $pickupLocation) > 80) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 80', mb_strlen((string) $pickupLocation)), __LINE__);
        }
        $this->PickupLocation = $pickupLocation;
        
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return string|null
     */
    public function getPaymentInfo(): ?string
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\PaymentInfo::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\PaymentInfo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setPaymentInfo(?string $paymentInfo = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\PaymentInfo::valueIsValid($paymentInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\PaymentInfo', is_array($paymentInfo) ? implode(', ', $paymentInfo) : var_export($paymentInfo, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\PaymentInfo::getValidValues())), __LINE__);
        }
        $this->PaymentInfo = $paymentInfo;
        
        return $this;
    }
    /**
     * Get InternationalDetail value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType|null
     */
    public function getInternationalDetail(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType
    {
        return $this->InternationalDetail;
    }
    /**
     * Set InternationalDetail value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType $internationalDetail
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setInternationalDetail(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType $internationalDetail = null): self
    {
        $this->InternationalDetail = $internationalDetail;
        
        return $this;
    }
    /**
     * Get OnDemandDeliveryOptions value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions|null
     */
    public function getOnDemandDeliveryOptions(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
    {
        return $this->OnDemandDeliveryOptions;
    }
    /**
     * Set OnDemandDeliveryOptions value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions $onDemandDeliveryOptions
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setOnDemandDeliveryOptions(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions $onDemandDeliveryOptions = null): self
    {
        $this->OnDemandDeliveryOptions = $onDemandDeliveryOptions;
        
        return $this;
    }
    /**
     * Get OnDemandDeliveryURLRequest value
     * @return string|null
     */
    public function getOnDemandDeliveryURLRequest(): ?string
    {
        return $this->OnDemandDeliveryURLRequest;
    }
    /**
     * Set OnDemandDeliveryURLRequest value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\OnDemandDeliveryURLRequest::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\OnDemandDeliveryURLRequest::getValidValues()
     * @throws InvalidArgumentException
     * @param string $onDemandDeliveryURLRequest
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setOnDemandDeliveryURLRequest(?string $onDemandDeliveryURLRequest = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\OnDemandDeliveryURLRequest::valueIsValid($onDemandDeliveryURLRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\OnDemandDeliveryURLRequest', is_array($onDemandDeliveryURLRequest) ? implode(', ', $onDemandDeliveryURLRequest) : var_export($onDemandDeliveryURLRequest, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\OnDemandDeliveryURLRequest::getValidValues())), __LINE__);
        }
        $this->OnDemandDeliveryURLRequest = $onDemandDeliveryURLRequest;
        
        return $this;
    }
    /**
     * Get Ship value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType|null
     */
    public function getShip(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
    {
        return $this->Ship;
    }
    /**
     * Set Ship value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType $ship
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setShip(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType $ship = null): self
    {
        $this->Ship = $ship;
        
        return $this;
    }
    /**
     * Get Packages value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType|null
     */
    public function getPackages(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType
    {
        return $this->Packages;
    }
    /**
     * Set Packages value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType $packages
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setPackages(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_PackagesType $packages = null): self
    {
        $this->Packages = $packages;
        
        return $this;
    }
    /**
     * Get DangerousGoods value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods|null
     */
    public function getDangerousGoods(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods
    {
        return $this->DangerousGoods;
    }
    /**
     * Set DangerousGoods value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods $dangerousGoods
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setDangerousGoods(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods $dangerousGoods = null): self
    {
        $this->DangerousGoods = $dangerousGoods;
        
        return $this;
    }
    /**
     * Get GetRateEstimates value
     * @return string|null
     */
    public function getGetRateEstimates(): ?string
    {
        return $this->GetRateEstimates;
    }
    /**
     * Set GetRateEstimates value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetRateEstimates::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetRateEstimates::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getRateEstimates
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setGetRateEstimates(?string $getRateEstimates = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetRateEstimates::valueIsValid($getRateEstimates)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetRateEstimates', is_array($getRateEstimates) ? implode(', ', $getRateEstimates) : var_export($getRateEstimates, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\GetRateEstimates::getValidValues())), __LINE__);
        }
        $this->GetRateEstimates = $getRateEstimates;
        
        return $this;
    }
    /**
     * Get ShipmentNotifications value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications|null
     */
    public function getShipmentNotifications(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications
    {
        return $this->ShipmentNotifications;
    }
    /**
     * Set ShipmentNotifications value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications $shipmentNotifications
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
     */
    public function setShipmentNotifications(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications $shipmentNotifications = null): self
    {
        $this->ShipmentNotifications = $shipmentNotifications;
        
        return $this;
    }
}
