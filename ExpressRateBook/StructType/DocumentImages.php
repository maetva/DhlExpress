<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentImages StructType
 * Meta information extracted from the WSDL
 * - documentation: To support multiple custom invoice an support document images
 * @subpackage Structs
 */
class DocumentImages extends AbstractStructBase
{
    /**
     * The DocumentImage
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $DocumentImage = null;
    /**
     * Constructor method for DocumentImages
     * @uses DocumentImages::setDocumentImage()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null)
    {
        $this
            ->setDocumentImage($documentImage);
    }
    /**
     * Get DocumentImage value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    public function getDocumentImage(): ?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage
    {
        return $this->DocumentImage;
    }
    /**
     * Set DocumentImage value
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImages
     */
    public function setDocumentImage(?\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null): self
    {
        $this->DocumentImage = $documentImage;
        
        return $this;
    }
}
