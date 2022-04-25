<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EventRemarks StructType
 * @subpackage Structs
 */
class EventRemarks extends AbstractStructBase
{
    /**
     * The FurtherDetails
     * Meta information extracted from the WSDL
     * - documentation: The further details describe from the event description
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $FurtherDetails = null;
    /**
     * The NextSteps
     * Meta information extracted from the WSDL
     * - documentation: Explained the next step for the shipment
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $NextSteps = null;
    /**
     * Constructor method for EventRemarks
     * @uses EventRemarks::setFurtherDetails()
     * @uses EventRemarks::setNextSteps()
     * @param string $furtherDetails
     * @param string $nextSteps
     */
    public function __construct(?string $furtherDetails = null, ?string $nextSteps = null)
    {
        $this
            ->setFurtherDetails($furtherDetails)
            ->setNextSteps($nextSteps);
    }
    /**
     * Get FurtherDetails value
     * @return string|null
     */
    public function getFurtherDetails(): ?string
    {
        return $this->FurtherDetails;
    }
    /**
     * Set FurtherDetails value
     * @param string $furtherDetails
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks
     */
    public function setFurtherDetails(?string $furtherDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($furtherDetails) && !is_string($furtherDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($furtherDetails, true), gettype($furtherDetails)), __LINE__);
        }
        $this->FurtherDetails = $furtherDetails;
        
        return $this;
    }
    /**
     * Get NextSteps value
     * @return string|null
     */
    public function getNextSteps(): ?string
    {
        return $this->NextSteps;
    }
    /**
     * Set NextSteps value
     * @param string $nextSteps
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\EventRemarks
     */
    public function setNextSteps(?string $nextSteps = null): self
    {
        // validation for constraint: string
        if (!is_null($nextSteps) && !is_string($nextSteps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextSteps, true), gettype($nextSteps)), __LINE__);
        }
        $this->NextSteps = $nextSteps;
        
        return $this;
    }
}
