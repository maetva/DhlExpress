<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Status StructType
 * @subpackage Structs
 */
class Status extends AbstractStructBase
{
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - documentation: The summary status of the request. Values include; “Success” , “No Shipments Found”
     * @var string|null
     */
    protected ?string $ActionStatus = null;
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition $Condition = null;
    /**
     * Constructor method for Status
     * @uses Status::setActionStatus()
     * @uses Status::setCondition()
     * @param string $actionStatus
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition $condition
     */
    public function __construct(?string $actionStatus = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition $condition = null)
    {
        $this
            ->setActionStatus($actionStatus)
            ->setCondition($condition);
    }
    /**
     * Get ActionStatus value
     * @return string|null
     */
    public function getActionStatus(): ?string
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param string $actionStatus
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status
     */
    public function setActionStatus(?string $actionStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($actionStatus) && !is_string($actionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionStatus, true), gettype($actionStatus)), __LINE__);
        }
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Get Condition value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition|null
     */
    public function getCondition(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition $condition
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Status
     */
    public function setCondition(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfCondition $condition = null): self
    {
        $this->Condition = $condition;
        
        return $this;
    }
}
