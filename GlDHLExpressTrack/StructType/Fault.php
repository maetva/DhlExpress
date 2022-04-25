<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

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
     * @var \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault|null
     */
    protected ?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $PieceFault = null;
    /**
     * Constructor method for Fault
     * @uses Fault::setPieceFault()
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault
     */
    public function __construct(?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault = null)
    {
        $this
            ->setPieceFault($pieceFault);
    }
    /**
     * Get PieceFault value
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault|null
     */
    public function getPieceFault(): ?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault
    {
        return $this->PieceFault;
    }
    /**
     * Set PieceFault value
     * @param \Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\Fault
     */
    public function setPieceFault(?\Maetva\DhlExpress\GlDHLExpressTrack\ArrayType\ArrayOfPieceFault $pieceFault = null): self
    {
        $this->PieceFault = $pieceFault;
        
        return $this;
    }
}
