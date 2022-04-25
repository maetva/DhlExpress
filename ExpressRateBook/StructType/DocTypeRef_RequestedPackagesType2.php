<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RequestedPackagesType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_RequestedPackagesType2 extends AbstractStructBase
{
    /**
     * The Weight
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType $Weight = null;
    /**
     * The Dimensions
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2 $Dimensions = null;
    /**
     * The PackageTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Global package type. Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element. You may refer to the developer guide for the valid values for PackageTypeCode
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PackageTypeCode = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 999
     * - minInclusive: 1
     * - whiteSpace: collapse
     * @var int|null
     */
    protected ?int $number = null;
    /**
     * Constructor method for docTypeRef_RequestedPackagesType2
     * @uses DocTypeRef_RequestedPackagesType2::setWeight()
     * @uses DocTypeRef_RequestedPackagesType2::setDimensions()
     * @uses DocTypeRef_RequestedPackagesType2::setPackageTypeCode()
     * @uses DocTypeRef_RequestedPackagesType2::setNumber()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType $weight
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2 $dimensions
     * @param string $packageTypeCode
     * @param int $number
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType $weight = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2 $dimensions = null, ?string $packageTypeCode = null, ?int $number = null)
    {
        $this
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setPackageTypeCode($packageTypeCode)
            ->setNumber($number);
    }
    /**
     * Get Weight value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType|null
     */
    public function getWeight(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType $weight
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
     */
    public function setWeight(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WeightType $weight = null): self
    {
        $this->Weight = $weight;

        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2|null
     */
    public function getDimensions(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2 $dimensions
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
     */
    public function setDimensions(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2 $dimensions = null): self
    {
        $this->Dimensions = $dimensions;

        return $this;
    }
    /**
     * Get PackageTypeCode value
     * @return string|null
     */
    public function getPackageTypeCode(): ?string
    {
        return $this->PackageTypeCode;
    }
    /**
     * Set PackageTypeCode value
     * @param string $packageTypeCode
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
     */
    public function setPackageTypeCode(?string $packageTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($packageTypeCode) && !is_string($packageTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageTypeCode, true), gettype($packageTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($packageTypeCode) && mb_strlen((string) $packageTypeCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $packageTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($packageTypeCode) && mb_strlen((string) $packageTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $packageTypeCode)), __LINE__);
        }
        $this->PackageTypeCode = $packageTypeCode;

        return $this;
    }
    /**
     * Get number value
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType2
     */
    public function setNumber(?int $number = null): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($number) && $number > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($number, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($number) && $number < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($number, true)), __LINE__);
        }
        $this->number = $number;

        return $this;
    }
}
