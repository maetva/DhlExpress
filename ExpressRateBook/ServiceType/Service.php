<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createShipmentRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType $parameters
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType|bool
     */
    public function createShipmentRequest(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType $parameters)
    {
        try {
            $this->setResult($resultCreateShipmentRequest = $this->getSoapClient()->__soapCall('createShipmentRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateShipmentRequest;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRateRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateRequestType $parameters
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateResponseType|bool
     */
    public function getRateRequest(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateRequestType $parameters)
    {
        try {
            $this->setResult($resultGetRateRequest = $this->getSoapClient()->__soapCall('getRateRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRateRequest;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipmentRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType $parameters
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType|bool
     */
    public function deleteShipmentRequest(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType $parameters)
    {
        try {
            $this->setResult($resultDeleteShipmentRequest = $this->getSoapClient()->__soapCall('deleteShipmentRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShipmentRequest;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType|\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_RateResponseType|\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipmentDetailType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
