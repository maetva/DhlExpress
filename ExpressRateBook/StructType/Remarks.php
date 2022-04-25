<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks StructType
 * Meta information extracted from the WSDL
 * - documentation: Customs Invoice Remarks
 * @subpackage Structs
 */
class Remarks extends AbstractStructBase
{
    /**
     * The Remark
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark $Remark = null;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setRemark()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark $remark
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark $remark = null)
    {
        $this
            ->setRemark($remark);
    }
    /**
     * Get Remark value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark|null
     */
    public function getRemark(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark $remark
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remarks
     */
    public function setRemark(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
}
