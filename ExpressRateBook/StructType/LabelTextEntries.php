<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelTextEntries StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer bar code that would like to be printed in supported transport label templates
 * @subpackage Structs
 */
class LabelTextEntries extends AbstractStructBase
{
    /**
     * The LabelTextEntry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry $LabelTextEntry = null;
    /**
     * Constructor method for LabelTextEntries
     * @uses LabelTextEntries::setLabelTextEntry()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry = null)
    {
        $this
            ->setLabelTextEntry($labelTextEntry);
    }
    /**
     * Get LabelTextEntry value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry|null
     */
    public function getLabelTextEntry(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry
    {
        return $this->LabelTextEntry;
    }
    /**
     * Set LabelTextEntry value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries
     */
    public function setLabelTextEntry(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry = null): self
    {
        $this->LabelTextEntry = $labelTextEntry;
        
        return $this;
    }
}
