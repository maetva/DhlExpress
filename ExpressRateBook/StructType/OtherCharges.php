<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherCharges StructType
 * Meta information extracted from the WSDL
 * - documentation: Other Charges caption and its charges value details
 * @subpackage Structs
 */
class OtherCharges extends AbstractStructBase
{
    /**
     * The OtherCharge
     * Meta information extracted from the WSDL
     * - documentation: Other Charge caption and its charge value
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge $OtherCharge = null;
    /**
     * Constructor method for OtherCharges
     * @uses OtherCharges::setOtherCharge()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge $otherCharge
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge $otherCharge = null)
    {
        $this
            ->setOtherCharge($otherCharge);
    }
    /**
     * Get OtherCharge value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge|null
     */
    public function getOtherCharge(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge
    {
        return $this->OtherCharge;
    }
    /**
     * Set OtherCharge value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge $otherCharge
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharges
     */
    public function setOtherCharge(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\OtherCharge $otherCharge = null): self
    {
        $this->OtherCharge = $otherCharge;
        
        return $this;
    }
}
