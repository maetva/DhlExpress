<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType $ExportLineItem = null;
    /**
     * Constructor method for ExportLineItems
     * @uses ExportLineItems::setExportLineItem()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null)
    {
        $this
            ->setExportLineItem($exportLineItem);
    }
    /**
     * Get ExportLineItem value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType|null
     */
    public function getExportLineItem(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType
    {
        return $this->ExportLineItem;
    }
    /**
     * Set ExportLineItem value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItems
     */
    public function setExportLineItem(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportLineItemType $exportLineItem = null): self
    {
        $this->ExportLineItem = $exportLineItem;
        
        return $this;
    }
}
