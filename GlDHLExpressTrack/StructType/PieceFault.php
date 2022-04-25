<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceFault StructType
 * @subpackage Structs
 */
class PieceFault extends AbstractStructBase
{
    /**
     * The PieceID
     * Meta information extracted from the WSDL
     * - documentation: License Plate Number | DHL Piece ID
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $PieceID = null;
    /**
     * The ConditionCode
     * Meta information extracted from the WSDL
     * - documentation: Error code
     * @var string|null
     */
    protected ?string $ConditionCode = null;
    /**
     * The ConditionData
     * Meta information extracted from the WSDL
     * - documentation: Error Messsage
     * @var string|null
     */
    protected ?string $ConditionData = null;
    /**
     * Constructor method for PieceFault
     * @uses PieceFault::setPieceID()
     * @uses PieceFault::setConditionCode()
     * @uses PieceFault::setConditionData()
     * @param string $pieceID
     * @param string $conditionCode
     * @param string $conditionData
     */
    public function __construct(?string $pieceID = null, ?string $conditionCode = null, ?string $conditionData = null)
    {
        $this
            ->setPieceID($pieceID)
            ->setConditionCode($conditionCode)
            ->setConditionData($conditionData);
    }
    /**
     * Get PieceID value
     * @return string|null
     */
    public function getPieceID(): ?string
    {
        return $this->PieceID;
    }
    /**
     * Set PieceID value
     * @param string $pieceID
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
     */
    public function setPieceID(?string $pieceID = null): self
    {
        // validation for constraint: string
        if (!is_null($pieceID) && !is_string($pieceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieceID, true), gettype($pieceID)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($pieceID) && mb_strlen((string) $pieceID) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $pieceID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($pieceID) && mb_strlen((string) $pieceID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $pieceID)), __LINE__);
        }
        $this->PieceID = $pieceID;
        
        return $this;
    }
    /**
     * Get ConditionCode value
     * @return string|null
     */
    public function getConditionCode(): ?string
    {
        return $this->ConditionCode;
    }
    /**
     * Set ConditionCode value
     * @param string $conditionCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
     */
    public function setConditionCode(?string $conditionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionCode) && !is_string($conditionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionCode, true), gettype($conditionCode)), __LINE__);
        }
        $this->ConditionCode = $conditionCode;
        
        return $this;
    }
    /**
     * Get ConditionData value
     * @return string|null
     */
    public function getConditionData(): ?string
    {
        return $this->ConditionData;
    }
    /**
     * Set ConditionData value
     * @param string $conditionData
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceFault
     */
    public function setConditionData(?string $conditionData = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionData) && !is_string($conditionData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionData, true), gettype($conditionData)), __LINE__);
        }
        $this->ConditionData = $conditionData;
        
        return $this;
    }
}
