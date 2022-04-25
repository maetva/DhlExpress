<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDeclarationTexts StructType
 * Meta information extracted from the WSDL
 * - documentation: Invoice declaration texts
 * @subpackage Structs
 */
class InvoiceDeclarationTexts extends AbstractStructBase
{
    /**
     * The InvoiceDeclarationText
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText $InvoiceDeclarationText = null;
    /**
     * Constructor method for InvoiceDeclarationTexts
     * @uses InvoiceDeclarationTexts::setInvoiceDeclarationText()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText = null)
    {
        $this
            ->setInvoiceDeclarationText($invoiceDeclarationText);
    }
    /**
     * Get InvoiceDeclarationText value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText|null
     */
    public function getInvoiceDeclarationText(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText
    {
        return $this->InvoiceDeclarationText;
    }
    /**
     * Set InvoiceDeclarationText value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationTexts
     */
    public function setInvoiceDeclarationText(?\Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText = null): self
    {
        $this->InvoiceDeclarationText = $invoiceDeclarationText;
        
        return $this;
    }
}
