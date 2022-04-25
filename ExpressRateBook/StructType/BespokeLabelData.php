<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BespokeLabelData StructType
 * @subpackage Structs
 */
class BespokeLabelData extends AbstractStructBase
{
    /**
     * The LabelBarcodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes $LabelBarcodes = null;
    /**
     * The LabelTextEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries $LabelTextEntries = null;
    /**
     * The LabelDescription
     * Meta information extracted from the WSDL
     * - documentation: Customer additional information Description
     * - base: xsd:token
     * - maxLength: 80
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LabelDescription = null;
    /**
     * Constructor method for BespokeLabelData
     * @uses BespokeLabelData::setLabelBarcodes()
     * @uses BespokeLabelData::setLabelTextEntries()
     * @uses BespokeLabelData::setLabelDescription()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries
     * @param string $labelDescription
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries = null, ?string $labelDescription = null)
    {
        $this
            ->setLabelBarcodes($labelBarcodes)
            ->setLabelTextEntries($labelTextEntries)
            ->setLabelDescription($labelDescription);
    }
    /**
     * Get LabelBarcodes value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes|null
     */
    public function getLabelBarcodes(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes
    {
        return $this->LabelBarcodes;
    }
    /**
     * Set LabelBarcodes value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\BespokeLabelData
     */
    public function setLabelBarcodes(?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes = null): self
    {
        $this->LabelBarcodes = $labelBarcodes;
        
        return $this;
    }
    /**
     * Get LabelTextEntries value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries|null
     */
    public function getLabelTextEntries(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries
    {
        return $this->LabelTextEntries;
    }
    /**
     * Set LabelTextEntries value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\BespokeLabelData
     */
    public function setLabelTextEntries(?\Maetva\DhlExpress\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries = null): self
    {
        $this->LabelTextEntries = $labelTextEntries;
        
        return $this;
    }
    /**
     * Get LabelDescription value
     * @return string|null
     */
    public function getLabelDescription(): ?string
    {
        return $this->LabelDescription;
    }
    /**
     * Set LabelDescription value
     * @param string $labelDescription
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\BespokeLabelData
     */
    public function setLabelDescription(?string $labelDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($labelDescription) && !is_string($labelDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelDescription, true), gettype($labelDescription)), __LINE__);
        }
        // validation for constraint: maxLength(80)
        if (!is_null($labelDescription) && mb_strlen((string) $labelDescription) > 80) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 80', mb_strlen((string) $labelDescription)), __LINE__);
        }
        $this->LabelDescription = $labelDescription;
        
        return $this;
    }
}
