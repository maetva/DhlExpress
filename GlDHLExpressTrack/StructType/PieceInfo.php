<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceInfo StructType
 * @subpackage Structs
 */
class PieceInfo extends AbstractStructBase
{
    /**
     * The PieceDetails
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails $PieceDetails = null;
    /**
     * The PieceEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $PieceEvent = null;
    /**
     * Constructor method for PieceInfo
     * @uses PieceInfo::setPieceDetails()
     * @uses PieceInfo::setPieceEvent()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails = null, ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent = null)
    {
        $this
            ->setPieceDetails($pieceDetails)
            ->setPieceEvent($pieceEvent);
    }
    /**
     * Get PieceDetails value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails|null
     */
    public function getPieceDetails(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
    {
        return $this->PieceDetails;
    }
    /**
     * Set PieceDetails value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceInfo
     */
    public function setPieceDetails(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails = null): self
    {
        $this->PieceDetails = $pieceDetails;
        
        return $this;
    }
    /**
     * Get PieceEvent value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent|null
     */
    public function getPieceEvent(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent
    {
        return $this->PieceEvent;
    }
    /**
     * Set PieceEvent value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\PieceInfo
     */
    public function setPieceEvent(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent = null): self
    {
        $this->PieceEvent = $pieceEvent;
        
        return $this;
    }
}
