<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_PackagesResultsType StructType
 * @subpackage Structs
 */
class DocTypeRef_PackagesResultsType extends AbstractStructBase
{
    /**
     * The PackageResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType[]
     */
    protected ?array $PackageResult = null;
    /**
     * Constructor method for docTypeRef_PackagesResultsType
     * @uses DocTypeRef_PackagesResultsType::setPackageResult()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType[] $packageResult
     */
    public function __construct(?array $packageResult = null)
    {
        $this
            ->setPackageResult($packageResult);
    }
    /**
     * Get PackageResult value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType[]
     */
    public function getPackageResult(): ?array
    {
        return $this->PackageResult;
    }
    /**
     * This method is responsible for validating the values passed to the setPackageResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackageResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackageResultForArrayConstraintsFromSetPackageResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_PackagesResultsTypePackageResultItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_PackagesResultsTypePackageResultItem instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType) {
                $invalidValues[] = is_object($docTypeRef_PackagesResultsTypePackageResultItem) ? get_class($docTypeRef_PackagesResultsTypePackageResultItem) : sprintf('%s(%s)', gettype($docTypeRef_PackagesResultsTypePackageResultItem), var_export($docTypeRef_PackagesResultsTypePackageResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PackageResult property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PackageResult value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType[] $packageResult
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType
     */
    public function setPackageResult(?array $packageResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($packageResultArrayErrorMessage = self::validatePackageResultForArrayConstraintsFromSetPackageResult($packageResult))) {
            throw new InvalidArgumentException($packageResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($packageResult) && count($packageResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($packageResult)), __LINE__);
        }
        $this->PackageResult = $packageResult;
        
        return $this;
    }
    /**
     * Add item to PackageResult value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType $item
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackagesResultsType
     */
    public function addToPackageResult(\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType) {
            throw new InvalidArgumentException(sprintf('The PackageResult property can only contain items of type \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PackageResult) && count($this->PackageResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PackageResult)), __LINE__);
        }
        $this->PackageResult[] = $item;
        
        return $this;
    }
}
