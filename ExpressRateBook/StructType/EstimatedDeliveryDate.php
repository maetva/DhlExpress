<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstimatedDeliveryDate StructType
 * @subpackage Structs
 */
class EstimatedDeliveryDate extends AbstractStructBase
{
    /**
     * The EstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryDate = null;
    /**
     * The EstimatedDeliveryType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryType = null;
    /**
     * Constructor method for EstimatedDeliveryDate
     * @uses EstimatedDeliveryDate::setEstimatedDeliveryDate()
     * @uses EstimatedDeliveryDate::setEstimatedDeliveryType()
     * @param string $estimatedDeliveryDate
     * @param string $estimatedDeliveryType
     */
    public function __construct(?string $estimatedDeliveryDate = null, ?string $estimatedDeliveryType = null)
    {
        $this
            ->setEstimatedDeliveryDate($estimatedDeliveryDate)
            ->setEstimatedDeliveryType($estimatedDeliveryType);
    }
    /**
     * Get EstimatedDeliveryDate value
     * @return string|null
     */
    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param string $estimatedDeliveryDate
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate
     */
    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryDate) && !is_string($estimatedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryDate, true), gettype($estimatedDeliveryDate)), __LINE__);
        }
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryType value
     * @return string|null
     */
    public function getEstimatedDeliveryType(): ?string
    {
        return $this->EstimatedDeliveryType;
    }
    /**
     * Set EstimatedDeliveryType value
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryType::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $estimatedDeliveryType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\EstimatedDeliveryDate
     */
    public function setEstimatedDeliveryType(?string $estimatedDeliveryType = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryType::valueIsValid($estimatedDeliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryType', is_array($estimatedDeliveryType) ? implode(', ', $estimatedDeliveryType) : var_export($estimatedDeliveryType, true), implode(', ', \Maetva\DhlExpress\Endpoint\ExpressRateBook\EnumType\EstimatedDeliveryType::getValidValues())), __LINE__);
        }
        $this->EstimatedDeliveryType = $estimatedDeliveryType;
        
        return $this;
    }
}
