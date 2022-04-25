<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $ClientDetail = null;
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType $Request = null;
    /**
     * The RequestedShipment
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $RequestedShipment = null;
    /**
     * Constructor method for docTypeRef_RateRequestType
     * @uses DocTypeRef_RateRequestType::setClientDetail()
     * @uses DocTypeRef_RateRequestType::setRequest()
     * @uses DocTypeRef_RateRequestType::setRequestedShipment()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType $request
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType $request = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment = null)
    {
        $this
            ->setClientDetail($clientDetail)
            ->setRequest($request)
            ->setRequestedShipment($requestedShipment);
    }
    /**
     * Get ClientDetail value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3|null
     */
    public function getClientDetail(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setClientDetail(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ClientDetailType3 $clientDetail = null): self
    {
        $this->ClientDetail = $clientDetail;
        
        return $this;
    }
    /**
     * Get Request value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType|null
     */
    public function getRequest(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType $request
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setRequest(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\RequestType $request = null): self
    {
        $this->Request = $request;
        
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2|null
     */
    public function getRequestedShipment(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RateRequestType
     */
    public function setRequestedShipment(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedShipmentType2 $requestedShipment = null): self
    {
        $this->RequestedShipment = $requestedShipment;
        
        return $this;
    }
}
