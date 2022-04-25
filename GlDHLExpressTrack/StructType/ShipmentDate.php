<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDate StructType
 * @subpackage Structs
 */
class ShipmentDate extends AbstractStructBase
{
    /**
     * The From
     * Meta information extracted from the WSDL
     * - documentation: The ShipmentDateFrom element contains the date from which the shipment should be queried
     * @var string|null
     */
    protected ?string $From = null;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - documentation: The ShipmentDateTo element contains the date to which the shipment should be queried
     * @var string|null
     */
    protected ?string $To = null;
    /**
     * Constructor method for ShipmentDate
     * @uses ShipmentDate::setFrom()
     * @uses ShipmentDate::setTo()
     * @param string $from
     * @param string $to
     */
    public function __construct(?string $from = null, ?string $to = null)
    {
        $this
            ->setFrom($from)
            ->setTo($to);
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentDate
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get To value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\ShipmentDate
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->To = $to;
        
        return $this;
    }
}
