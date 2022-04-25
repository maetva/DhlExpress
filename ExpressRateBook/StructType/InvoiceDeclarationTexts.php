<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText $InvoiceDeclarationText = null;
    /**
     * Constructor method for InvoiceDeclarationTexts
     * @uses InvoiceDeclarationTexts::setInvoiceDeclarationText()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText = null)
    {
        $this
            ->setInvoiceDeclarationText($invoiceDeclarationText);
    }
    /**
     * Get InvoiceDeclarationText value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText|null
     */
    public function getInvoiceDeclarationText(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText
    {
        return $this->InvoiceDeclarationText;
    }
    /**
     * Set InvoiceDeclarationText value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationTexts
     */
    public function setInvoiceDeclarationText(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText $invoiceDeclarationText = null): self
    {
        $this->InvoiceDeclarationText = $invoiceDeclarationText;
        
        return $this;
    }
}
