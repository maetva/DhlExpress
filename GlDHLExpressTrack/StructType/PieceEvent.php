<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceEvent StructType
 * @subpackage Structs
 */
class PieceEvent extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: Local Date of Piece Event
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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $ServiceEvent = null;
    /**
     * The Signatory
     * Meta information extracted from the WSDL
     * - documentation: The signee for the piece, only occurs for final disposition events (such as OK event)
     * - base: xsd:string
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $Signatory = null;
    /**
     * The ServiceArea
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $ServiceArea = null;
    /**
     * The ShipperReference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $ShipperReference = null;
    /**
     * Constructor method for PieceEvent
     * @uses PieceEvent::setDate()
     * @uses PieceEvent::setTime()
     * @uses PieceEvent::setServiceEvent()
     * @uses PieceEvent::setSignatory()
     * @uses PieceEvent::setServiceArea()
     * @uses PieceEvent::setShipperReference()
     * @param string $date
     * @param string $time
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent
     * @param string $signatory
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $shipperReference
     */
    public function __construct(?string $date = null, ?string $time = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent = null, ?string $signatory = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $shipperReference = null)
    {
        $this
            ->setDate($date)
            ->setTime($time)
            ->setServiceEvent($serviceEvent)
            ->setSignatory($signatory)
            ->setServiceArea($serviceArea)
            ->setShipperReference($shipperReference);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent|null
     */
    public function getServiceEvent(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent
    {
        return $this->ServiceEvent;
    }
    /**
     * Set ServiceEvent value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
     */
    public function setServiceEvent(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceEvent $serviceEvent = null): self
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
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
     * Get ServiceArea value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea|null
     */
    public function getServiceArea(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea
    {
        return $this->ServiceArea;
    }
    /**
     * Set ServiceArea value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
     */
    public function setServiceArea(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ServiceArea $serviceArea = null): self
    {
        $this->ServiceArea = $serviceArea;
        
        return $this;
    }
    /**
     * Get ShipperReference value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference|null
     */
    public function getShipperReference(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference
    {
        return $this->ShipperReference;
    }
    /**
     * Set ShipperReference value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $shipperReference
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceEvent
     */
    public function setShipperReference(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $shipperReference = null): self
    {
        $this->ShipperReference = $shipperReference;
        
        return $this;
    }
}
