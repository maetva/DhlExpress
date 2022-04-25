<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage $DocumentImage = null;
    /**
     * Constructor method for DocumentImages
     * @uses DocumentImages::setDocumentImage()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null)
    {
        $this
            ->setDocumentImage($documentImage);
    }
    /**
     * Get DocumentImage value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage|null
     */
    public function getDocumentImage(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage
    {
        return $this->DocumentImage;
    }
    /**
     * Set DocumentImage value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImages
     */
    public function setDocumentImage(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocumentImage $documentImage = null): self
    {
        $this->DocumentImage = $documentImage;
        
        return $this;
    }
}
