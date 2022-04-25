<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceHandlingFeatureCodes StructType
 * Meta information extracted from the WSDL
 * - documentation: Service handling feature codes returned from Document Rendering service
 * - type: s3:ServiceHandlingFeatureCodes
 * @subpackage Structs
 */
class ServiceHandlingFeatureCodes extends AbstractStructBase
{
    /**
     * The ServiceHandlingFeatureCode
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceHandlingFeatureCode = null;
    /**
     * Constructor method for ServiceHandlingFeatureCodes
     * @uses ServiceHandlingFeatureCodes::setServiceHandlingFeatureCode()
     * @param string $serviceHandlingFeatureCode
     */
    public function __construct(?string $serviceHandlingFeatureCode = null)
    {
        $this
            ->setServiceHandlingFeatureCode($serviceHandlingFeatureCode);
    }
    /**
     * Get ServiceHandlingFeatureCode value
     * @return string|null
     */
    public function getServiceHandlingFeatureCode(): ?string
    {
        return $this->ServiceHandlingFeatureCode;
    }
    /**
     * Set ServiceHandlingFeatureCode value
     * @param string $serviceHandlingFeatureCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ServiceHandlingFeatureCodes
     */
    public function setServiceHandlingFeatureCode(?string $serviceHandlingFeatureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceHandlingFeatureCode) && !is_string($serviceHandlingFeatureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceHandlingFeatureCode, true), gettype($serviceHandlingFeatureCode)), __LINE__);
        }
        $this->ServiceHandlingFeatureCode = $serviceHandlingFeatureCode;
        
        return $this;
    }
}
