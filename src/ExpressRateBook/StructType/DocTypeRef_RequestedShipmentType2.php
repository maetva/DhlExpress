<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RequestedShipmentType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_RequestedShipmentType2 extends AbstractStructBase
{
    /**
     * The GetRateEstimates
     * Meta information extracted from the WSDL
     * - documentation: This element is to provide customers with options to see DHL products and services without price. This improves response times for the requests. The default value is Y, where the response only show billing currency rates per product,
     * no breakdowns.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetRateEstimates = null;
    /**
     * The GetDetailedRateBreakdown
     * Meta information extracted from the WSDL
     * - documentation: This option is to receive a breakdown of charges including taxes and discounts. The default value is N, a high level breakdown is provided then.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetDetailedRateBreakdown = null;
    /**
     * The IncludeAdditionalCurrencies
     * Meta information extracted from the WSDL
     * - documentation: To show charges in other currencies. When the 'IncludeAdditionalCurrencies' value is “Y”, value of currencies will be returned based on below ; - ‘BILLC’, billing currency - ‘PULCL’, country public rates currency -
     * ‘BASEC’, base currency The default value is N, response to show TotalNet and all other rates in Billing currency only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IncludeAdditionalCurrencies = null;
    /**
     * The DropOffType
     * Meta information extracted from the WSDL
     * - documentation: Requested value are REGULAR_PICKUP or REQUEST_COURIER, it identifies the method by which the package is to be tendered.
     * @var string|null
     */
    protected ?string $DropOffType = null;
    /**
     * The NextBusinessDay
     * Meta information extracted from the WSDL
     * - documentation: This indicator is a Y-N flag which indicates whether an error should be returned if no products are available that day (N) or if the next business day should be evaluated (Y). Default is N if not included.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NextBusinessDay = null;
    /**
     * The Ship
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2 $Ship = null;
    /**
     * The Packages
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2 $Packages = null;
    /**
     * The ShipTimestamp
     * Meta information extracted from the WSDL
     * - documentation: Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of
     * the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g.
     * 2006-06-26T17:00:00 GMT+01:00).
     * - base: xsd:token
     * - maxLength: 29
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ShipTimestamp = null;
    /**
     * The PickupLocationCloseTime
     * Meta information extracted from the WSDL
     * - documentation: For future use
     * - base: xsd:token
     * - maxLength: 29
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupLocationCloseTime = null;
    /**
     * The UnitOfMeasurement
     * Meta information extracted from the WSDL
     * - documentation: SI=the preferred system of weights and measures for Italian trade and commerce; SU=the preferred system of weights and measures for U.S. trade and commerce; Weight unit: if Type is SI it can be KG (kilograms), if Type is SU it can be
     * LB (pounds). Dimention unit: if Type is SI it can be CM, if Type is SU it can be IN (inch)
     * @var string|null
     */
    protected ?string $UnitOfMeasurement = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Details whether a shipment is non-dutiable (value DOCUMENTS) or dutiable (NON_DOCUMENTS)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The DeclaredValue
     * Meta information extracted from the WSDL
     * - documentation: Declared value of the shipment
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 18
     * @var float|null
     */
    protected ?float $DeclaredValue = null;
    /**
     * The DeclaredValueCurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: 3 character currency code for the declared value
     * - base: xsd:string
     * - maxLength: 3
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeclaredValueCurrencyCode = null;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentInfo = null;
    /**
     * The Account
     * Meta information extracted from the WSDL
     * - documentation: The DHL account number that is used for the shipment. Internally attached to this account are the customer specific rates. Please note if you use the 'Account' tag then the Billing section below is not needed.
     * - base: xsd:string
     * - maxLength: 12
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $Account = null;
    /**
     * The PayerCountryCode
     * Meta information extracted from the WSDL
     * - documentation: The country code of the payer. This field is to allow rate requests with no account number provided. It is mandatory to provide this input field if DHL customers want to request for standard country rates but no account number is
     * provided. This function needs to be enabled for your username by your DHL Express IT Consultant.
     * - base: xsd:token
     * - maxLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PayerCountryCode = null;
    /**
     * The Billing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\Billing2 $Billing = null;
    /**
     * The SpecialServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Services2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\Services2 $SpecialServices = null;
    /**
     * The RequestValueAddedServices
     * Meta information extracted from the WSDL
     * - documentation: If the value is "Y" all the additional services available for the product selected will be returned. The default value is "N"
     * - base: xsd:string
     * - default: N
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequestValueAddedServices = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: Optional DHL service - global code
     * - base: xsd:string
     * - maxLength: 6
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The NetworkTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The NetworkTypeCode field is used to filter facility network type code. The default value is AL, return all products. DD is for Economy Select products and TD for Time Definite products
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NetworkTypeCode = null;
    /**
     * The CustomerAgreementInd
     * Meta information extracted from the WSDL
     * - documentation: Customer agreement indicator for product and services. This field is for filtering agreement and non-agreement products. The default value is ‘Y’. All standard and non-agreement products will be returned. An example of a customer
     * agreement product is Medical Express
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomerAgreementInd = null;
    /**
     * The ValidateReadyTime
     * Meta information extracted from the WSDL
     * - documentation: Validate ready time against pickup window start on Economy Select products
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValidateReadyTime = null;
    /**
     * The ProductsAndServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2 $ProductsAndServices = null;
    /**
     * The LandedCost
     * Meta information extracted from the WSDL
     * - documentation: Landed Cost parameters
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType $LandedCost = null;
    /**
     * Constructor method for docTypeRef_RequestedShipmentType2
     * @uses DocTypeRef_RequestedShipmentType2::setGetRateEstimates()
     * @uses DocTypeRef_RequestedShipmentType2::setGetDetailedRateBreakdown()
     * @uses DocTypeRef_RequestedShipmentType2::setIncludeAdditionalCurrencies()
     * @uses DocTypeRef_RequestedShipmentType2::setDropOffType()
     * @uses DocTypeRef_RequestedShipmentType2::setNextBusinessDay()
     * @uses DocTypeRef_RequestedShipmentType2::setShip()
     * @uses DocTypeRef_RequestedShipmentType2::setPackages()
     * @uses DocTypeRef_RequestedShipmentType2::setShipTimestamp()
     * @uses DocTypeRef_RequestedShipmentType2::setPickupLocationCloseTime()
     * @uses DocTypeRef_RequestedShipmentType2::setUnitOfMeasurement()
     * @uses DocTypeRef_RequestedShipmentType2::setContent()
     * @uses DocTypeRef_RequestedShipmentType2::setDeclaredValue()
     * @uses DocTypeRef_RequestedShipmentType2::setDeclaredValueCurrencyCode()
     * @uses DocTypeRef_RequestedShipmentType2::setPaymentInfo()
     * @uses DocTypeRef_RequestedShipmentType2::setAccount()
     * @uses DocTypeRef_RequestedShipmentType2::setPayerCountryCode()
     * @uses DocTypeRef_RequestedShipmentType2::setBilling()
     * @uses DocTypeRef_RequestedShipmentType2::setSpecialServices()
     * @uses DocTypeRef_RequestedShipmentType2::setRequestValueAddedServices()
     * @uses DocTypeRef_RequestedShipmentType2::setServiceType()
     * @uses DocTypeRef_RequestedShipmentType2::setNetworkTypeCode()
     * @uses DocTypeRef_RequestedShipmentType2::setCustomerAgreementInd()
     * @uses DocTypeRef_RequestedShipmentType2::setValidateReadyTime()
     * @uses DocTypeRef_RequestedShipmentType2::setProductsAndServices()
     * @uses DocTypeRef_RequestedShipmentType2::setLandedCost()
     * @param string $getRateEstimates
     * @param string $getDetailedRateBreakdown
     * @param string $includeAdditionalCurrencies
     * @param string $dropOffType
     * @param string $nextBusinessDay
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2 $ship
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2 $packages
     * @param string $shipTimestamp
     * @param string $pickupLocationCloseTime
     * @param string $unitOfMeasurement
     * @param string $content
     * @param float $declaredValue
     * @param string $declaredValueCurrencyCode
     * @param string $paymentInfo
     * @param string $account
     * @param string $payerCountryCode
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2 $billing
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Services2 $specialServices
     * @param string $requestValueAddedServices
     * @param string $serviceType
     * @param string $networkTypeCode
     * @param string $customerAgreementInd
     * @param string $validateReadyTime
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2 $productsAndServices
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType $landedCost
     */
    public function __construct(?string $getRateEstimates = null, ?string $getDetailedRateBreakdown = null, ?string $includeAdditionalCurrencies = null, ?string $dropOffType = null, ?string $nextBusinessDay = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2 $ship = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2 $packages = null, ?string $shipTimestamp = null, ?string $pickupLocationCloseTime = null, ?string $unitOfMeasurement = null, ?string $content = null, ?float $declaredValue = null, ?string $declaredValueCurrencyCode = null, ?string $paymentInfo = null, ?string $account = null, ?string $payerCountryCode = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\Billing2 $billing = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\Services2 $specialServices = null, ?string $requestValueAddedServices = 'N', ?string $serviceType = null, ?string $networkTypeCode = null, ?string $customerAgreementInd = null, ?string $validateReadyTime = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2 $productsAndServices = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType $landedCost = null)
    {
        $this
            ->setGetRateEstimates($getRateEstimates)
            ->setGetDetailedRateBreakdown($getDetailedRateBreakdown)
            ->setIncludeAdditionalCurrencies($includeAdditionalCurrencies)
            ->setDropOffType($dropOffType)
            ->setNextBusinessDay($nextBusinessDay)
            ->setShip($ship)
            ->setPackages($packages)
            ->setShipTimestamp($shipTimestamp)
            ->setPickupLocationCloseTime($pickupLocationCloseTime)
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setContent($content)
            ->setDeclaredValue($declaredValue)
            ->setDeclaredValueCurrencyCode($declaredValueCurrencyCode)
            ->setPaymentInfo($paymentInfo)
            ->setAccount($account)
            ->setPayerCountryCode($payerCountryCode)
            ->setBilling($billing)
            ->setSpecialServices($specialServices)
            ->setRequestValueAddedServices($requestValueAddedServices)
            ->setServiceType($serviceType)
            ->setNetworkTypeCode($networkTypeCode)
            ->setCustomerAgreementInd($customerAgreementInd)
            ->setValidateReadyTime($validateReadyTime)
            ->setProductsAndServices($productsAndServices)
            ->setLandedCost($landedCost);
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\GetRateEstimates2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\GetRateEstimates2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getRateEstimates
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setGetRateEstimates(?string $getRateEstimates = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\GetRateEstimates2::valueIsValid($getRateEstimates)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\GetRateEstimates2', is_array($getRateEstimates) ? implode(', ', $getRateEstimates) : var_export($getRateEstimates, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\GetRateEstimates2::getValidValues())), __LINE__);
        }
        $this->GetRateEstimates = $getRateEstimates;
        
        return $this;
    }
    /**
     * Get GetDetailedRateBreakdown value
     * @return string|null
     */
    public function getGetDetailedRateBreakdown(): ?string
    {
        return $this->GetDetailedRateBreakdown;
    }
    /**
     * Set GetDetailedRateBreakdown value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\GetDetailedRateBreakdown2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\GetDetailedRateBreakdown2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $getDetailedRateBreakdown
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setGetDetailedRateBreakdown(?string $getDetailedRateBreakdown = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\GetDetailedRateBreakdown2::valueIsValid($getDetailedRateBreakdown)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\GetDetailedRateBreakdown2', is_array($getDetailedRateBreakdown) ? implode(', ', $getDetailedRateBreakdown) : var_export($getDetailedRateBreakdown, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\GetDetailedRateBreakdown2::getValidValues())), __LINE__);
        }
        $this->GetDetailedRateBreakdown = $getDetailedRateBreakdown;
        
        return $this;
    }
    /**
     * Get IncludeAdditionalCurrencies value
     * @return string|null
     */
    public function getIncludeAdditionalCurrencies(): ?string
    {
        return $this->IncludeAdditionalCurrencies;
    }
    /**
     * Set IncludeAdditionalCurrencies value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\IncludeAdditionalCurrencies2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\IncludeAdditionalCurrencies2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $includeAdditionalCurrencies
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setIncludeAdditionalCurrencies(?string $includeAdditionalCurrencies = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\IncludeAdditionalCurrencies2::valueIsValid($includeAdditionalCurrencies)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\IncludeAdditionalCurrencies2', is_array($includeAdditionalCurrencies) ? implode(', ', $includeAdditionalCurrencies) : var_export($includeAdditionalCurrencies, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\IncludeAdditionalCurrencies2::getValidValues())), __LINE__);
        }
        $this->IncludeAdditionalCurrencies = $includeAdditionalCurrencies;
        
        return $this;
    }
    /**
     * Get DropOffType value
     * @return string|null
     */
    public function getDropOffType(): ?string
    {
        return $this->DropOffType;
    }
    /**
     * Set DropOffType value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DropOffType2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DropOffType2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dropOffType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setDropOffType(?string $dropOffType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\DropOffType2::valueIsValid($dropOffType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\DropOffType2', is_array($dropOffType) ? implode(', ', $dropOffType) : var_export($dropOffType, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\DropOffType2::getValidValues())), __LINE__);
        }
        $this->DropOffType = $dropOffType;
        
        return $this;
    }
    /**
     * Get NextBusinessDay value
     * @return string|null
     */
    public function getNextBusinessDay(): ?string
    {
        return $this->NextBusinessDay;
    }
    /**
     * Set NextBusinessDay value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDay2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDay2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nextBusinessDay
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setNextBusinessDay(?string $nextBusinessDay = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDay2::valueIsValid($nextBusinessDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDay2', is_array($nextBusinessDay) ? implode(', ', $nextBusinessDay) : var_export($nextBusinessDay, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\NextBusinessDay2::getValidValues())), __LINE__);
        }
        $this->NextBusinessDay = $nextBusinessDay;
        
        return $this;
    }
    /**
     * Get Ship value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2|null
     */
    public function getShip(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2
    {
        return $this->Ship;
    }
    /**
     * Set Ship value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2 $ship
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setShip(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType2 $ship = null): self
    {
        $this->Ship = $ship;
        
        return $this;
    }
    /**
     * Get Packages value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2|null
     */
    public function getPackages(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2
    {
        return $this->Packages;
    }
    /**
     * Set Packages value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2 $packages
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setPackages(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesType2 $packages = null): self
    {
        $this->Packages = $packages;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setPickupLocationCloseTime(?string $pickupLocationCloseTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupLocationCloseTime) && !is_string($pickupLocationCloseTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupLocationCloseTime, true), gettype($pickupLocationCloseTime)), __LINE__);
        }
        // validation for constraint: maxLength(29)
        if (!is_null($pickupLocationCloseTime) && mb_strlen((string) $pickupLocationCloseTime) > 29) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 29', mb_strlen((string) $pickupLocationCloseTime)), __LINE__);
        }
        $this->PickupLocationCloseTime = $pickupLocationCloseTime;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
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
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\Content2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\Content2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $content
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\Content2::valueIsValid($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\Content2', is_array($content) ? implode(', ', $content) : var_export($content, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\Content2::getValidValues())), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
    /**
     * Get DeclaredValue value
     * @return float|null
     */
    public function getDeclaredValue(): ?float
    {
        return $this->DeclaredValue;
    }
    /**
     * Set DeclaredValue value
     * @param float $declaredValue
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setDeclaredValue(?float $declaredValue = null): self
    {
        // validation for constraint: float
        if (!is_null($declaredValue) && !(is_float($declaredValue) || is_numeric($declaredValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($declaredValue, true), gettype($declaredValue)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($declaredValue) && mb_strlen(mb_substr((string) $declaredValue, false !== mb_strpos((string) $declaredValue, '.') ? mb_strpos((string) $declaredValue, '.') + 1 : mb_strlen((string) $declaredValue))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($declaredValue, true), mb_strlen(mb_substr((string) $declaredValue, mb_strpos((string) $declaredValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($declaredValue) && mb_strlen(preg_replace('/(\D)/', '', (string) $declaredValue)) > 18) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($declaredValue, true), mb_strlen(preg_replace('/(\D)/', '', (string) $declaredValue))), __LINE__);
        }
        $this->DeclaredValue = $declaredValue;
        
        return $this;
    }
    /**
     * Get DeclaredValueCurrencyCode value
     * @return string|null
     */
    public function getDeclaredValueCurrencyCode(): ?string
    {
        return $this->DeclaredValueCurrencyCode;
    }
    /**
     * Set DeclaredValueCurrencyCode value
     * @param string $declaredValueCurrencyCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setDeclaredValueCurrencyCode(?string $declaredValueCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($declaredValueCurrencyCode) && !is_string($declaredValueCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declaredValueCurrencyCode, true), gettype($declaredValueCurrencyCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($declaredValueCurrencyCode) && mb_strlen((string) $declaredValueCurrencyCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $declaredValueCurrencyCode)), __LINE__);
        }
        $this->DeclaredValueCurrencyCode = $declaredValueCurrencyCode;
        
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\PaymentInfo2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\PaymentInfo2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentInfo
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setPaymentInfo(?string $paymentInfo = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\PaymentInfo2::valueIsValid($paymentInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\PaymentInfo2', is_array($paymentInfo) ? implode(', ', $paymentInfo) : var_export($paymentInfo, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\PaymentInfo2::getValidValues())), __LINE__);
        }
        $this->PaymentInfo = $paymentInfo;
        
        return $this;
    }
    /**
     * Get Account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param string $account
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($account) && mb_strlen((string) $account) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $account)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($account) && mb_strlen((string) $account) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $account)), __LINE__);
        }
        $this->Account = $account;
        
        return $this;
    }
    /**
     * Get PayerCountryCode value
     * @return string|null
     */
    public function getPayerCountryCode(): ?string
    {
        return $this->PayerCountryCode;
    }
    /**
     * Set PayerCountryCode value
     * @param string $payerCountryCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setPayerCountryCode(?string $payerCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($payerCountryCode) && !is_string($payerCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerCountryCode, true), gettype($payerCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($payerCountryCode) && mb_strlen((string) $payerCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $payerCountryCode)), __LINE__);
        }
        $this->PayerCountryCode = $payerCountryCode;
        
        return $this;
    }
    /**
     * Get Billing value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2|null
     */
    public function getBilling(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\Billing2
    {
        return $this->Billing;
    }
    /**
     * Set Billing value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Billing2 $billing
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setBilling(?\Maetva\DhlExpress\ExpressRateBook\StructType\Billing2 $billing = null): self
    {
        $this->Billing = $billing;
        
        return $this;
    }
    /**
     * Get SpecialServices value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Services2|null
     */
    public function getSpecialServices(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\Services2
    {
        return $this->SpecialServices;
    }
    /**
     * Set SpecialServices value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Services2 $specialServices
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setSpecialServices(?\Maetva\DhlExpress\ExpressRateBook\StructType\Services2 $specialServices = null): self
    {
        $this->SpecialServices = $specialServices;
        
        return $this;
    }
    /**
     * Get RequestValueAddedServices value
     * @return string|null
     */
    public function getRequestValueAddedServices(): ?string
    {
        return $this->RequestValueAddedServices;
    }
    /**
     * Set RequestValueAddedServices value
     * @param string $requestValueAddedServices
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setRequestValueAddedServices(?string $requestValueAddedServices = 'N'): self
    {
        // validation for constraint: string
        if (!is_null($requestValueAddedServices) && !is_string($requestValueAddedServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestValueAddedServices, true), gettype($requestValueAddedServices)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($requestValueAddedServices) && mb_strlen((string) $requestValueAddedServices) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $requestValueAddedServices)), __LINE__);
        }
        $this->RequestValueAddedServices = $requestValueAddedServices;
        
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $serviceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NetworkTypeCode2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\NetworkTypeCode2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $networkTypeCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setNetworkTypeCode(?string $networkTypeCode = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\NetworkTypeCode2::valueIsValid($networkTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\NetworkTypeCode2', is_array($networkTypeCode) ? implode(', ', $networkTypeCode) : var_export($networkTypeCode, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\NetworkTypeCode2::getValidValues())), __LINE__);
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
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\CustomerAgreementInd2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\CustomerAgreementInd2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $customerAgreementInd
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setCustomerAgreementInd(?string $customerAgreementInd = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\CustomerAgreementInd2::valueIsValid($customerAgreementInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\CustomerAgreementInd2', is_array($customerAgreementInd) ? implode(', ', $customerAgreementInd) : var_export($customerAgreementInd, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\CustomerAgreementInd2::getValidValues())), __LINE__);
        }
        $this->CustomerAgreementInd = $customerAgreementInd;
        
        return $this;
    }
    /**
     * Get ValidateReadyTime value
     * @return string|null
     */
    public function getValidateReadyTime(): ?string
    {
        return $this->ValidateReadyTime;
    }
    /**
     * Set ValidateReadyTime value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ValidateReadyTime2::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\ValidateReadyTime2::getValidValues()
     * @throws InvalidArgumentException
     * @param string $validateReadyTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setValidateReadyTime(?string $validateReadyTime = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\ValidateReadyTime2::valueIsValid($validateReadyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\ValidateReadyTime2', is_array($validateReadyTime) ? implode(', ', $validateReadyTime) : var_export($validateReadyTime, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\ValidateReadyTime2::getValidValues())), __LINE__);
        }
        $this->ValidateReadyTime = $validateReadyTime;
        
        return $this;
    }
    /**
     * Get ProductsAndServices value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2|null
     */
    public function getProductsAndServices(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2
    {
        return $this->ProductsAndServices;
    }
    /**
     * Set ProductsAndServices value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2 $productsAndServices
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setProductsAndServices(?\Maetva\DhlExpress\ExpressRateBook\StructType\ProductsAndServices2 $productsAndServices = null): self
    {
        $this->ProductsAndServices = $productsAndServices;
        
        return $this;
    }
    /**
     * Get LandedCost value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType|null
     */
    public function getLandedCost(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType
    {
        return $this->LandedCost;
    }
    /**
     * Set LandedCost value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType $landedCost
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
     */
    public function setLandedCost(?\Maetva\DhlExpress\ExpressRateBook\StructType\LandedCostType $landedCost = null): self
    {
        $this->LandedCost = $landedCost;
        
        return $this;
    }
}
