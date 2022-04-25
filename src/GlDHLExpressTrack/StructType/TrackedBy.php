<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackedBy StructType
 * @subpackage Structs
 */
class TrackedBy extends AbstractStructBase
{
    /**
     * The LPNumber
     * Meta information extracted from the WSDL
     * - documentation: DHL Piece ID
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $LPNumber = null;
    /**
     * Constructor method for TrackedBy
     * @uses TrackedBy::setLPNumber()
     * @param string $lPNumber
     */
    public function __construct(?string $lPNumber = null)
    {
        $this
            ->setLPNumber($lPNumber);
    }
    /**
     * Get LPNumber value
     * @return string|null
     */
    public function getLPNumber(): ?string
    {
        return $this->LPNumber;
    }
    /**
     * Set LPNumber value
     * @param string $lPNumber
     * @return \Maetva\DhlExpress\GlDHLExpressTrack\StructType\TrackedBy
     */
    public function setLPNumber(?string $lPNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($lPNumber) && !is_string($lPNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lPNumber, true), gettype($lPNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($lPNumber) && mb_strlen((string) $lPNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $lPNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($lPNumber) && mb_strlen((string) $lPNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $lPNumber)), __LINE__);
        }
        $this->LPNumber = $lPNumber;
        
        return $this;
    }
}
