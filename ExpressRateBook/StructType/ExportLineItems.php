<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportLineItems StructType
 * Meta information extracted from the WSDL
 * - documentation: Export line items details
 * @subpackage Structs
 */
class ExportLineItems extends AbstractStructBase
{
    /**
     * The ExportLineItem
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType $ExportLineItem = null;
    /**
     * Constructor method for ExportLineItems
     * @uses ExportLineItems::setExportLineItem()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null)
    {
        $this
            ->setExportLineItem($exportLineItem);
    }
    /**
     * Get ExportLineItem value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType|null
     */
    public function getExportLineItem(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType
    {
        return $this->ExportLineItem;
    }
    /**
     * Set ExportLineItem value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItems
     */
    public function setExportLineItem(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null): self
    {
        $this->ExportLineItem = $exportLineItem;
        
        return $this;
    }
}
