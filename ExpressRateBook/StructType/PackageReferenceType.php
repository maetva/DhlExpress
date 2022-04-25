<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: To support multiple piece reference
 * @subpackage Structs
 */
class PackageReferenceType extends AbstractStructBase
{
    /**
     * The PackageReference
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PackageReference = null;
    /**
     * The PackageReferenceType
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PackageReferenceType = null;
    /**
     * Constructor method for PackageReferenceType
     * @uses PackageReferenceType::setPackageReference()
     * @uses PackageReferenceType::setPackageReferenceType()
     * @param string $packageReference
     * @param string $packageReferenceType
     */
    public function __construct(?string $packageReference = null, ?string $packageReferenceType = null)
    {
        $this
            ->setPackageReference($packageReference)
            ->setPackageReferenceType($packageReferenceType);
    }
    /**
     * Get PackageReference value
     * @return string|null
     */
    public function getPackageReference(): ?string
    {
        return $this->PackageReference;
    }
    /**
     * Set PackageReference value
     * @param string $packageReference
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\PackageReferenceType
     */
    public function setPackageReference(?string $packageReference = null): self
    {
        // validation for constraint: string
        if (!is_null($packageReference) && !is_string($packageReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageReference, true), gettype($packageReference)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($packageReference) && mb_strlen((string) $packageReference) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $packageReference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($packageReference) && mb_strlen((string) $packageReference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $packageReference)), __LINE__);
        }
        $this->PackageReference = $packageReference;
        
        return $this;
    }
    /**
     * Get PackageReferenceType value
     * @return string|null
     */
    public function getPackageReferenceType(): ?string
    {
        return $this->PackageReferenceType;
    }
    /**
     * Set PackageReferenceType value
     * @param string $packageReferenceType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\PackageReferenceType
     */
    public function setPackageReferenceType(?string $packageReferenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($packageReferenceType) && !is_string($packageReferenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageReferenceType, true), gettype($packageReferenceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($packageReferenceType) && mb_strlen((string) $packageReferenceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $packageReferenceType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($packageReferenceType) && mb_strlen((string) $packageReferenceType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $packageReferenceType)), __LINE__);
        }
        $this->PackageReferenceType = $packageReferenceType;
        
        return $this;
    }
}
