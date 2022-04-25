<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDataTextEntries StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer Data Texts that would like to be printed in COMMERCIAL_INVOICE_04 template (note: only to be used for preparing Loose BBX shipments)
 * @subpackage Structs
 */
class CustomerDataTextEntries extends AbstractStructBase
{
    /**
     * The CustomerDataTextEntry
     * Meta information extracted from the WSDL
     * - documentation: Customer Data Texts that would like to be printed in COMMERCIAL_INVOICE_04 template
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $CustomerDataTextEntry = null;
    /**
     * Constructor method for CustomerDataTextEntries
     * @uses CustomerDataTextEntries::setCustomerDataTextEntry()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry = null)
    {
        $this
            ->setCustomerDataTextEntry($customerDataTextEntry);
    }
    /**
     * Get CustomerDataTextEntry value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry|null
     */
    public function getCustomerDataTextEntry(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry
    {
        return $this->CustomerDataTextEntry;
    }
    /**
     * Set CustomerDataTextEntry value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntries
     */
    public function setCustomerDataTextEntry(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry = null): self
    {
        $this->CustomerDataTextEntry = $customerDataTextEntry;
        
        return $this;
    }
}
