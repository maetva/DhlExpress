<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wsbexpress.dhl.com/sndpt/expressRateBook?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://wsbexpress.dhl.com/sndpt/expressRateBook?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\ServiceType\Service($options);
/**
 * Sample call for createShipmentRequest operation/method
 */
if ($service->createShipmentRequest(new \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ProcessShipmentRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getRateRequest operation/method
 */
if ($service->getRateRequest(new \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RateRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for deleteShipmentRequest operation/method
 */
if ($service->deleteShipmentRequest(new \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DeleteRequestType()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
