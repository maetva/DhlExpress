<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsPaperworks StructType
 * Meta information extracted from the WSDL
 * - documentation: Export Declaration Line Item's Customs Paperworks
 * @subpackage Structs
 */
class CustomsPaperworks extends AbstractStructBase
{
    /**
     * The CustomsPaperwork
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $CustomsPaperwork = null;
    /**
     * Constructor method for CustomsPaperworks
     * @uses CustomsPaperworks::setCustomsPaperwork()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork = null)
    {
        $this
            ->setCustomsPaperwork($customsPaperwork);
    }
    /**
     * Get CustomsPaperwork value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork|null
     */
    public function getCustomsPaperwork(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork
    {
        return $this->CustomsPaperwork;
    }
    /**
     * Set CustomsPaperwork value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperworks
     */
    public function setCustomsPaperwork(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork $customsPaperwork = null): self
    {
        $this->CustomsPaperwork = $customsPaperwork;
        
        return $this;
    }
}
