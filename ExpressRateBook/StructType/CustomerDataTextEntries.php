<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $CustomerDataTextEntry = null;
    /**
     * Constructor method for CustomerDataTextEntries
     * @uses CustomerDataTextEntries::setCustomerDataTextEntry()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry = null)
    {
        $this
            ->setCustomerDataTextEntry($customerDataTextEntry);
    }
    /**
     * Get CustomerDataTextEntry value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry|null
     */
    public function getCustomerDataTextEntry(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry
    {
        return $this->CustomerDataTextEntry;
    }
    /**
     * Set CustomerDataTextEntry value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntries
     */
    public function setCustomerDataTextEntry(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomerDataTextEntry $customerDataTextEntry = null): self
    {
        $this->CustomerDataTextEntry = $customerDataTextEntry;
        
        return $this;
    }
}
