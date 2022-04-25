<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $PieceInfo = null;
    /**
     * Constructor method for TrackingPieces
     * @uses TrackingPieces::setPieceInfo()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo = null)
    {
        $this
            ->setPieceInfo($pieceInfo);
    }
    /**
     * Get PieceInfo value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo|null
     */
    public function getPieceInfo(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo
    {
        return $this->PieceInfo;
    }
    /**
     * Set PieceInfo value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingPieces
     */
    public function setPieceInfo(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfPieceInfo $pieceInfo = null): self
    {
        $this->PieceInfo = $pieceInfo;
        
        return $this;
    }
}
