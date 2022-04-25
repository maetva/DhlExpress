<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument $CustomsDocument = null;
    /**
     * Constructor method for CustomsDocuments
     * @uses CustomsDocuments::setCustomsDocument()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument = null)
    {
        $this
            ->setCustomsDocument($customsDocument);
    }
    /**
     * Get CustomsDocument value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument|null
     */
    public function getCustomsDocument(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument
    {
        return $this->CustomsDocument;
    }
    /**
     * Set CustomsDocument value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocuments
     */
    public function setCustomsDocument(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\CustomsDocument $customsDocument = null): self
    {
        $this->CustomsDocument = $customsDocument;
        
        return $this;
    }
}
