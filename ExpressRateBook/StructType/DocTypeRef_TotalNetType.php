<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_TotalNetType StructType
 * @subpackage Structs
 */
class DocTypeRef_TotalNetType extends AbstractStructBase
{
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Identifies the currency of the rate
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Identifies the rate price.
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for docTypeRef_TotalNetType
     * @uses DocTypeRef_TotalNetType::setCurrency()
     * @uses DocTypeRef_TotalNetType::setAmount()
     * @uses DocTypeRef_TotalNetType::setType()
     * @param string $currency
     * @param string $amount
     * @param string $type
     */
    public function __construct(?string $currency = null, ?string $amount = null, ?string $type = null)
    {
        $this
            ->setCurrency($currency)
            ->setAmount($amount)
            ->setType($type);
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNetType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNetType
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_TotalNetType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
