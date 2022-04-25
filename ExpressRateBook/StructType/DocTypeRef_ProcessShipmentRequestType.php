<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ProcessShipmentRequestType StructType
 * @subpackage Structs
 */
class DocTypeRef_ProcessShipmentRequestType extends AbstractStructBase
{
    /**
     * The MessageId
     * Meta information extracted from the WSDL
     * - documentation: logging end to end token
     * - base: xsd:string
     * - maxLength: 200
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageId = null;
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\Request|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\Request $Request = null;
    /**
     * The ClientDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2 $ClientDetail = null;
    /**
     * The RequestedShipment
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType $RequestedShipment = null;
    /**
     * Constructor method for docTypeRef_ProcessShipmentRequestType
     * @uses DocTypeRef_ProcessShipmentRequestType::setMessageId()
     * @uses DocTypeRef_ProcessShipmentRequestType::setRequest()
     * @uses DocTypeRef_ProcessShipmentRequestType::setClientDetail()
     * @uses DocTypeRef_ProcessShipmentRequestType::setRequestedShipment()
     * @param string $messageId
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Request $request
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2 $clientDetail
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType $requestedShipment
     */
    public function __construct(?string $messageId = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\Request $request = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2 $clientDetail = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType $requestedShipment = null)
    {
        $this
            ->setMessageId($messageId)
            ->setRequest($request)
            ->setClientDetail($clientDetail)
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId(): ?string
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType
     */
    public function setMessageId(?string $messageId = null): self
    {
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        // validation for constraint: maxLength(200)
        if (!is_null($messageId) && mb_strlen((string) $messageId) > 200) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 200', mb_strlen((string) $messageId)), __LINE__);
        }
        $this->MessageId = $messageId;
        
        return $this;
    }
    /**
     * Get Request value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Request|null
     */
    public function getRequest(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\Request
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\Request $request
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType
     */
    public function setRequest(?\Maetva\DhlExpress\ExpressRateBook\StructType\Request $request = null): self
    {
        $this->Request = $request;
        
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2|null
     */
    public function getClientDetail(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2 $clientDetail
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType
     */
    public function setClientDetail(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType2 $clientDetail = null): self
    {
        $this->ClientDetail = $clientDetail;
        
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType|null
     */
    public function getRequestedShipment(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType $requestedShipment
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType
     */
    public function setRequestedShipment(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType $requestedShipment = null): self
    {
        $this->RequestedShipment = $requestedShipment;
        
        return $this;
    }
}
