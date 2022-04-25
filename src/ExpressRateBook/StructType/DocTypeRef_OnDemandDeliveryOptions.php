<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_OnDemandDeliveryOptions StructType
 * @subpackage Structs
 */
class DocTypeRef_OnDemandDeliveryOptions extends AbstractStructBase
{
    /**
     * The DeliveryOption
     * Meta information extracted from the WSDL
     * - documentation: The Delivery option is to define which on demand delivery option you wish to choose optionally when your shipment is to be delivered
     * - minOccurs: 1
     * @var string
     */
    protected string $DeliveryOption;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Mandatory if the above delivery option is SX and should advise DHL where exactly to leave the shipment (ie.front door etc)
     * - base: xsd:token
     * - maxLength: 15
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Instructions
     * Meta information extracted from the WSDL
     * - documentation: Additional information that is useful for the DHL Express courier
     * - base: xsd:token
     * - maxLength: 110
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Instructions = null;
    /**
     * The GateCode
     * Meta information extracted from the WSDL
     * - documentation: Entry code to gain access to an apartment complex or gate
     * - base: xsd:token
     * - maxLength: 10
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $GateCode = null;
    /**
     * The LWNTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Possible values are Neighbour (N) or Concierge (C)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LWNTypeCode = null;
    /**
     * The NeighbourName
     * Meta information extracted from the WSDL
     * - documentation: Mandatory if the delivery option is SW and the LWNTypeCode is N (Neighbour) – this is where the name of the neighbour is required
     * - base: xsd:token
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $NeighbourName = null;
    /**
     * The NeighbourHouseNumber
     * Meta information extracted from the WSDL
     * - documentation: Mandatory if the delivery option is SW and the LWNTypeCode is N (Neighbour) – this is the house number of the neighbour
     * - base: xsd:token
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $NeighbourHouseNumber = null;
    /**
     * The AuthorizerName
     * Meta information extracted from the WSDL
     * - documentation: Mandatory if delivery option is SX or SW– this is the person that this authorised to sign and receive the DHL Express shipment
     * - base: xsd:token
     * - maxLength: 20
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $AuthorizerName = null;
    /**
     * The SelectedServicePointID
     * Meta information extracted from the WSDL
     * - documentation: Mandatory if delivery option is TV – this is the unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint
     * IDs)
     * - base: xsd:token
     * - maxLength: 6
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $SelectedServicePointID = null;
    /**
     * The RequestedDeliveryDate
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use
     * - base: xsd:token
     * - maxLength: 29
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $RequestedDeliveryDate = null;
    /**
     * Constructor method for docTypeRef_OnDemandDeliveryOptions
     * @uses DocTypeRef_OnDemandDeliveryOptions::setDeliveryOption()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setLocation()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setInstructions()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setGateCode()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setLWNTypeCode()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setNeighbourName()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setNeighbourHouseNumber()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setAuthorizerName()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setSelectedServicePointID()
     * @uses DocTypeRef_OnDemandDeliveryOptions::setRequestedDeliveryDate()
     * @param string $deliveryOption
     * @param string $location
     * @param string $instructions
     * @param string $gateCode
     * @param string $lWNTypeCode
     * @param string $neighbourName
     * @param string $neighbourHouseNumber
     * @param string $authorizerName
     * @param string $selectedServicePointID
     * @param string $requestedDeliveryDate
     */
    public function __construct(string $deliveryOption, ?string $location = null, ?string $instructions = null, ?string $gateCode = null, ?string $lWNTypeCode = null, ?string $neighbourName = null, ?string $neighbourHouseNumber = null, ?string $authorizerName = null, ?string $selectedServicePointID = null, ?string $requestedDeliveryDate = null)
    {
        $this
            ->setDeliveryOption($deliveryOption)
            ->setLocation($location)
            ->setInstructions($instructions)
            ->setGateCode($gateCode)
            ->setLWNTypeCode($lWNTypeCode)
            ->setNeighbourName($neighbourName)
            ->setNeighbourHouseNumber($neighbourHouseNumber)
            ->setAuthorizerName($authorizerName)
            ->setSelectedServicePointID($selectedServicePointID)
            ->setRequestedDeliveryDate($requestedDeliveryDate);
    }
    /**
     * Get DeliveryOption value
     * @return string
     */
    public function getDeliveryOption(): string
    {
        return $this->DeliveryOption;
    }
    /**
     * Set DeliveryOption value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DeliveryOption::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\DeliveryOption::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deliveryOption
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setDeliveryOption(string $deliveryOption): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\DeliveryOption::valueIsValid($deliveryOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\DeliveryOption', is_array($deliveryOption) ? implode(', ', $deliveryOption) : var_export($deliveryOption, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\DeliveryOption::getValidValues())), __LINE__);
        }
        $this->DeliveryOption = $deliveryOption;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($location) && mb_strlen((string) $location) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $location)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($location) && mb_strlen((string) $location) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get Instructions value
     * @return string|null
     */
    public function getInstructions(): ?string
    {
        return $this->Instructions;
    }
    /**
     * Set Instructions value
     * @param string $instructions
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setInstructions(?string $instructions = null): self
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        // validation for constraint: maxLength(110)
        if (!is_null($instructions) && mb_strlen((string) $instructions) > 110) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 110', mb_strlen((string) $instructions)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($instructions) && mb_strlen((string) $instructions) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $instructions)), __LINE__);
        }
        $this->Instructions = $instructions;
        
        return $this;
    }
    /**
     * Get GateCode value
     * @return string|null
     */
    public function getGateCode(): ?string
    {
        return $this->GateCode;
    }
    /**
     * Set GateCode value
     * @param string $gateCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setGateCode(?string $gateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($gateCode) && !is_string($gateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateCode, true), gettype($gateCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($gateCode) && mb_strlen((string) $gateCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $gateCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($gateCode) && mb_strlen((string) $gateCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $gateCode)), __LINE__);
        }
        $this->GateCode = $gateCode;
        
        return $this;
    }
    /**
     * Get LWNTypeCode value
     * @return string|null
     */
    public function getLWNTypeCode(): ?string
    {
        return $this->LWNTypeCode;
    }
    /**
     * Set LWNTypeCode value
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\LWNTypeCode::valueIsValid()
     * @uses \Maetva\DhlExpress\ExpressRateBook\EnumType\LWNTypeCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $lWNTypeCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setLWNTypeCode(?string $lWNTypeCode = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\ExpressRateBook\EnumType\LWNTypeCode::valueIsValid($lWNTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\ExpressRateBook\EnumType\LWNTypeCode', is_array($lWNTypeCode) ? implode(', ', $lWNTypeCode) : var_export($lWNTypeCode, true), implode(', ', \Maetva\DhlExpress\ExpressRateBook\EnumType\LWNTypeCode::getValidValues())), __LINE__);
        }
        $this->LWNTypeCode = $lWNTypeCode;
        
        return $this;
    }
    /**
     * Get NeighbourName value
     * @return string|null
     */
    public function getNeighbourName(): ?string
    {
        return $this->NeighbourName;
    }
    /**
     * Set NeighbourName value
     * @param string $neighbourName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setNeighbourName(?string $neighbourName = null): self
    {
        // validation for constraint: string
        if (!is_null($neighbourName) && !is_string($neighbourName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neighbourName, true), gettype($neighbourName)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($neighbourName) && mb_strlen((string) $neighbourName) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $neighbourName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($neighbourName) && mb_strlen((string) $neighbourName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $neighbourName)), __LINE__);
        }
        $this->NeighbourName = $neighbourName;
        
        return $this;
    }
    /**
     * Get NeighbourHouseNumber value
     * @return string|null
     */
    public function getNeighbourHouseNumber(): ?string
    {
        return $this->NeighbourHouseNumber;
    }
    /**
     * Set NeighbourHouseNumber value
     * @param string $neighbourHouseNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setNeighbourHouseNumber(?string $neighbourHouseNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($neighbourHouseNumber) && !is_string($neighbourHouseNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neighbourHouseNumber, true), gettype($neighbourHouseNumber)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($neighbourHouseNumber) && mb_strlen((string) $neighbourHouseNumber) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $neighbourHouseNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($neighbourHouseNumber) && mb_strlen((string) $neighbourHouseNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $neighbourHouseNumber)), __LINE__);
        }
        $this->NeighbourHouseNumber = $neighbourHouseNumber;
        
        return $this;
    }
    /**
     * Get AuthorizerName value
     * @return string|null
     */
    public function getAuthorizerName(): ?string
    {
        return $this->AuthorizerName;
    }
    /**
     * Set AuthorizerName value
     * @param string $authorizerName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setAuthorizerName(?string $authorizerName = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizerName) && !is_string($authorizerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizerName, true), gettype($authorizerName)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($authorizerName) && mb_strlen((string) $authorizerName) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $authorizerName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($authorizerName) && mb_strlen((string) $authorizerName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $authorizerName)), __LINE__);
        }
        $this->AuthorizerName = $authorizerName;
        
        return $this;
    }
    /**
     * Get SelectedServicePointID value
     * @return string|null
     */
    public function getSelectedServicePointID(): ?string
    {
        return $this->SelectedServicePointID;
    }
    /**
     * Set SelectedServicePointID value
     * @param string $selectedServicePointID
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setSelectedServicePointID(?string $selectedServicePointID = null): self
    {
        // validation for constraint: string
        if (!is_null($selectedServicePointID) && !is_string($selectedServicePointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectedServicePointID, true), gettype($selectedServicePointID)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($selectedServicePointID) && mb_strlen((string) $selectedServicePointID) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $selectedServicePointID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($selectedServicePointID) && mb_strlen((string) $selectedServicePointID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $selectedServicePointID)), __LINE__);
        }
        $this->SelectedServicePointID = $selectedServicePointID;
        
        return $this;
    }
    /**
     * Get RequestedDeliveryDate value
     * @return string|null
     */
    public function getRequestedDeliveryDate(): ?string
    {
        return $this->RequestedDeliveryDate;
    }
    /**
     * Set RequestedDeliveryDate value
     * @param string $requestedDeliveryDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_OnDemandDeliveryOptions
     */
    public function setRequestedDeliveryDate(?string $requestedDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($requestedDeliveryDate) && !is_string($requestedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestedDeliveryDate, true), gettype($requestedDeliveryDate)), __LINE__);
        }
        // validation for constraint: maxLength(29)
        if (!is_null($requestedDeliveryDate) && mb_strlen((string) $requestedDeliveryDate) > 29) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 29', mb_strlen((string) $requestedDeliveryDate)), __LINE__);
        }
        $this->RequestedDeliveryDate = $requestedDeliveryDate;
        
        return $this;
    }
}
