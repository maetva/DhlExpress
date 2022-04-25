<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentEvent StructType
 * @subpackage Structs
 */
class ShipmentEvent extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: Local Date of Shipment Event
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Local Time of Shipment Event
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * The ServiceEvent
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $ServiceEvent = null;
    /**
     * The Signatory
     * Meta information extracted from the WSDL
     * - documentation: The signee for the shipment, only occurs for final disposition events (such as OK event)
     * - base: xsd:string
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $Signatory = null;
    /**
     * The EventRemarks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks $EventRemarks = null;
    /**
     * The ServiceArea
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $ServiceArea = null;
    /**
     * Constructor method for ShipmentEvent
     * @uses ShipmentEvent::setDate()
     * @uses ShipmentEvent::setTime()
     * @uses ShipmentEvent::setServiceEvent()
     * @uses ShipmentEvent::setSignatory()
     * @uses ShipmentEvent::setEventRemarks()
     * @uses ShipmentEvent::setServiceArea()
     * @param string $date
     * @param string $time
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent
     * @param string $signatory
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks $eventRemarks
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea
     */
    public function __construct(?string $date = null, ?string $time = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent = null, ?string $signatory = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks $eventRemarks = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea = null)
    {
        $this
            ->setDate($date)
            ->setTime($time)
            ->setServiceEvent($serviceEvent)
            ->setSignatory($signatory)
            ->setEventRemarks($eventRemarks)
            ->setServiceArea($serviceArea);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get ServiceEvent value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent|null
     */
    public function getServiceEvent(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent
    {
        return $this->ServiceEvent;
    }
    /**
     * Set ServiceEvent value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setServiceEvent(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent = null): self
    {
        $this->ServiceEvent = $serviceEvent;
        
        return $this;
    }
    /**
     * Get Signatory value
     * @return string|null
     */
    public function getSignatory(): ?string
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param string $signatory
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setSignatory(?string $signatory = null): self
    {
        // validation for constraint: string
        if (!is_null($signatory) && !is_string($signatory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatory, true), gettype($signatory)), __LINE__);
        }
        $this->Signatory = $signatory;
        
        return $this;
    }
    /**
     * Get EventRemarks value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks|null
     */
    public function getEventRemarks(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks
    {
        return $this->EventRemarks;
    }
    /**
     * Set EventRemarks value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks $eventRemarks
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setEventRemarks(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks $eventRemarks = null): self
    {
        $this->EventRemarks = $eventRemarks;
        
        return $this;
    }
    /**
     * Get ServiceArea value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea|null
     */
    public function getServiceArea(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea
    {
        return $this->ServiceArea;
    }
    /**
     * Set ServiceArea value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ShipmentEvent
     */
    public function setServiceArea(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea = null): self
    {
        $this->ServiceArea = $serviceArea;
        
        return $this;
    }
}
