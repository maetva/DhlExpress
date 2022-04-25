<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType $PackageReference = null;
    /**
     * Constructor method for PackageReferences
     * @uses PackageReferences::setPackageReference()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType $packageReference
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType $packageReference = null)
    {
        $this
            ->setPackageReference($packageReference);
    }
    /**
     * Get PackageReference value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType|null
     */
    public function getPackageReference(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType
    {
        return $this->PackageReference;
    }
    /**
     * Set PackageReference value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType $packageReference
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences
     */
    public function setPackageReference(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferenceType $packageReference = null): self
    {
        $this->PackageReference = $packageReference;
        
        return $this;
    }
}
