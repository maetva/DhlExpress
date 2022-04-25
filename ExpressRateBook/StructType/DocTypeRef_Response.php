<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Response StructType
 * @subpackage Structs
 */
class DocTypeRef_Response extends AbstractStructBase
{
    /**
     * The ServiceHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $ServiceHeader = null;
    /**
     * Constructor method for docTypeRef_Response
     * @uses DocTypeRef_Response::setServiceHeader()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null)
    {
        $this
            ->setServiceHeader($serviceHeader);
    }
    /**
     * Get ServiceHeader value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType|null
     */
    public function getServiceHeader(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType
    {
        return $this->ServiceHeader;
    }
    /**
     * Set ServiceHeader value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_Response
     */
    public function setServiceHeader(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHeaderType $serviceHeader = null): self
    {
        $this->ServiceHeader = $serviceHeader;
        
        return $this;
    }
}
