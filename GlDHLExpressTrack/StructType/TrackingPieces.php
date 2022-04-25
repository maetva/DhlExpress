<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingPieces StructType
 * @subpackage Structs
 */
class TrackingPieces extends AbstractStructBase
{
    /**
     * The PieceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $PieceInfo = null;
    /**
     * Constructor method for TrackingPieces
     * @uses TrackingPieces::setPieceInfo()
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo = null)
    {
        $this
            ->setPieceInfo($pieceInfo);
    }
    /**
     * Get PieceInfo value
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo|null
     */
    public function getPieceInfo(): ?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo
    {
        return $this->PieceInfo;
    }
    /**
     * Set PieceInfo value
     * @param \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo
     * @return \Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces
     */
    public function setPieceInfo(?\Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo = null): self
    {
        $this->PieceInfo = $pieceInfo;
        
        return $this;
    }
}
