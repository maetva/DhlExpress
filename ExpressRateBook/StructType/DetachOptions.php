<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetachOptions StructType
 * Meta information extracted from the WSDL
 * - documentation: Detach options for Transport Label, Waybill Document, Shipment Receipt and Customs Invoice
 * @subpackage Structs
 */
class DetachOptions extends AbstractStructBase
{
    /**
     * The AllInOnePDF
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AllInOnePDF = null;
    /**
     * The SplitShipmentReceiptAndCustomsInvoice
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SplitShipmentReceiptAndCustomsInvoice = null;
    /**
     * The SplitTransportLabelAndWaybillDocument
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SplitTransportLabelAndWaybillDocument = null;
    /**
     * The SplitLabelsByPieces
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SplitLabelsByPieces = null;
    /**
     * The ShipmentReceiptWithLabels
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentReceiptWithLabels = null;
    /**
     * Constructor method for DetachOptions
     * @uses DetachOptions::setAllInOnePDF()
     * @uses DetachOptions::setSplitShipmentReceiptAndCustomsInvoice()
     * @uses DetachOptions::setSplitTransportLabelAndWaybillDocument()
     * @uses DetachOptions::setSplitLabelsByPieces()
     * @uses DetachOptions::setShipmentReceiptWithLabels()
     * @param string $allInOnePDF
     * @param string $splitShipmentReceiptAndCustomsInvoice
     * @param string $splitTransportLabelAndWaybillDocument
     * @param string $splitLabelsByPieces
     * @param string $shipmentReceiptWithLabels
     */
    public function __construct(?string $allInOnePDF = null, ?string $splitShipmentReceiptAndCustomsInvoice = null, ?string $splitTransportLabelAndWaybillDocument = null, ?string $splitLabelsByPieces = null, ?string $shipmentReceiptWithLabels = null)
    {
        $this
            ->setAllInOnePDF($allInOnePDF)
            ->setSplitShipmentReceiptAndCustomsInvoice($splitShipmentReceiptAndCustomsInvoice)
            ->setSplitTransportLabelAndWaybillDocument($splitTransportLabelAndWaybillDocument)
            ->setSplitLabelsByPieces($splitLabelsByPieces)
            ->setShipmentReceiptWithLabels($shipmentReceiptWithLabels);
    }
    /**
     * Get AllInOnePDF value
     * @return string|null
     */
    public function getAllInOnePDF(): ?string
    {
        return $this->AllInOnePDF;
    }
    /**
     * Set AllInOnePDF value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\AllInOnePDF::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\AllInOnePDF::getValidValues()
     * @throws InvalidArgumentException
     * @param string $allInOnePDF
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
     */
    public function setAllInOnePDF(?string $allInOnePDF = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\AllInOnePDF::valueIsValid($allInOnePDF)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\AllInOnePDF', is_array($allInOnePDF) ? implode(', ', $allInOnePDF) : var_export($allInOnePDF, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\AllInOnePDF::getValidValues())), __LINE__);
        }
        $this->AllInOnePDF = $allInOnePDF;
        
        return $this;
    }
    /**
     * Get SplitShipmentReceiptAndCustomsInvoice value
     * @return string|null
     */
    public function getSplitShipmentReceiptAndCustomsInvoice(): ?string
    {
        return $this->SplitShipmentReceiptAndCustomsInvoice;
    }
    /**
     * Set SplitShipmentReceiptAndCustomsInvoice value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitShipmentReceiptAndCustomsInvoice::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitShipmentReceiptAndCustomsInvoice::getValidValues()
     * @throws InvalidArgumentException
     * @param string $splitShipmentReceiptAndCustomsInvoice
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
     */
    public function setSplitShipmentReceiptAndCustomsInvoice(?string $splitShipmentReceiptAndCustomsInvoice = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitShipmentReceiptAndCustomsInvoice::valueIsValid($splitShipmentReceiptAndCustomsInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitShipmentReceiptAndCustomsInvoice', is_array($splitShipmentReceiptAndCustomsInvoice) ? implode(', ', $splitShipmentReceiptAndCustomsInvoice) : var_export($splitShipmentReceiptAndCustomsInvoice, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitShipmentReceiptAndCustomsInvoice::getValidValues())), __LINE__);
        }
        $this->SplitShipmentReceiptAndCustomsInvoice = $splitShipmentReceiptAndCustomsInvoice;
        
        return $this;
    }
    /**
     * Get SplitTransportLabelAndWaybillDocument value
     * @return string|null
     */
    public function getSplitTransportLabelAndWaybillDocument(): ?string
    {
        return $this->SplitTransportLabelAndWaybillDocument;
    }
    /**
     * Set SplitTransportLabelAndWaybillDocument value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitTransportLabelAndWaybillDocument::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitTransportLabelAndWaybillDocument::getValidValues()
     * @throws InvalidArgumentException
     * @param string $splitTransportLabelAndWaybillDocument
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
     */
    public function setSplitTransportLabelAndWaybillDocument(?string $splitTransportLabelAndWaybillDocument = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitTransportLabelAndWaybillDocument::valueIsValid($splitTransportLabelAndWaybillDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitTransportLabelAndWaybillDocument', is_array($splitTransportLabelAndWaybillDocument) ? implode(', ', $splitTransportLabelAndWaybillDocument) : var_export($splitTransportLabelAndWaybillDocument, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitTransportLabelAndWaybillDocument::getValidValues())), __LINE__);
        }
        $this->SplitTransportLabelAndWaybillDocument = $splitTransportLabelAndWaybillDocument;
        
        return $this;
    }
    /**
     * Get SplitLabelsByPieces value
     * @return string|null
     */
    public function getSplitLabelsByPieces(): ?string
    {
        return $this->SplitLabelsByPieces;
    }
    /**
     * Set SplitLabelsByPieces value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitLabelsByPieces::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitLabelsByPieces::getValidValues()
     * @throws InvalidArgumentException
     * @param string $splitLabelsByPieces
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
     */
    public function setSplitLabelsByPieces(?string $splitLabelsByPieces = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitLabelsByPieces::valueIsValid($splitLabelsByPieces)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitLabelsByPieces', is_array($splitLabelsByPieces) ? implode(', ', $splitLabelsByPieces) : var_export($splitLabelsByPieces, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\SplitLabelsByPieces::getValidValues())), __LINE__);
        }
        $this->SplitLabelsByPieces = $splitLabelsByPieces;
        
        return $this;
    }
    /**
     * Get ShipmentReceiptWithLabels value
     * @return string|null
     */
    public function getShipmentReceiptWithLabels(): ?string
    {
        return $this->ShipmentReceiptWithLabels;
    }
    /**
     * Set ShipmentReceiptWithLabels value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentReceiptWithLabels::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentReceiptWithLabels::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shipmentReceiptWithLabels
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DetachOptions
     */
    public function setShipmentReceiptWithLabels(?string $shipmentReceiptWithLabels = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentReceiptWithLabels::valueIsValid($shipmentReceiptWithLabels)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentReceiptWithLabels', is_array($shipmentReceiptWithLabels) ? implode(', ', $shipmentReceiptWithLabels) : var_export($shipmentReceiptWithLabels, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\ShipmentReceiptWithLabels::getValidValues())), __LINE__);
        }
        $this->ShipmentReceiptWithLabels = $shipmentReceiptWithLabels;
        
        return $this;
    }
}
