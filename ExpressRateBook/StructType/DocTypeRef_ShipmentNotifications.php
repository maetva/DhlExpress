<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $ShipmentNotification = null;
    /**
     * Constructor method for docTypeRef_ShipmentNotifications
     * @uses DocTypeRef_ShipmentNotifications::setShipmentNotification()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification = null)
    {
        $this
            ->setShipmentNotification($shipmentNotification);
    }
    /**
     * Get ShipmentNotification value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification|null
     */
    public function getShipmentNotification(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification
    {
        return $this->ShipmentNotification;
    }
    /**
     * Set ShipmentNotification value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotifications
     */
    public function setShipmentNotification(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_ShipmentNotification $shipmentNotification = null): self
    {
        $this->ShipmentNotification = $shipmentNotification;
        
        return $this;
    }
}
