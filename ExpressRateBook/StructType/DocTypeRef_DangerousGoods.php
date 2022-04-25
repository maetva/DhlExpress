<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_DangerousGoods StructType
 * Meta information extracted from the WSDL
 * - documentation: Dangerous goods segment
 * @subpackage Structs
 */
class DocTypeRef_DangerousGoods extends AbstractStructBase
{
    /**
     * The Content
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content $Content = null;
    /**
     * Constructor method for docTypeRef_DangerousGoods
     * @uses DocTypeRef_DangerousGoods::setContent()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content $content
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content $content = null)
    {
        $this
            ->setContent($content);
    }
    /**
     * Get Content value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content|null
     */
    public function getContent(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content $content
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DangerousGoods
     */
    public function setContent(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Content $content = null): self
    {
        $this->Content = $content;
        
        return $this;
    }
}
