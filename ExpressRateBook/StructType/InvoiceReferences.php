<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference $InvoiceReference = null;
    /**
     * Constructor method for InvoiceReferences
     * @uses InvoiceReferences::setInvoiceReference()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference $invoiceReference
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference $invoiceReference = null)
    {
        $this
            ->setInvoiceReference($invoiceReference);
    }
    /**
     * Get InvoiceReference value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference|null
     */
    public function getInvoiceReference(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference
    {
        return $this->InvoiceReference;
    }
    /**
     * Set InvoiceReference value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference $invoiceReference
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReferences
     */
    public function setInvoiceReference(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\InvoiceReference $invoiceReference = null): self
    {
        $this->InvoiceReference = $invoiceReference;
        
        return $this;
    }
}
