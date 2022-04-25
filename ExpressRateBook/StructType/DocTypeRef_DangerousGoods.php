<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

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
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content $Content = null;
    /**
     * Constructor method for docTypeRef_DangerousGoods
     * @uses DocTypeRef_DangerousGoods::setContent()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content $content
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content $content = null)
    {
        $this
            ->setContent($content);
    }
    /**
     * Get Content value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content|null
     */
    public function getContent(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content $content
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DangerousGoods
     */
    public function setContent(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_Content $content = null): self
    {
        $this->Content = $content;
        
        return $this;
    }
}
