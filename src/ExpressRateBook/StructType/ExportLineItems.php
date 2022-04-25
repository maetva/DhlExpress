<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType $ExportLineItem = null;
    /**
     * Constructor method for ExportLineItems
     * @uses ExportLineItems::setExportLineItem()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null)
    {
        $this
            ->setExportLineItem($exportLineItem);
    }
    /**
     * Get ExportLineItem value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType|null
     */
    public function getExportLineItem(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType
    {
        return $this->ExportLineItem;
    }
    /**
     * Set ExportLineItem value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItems
     */
    public function setExportLineItem(?\Maetva\DhlExpress\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null): self
    {
        $this->ExportLineItem = $exportLineItem;
        
        return $this;
    }
}
