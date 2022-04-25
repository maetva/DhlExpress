<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remark StructType
 * Meta information extracted from the WSDL
 * - documentation: Remark details
 * @subpackage Structs
 */
class Remark extends AbstractStructBase
{
    /**
     * The RemarkDescription
     * Meta information extracted from the WSDL
     * - documentation: Custom Invoice Remarks Description
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $RemarkDescription = null;
    /**
     * Constructor method for Remark
     * @uses Remark::setRemarkDescription()
     * @param string $remarkDescription
     */
    public function __construct(?string $remarkDescription = null)
    {
        $this
            ->setRemarkDescription($remarkDescription);
    }
    /**
     * Get RemarkDescription value
     * @return string|null
     */
    public function getRemarkDescription(): ?string
    {
        return $this->RemarkDescription;
    }
    /**
     * Set RemarkDescription value
     * @param string $remarkDescription
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\Remark
     */
    public function setRemarkDescription(?string $remarkDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkDescription) && !is_string($remarkDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkDescription, true), gettype($remarkDescription)), __LINE__);
        }
        $this->RemarkDescription = $remarkDescription;
        
        return $this;
    }
}
