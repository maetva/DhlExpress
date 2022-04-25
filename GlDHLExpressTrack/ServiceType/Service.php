<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackShipmentRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequest $parameters
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequestResponse|bool
     */
    public function trackShipmentRequest(\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequest $parameters)
    {
        try {
            $this->setResult($resultTrackShipmentRequest = $this->getSoapClient()->__soapCall('trackShipmentRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackShipmentRequest;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackShipmentRequestResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
