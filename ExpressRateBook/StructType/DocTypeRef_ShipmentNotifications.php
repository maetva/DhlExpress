<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ShipmentNotifications StructType
 * @subpackage Structs
 */
class DocTypeRef_ShipmentNotifications extends AbstractStructBase
{
    /**
     * The ShipmentNotification
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $ShipmentNotification = null;
    /**
     * Constructor method for docTypeRef_ShipmentNotifications
     * @uses DocTypeRef_ShipmentNotifications::setShipmentNotification()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification = null)
    {
        $this
            ->setShipmentNotification($shipmentNotification);
    }
    /**
     * Get ShipmentNotification value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification|null
     */
    public function getShipmentNotification(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
    {
        return $this->ShipmentNotification;
    }
    /**
     * Set ShipmentNotification value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications
     */
    public function setShipmentNotification(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification = null): self
    {
        $this->ShipmentNotification = $shipmentNotification;
        
        return $this;
    }
}
