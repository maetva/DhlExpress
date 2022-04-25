<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails $PieceDetails = null;
    /**
     * The PieceEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $PieceEvent = null;
    /**
     * Constructor method for PieceInfo
     * @uses PieceInfo::setPieceDetails()
     * @uses PieceInfo::setPieceEvent()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent
     */
    public function __construct(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails = null, ?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent = null)
    {
        $this
            ->setPieceDetails($pieceDetails)
            ->setPieceEvent($pieceEvent);
    }
    /**
     * Get PieceDetails value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails|null
     */
    public function getPieceDetails(): ?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails
    {
        return $this->PieceDetails;
    }
    /**
     * Set PieceDetails value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
     */
    public function setPieceDetails(?\Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceDetails $pieceDetails = null): self
    {
        $this->PieceDetails = $pieceDetails;
        
        return $this;
    }
    /**
     * Get PieceEvent value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent|null
     */
    public function getPieceEvent(): ?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent
    {
        return $this->PieceEvent;
    }
    /**
     * Set PieceEvent value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\PieceInfo
     */
    public function setPieceEvent(?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceEvent $pieceEvent = null): self
    {
        $this->PieceEvent = $pieceEvent;
        
        return $this;
    }
}
