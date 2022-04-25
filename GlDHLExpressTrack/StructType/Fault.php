<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fault StructType
 * @subpackage Structs
 */
class Fault extends AbstractStructBase
{
    /**
     * The PieceFault
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $PieceFault = null;
    /**
     * Constructor method for Fault
     * @uses Fault::setPieceFault()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault = null)
    {
        $this
            ->setPieceFault($pieceFault);
    }
    /**
     * Get PieceFault value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault|null
     */
    public function getPieceFault(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault
    {
        return $this->PieceFault;
    }
    /**
     * Set PieceFault value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\Fault
     */
    public function setPieceFault(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault = null): self
    {
        $this->PieceFault = $pieceFault;
        
        return $this;
    }
}
