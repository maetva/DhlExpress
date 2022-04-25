<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Breakdown StructType
 * @subpackage Structs
 */
class Breakdown extends AbstractStructBase
{
    /**
     * The ChargeType
     * Meta information extracted from the WSDL
     * - documentation: If a breakdown is provided, details can either be "TAX" or "DISCOUNT"
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChargeType = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Discount or tax type codes as provided by DHL Express. Example values; For discount; P – promotional S – special
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The actual amount of the discount/tax
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Rate
     * Meta information extracted from the WSDL
     * - documentation: Percentage of the discount/tax
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Rate = null;
    /**
     * The BaseAmount
     * Meta information extracted from the WSDL
     * - documentation: The base amount of the service charge
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BaseAmount = null;
    /**
     * Constructor method for Breakdown
     * @uses Breakdown::setChargeType()
     * @uses Breakdown::setType()
     * @uses Breakdown::setAmount()
     * @uses Breakdown::setRate()
     * @uses Breakdown::setBaseAmount()
     * @param string $chargeType
     * @param string $type
     * @param string $amount
     * @param string $rate
     * @param string $baseAmount
     */
    public function __construct(?string $chargeType = null, ?string $type = null, ?string $amount = null, ?string $rate = null, ?string $baseAmount = null)
    {
        $this
            ->setChargeType($chargeType)
            ->setType($type)
            ->setAmount($amount)
            ->setRate($rate)
            ->setBaseAmount($baseAmount);
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType(): ?string
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown
     */
    public function setChargeType(?string $chargeType = null): self
    {
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeType, true), gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        
        return $this;
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown
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
    /**
     * Get Rate value
     * @return string|null
     */
    public function getRate(): ?string
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param string $rate
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown
     */
    public function setRate(?string $rate = null): self
    {
        // validation for constraint: string
        if (!is_null($rate) && !is_string($rate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rate, true), gettype($rate)), __LINE__);
        }
        $this->Rate = $rate;
        
        return $this;
    }
    /**
     * Get BaseAmount value
     * @return string|null
     */
    public function getBaseAmount(): ?string
    {
        return $this->BaseAmount;
    }
    /**
     * Set BaseAmount value
     * @param string $baseAmount
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Breakdown
     */
    public function setBaseAmount(?string $baseAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($baseAmount) && !is_string($baseAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseAmount, true), gettype($baseAmount)), __LINE__);
        }
        $this->BaseAmount = $baseAmount;
        
        return $this;
    }
}
