<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Condition StructType
 * @subpackage Structs
 */
class Condition extends AbstractStructBase
{
    /**
     * The ConditionCode
     * Meta information extracted from the WSDL
     * - documentation: Error Code associated to the request
     * @var string|null
     */
    protected ?string $ConditionCode = null;
    /**
     * The ConditionData
     * Meta information extracted from the WSDL
     * - documentation: Error Description
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConditionData = null;
    /**
     * Constructor method for Condition
     * @uses Condition::setConditionCode()
     * @uses Condition::setConditionData()
     * @param string $conditionCode
     * @param string $conditionData
     */
    public function __construct(?string $conditionCode = null, ?string $conditionData = null)
    {
        $this
            ->setConditionCode($conditionCode)
            ->setConditionData($conditionData);
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Condition
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
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Condition
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
