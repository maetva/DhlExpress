<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipType2 extends AbstractStructBase
{
    /**
     * The Shipper
     * Meta information extracted from the WSDL
     * - documentation: Shipper address.
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $Shipper = null;
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - documentation: Recipeint address.
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $Recipient = null;
    /**
     * Constructor method for docTypeRef_ShipType2
     * @uses DocTypeRef_ShipType2::setShipper()
     * @uses DocTypeRef_ShipType2::setRecipient()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $shipper
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $recipient
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $shipper = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $recipient = null)
    {
        $this
            ->setShipper($shipper)
            ->setRecipient($recipient);
    }
    /**
     * Get Shipper value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2|null
     */
    public function getShipper(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $shipper
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType2
     */
    public function setShipper(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $shipper = null): self
    {
        $this->Shipper = $shipper;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2|null
     */
    public function getRecipient(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $recipient
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipType2
     */
    public function setRecipient(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_AddressType2 $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
}
