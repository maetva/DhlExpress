<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode $LabelBarcode = null;
    /**
     * Constructor method for LabelBarcodes
     * @uses LabelBarcodes::setLabelBarcode()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode = null)
    {
        $this
            ->setLabelBarcode($labelBarcode);
    }
    /**
     * Get LabelBarcode value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode|null
     */
    public function getLabelBarcode(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode
    {
        return $this->LabelBarcode;
    }
    /**
     * Set LabelBarcode value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcodes
     */
    public function setLabelBarcode(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelBarcode $labelBarcode = null): self
    {
        $this->LabelBarcode = $labelBarcode;
        
        return $this;
    }
}
