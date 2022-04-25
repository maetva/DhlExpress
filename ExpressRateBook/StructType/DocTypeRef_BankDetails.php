<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail $BankDetail = null;
    /**
     * Constructor method for docTypeRef_BankDetails
     * @uses DocTypeRef_BankDetails::setBankDetail()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail = null)
    {
        $this
            ->setBankDetail($bankDetail);
    }
    /**
     * Get BankDetail value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail|null
     */
    public function getBankDetail(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail
    {
        return $this->BankDetail;
    }
    /**
     * Set BankDetail value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetails
     */
    public function setBankDetail(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_BankDetail $bankDetail = null): self
    {
        $this->BankDetail = $bankDetail;
        
        return $this;
    }
}
