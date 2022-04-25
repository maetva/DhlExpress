<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BarcodeInfo StructType
 * @subpackage Structs
 */
class BarcodeInfo extends AbstractStructBase
{
    /**
     * The ShipmentIdentificationNumberBarcodeContent
     * Meta information extracted from the WSDL
     * - base: xsd:base64Binary
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentIdentificationNumberBarcodeContent = null;
    /**
     * The TrackingNumberBarcodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes $TrackingNumberBarcodes = null;
    /**
     * The OriginDestinationServiceTypeBarcodeContent
     * Meta information extracted from the WSDL
     * - base: xsd:base64Binary
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginDestinationServiceTypeBarcodeContent = null;
    /**
     * The DHLRoutingBarcodeContent
     * Meta information extracted from the WSDL
     * - base: xsd:base64Binary
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DHLRoutingBarcodeContent = null;
    /**
     * Constructor method for BarcodeInfo
     * @uses BarcodeInfo::setShipmentIdentificationNumberBarcodeContent()
     * @uses BarcodeInfo::setTrackingNumberBarcodes()
     * @uses BarcodeInfo::setOriginDestinationServiceTypeBarcodeContent()
     * @uses BarcodeInfo::setDHLRoutingBarcodeContent()
     * @param string $shipmentIdentificationNumberBarcodeContent
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes $trackingNumberBarcodes
     * @param string $originDestinationServiceTypeBarcodeContent
     * @param string $dHLRoutingBarcodeContent
     */
    public function __construct(?string $shipmentIdentificationNumberBarcodeContent = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes $trackingNumberBarcodes = null, ?string $originDestinationServiceTypeBarcodeContent = null, ?string $dHLRoutingBarcodeContent = null)
    {
        $this
            ->setShipmentIdentificationNumberBarcodeContent($shipmentIdentificationNumberBarcodeContent)
            ->setTrackingNumberBarcodes($trackingNumberBarcodes)
            ->setOriginDestinationServiceTypeBarcodeContent($originDestinationServiceTypeBarcodeContent)
            ->setDHLRoutingBarcodeContent($dHLRoutingBarcodeContent);
    }
    /**
     * Get ShipmentIdentificationNumberBarcodeContent value
     * @return string|null
     */
    public function getShipmentIdentificationNumberBarcodeContent(): ?string
    {
        return $this->ShipmentIdentificationNumberBarcodeContent;
    }
    /**
     * Set ShipmentIdentificationNumberBarcodeContent value
     * @param string $shipmentIdentificationNumberBarcodeContent
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo
     */
    public function setShipmentIdentificationNumberBarcodeContent(?string $shipmentIdentificationNumberBarcodeContent = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentIdentificationNumberBarcodeContent) && !is_string($shipmentIdentificationNumberBarcodeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentIdentificationNumberBarcodeContent, true), gettype($shipmentIdentificationNumberBarcodeContent)), __LINE__);
        }
        $this->ShipmentIdentificationNumberBarcodeContent = $shipmentIdentificationNumberBarcodeContent;
        
        return $this;
    }
    /**
     * Get TrackingNumberBarcodes value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes|null
     */
    public function getTrackingNumberBarcodes(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes
    {
        return $this->TrackingNumberBarcodes;
    }
    /**
     * Set TrackingNumberBarcodes value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes $trackingNumberBarcodes
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo
     */
    public function setTrackingNumberBarcodes(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TrackingNumberBarcodes $trackingNumberBarcodes = null): self
    {
        $this->TrackingNumberBarcodes = $trackingNumberBarcodes;
        
        return $this;
    }
    /**
     * Get OriginDestinationServiceTypeBarcodeContent value
     * @return string|null
     */
    public function getOriginDestinationServiceTypeBarcodeContent(): ?string
    {
        return $this->OriginDestinationServiceTypeBarcodeContent;
    }
    /**
     * Set OriginDestinationServiceTypeBarcodeContent value
     * @param string $originDestinationServiceTypeBarcodeContent
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo
     */
    public function setOriginDestinationServiceTypeBarcodeContent(?string $originDestinationServiceTypeBarcodeContent = null): self
    {
        // validation for constraint: string
        if (!is_null($originDestinationServiceTypeBarcodeContent) && !is_string($originDestinationServiceTypeBarcodeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originDestinationServiceTypeBarcodeContent, true), gettype($originDestinationServiceTypeBarcodeContent)), __LINE__);
        }
        $this->OriginDestinationServiceTypeBarcodeContent = $originDestinationServiceTypeBarcodeContent;
        
        return $this;
    }
    /**
     * Get DHLRoutingBarcodeContent value
     * @return string|null
     */
    public function getDHLRoutingBarcodeContent(): ?string
    {
        return $this->DHLRoutingBarcodeContent;
    }
    /**
     * Set DHLRoutingBarcodeContent value
     * @param string $dHLRoutingBarcodeContent
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BarcodeInfo
     */
    public function setDHLRoutingBarcodeContent(?string $dHLRoutingBarcodeContent = null): self
    {
        // validation for constraint: string
        if (!is_null($dHLRoutingBarcodeContent) && !is_string($dHLRoutingBarcodeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHLRoutingBarcodeContent, true), gettype($dHLRoutingBarcodeContent)), __LINE__);
        }
        $this->DHLRoutingBarcodeContent = $dHLRoutingBarcodeContent;
        
        return $this;
    }
}
