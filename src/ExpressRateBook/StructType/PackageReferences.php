<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageReferences StructType
 * Meta information extracted from the WSDL
 * - documentation: Package reference
 * @subpackage Structs
 */
class PackageReferences extends AbstractStructBase
{
    /**
     * The PackageReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType $PackageReference = null;
    /**
     * Constructor method for PackageReferences
     * @uses PackageReferences::setPackageReference()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType $packageReference
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType $packageReference = null)
    {
        $this
            ->setPackageReference($packageReference);
    }
    /**
     * Get PackageReference value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType|null
     */
    public function getPackageReference(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType
    {
        return $this->PackageReference;
    }
    /**
     * Set PackageReference value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType $packageReference
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferences
     */
    public function setPackageReference(?\Maetva\DhlExpress\ExpressRateBook\StructType\PackageReferenceType $packageReference = null): self
    {
        $this->PackageReference = $packageReference;
        
        return $this;
    }
}
