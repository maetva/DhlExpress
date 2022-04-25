<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_TotalNet StructType
 * @subpackage Structs
 */
class DocTypeRef_TotalNet extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - documentation: Total shipping charge with tax
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: PackageCharge or the Weight Charge
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Charges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges $Charges = null;
    /**
     * Constructor method for docTypeRef_TotalNet
     * @uses DocTypeRef_TotalNet::setType()
     * @uses DocTypeRef_TotalNet::setCurrency()
     * @uses DocTypeRef_TotalNet::setAmount()
     * @uses DocTypeRef_TotalNet::setCharges()
     * @param string $type
     * @param string $currency
     * @param string $amount
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges $charges
     */
    public function __construct(string $type, ?string $currency = null, ?string $amount = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges $charges = null)
    {
        $this
            ->setType($type)
            ->setCurrency($currency)
            ->setAmount($amount)
            ->setCharges($charges);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalNet
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalNet
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalNet
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
     * Get Charges value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges|null
     */
    public function getCharges(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges $charges
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_TotalNet
     */
    public function setCharges(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Charges $charges = null): self
    {
        $this->Charges = $charges;
        
        return $this;
    }
}
