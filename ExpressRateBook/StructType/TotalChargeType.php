<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalChargeType StructType
 * @subpackage Structs
 */
class TotalChargeType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Expected values in Breakdown/Type are below: STTXA – Total tax for the shipment STDIS – Total discount for the shipment SPRQT – Net shipment / weight charge
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount price of DHL product and services
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * Constructor method for TotalChargeType
     * @uses TotalChargeType::setType()
     * @uses TotalChargeType::setAmount()
     * @param string $type
     * @param string $amount
     */
    public function __construct(?string $type = null, ?string $amount = null)
    {
        $this
            ->setType($type)
            ->setAmount($amount);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\TotalChargeType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\TotalChargeType
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
}
