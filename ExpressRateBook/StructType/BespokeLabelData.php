<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes $LabelBarcodes = null;
    /**
     * The LabelTextEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries $LabelTextEntries = null;
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
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries
     * @param string $labelDescription
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries = null, ?string $labelDescription = null)
    {
        $this
            ->setLabelBarcodes($labelBarcodes)
            ->setLabelTextEntries($labelTextEntries)
            ->setLabelDescription($labelDescription);
    }
    /**
     * Get LabelBarcodes value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes|null
     */
    public function getLabelBarcodes(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes
    {
        return $this->LabelBarcodes;
    }
    /**
     * Set LabelBarcodes value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData
     */
    public function setLabelBarcodes(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelBarcodes $labelBarcodes = null): self
    {
        $this->LabelBarcodes = $labelBarcodes;
        
        return $this;
    }
    /**
     * Get LabelTextEntries value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries|null
     */
    public function getLabelTextEntries(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries
    {
        return $this->LabelTextEntries;
    }
    /**
     * Set LabelTextEntries value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData
     */
    public function setLabelTextEntries(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\LabelTextEntries $labelTextEntries = null): self
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData
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
