<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ServiceType StructType
 * @subpackage Structs
 */
class DocTypeRef_ServiceType extends AbstractStructBase
{
    /**
     * The TotalNet
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet[]
     */
    protected ?array $TotalNet = null;
    /**
     * The Charges
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Charges[]
     */
    protected ?array $Charges = null;
    /**
     * The TotalChargeTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes[]
     */
    protected ?array $TotalChargeTypes = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType $Items = null;
    /**
     * The DeliveryTime
     * Meta information extracted from the WSDL
     * - documentation: Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of
     * the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g.
     * 2006-06-26T17:00:00).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryTime = null;
    /**
     * The DeliveryType
     * Meta information extracted from the WSDL
     * - documentation: Delivery Date capabilities considering customs clearance days. QDDF - is the fastest ("docs") transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC - constitutes DHL's service
     * commitment as quoted at booking/shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryType = null;
    /**
     * The CutoffTime
     * Meta information extracted from the WSDL
     * - documentation: Identifies the cutoff date and time the package needs to be tendered to the shipper, in order to meet the estimated delivery time.The time is the local time of the shipment based on the shipper's time zone. The date component must be
     * in the format:YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTime = null;
    /**
     * The CutoffTimeGMT
     * Meta information extracted from the WSDL
     * - documentation: Pickup cut off time in GMT
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTimeGMT = null;
    /**
     * The CutoffTimeOffset
     * Meta information extracted from the WSDL
     * - documentation: Pickup cut off time GMT Offset
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTimeOffset = null;
    /**
     * The NextBusinessDayInd
     * Meta information extracted from the WSDL
     * - documentation: This indicator demonstrates whether the pickup date is the next business day (Y) or the requested business day (N). If the requested ship date is beyond the cutoff for that business day (or it is requested on weekend), the indicator
     * will be set to Y. If it is on the same business day as requested, the value is set to N.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NextBusinessDayInd = null;
    /**
     * The PickupWindowEarliestTime
     * Meta information extracted from the WSDL
     * - documentation: The DHL earliest time possible for pickup
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupWindowEarliestTime = null;
    /**
     * The PickupWindowLatestTime
     * Meta information extracted from the WSDL
     * - documentation: The DHL latest time possible for pickup
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupWindowLatestTime = null;
    /**
     * The OriginServiceArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $OriginServiceArea = null;
    /**
     * The DestinationServiceArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $DestinationServiceArea = null;
    /**
     * The ServiceName
     * Meta information extracted from the WSDL
     * - documentation: Local service name
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceName = null;
    /**
     * The LocalServiceType
     * Meta information extracted from the WSDL
     * - documentation: DHL “local / country specific” Product Code used to ship the items. Optional and applicable only to get Landed Cost
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LocalServiceType = null;
    /**
     * The LocalServiceCountryCode
     * Meta information extracted from the WSDL
     * - documentation: The country code for the local service used
     * - base: xsd:token
     * - maxLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LocalServiceCountryCode = null;
    /**
     * The NetworkTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network. Possible Values; - ‘DD’, Day Definite product - ‘TD’, Time Definite product
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NetworkTypeCode = null;
    /**
     * The CustomerAgreementInd
     * Meta information extracted from the WSDL
     * - documentation: Indicator that the product only can be offered to customers with prior agreement.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerAgreementInd = null;
    /**
     * The TotalTransitDays
     * Meta information extracted from the WSDL
     * - documentation: The number of transit days
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TotalTransitDays = null;
    /**
     * The PickupAdditionalDays
     * Meta information extracted from the WSDL
     * - documentation: This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupAdditionalDays = null;
    /**
     * The DeliveryAdditionalDays
     * Meta information extracted from the WSDL
     * - documentation: This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryAdditionalDays = null;
    /**
     * The VolumetricWeight
     * Meta information extracted from the WSDL
     * - documentation: The dimensional weight of the shipment
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $VolumetricWeight = null;
    /**
     * The QuotedWeight
     * Meta information extracted from the WSDL
     * - documentation: The quoted weight of the shipment
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $QuotedWeight = null;
    /**
     * The UnitOfMeasurement
     * Meta information extracted from the WSDL
     * - documentation: The unit of measurement for the dimensions of the package. Possible values: - SI, international metric system (KG, CM) - SU, the US system of measurement (LB, IN)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UnitOfMeasurement = null;
    /**
     * The PickupDayOfWeek
     * Meta information extracted from the WSDL
     * - documentation: Pickup day of the week number
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupDayOfWeek = null;
    /**
     * The DestinationDayOfWeek
     * Meta information extracted from the WSDL
     * - documentation: Destination day of the week number
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DestinationDayOfWeek = null;
    /**
     * The PricingDate
     * Meta information extracted from the WSDL
     * - documentation: The date when the rates for DHL products and services is provided
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PricingDate = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The service type provided from the courier.
     * - base: xsd:token
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The account
     * Meta information extracted from the WSDL
     * - documentation: The rate type of the charges for this package. Possible returned rate types are: PAYOR_ACCOUNT, RATED_ACCOUNT.
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * Constructor method for docTypeRef_ServiceType
     * @uses DocTypeRef_ServiceType::setTotalNet()
     * @uses DocTypeRef_ServiceType::setCharges()
     * @uses DocTypeRef_ServiceType::setTotalChargeTypes()
     * @uses DocTypeRef_ServiceType::setItems()
     * @uses DocTypeRef_ServiceType::setDeliveryTime()
     * @uses DocTypeRef_ServiceType::setDeliveryType()
     * @uses DocTypeRef_ServiceType::setCutoffTime()
     * @uses DocTypeRef_ServiceType::setCutoffTimeGMT()
     * @uses DocTypeRef_ServiceType::setCutoffTimeOffset()
     * @uses DocTypeRef_ServiceType::setNextBusinessDayInd()
     * @uses DocTypeRef_ServiceType::setPickupWindowEarliestTime()
     * @uses DocTypeRef_ServiceType::setPickupWindowLatestTime()
     * @uses DocTypeRef_ServiceType::setOriginServiceArea()
     * @uses DocTypeRef_ServiceType::setDestinationServiceArea()
     * @uses DocTypeRef_ServiceType::setServiceName()
     * @uses DocTypeRef_ServiceType::setLocalServiceType()
     * @uses DocTypeRef_ServiceType::setLocalServiceCountryCode()
     * @uses DocTypeRef_ServiceType::setNetworkTypeCode()
     * @uses DocTypeRef_ServiceType::setCustomerAgreementInd()
     * @uses DocTypeRef_ServiceType::setTotalTransitDays()
     * @uses DocTypeRef_ServiceType::setPickupAdditionalDays()
     * @uses DocTypeRef_ServiceType::setDeliveryAdditionalDays()
     * @uses DocTypeRef_ServiceType::setVolumetricWeight()
     * @uses DocTypeRef_ServiceType::setQuotedWeight()
     * @uses DocTypeRef_ServiceType::setUnitOfMeasurement()
     * @uses DocTypeRef_ServiceType::setPickupDayOfWeek()
     * @uses DocTypeRef_ServiceType::setDestinationDayOfWeek()
     * @uses DocTypeRef_ServiceType::setPricingDate()
     * @uses DocTypeRef_ServiceType::setType()
     * @uses DocTypeRef_ServiceType::setAccount()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet[] $totalNet
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Charges[] $charges
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes[] $totalChargeTypes
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType $items
     * @param string $deliveryTime
     * @param string $deliveryType
     * @param string $cutoffTime
     * @param string $cutoffTimeGMT
     * @param string $cutoffTimeOffset
     * @param string $nextBusinessDayInd
     * @param string $pickupWindowEarliestTime
     * @param string $pickupWindowLatestTime
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $originServiceArea
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $destinationServiceArea
     * @param string $serviceName
     * @param string $localServiceType
     * @param string $localServiceCountryCode
     * @param string $networkTypeCode
     * @param string $customerAgreementInd
     * @param string $totalTransitDays
     * @param string $pickupAdditionalDays
     * @param string $deliveryAdditionalDays
     * @param float $volumetricWeight
     * @param float $quotedWeight
     * @param string $unitOfMeasurement
     * @param string $pickupDayOfWeek
     * @param string $destinationDayOfWeek
     * @param string $pricingDate
     * @param string $type
     * @param string $account
     */
    public function __construct(?array $totalNet = null, ?array $charges = null, ?array $totalChargeTypes = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType $items = null, ?string $deliveryTime = null, ?string $deliveryType = null, ?string $cutoffTime = null, ?string $cutoffTimeGMT = null, ?string $cutoffTimeOffset = null, ?string $nextBusinessDayInd = null, ?string $pickupWindowEarliestTime = null, ?string $pickupWindowLatestTime = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $originServiceArea = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $destinationServiceArea = null, ?string $serviceName = null, ?string $localServiceType = null, ?string $localServiceCountryCode = null, ?string $networkTypeCode = null, ?string $customerAgreementInd = null, ?string $totalTransitDays = null, ?string $pickupAdditionalDays = null, ?string $deliveryAdditionalDays = null, ?float $volumetricWeight = null, ?float $quotedWeight = null, ?string $unitOfMeasurement = null, ?string $pickupDayOfWeek = null, ?string $destinationDayOfWeek = null, ?string $pricingDate = null, ?string $type = null, ?string $account = null)
    {
        $this
            ->setTotalNet($totalNet)
            ->setCharges($charges)
            ->setTotalChargeTypes($totalChargeTypes)
            ->setItems($items)
            ->setDeliveryTime($deliveryTime)
            ->setDeliveryType($deliveryType)
            ->setCutoffTime($cutoffTime)
            ->setCutoffTimeGMT($cutoffTimeGMT)
            ->setCutoffTimeOffset($cutoffTimeOffset)
            ->setNextBusinessDayInd($nextBusinessDayInd)
            ->setPickupWindowEarliestTime($pickupWindowEarliestTime)
            ->setPickupWindowLatestTime($pickupWindowLatestTime)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setServiceName($serviceName)
            ->setLocalServiceType($localServiceType)
            ->setLocalServiceCountryCode($localServiceCountryCode)
            ->setNetworkTypeCode($networkTypeCode)
            ->setCustomerAgreementInd($customerAgreementInd)
            ->setTotalTransitDays($totalTransitDays)
            ->setPickupAdditionalDays($pickupAdditionalDays)
            ->setDeliveryAdditionalDays($deliveryAdditionalDays)
            ->setVolumetricWeight($volumetricWeight)
            ->setQuotedWeight($quotedWeight)
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setPickupDayOfWeek($pickupDayOfWeek)
            ->setDestinationDayOfWeek($destinationDayOfWeek)
            ->setPricingDate($pricingDate)
            ->setType($type)
            ->setAccount($account);
    }
    /**
     * Get TotalNet value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet[]
     */
    public function getTotalNet(): ?array
    {
        return $this->TotalNet;
    }
    /**
     * This method is responsible for validating the values passed to the setTotalNet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTotalNet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTotalNetForArrayConstraintsFromSetTotalNet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ServiceTypeTotalNetItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ServiceTypeTotalNetItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet) {
                $invalidValues[] = is_object($docTypeRef_ServiceTypeTotalNetItem) ? get_class($docTypeRef_ServiceTypeTotalNetItem) : sprintf('%s(%s)', gettype($docTypeRef_ServiceTypeTotalNetItem), var_export($docTypeRef_ServiceTypeTotalNetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TotalNet property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TotalNet value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet[] $totalNet
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setTotalNet(?array $totalNet = null): self
    {
        // validation for constraint: array
        if ('' !== ($totalNetArrayErrorMessage = self::validateTotalNetForArrayConstraintsFromSetTotalNet($totalNet))) {
            throw new InvalidArgumentException($totalNetArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($totalNet) && count($totalNet) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($totalNet)), __LINE__);
        }
        $this->TotalNet = $totalNet;
        
        return $this;
    }
    /**
     * Add item to TotalNet value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function addToTotalNet(\Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet) {
            throw new InvalidArgumentException(sprintf('The TotalNet property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\TotalNet, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TotalNet) && count($this->TotalNet) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TotalNet)), __LINE__);
        }
        $this->TotalNet[] = $item;
        
        return $this;
    }
    /**
     * Get Charges value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Charges[]
     */
    public function getCharges(): ?array
    {
        return $this->Charges;
    }
    /**
     * This method is responsible for validating the values passed to the setCharges method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharges method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChargesForArrayConstraintsFromSetCharges(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ServiceTypeChargesItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ServiceTypeChargesItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Charges) {
                $invalidValues[] = is_object($docTypeRef_ServiceTypeChargesItem) ? get_class($docTypeRef_ServiceTypeChargesItem) : sprintf('%s(%s)', gettype($docTypeRef_ServiceTypeChargesItem), var_export($docTypeRef_ServiceTypeChargesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charges property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Charges, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charges value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Charges[] $charges
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setCharges(?array $charges = null): self
    {
        // validation for constraint: array
        if ('' !== ($chargesArrayErrorMessage = self::validateChargesForArrayConstraintsFromSetCharges($charges))) {
            throw new InvalidArgumentException($chargesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($charges) && count($charges) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($charges)), __LINE__);
        }
        $this->Charges = $charges;
        
        return $this;
    }
    /**
     * Add item to Charges value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Charges $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function addToCharges(\Maetva\DhlExpress\ExpressRateBook\StructType\Charges $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\Charges) {
            throw new InvalidArgumentException(sprintf('The Charges property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\Charges, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->Charges) && count($this->Charges) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->Charges)), __LINE__);
        }
        $this->Charges[] = $item;
        
        return $this;
    }
    /**
     * Get TotalChargeTypes value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes[]
     */
    public function getTotalChargeTypes(): ?array
    {
        return $this->TotalChargeTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setTotalChargeTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTotalChargeTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTotalChargeTypesForArrayConstraintsFromSetTotalChargeTypes(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_ServiceTypeTotalChargeTypesItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_ServiceTypeTotalChargeTypesItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes) {
                $invalidValues[] = is_object($docTypeRef_ServiceTypeTotalChargeTypesItem) ? get_class($docTypeRef_ServiceTypeTotalChargeTypesItem) : sprintf('%s(%s)', gettype($docTypeRef_ServiceTypeTotalChargeTypesItem), var_export($docTypeRef_ServiceTypeTotalChargeTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TotalChargeTypes property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TotalChargeTypes value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes[] $totalChargeTypes
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setTotalChargeTypes(?array $totalChargeTypes = null): self
    {
        // validation for constraint: array
        if ('' !== ($totalChargeTypesArrayErrorMessage = self::validateTotalChargeTypesForArrayConstraintsFromSetTotalChargeTypes($totalChargeTypes))) {
            throw new InvalidArgumentException($totalChargeTypesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($totalChargeTypes) && count($totalChargeTypes) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($totalChargeTypes)), __LINE__);
        }
        $this->TotalChargeTypes = $totalChargeTypes;
        
        return $this;
    }
    /**
     * Add item to TotalChargeTypes value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function addToTotalChargeTypes(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes) {
            throw new InvalidArgumentException(sprintf('The TotalChargeTypes property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalChargeTypes, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TotalChargeTypes) && count($this->TotalChargeTypes) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TotalChargeTypes)), __LINE__);
        }
        $this->TotalChargeTypes[] = $item;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType|null
     */
    public function getItems(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType $items
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setItems(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
    /**
     * Get DeliveryTime value
     * @return string|null
     */
    public function getDeliveryTime(): ?string
    {
        return $this->DeliveryTime;
    }
    /**
     * Set DeliveryTime value
     * @param string $deliveryTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setDeliveryTime(?string $deliveryTime = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTime) && !is_string($deliveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTime, true), gettype($deliveryTime)), __LINE__);
        }
        $this->DeliveryTime = $deliveryTime;
        
        return $this;
    }
    /**
     * Get DeliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->DeliveryType;
    }
    /**
     * Set DeliveryType value
     * @param string $deliveryType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->DeliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get CutoffTime value
     * @return string|null
     */
    public function getCutoffTime(): ?string
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param string $cutoffTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setCutoffTime(?string $cutoffTime = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTime) && !is_string($cutoffTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTime, true), gettype($cutoffTime)), __LINE__);
        }
        $this->CutoffTime = $cutoffTime;
        
        return $this;
    }
    /**
     * Get CutoffTimeGMT value
     * @return string|null
     */
    public function getCutoffTimeGMT(): ?string
    {
        return $this->CutoffTimeGMT;
    }
    /**
     * Set CutoffTimeGMT value
     * @param string $cutoffTimeGMT
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setCutoffTimeGMT(?string $cutoffTimeGMT = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTimeGMT) && !is_string($cutoffTimeGMT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTimeGMT, true), gettype($cutoffTimeGMT)), __LINE__);
        }
        $this->CutoffTimeGMT = $cutoffTimeGMT;
        
        return $this;
    }
    /**
     * Get CutoffTimeOffset value
     * @return string|null
     */
    public function getCutoffTimeOffset(): ?string
    {
        return $this->CutoffTimeOffset;
    }
    /**
     * Set CutoffTimeOffset value
     * @param string $cutoffTimeOffset
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setCutoffTimeOffset(?string $cutoffTimeOffset = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTimeOffset) && !is_string($cutoffTimeOffset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTimeOffset, true), gettype($cutoffTimeOffset)), __LINE__);
        }
        $this->CutoffTimeOffset = $cutoffTimeOffset;
        
        return $this;
    }
    /**
     * Get NextBusinessDayInd value
     * @return string|null
     */
    public function getNextBusinessDayInd(): ?string
    {
        return $this->NextBusinessDayInd;
    }
    /**
     * Set NextBusinessDayInd value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDayInd2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDayInd2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nextBusinessDayInd
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setNextBusinessDayInd(?string $nextBusinessDayInd = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDayInd2::valueIsValid($nextBusinessDayInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDayInd2', is_array($nextBusinessDayInd) ? implode(', ', $nextBusinessDayInd) : var_export($nextBusinessDayInd, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDayInd2::getValidValues())), __LINE__);
        }
        $this->NextBusinessDayInd = $nextBusinessDayInd;
        
        return $this;
    }
    /**
     * Get PickupWindowEarliestTime value
     * @return string|null
     */
    public function getPickupWindowEarliestTime(): ?string
    {
        return $this->PickupWindowEarliestTime;
    }
    /**
     * Set PickupWindowEarliestTime value
     * @param string $pickupWindowEarliestTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setPickupWindowEarliestTime(?string $pickupWindowEarliestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupWindowEarliestTime) && !is_string($pickupWindowEarliestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupWindowEarliestTime, true), gettype($pickupWindowEarliestTime)), __LINE__);
        }
        $this->PickupWindowEarliestTime = $pickupWindowEarliestTime;
        
        return $this;
    }
    /**
     * Get PickupWindowLatestTime value
     * @return string|null
     */
    public function getPickupWindowLatestTime(): ?string
    {
        return $this->PickupWindowLatestTime;
    }
    /**
     * Set PickupWindowLatestTime value
     * @param string $pickupWindowLatestTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setPickupWindowLatestTime(?string $pickupWindowLatestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupWindowLatestTime) && !is_string($pickupWindowLatestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupWindowLatestTime, true), gettype($pickupWindowLatestTime)), __LINE__);
        }
        $this->PickupWindowLatestTime = $pickupWindowLatestTime;
        
        return $this;
    }
    /**
     * Get OriginServiceArea value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType|null
     */
    public function getOriginServiceArea(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType
    {
        return $this->OriginServiceArea;
    }
    /**
     * Set OriginServiceArea value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $originServiceArea
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setOriginServiceArea(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $originServiceArea = null): self
    {
        $this->OriginServiceArea = $originServiceArea;
        
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType|null
     */
    public function getDestinationServiceArea(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $destinationServiceArea
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setDestinationServiceArea(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceAreaType $destinationServiceArea = null): self
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        
        return $this;
    }
    /**
     * Get ServiceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->ServiceName;
    }
    /**
     * Set ServiceName value
     * @param string $serviceName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->ServiceName = $serviceName;
        
        return $this;
    }
    /**
     * Get LocalServiceType value
     * @return string|null
     */
    public function getLocalServiceType(): ?string
    {
        return $this->LocalServiceType;
    }
    /**
     * Set LocalServiceType value
     * @param string $localServiceType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setLocalServiceType(?string $localServiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($localServiceType) && !is_string($localServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localServiceType, true), gettype($localServiceType)), __LINE__);
        }
        $this->LocalServiceType = $localServiceType;
        
        return $this;
    }
    /**
     * Get LocalServiceCountryCode value
     * @return string|null
     */
    public function getLocalServiceCountryCode(): ?string
    {
        return $this->LocalServiceCountryCode;
    }
    /**
     * Set LocalServiceCountryCode value
     * @param string $localServiceCountryCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setLocalServiceCountryCode(?string $localServiceCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($localServiceCountryCode) && !is_string($localServiceCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localServiceCountryCode, true), gettype($localServiceCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($localServiceCountryCode) && mb_strlen((string) $localServiceCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $localServiceCountryCode)), __LINE__);
        }
        $this->LocalServiceCountryCode = $localServiceCountryCode;
        
        return $this;
    }
    /**
     * Get NetworkTypeCode value
     * @return string|null
     */
    public function getNetworkTypeCode(): ?string
    {
        return $this->NetworkTypeCode;
    }
    /**
     * Set NetworkTypeCode value
     * @param string $networkTypeCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setNetworkTypeCode(?string $networkTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($networkTypeCode) && !is_string($networkTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkTypeCode, true), gettype($networkTypeCode)), __LINE__);
        }
        $this->NetworkTypeCode = $networkTypeCode;
        
        return $this;
    }
    /**
     * Get CustomerAgreementInd value
     * @return string|null
     */
    public function getCustomerAgreementInd(): ?string
    {
        return $this->CustomerAgreementInd;
    }
    /**
     * Set CustomerAgreementInd value
     * @param string $customerAgreementInd
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setCustomerAgreementInd(?string $customerAgreementInd = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAgreementInd) && !is_string($customerAgreementInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAgreementInd, true), gettype($customerAgreementInd)), __LINE__);
        }
        $this->CustomerAgreementInd = $customerAgreementInd;
        
        return $this;
    }
    /**
     * Get TotalTransitDays value
     * @return string|null
     */
    public function getTotalTransitDays(): ?string
    {
        return $this->TotalTransitDays;
    }
    /**
     * Set TotalTransitDays value
     * @param string $totalTransitDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setTotalTransitDays(?string $totalTransitDays = null): self
    {
        // validation for constraint: string
        if (!is_null($totalTransitDays) && !is_string($totalTransitDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTransitDays, true), gettype($totalTransitDays)), __LINE__);
        }
        $this->TotalTransitDays = $totalTransitDays;
        
        return $this;
    }
    /**
     * Get PickupAdditionalDays value
     * @return string|null
     */
    public function getPickupAdditionalDays(): ?string
    {
        return $this->PickupAdditionalDays;
    }
    /**
     * Set PickupAdditionalDays value
     * @param string $pickupAdditionalDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setPickupAdditionalDays(?string $pickupAdditionalDays = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupAdditionalDays) && !is_string($pickupAdditionalDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupAdditionalDays, true), gettype($pickupAdditionalDays)), __LINE__);
        }
        $this->PickupAdditionalDays = $pickupAdditionalDays;
        
        return $this;
    }
    /**
     * Get DeliveryAdditionalDays value
     * @return string|null
     */
    public function getDeliveryAdditionalDays(): ?string
    {
        return $this->DeliveryAdditionalDays;
    }
    /**
     * Set DeliveryAdditionalDays value
     * @param string $deliveryAdditionalDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setDeliveryAdditionalDays(?string $deliveryAdditionalDays = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryAdditionalDays) && !is_string($deliveryAdditionalDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryAdditionalDays, true), gettype($deliveryAdditionalDays)), __LINE__);
        }
        $this->DeliveryAdditionalDays = $deliveryAdditionalDays;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
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
        // validation for constraint: totalDigits(15, 12)
        if (!is_null($volumetricWeight) && mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight)) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($volumetricWeight, true), mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight))), __LINE__);
        }
        $this->VolumetricWeight = $volumetricWeight;
        
        return $this;
    }
    /**
     * Get QuotedWeight value
     * @return float|null
     */
    public function getQuotedWeight(): ?float
    {
        return $this->QuotedWeight;
    }
    /**
     * Set QuotedWeight value
     * @param float $quotedWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setQuotedWeight(?float $quotedWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($quotedWeight) && !(is_float($quotedWeight) || is_numeric($quotedWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($quotedWeight, true), gettype($quotedWeight)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($quotedWeight) && mb_strlen(mb_substr((string) $quotedWeight, false !== mb_strpos((string) $quotedWeight, '.') ? mb_strpos((string) $quotedWeight, '.') + 1 : mb_strlen((string) $quotedWeight))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($quotedWeight, true), mb_strlen(mb_substr((string) $quotedWeight, mb_strpos((string) $quotedWeight, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(15, 12)
        if (!is_null($quotedWeight) && mb_strlen(preg_replace('/(\D)/', '', (string) $quotedWeight)) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($quotedWeight, true), mb_strlen(preg_replace('/(\D)/', '', (string) $quotedWeight))), __LINE__);
        }
        $this->QuotedWeight = $quotedWeight;
        
        return $this;
    }
    /**
     * Get UnitOfMeasurement value
     * @return string|null
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->UnitOfMeasurement;
    }
    /**
     * Set UnitOfMeasurement value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $unitOfMeasurement
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::valueIsValid($unitOfMeasurement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2', is_array($unitOfMeasurement) ? implode(', ', $unitOfMeasurement) : var_export($unitOfMeasurement, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\UnitOfMeasurement2::getValidValues())), __LINE__);
        }
        $this->UnitOfMeasurement = $unitOfMeasurement;
        
        return $this;
    }
    /**
     * Get PickupDayOfWeek value
     * @return string|null
     */
    public function getPickupDayOfWeek(): ?string
    {
        return $this->PickupDayOfWeek;
    }
    /**
     * Set PickupDayOfWeek value
     * @param string $pickupDayOfWeek
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setPickupDayOfWeek(?string $pickupDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDayOfWeek) && !is_string($pickupDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDayOfWeek, true), gettype($pickupDayOfWeek)), __LINE__);
        }
        $this->PickupDayOfWeek = $pickupDayOfWeek;
        
        return $this;
    }
    /**
     * Get DestinationDayOfWeek value
     * @return string|null
     */
    public function getDestinationDayOfWeek(): ?string
    {
        return $this->DestinationDayOfWeek;
    }
    /**
     * Set DestinationDayOfWeek value
     * @param string $destinationDayOfWeek
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setDestinationDayOfWeek(?string $destinationDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDayOfWeek) && !is_string($destinationDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDayOfWeek, true), gettype($destinationDayOfWeek)), __LINE__);
        }
        $this->DestinationDayOfWeek = $destinationDayOfWeek;
        
        return $this;
    }
    /**
     * Get PricingDate value
     * @return string|null
     */
    public function getPricingDate(): ?string
    {
        return $this->PricingDate;
    }
    /**
     * Set PricingDate value
     * @param string $pricingDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setPricingDate(?string $pricingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pricingDate) && !is_string($pricingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pricingDate, true), gettype($pricingDate)), __LINE__);
        }
        $this->PricingDate = $pricingDate;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($type) && mb_strlen((string) $type) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\_x0040_account::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\_x0040_account::getValidValues()
     * @throws InvalidArgumentException
     * @param string $account
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ServiceType
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\_x0040_account::valueIsValid($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\_x0040_account', is_array($account) ? implode(', ', $account) : var_export($account, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\_x0040_account::getValidValues())), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
}
