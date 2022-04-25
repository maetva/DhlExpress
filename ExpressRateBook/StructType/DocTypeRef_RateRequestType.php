<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RateRequestType StructType
 * @subpackage Structs
 */
class DocTypeRef_RateRequestType extends AbstractStructBase
{
    /**
     * The ClientDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $ClientDetail = null;
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $Request = null;
    /**
     * The RequestedShipment
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $RequestedShipment = null;
    /**
     * Constructor method for docTypeRef_RateRequestType
     * @uses DocTypeRef_RateRequestType::setClientDetail()
     * @uses DocTypeRef_RateRequestType::setRequest()
     * @uses DocTypeRef_RateRequestType::setRequestedShipment()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment = null)
    {
        $this
            ->setClientDetail($clientDetail)
            ->setRequest($request)
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get ClientDetail value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3|null
     */
    public function getClientDetail(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setClientDetail(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail = null): self
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setRequest(?\Maetva\DhlExpress\ExpressRateBook\StructType\RequestType $request = null): self
    {
        $this->Request = $request;
        
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2|null
     */
    public function getRequestedShipment(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setRequestedShipment(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment = null): self
    {
        $this->RequestedShipment = $requestedShipment;
        
        return $this;
    }
}
