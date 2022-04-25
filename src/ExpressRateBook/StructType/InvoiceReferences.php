<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceReferences StructType
 * Meta information extracted from the WSDL
 * - documentation: Customs Invoice References
 * @subpackage Structs
 */
class InvoiceReferences extends AbstractStructBase
{
    /**
     * The InvoiceReference
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference $InvoiceReference = null;
    /**
     * Constructor method for InvoiceReferences
     * @uses InvoiceReferences::setInvoiceReference()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference $invoiceReference
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference $invoiceReference = null)
    {
        $this
            ->setInvoiceReference($invoiceReference);
    }
    /**
     * Get InvoiceReference value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference|null
     */
    public function getInvoiceReference(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference
    {
        return $this->InvoiceReference;
    }
    /**
     * Set InvoiceReference value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference $invoiceReference
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReferences
     */
    public function setInvoiceReference(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceReference $invoiceReference = null): self
    {
        $this->InvoiceReference = $invoiceReference;
        
        return $this;
    }
}
