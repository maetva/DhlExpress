<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry $LabelTextEntry = null;
    /**
     * Constructor method for LabelTextEntries
     * @uses LabelTextEntries::setLabelTextEntry()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry = null)
    {
        $this
            ->setLabelTextEntry($labelTextEntry);
    }
    /**
     * Get LabelTextEntry value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry|null
     */
    public function getLabelTextEntry(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry
    {
        return $this->LabelTextEntry;
    }
    /**
     * Set LabelTextEntry value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntries
     */
    public function setLabelTextEntry(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\LabelTextEntry $labelTextEntry = null): self
    {
        $this->LabelTextEntry = $labelTextEntry;
        
        return $this;
    }
}
