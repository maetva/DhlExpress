<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_BankDetail StructType
 * @subpackage Structs
 */
class DocTypeRef_BankDetail extends AbstractStructBase
{
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - documentation: To be mapped in Customs Invoice - Russia Bank Name field
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BankName = null;
    /**
     * The BankSettlementAccountNumberInLocalCurrency
     * Meta information extracted from the WSDL
     * - documentation: To be mapped in Customs Invoice - Russia Bank Settlement Account Number in RUR field
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BankSettlementAccountNumberInLocalCurrency = null;
    /**
     * The BankSettlementAccountNumberInForeignCurrency
     * Meta information extracted from the WSDL
     * - documentation: To be mapped in Customs Invoice - Russia Bank Settlement Account Number in RUR field
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BankSettlementAccountNumberInForeignCurrency = null;
    /**
     * Constructor method for docTypeRef_BankDetail
     * @uses DocTypeRef_BankDetail::setBankName()
     * @uses DocTypeRef_BankDetail::setBankSettlementAccountNumberInLocalCurrency()
     * @uses DocTypeRef_BankDetail::setBankSettlementAccountNumberInForeignCurrency()
     * @param string $bankName
     * @param string $bankSettlementAccountNumberInLocalCurrency
     * @param string $bankSettlementAccountNumberInForeignCurrency
     */
    public function __construct(?string $bankName = null, ?string $bankSettlementAccountNumberInLocalCurrency = null, ?string $bankSettlementAccountNumberInForeignCurrency = null)
    {
        $this
            ->setBankName($bankName)
            ->setBankSettlementAccountNumberInLocalCurrency($bankSettlementAccountNumberInLocalCurrency)
            ->setBankSettlementAccountNumberInForeignCurrency($bankSettlementAccountNumberInForeignCurrency);
    }
    /**
     * Get BankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->BankName;
    }
    /**
     * Set BankName value
     * @param string $bankName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->BankName = $bankName;
        
        return $this;
    }
    /**
     * Get BankSettlementAccountNumberInLocalCurrency value
     * @return string|null
     */
    public function getBankSettlementAccountNumberInLocalCurrency(): ?string
    {
        return $this->BankSettlementAccountNumberInLocalCurrency;
    }
    /**
     * Set BankSettlementAccountNumberInLocalCurrency value
     * @param string $bankSettlementAccountNumberInLocalCurrency
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail
     */
    public function setBankSettlementAccountNumberInLocalCurrency(?string $bankSettlementAccountNumberInLocalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($bankSettlementAccountNumberInLocalCurrency) && !is_string($bankSettlementAccountNumberInLocalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankSettlementAccountNumberInLocalCurrency, true), gettype($bankSettlementAccountNumberInLocalCurrency)), __LINE__);
        }
        $this->BankSettlementAccountNumberInLocalCurrency = $bankSettlementAccountNumberInLocalCurrency;
        
        return $this;
    }
    /**
     * Get BankSettlementAccountNumberInForeignCurrency value
     * @return string|null
     */
    public function getBankSettlementAccountNumberInForeignCurrency(): ?string
    {
        return $this->BankSettlementAccountNumberInForeignCurrency;
    }
    /**
     * Set BankSettlementAccountNumberInForeignCurrency value
     * @param string $bankSettlementAccountNumberInForeignCurrency
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail
     */
    public function setBankSettlementAccountNumberInForeignCurrency(?string $bankSettlementAccountNumberInForeignCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($bankSettlementAccountNumberInForeignCurrency) && !is_string($bankSettlementAccountNumberInForeignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankSettlementAccountNumberInForeignCurrency, true), gettype($bankSettlementAccountNumberInForeignCurrency)), __LINE__);
        }
        $this->BankSettlementAccountNumberInForeignCurrency = $bankSettlementAccountNumberInForeignCurrency;
        
        return $this;
    }
}
