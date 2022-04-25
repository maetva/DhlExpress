<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_DeleteRequestType StructType
 * @subpackage Structs
 */
class DocTypeRef_DeleteRequestType extends AbstractStructBase
{
    /**
     * The ClientDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType $ClientDetail = null;
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $Request = null;
    /**
     * The PickupDate
     * Meta information extracted from the WSDL
     * - documentation: The scheduled pickup date of the shipment to be deleted
     * @var string|null
     */
    protected ?string $PickupDate = null;
    /**
     * The PickupCountry
     * Meta information extracted from the WSDL
     * - documentation: The country code associated to the origin of the shipment | ISO 2 character codes of the Shipper/Recipient country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PickupCountry = null;
    /**
     * The DispatchConfirmationNumber
     * Meta information extracted from the WSDL
     * - documentation: The confirmation number returned from the original shipment request
     * - base: xsd:token
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $DispatchConfirmationNumber = null;
    /**
     * The RequestorName
     * Meta information extracted from the WSDL
     * - documentation: The delete requestor name
     * - base: xsd:token
     * - maxLength: 45
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $RequestorName = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Optional reason code. Please refer in the Developer Guide for the valid reason code
     * - base: xsd:token
     * - maxLength: 35 | 50
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * Constructor method for docTypeRef_DeleteRequestType
     * @uses DocTypeRef_DeleteRequestType::setClientDetail()
     * @uses DocTypeRef_DeleteRequestType::setRequest()
     * @uses DocTypeRef_DeleteRequestType::setPickupDate()
     * @uses DocTypeRef_DeleteRequestType::setPickupCountry()
     * @uses DocTypeRef_DeleteRequestType::setDispatchConfirmationNumber()
     * @uses DocTypeRef_DeleteRequestType::setRequestorName()
     * @uses DocTypeRef_DeleteRequestType::setReason()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType $clientDetail
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request
     * @param string $pickupDate
     * @param string $pickupCountry
     * @param string $dispatchConfirmationNumber
     * @param string $requestorName
     * @param string $reason
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType $clientDetail = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request = null, ?string $pickupDate = null, ?string $pickupCountry = null, ?string $dispatchConfirmationNumber = null, ?string $requestorName = null, ?string $reason = null)
    {
        $this
            ->setClientDetail($clientDetail)
            ->setRequest($request)
            ->setPickupDate($pickupDate)
            ->setPickupCountry($pickupCountry)
            ->setDispatchConfirmationNumber($dispatchConfirmationNumber)
            ->setRequestorName($requestorName)
            ->setReason($reason);
    }
    /**
     * Get ClientDetail value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType|null
     */
    public function getClientDetail(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType $clientDetail
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setClientDetail(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType $clientDetail = null): self
    {
        $this->ClientDetail = $clientDetail;
        
        return $this;
    }
    /**
     * Get Request value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType|null
     */
    public function getRequest(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setRequest(?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request = null): self
    {
        $this->Request = $request;
        
        return $this;
    }
    /**
     * Get PickupDate value
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->PickupDate;
    }
    /**
     * Set PickupDate value
     * @param string $pickupDate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setPickupDate(?string $pickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->PickupDate = $pickupDate;
        
        return $this;
    }
    /**
     * Get PickupCountry value
     * @return string|null
     */
    public function getPickupCountry(): ?string
    {
        return $this->PickupCountry;
    }
    /**
     * Set PickupCountry value
     * @param string $pickupCountry
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setPickupCountry(?string $pickupCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupCountry) && !is_string($pickupCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupCountry, true), gettype($pickupCountry)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($pickupCountry) && mb_strlen((string) $pickupCountry) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $pickupCountry)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pickupCountry) && mb_strlen((string) $pickupCountry) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pickupCountry)), __LINE__);
        }
        $this->PickupCountry = $pickupCountry;
        
        return $this;
    }
    /**
     * Get DispatchConfirmationNumber value
     * @return string|null
     */
    public function getDispatchConfirmationNumber(): ?string
    {
        return $this->DispatchConfirmationNumber;
    }
    /**
     * Set DispatchConfirmationNumber value
     * @param string $dispatchConfirmationNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setDispatchConfirmationNumber(?string $dispatchConfirmationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchConfirmationNumber) && !is_string($dispatchConfirmationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchConfirmationNumber, true), gettype($dispatchConfirmationNumber)), __LINE__);
        }
        $this->DispatchConfirmationNumber = $dispatchConfirmationNumber;
        
        return $this;
    }
    /**
     * Get RequestorName value
     * @return string|null
     */
    public function getRequestorName(): ?string
    {
        return $this->RequestorName;
    }
    /**
     * Set RequestorName value
     * @param string $requestorName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setRequestorName(?string $requestorName = null): self
    {
        // validation for constraint: string
        if (!is_null($requestorName) && !is_string($requestorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestorName, true), gettype($requestorName)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($requestorName) && mb_strlen((string) $requestorName) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $requestorName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($requestorName) && mb_strlen((string) $requestorName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $requestorName)), __LINE__);
        }
        $this->RequestorName = $requestorName;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        // validation for constraint: maxLength(35, 50)
        if (!is_null($reason) && mb_strlen((string) $reason) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35,50', mb_strlen((string) $reason)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($reason) && mb_strlen((string) $reason) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
}
