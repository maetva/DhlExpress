<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Shipper = null;
    /**
     * The Pickup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Pickup = null;
    /**
     * The BookingRequestor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $BookingRequestor = null;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $Buyer = null;
    /**
     * The Recipient
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Recipient = null;
    /**
     * The Exporter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Exporter = null;
    /**
     * The Importer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Importer = null;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Seller = null;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $Payer = null;
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
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer = null)
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getShipper(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setShipper(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $shipper = null): self
    {
        $this->Shipper = $shipper;
        
        return $this;
    }
    /**
     * Get Pickup value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getPickup(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Pickup;
    }
    /**
     * Set Pickup value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setPickup(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $pickup = null): self
    {
        $this->Pickup = $pickup;
        
        return $this;
    }
    /**
     * Get BookingRequestor value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getBookingRequestor(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->BookingRequestor;
    }
    /**
     * Set BookingRequestor value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setBookingRequestor(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $bookingRequestor = null): self
    {
        $this->BookingRequestor = $bookingRequestor;
        
        return $this;
    }
    /**
     * Get Buyer value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1|null
     */
    public function getBuyer(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setBuyer(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType1 $buyer = null): self
    {
        $this->Buyer = $buyer;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getRecipient(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setRecipient(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get Exporter value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getExporter(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Exporter;
    }
    /**
     * Set Exporter value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setExporter(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $exporter = null): self
    {
        $this->Exporter = $exporter;
        
        return $this;
    }
    /**
     * Get Importer value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getImporter(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Importer;
    }
    /**
     * Set Importer value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setImporter(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $importer = null): self
    {
        $this->Importer = $importer;
        
        return $this;
    }
    /**
     * Get Seller value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getSeller(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setSeller(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $seller = null): self
    {
        $this->Seller = $seller;
        
        return $this;
    }
    /**
     * Get Payer value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType|null
     */
    public function getPayer(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ShipType
     */
    public function setPayer(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_ContactInfoType $payer = null): self
    {
        $this->Payer = $payer;
        
        return $this;
    }
}
