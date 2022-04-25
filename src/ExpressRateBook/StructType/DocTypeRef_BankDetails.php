<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_BankDetails StructType
 * @subpackage Structs
 */
class DocTypeRef_BankDetails extends AbstractStructBase
{
    /**
     * The BankDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail $BankDetail = null;
    /**
     * Constructor method for docTypeRef_BankDetails
     * @uses DocTypeRef_BankDetails::setBankDetail()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail = null)
    {
        $this
            ->setBankDetail($bankDetail);
    }
    /**
     * Get BankDetail value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail|null
     */
    public function getBankDetail(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail
    {
        return $this->BankDetail;
    }
    /**
     * Set BankDetail value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetails
     */
    public function setBankDetail(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail = null): self
    {
        $this->BankDetail = $bankDetail;
        
        return $this;
    }
}
