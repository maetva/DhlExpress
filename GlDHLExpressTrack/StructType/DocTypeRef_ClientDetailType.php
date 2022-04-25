<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_ClientDetailType StructType
 * @subpackage Structs
 */
class DocTypeRef_ClientDetailType extends AbstractStructBase
{
    /**
     * The sso
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $sso = null;
    /**
     * The plant
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $plant = null;
    /**
     * Constructor method for docTypeRef_ClientDetailType
     * @uses DocTypeRef_ClientDetailType::setSso()
     * @uses DocTypeRef_ClientDetailType::setPlant()
     * @param string $sso
     * @param string $plant
     */
    public function __construct(?string $sso = null, ?string $plant = null)
    {
        $this
            ->setSso($sso)
            ->setPlant($plant);
    }
    /**
     * Get sso value
     * @return string|null
     */
    public function getSso(): ?string
    {
        return $this->sso;
    }
    /**
     * Set sso value
     * @param string $sso
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType
     */
    public function setSso(?string $sso = null): self
    {
        // validation for constraint: string
        if (!is_null($sso) && !is_string($sso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sso, true), gettype($sso)), __LINE__);
        }
        $this->sso = $sso;
        
        return $this;
    }
    /**
     * Get plant value
     * @return string|null
     */
    public function getPlant(): ?string
    {
        return $this->plant;
    }
    /**
     * Set plant value
     * @param string $plant
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType
     */
    public function setPlant(?string $plant = null): self
    {
        // validation for constraint: string
        if (!is_null($plant) && !is_string($plant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plant, true), gettype($plant)), __LINE__);
        }
        $this->plant = $plant;
        
        return $this;
    }
}
