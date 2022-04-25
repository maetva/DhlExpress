<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDetails StructType
 * @subpackage Structs
 */
class PickupDetails extends AbstractStructBase
{
    /**
     * The CutoffTime
     * Meta information extracted from the WSDL
     * - documentation: Identifies the cutoff date and time the package needs to be tendered to the shipper, in order to meet the estimated delivery time.The time is the local time of the shipment based on the shipper's time zone. The date component must be
     * in the format:YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTime = null;
    /**
     * The CutoffTimeGMT
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTimeGMT = null;
    /**
     * The CutoffTimeOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CutoffTimeOffset = null;
    /**
     * The PickupWindowEarliestTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupWindowEarliestTime = null;
    /**
     * The PickupWindowLatestTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupWindowLatestTime = null;
    /**
     * The TotalTransitDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TotalTransitDays = null;
    /**
     * The PickupAdditionalDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupAdditionalDays = null;
    /**
     * The DeliveryAdditionalDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryAdditionalDays = null;
    /**
     * The PickupDayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PickupDayOfWeek = null;
    /**
     * The DestinationDayOfWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DestinationDayOfWeek = null;
    /**
     * Constructor method for PickupDetails
     * @uses PickupDetails::setCutoffTime()
     * @uses PickupDetails::setCutoffTimeGMT()
     * @uses PickupDetails::setCutoffTimeOffset()
     * @uses PickupDetails::setPickupWindowEarliestTime()
     * @uses PickupDetails::setPickupWindowLatestTime()
     * @uses PickupDetails::setTotalTransitDays()
     * @uses PickupDetails::setPickupAdditionalDays()
     * @uses PickupDetails::setDeliveryAdditionalDays()
     * @uses PickupDetails::setPickupDayOfWeek()
     * @uses PickupDetails::setDestinationDayOfWeek()
     * @param string $cutoffTime
     * @param string $cutoffTimeGMT
     * @param string $cutoffTimeOffset
     * @param string $pickupWindowEarliestTime
     * @param string $pickupWindowLatestTime
     * @param string $totalTransitDays
     * @param string $pickupAdditionalDays
     * @param string $deliveryAdditionalDays
     * @param string $pickupDayOfWeek
     * @param string $destinationDayOfWeek
     */
    public function __construct(?string $cutoffTime = null, ?string $cutoffTimeGMT = null, ?string $cutoffTimeOffset = null, ?string $pickupWindowEarliestTime = null, ?string $pickupWindowLatestTime = null, ?string $totalTransitDays = null, ?string $pickupAdditionalDays = null, ?string $deliveryAdditionalDays = null, ?string $pickupDayOfWeek = null, ?string $destinationDayOfWeek = null)
    {
        $this
            ->setCutoffTime($cutoffTime)
            ->setCutoffTimeGMT($cutoffTimeGMT)
            ->setCutoffTimeOffset($cutoffTimeOffset)
            ->setPickupWindowEarliestTime($pickupWindowEarliestTime)
            ->setPickupWindowLatestTime($pickupWindowLatestTime)
            ->setTotalTransitDays($totalTransitDays)
            ->setPickupAdditionalDays($pickupAdditionalDays)
            ->setDeliveryAdditionalDays($deliveryAdditionalDays)
            ->setPickupDayOfWeek($pickupDayOfWeek)
            ->setDestinationDayOfWeek($destinationDayOfWeek);
    }
    /**
     * Get CutoffTime value
     * @return string|null
     */
    public function getCutoffTime(): ?string
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param string $cutoffTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setCutoffTime(?string $cutoffTime = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTime) && !is_string($cutoffTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTime, true), gettype($cutoffTime)), __LINE__);
        }
        $this->CutoffTime = $cutoffTime;
        
        return $this;
    }
    /**
     * Get CutoffTimeGMT value
     * @return string|null
     */
    public function getCutoffTimeGMT(): ?string
    {
        return $this->CutoffTimeGMT;
    }
    /**
     * Set CutoffTimeGMT value
     * @param string $cutoffTimeGMT
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setCutoffTimeGMT(?string $cutoffTimeGMT = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTimeGMT) && !is_string($cutoffTimeGMT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTimeGMT, true), gettype($cutoffTimeGMT)), __LINE__);
        }
        $this->CutoffTimeGMT = $cutoffTimeGMT;
        
        return $this;
    }
    /**
     * Get CutoffTimeOffset value
     * @return string|null
     */
    public function getCutoffTimeOffset(): ?string
    {
        return $this->CutoffTimeOffset;
    }
    /**
     * Set CutoffTimeOffset value
     * @param string $cutoffTimeOffset
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setCutoffTimeOffset(?string $cutoffTimeOffset = null): self
    {
        // validation for constraint: string
        if (!is_null($cutoffTimeOffset) && !is_string($cutoffTimeOffset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTimeOffset, true), gettype($cutoffTimeOffset)), __LINE__);
        }
        $this->CutoffTimeOffset = $cutoffTimeOffset;
        
        return $this;
    }
    /**
     * Get PickupWindowEarliestTime value
     * @return string|null
     */
    public function getPickupWindowEarliestTime(): ?string
    {
        return $this->PickupWindowEarliestTime;
    }
    /**
     * Set PickupWindowEarliestTime value
     * @param string $pickupWindowEarliestTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setPickupWindowEarliestTime(?string $pickupWindowEarliestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupWindowEarliestTime) && !is_string($pickupWindowEarliestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupWindowEarliestTime, true), gettype($pickupWindowEarliestTime)), __LINE__);
        }
        $this->PickupWindowEarliestTime = $pickupWindowEarliestTime;
        
        return $this;
    }
    /**
     * Get PickupWindowLatestTime value
     * @return string|null
     */
    public function getPickupWindowLatestTime(): ?string
    {
        return $this->PickupWindowLatestTime;
    }
    /**
     * Set PickupWindowLatestTime value
     * @param string $pickupWindowLatestTime
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setPickupWindowLatestTime(?string $pickupWindowLatestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupWindowLatestTime) && !is_string($pickupWindowLatestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupWindowLatestTime, true), gettype($pickupWindowLatestTime)), __LINE__);
        }
        $this->PickupWindowLatestTime = $pickupWindowLatestTime;
        
        return $this;
    }
    /**
     * Get TotalTransitDays value
     * @return string|null
     */
    public function getTotalTransitDays(): ?string
    {
        return $this->TotalTransitDays;
    }
    /**
     * Set TotalTransitDays value
     * @param string $totalTransitDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setTotalTransitDays(?string $totalTransitDays = null): self
    {
        // validation for constraint: string
        if (!is_null($totalTransitDays) && !is_string($totalTransitDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalTransitDays, true), gettype($totalTransitDays)), __LINE__);
        }
        $this->TotalTransitDays = $totalTransitDays;
        
        return $this;
    }
    /**
     * Get PickupAdditionalDays value
     * @return string|null
     */
    public function getPickupAdditionalDays(): ?string
    {
        return $this->PickupAdditionalDays;
    }
    /**
     * Set PickupAdditionalDays value
     * @param string $pickupAdditionalDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setPickupAdditionalDays(?string $pickupAdditionalDays = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupAdditionalDays) && !is_string($pickupAdditionalDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupAdditionalDays, true), gettype($pickupAdditionalDays)), __LINE__);
        }
        $this->PickupAdditionalDays = $pickupAdditionalDays;
        
        return $this;
    }
    /**
     * Get DeliveryAdditionalDays value
     * @return string|null
     */
    public function getDeliveryAdditionalDays(): ?string
    {
        return $this->DeliveryAdditionalDays;
    }
    /**
     * Set DeliveryAdditionalDays value
     * @param string $deliveryAdditionalDays
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setDeliveryAdditionalDays(?string $deliveryAdditionalDays = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryAdditionalDays) && !is_string($deliveryAdditionalDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryAdditionalDays, true), gettype($deliveryAdditionalDays)), __LINE__);
        }
        $this->DeliveryAdditionalDays = $deliveryAdditionalDays;
        
        return $this;
    }
    /**
     * Get PickupDayOfWeek value
     * @return string|null
     */
    public function getPickupDayOfWeek(): ?string
    {
        return $this->PickupDayOfWeek;
    }
    /**
     * Set PickupDayOfWeek value
     * @param string $pickupDayOfWeek
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setPickupDayOfWeek(?string $pickupDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupDayOfWeek) && !is_string($pickupDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDayOfWeek, true), gettype($pickupDayOfWeek)), __LINE__);
        }
        $this->PickupDayOfWeek = $pickupDayOfWeek;
        
        return $this;
    }
    /**
     * Get DestinationDayOfWeek value
     * @return string|null
     */
    public function getDestinationDayOfWeek(): ?string
    {
        return $this->DestinationDayOfWeek;
    }
    /**
     * Set DestinationDayOfWeek value
     * @param string $destinationDayOfWeek
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PickupDetails
     */
    public function setDestinationDayOfWeek(?string $destinationDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDayOfWeek) && !is_string($destinationDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDayOfWeek, true), gettype($destinationDayOfWeek)), __LINE__);
        }
        $this->DestinationDayOfWeek = $destinationDayOfWeek;
        
        return $this;
    }
}
