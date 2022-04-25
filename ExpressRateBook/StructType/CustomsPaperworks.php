<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsPaperworks StructType
 * Meta information extracted from the WSDL
 * - documentation: Export Declaration Line Item's Customs Paperworks
 * @subpackage Structs
 */
class CustomsPaperworks extends AbstractStructBase
{
    /**
     * The CustomsPaperwork
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $CustomsPaperwork = null;
    /**
     * Constructor method for CustomsPaperworks
     * @uses CustomsPaperworks::setCustomsPaperwork()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork = null)
    {
        $this
            ->setCustomsPaperwork($customsPaperwork);
    }
    /**
     * Get CustomsPaperwork value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork|null
     */
    public function getCustomsPaperwork(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork
    {
        return $this->CustomsPaperwork;
    }
    /**
     * Set CustomsPaperwork value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperworks
     */
    public function setCustomsPaperwork(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork = null): self
    {
        $this->CustomsPaperwork = $customsPaperwork;
        
        return $this;
    }
}
