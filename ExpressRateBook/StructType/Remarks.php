<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark $Remark = null;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setRemark()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark $remark
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark $remark = null)
    {
        $this
            ->setRemark($remark);
    }
    /**
     * Get Remark value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark|null
     */
    public function getRemark(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark $remark
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remarks
     */
    public function setRemark(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
}
