<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipType StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipType extends AbstractStructBase
{
    /**
     * The Shipper
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Shipper = null;
    /**
     * The Pickup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Pickup = null;
    /**
     * The BookingRequestor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $BookingRequestor = null;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $Buyer = null;
    /**
     * The Recipient
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Recipient = null;
    /**
     * The Exporter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Exporter = null;
    /**
     * The Importer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Importer = null;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Seller = null;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Payer = null;
    /**
     * Constructor method for docTypeRef_ShipType
     * @uses DocTypeRef_ShipType::setShipper()
     * @uses DocTypeRef_ShipType::setPickup()
     * @uses DocTypeRef_ShipType::setBookingRequestor()
     * @uses DocTypeRef_ShipType::setBuyer()
     * @uses DocTypeRef_ShipType::setRecipient()
     * @uses DocTypeRef_ShipType::setExporter()
     * @uses DocTypeRef_ShipType::setImporter()
     * @uses DocTypeRef_ShipType::setSeller()
     * @uses DocTypeRef_ShipType::setPayer()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer = null)
    {
        $this
            ->setShipper($shipper)
            ->setPickup($pickup)
            ->setBookingRequestor($bookingRequestor)
            ->setBuyer($buyer)
            ->setRecipient($recipient)
            ->setExporter($exporter)
            ->setImporter($importer)
            ->setSeller($seller)
            ->setPayer($payer);
    }
    /**
     * Get Shipper value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getShipper(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setShipper(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper = null): self
    {
        $this->Shipper = $shipper;
        
        return $this;
    }
    /**
     * Get Pickup value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getPickup(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setPickup(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup = null): self
    {
        $this->Pickup = $pickup;
        
        return $this;
    }
    /**
     * Get BookingRequestor value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getBookingRequestor(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->BookingRequestor;
    }
    /**
     * Set BookingRequestor value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setBookingRequestor(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor = null): self
    {
        $this->BookingRequestor = $bookingRequestor;
        
        return $this;
    }
    /**
     * Get Buyer value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1|null
     */
    public function getBuyer(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setBuyer(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer = null): self
    {
        $this->Buyer = $buyer;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getRecipient(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setRecipient(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get Exporter value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getExporter(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Exporter;
    }
    /**
     * Set Exporter value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setExporter(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter = null): self
    {
        $this->Exporter = $exporter;
        
        return $this;
    }
    /**
     * Get Importer value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getImporter(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Importer;
    }
    /**
     * Set Importer value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setImporter(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer = null): self
    {
        $this->Importer = $importer;
        
        return $this;
    }
    /**
     * Get Seller value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getSeller(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setSeller(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller = null): self
    {
        $this->Seller = $seller;
        
        return $this;
    }
    /**
     * Get Payer value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getPayer(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setPayer(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer = null): self
    {
        $this->Payer = $payer;
        
        return $this;
    }
}
