<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDocuments StructType
 * Meta information extracted from the WSDL
 * - documentation: Export Declaration's Customs Documents details
 * @subpackage Structs
 */
class CustomsDocuments extends AbstractStructBase
{
    /**
     * The CustomsDocument
     * Meta information extracted from the WSDL
     * - documentation: Export Declaration's Customs Document entry
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument $CustomsDocument = null;
    /**
     * Constructor method for CustomsDocuments
     * @uses CustomsDocuments::setCustomsDocument()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument = null)
    {
        $this
            ->setCustomsDocument($customsDocument);
    }
    /**
     * Get CustomsDocument value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument|null
     */
    public function getCustomsDocument(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument
    {
        return $this->CustomsDocument;
    }
    /**
     * Set CustomsDocument value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocuments
     */
    public function setCustomsDocument(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument = null): self
    {
        $this->CustomsDocument = $customsDocument;
        
        return $this;
    }
}
