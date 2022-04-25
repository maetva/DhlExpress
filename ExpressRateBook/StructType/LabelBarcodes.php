<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBarcodes StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label - ECOM26_84CI_003 templates
 * @subpackage Structs
 */
class LabelBarcodes extends AbstractStructBase
{
    /**
     * The LabelBarcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode $LabelBarcode = null;
    /**
     * Constructor method for LabelBarcodes
     * @uses LabelBarcodes::setLabelBarcode()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode = null)
    {
        $this
            ->setLabelBarcode($labelBarcode);
    }
    /**
     * Get LabelBarcode value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode|null
     */
    public function getLabelBarcode(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode
    {
        return $this->LabelBarcode;
    }
    /**
     * Set LabelBarcode value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes
     */
    public function setLabelBarcode(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode = null): self
    {
        $this->LabelBarcode = $labelBarcode;
        
        return $this;
    }
}
