<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeRate StructType
 * @subpackage Structs
 */
class ExchangeRate extends AbstractStructBase
{
    /**
     * The Rate
     * Meta information extracted from the WSDL
     * - documentation: Rate of the currency exchange
     * @var string|null
     */
    protected ?string $Rate = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: The currency code
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The BaseCurrency
     * Meta information extracted from the WSDL
     * - documentation: The currency code of the base currency is either USD or EUR
     * @var string|null
     */
    protected ?string $BaseCurrency = null;
    /**
     * Constructor method for ExchangeRate
     * @uses ExchangeRate::setRate()
     * @uses ExchangeRate::setCurrency()
     * @uses ExchangeRate::setBaseCurrency()
     * @param string $rate
     * @param string $currency
     * @param string $baseCurrency
     */
    public function __construct(?string $rate = null, ?string $currency = null, ?string $baseCurrency = null)
    {
        $this
            ->setRate($rate)
            ->setCurrency($currency)
            ->setBaseCurrency($baseCurrency);
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExchangeRate
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExchangeRate
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
     * Get BaseCurrency value
     * @return string|null
     */
    public function getBaseCurrency(): ?string
    {
        return $this->BaseCurrency;
    }
    /**
     * Set BaseCurrency value
     * @param string $baseCurrency
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExchangeRate
     */
    public function setBaseCurrency(?string $baseCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($baseCurrency) && !is_string($baseCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseCurrency, true), gettype($baseCurrency)), __LINE__);
        }
        $this->BaseCurrency = $baseCurrency;
        
        return $this;
    }
}
