<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_RequestedPackagesType StructType
 * @subpackage Structs
 */
class DocTypeRef_RequestedPackagesType extends AbstractStructBase
{
    /**
     * The number
     * Meta information extracted from the WSDL
     * - base: xsd:integer
     * - maxInclusive: 99
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $number;
    /**
     * The InsuredValue
     * Meta information extracted from the WSDL
     * - documentation: Insurance values of the package
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $InsuredValue = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - documentation: The weight of the package.
     * - base: xsd:decimal
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $Weight = null;
    /**
     * The PieceIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: You can request your own Piece ID range from your DHL Express IT consultant and store these locally in your integration however this is not needed as if you leave this tag then DHL will automatically assign the piece ID centrally
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PieceIdentificationNumber = null;
    /**
     * The UseOwnPieceIdentificationNumber
     * Meta information extracted from the WSDL
     * - default: N
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UseOwnPieceIdentificationNumber = null;
    /**
     * The PackageContentDescription
     * Meta information extracted from the WSDL
     * - documentation: This optional field allows you to provide the content description on a piece level instead of Shipment level
     * - base: xsd:string
     * - maxLength: 70
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PackageContentDescription = null;
    /**
     * The Dimensions
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType $Dimensions = null;
    /**
     * The CustomerReferences
     * Meta information extracted from the WSDL
     * - documentation: Customer Reference for the piece
     * - base: xsd:token
     * - maxLength: 35 | 50
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CustomerReferences = null;
    /**
     * The ParentPieceIdentificationNumber
     * Meta information extracted from the WSDL
     * - documentation: Parent (Mother) Piece ID number. This field will be used to indicate the Mother Shipment's Piece ID for linkage purposes.
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ParentPieceIdentificationNumber = null;
    /**
     * The CustomerReferenceType
     * Meta information extracted from the WSDL
     * - documentation: Shipment reference type
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $CustomerReferenceType = null;
    /**
     * The PackageTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Global Package Type codes 3BX Box 3 2BC Box 2 (Cube) 2BP Box 2 (Flat) CE1 Card Envelope 7BX Box 7 6BX Box 6 4BX Box 4 2BX Box 2 (Tablet) 1CE Card Envelope WB1 1 Wine Box WB3 3 Wine Box XPD Express Envelope 8BX Box 8 (Jumbo Large) 5BX
     * Box 5 (Jumbo Small) WB6 6 Wine Box TBL Tube Large TBS Tube Small WB2 2 Wine Box
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PackageTypeCode = null;
    /**
     * The BespokeLabelData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData $BespokeLabelData = null;
    /**
     * The PackageReferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences $PackageReferences = null;
    /**
     * The PieceIdentificationNumberDataIdentifier
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - maxLength: 4
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PieceIdentificationNumberDataIdentifier = null;
    /**
     * Constructor method for docTypeRef_RequestedPackagesType
     * @uses DocTypeRef_RequestedPackagesType::setNumber()
     * @uses DocTypeRef_RequestedPackagesType::setInsuredValue()
     * @uses DocTypeRef_RequestedPackagesType::setWeight()
     * @uses DocTypeRef_RequestedPackagesType::setPieceIdentificationNumber()
     * @uses DocTypeRef_RequestedPackagesType::setUseOwnPieceIdentificationNumber()
     * @uses DocTypeRef_RequestedPackagesType::setPackageContentDescription()
     * @uses DocTypeRef_RequestedPackagesType::setDimensions()
     * @uses DocTypeRef_RequestedPackagesType::setCustomerReferences()
     * @uses DocTypeRef_RequestedPackagesType::setParentPieceIdentificationNumber()
     * @uses DocTypeRef_RequestedPackagesType::setCustomerReferenceType()
     * @uses DocTypeRef_RequestedPackagesType::setPackageTypeCode()
     * @uses DocTypeRef_RequestedPackagesType::setBespokeLabelData()
     * @uses DocTypeRef_RequestedPackagesType::setPackageReferences()
     * @uses DocTypeRef_RequestedPackagesType::setPieceIdentificationNumberDataIdentifier()
     * @param int $number
     * @param float $insuredValue
     * @param float $weight
     * @param string $pieceIdentificationNumber
     * @param string $useOwnPieceIdentificationNumber
     * @param string $packageContentDescription
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType $dimensions
     * @param string $customerReferences
     * @param string $parentPieceIdentificationNumber
     * @param string $customerReferenceType
     * @param string $packageTypeCode
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData $bespokeLabelData
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences $packageReferences
     * @param string $pieceIdentificationNumberDataIdentifier
     */
    public function __construct(int $number, ?float $insuredValue = null, ?float $weight = null, ?string $pieceIdentificationNumber = null, ?string $useOwnPieceIdentificationNumber = null, ?string $packageContentDescription = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType $dimensions = null, ?string $customerReferences = null, ?string $parentPieceIdentificationNumber = null, ?string $customerReferenceType = null, ?string $packageTypeCode = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData $bespokeLabelData = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences $packageReferences = null, ?string $pieceIdentificationNumberDataIdentifier = null)
    {
        $this
            ->setNumber($number)
            ->setInsuredValue($insuredValue)
            ->setWeight($weight)
            ->setPieceIdentificationNumber($pieceIdentificationNumber)
            ->setUseOwnPieceIdentificationNumber($useOwnPieceIdentificationNumber)
            ->setPackageContentDescription($packageContentDescription)
            ->setDimensions($dimensions)
            ->setCustomerReferences($customerReferences)
            ->setParentPieceIdentificationNumber($parentPieceIdentificationNumber)
            ->setCustomerReferenceType($customerReferenceType)
            ->setPackageTypeCode($packageTypeCode)
            ->setBespokeLabelData($bespokeLabelData)
            ->setPackageReferences($packageReferences)
            ->setPieceIdentificationNumberDataIdentifier($pieceIdentificationNumberDataIdentifier);
    }
    /**
     * Get number value
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setNumber(int $number): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($number) && $number > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($number, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($number) && $number < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($number, true)), __LINE__);
        }
        $this->number = $number;
        
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return float|null
     */
    public function getInsuredValue(): ?float
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param float $insuredValue
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setInsuredValue(?float $insuredValue = null): self
    {
        // validation for constraint: float
        if (!is_null($insuredValue) && !(is_float($insuredValue) || is_numeric($insuredValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredValue, true), gettype($insuredValue)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($insuredValue) && mb_strlen(mb_substr((string) $insuredValue, false !== mb_strpos((string) $insuredValue, '.') ? mb_strpos((string) $insuredValue, '.') + 1 : mb_strlen((string) $insuredValue))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($insuredValue, true), mb_strlen(mb_substr((string) $insuredValue, mb_strpos((string) $insuredValue, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(15)
        if (!is_null($insuredValue) && mb_strlen(preg_replace('/(\D)/', '', (string) $insuredValue)) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 15 digits, "%d" given', var_export($insuredValue, true), mb_strlen(preg_replace('/(\D)/', '', (string) $insuredValue))), __LINE__);
        }
        $this->InsuredValue = $insuredValue;
        
        return $this;
    }
    /**
     * Get Weight value
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        
        return $this;
    }
    /**
     * Get PieceIdentificationNumber value
     * @return string|null
     */
    public function getPieceIdentificationNumber(): ?string
    {
        return $this->PieceIdentificationNumber;
    }
    /**
     * Set PieceIdentificationNumber value
     * @param string $pieceIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setPieceIdentificationNumber(?string $pieceIdentificationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pieceIdentificationNumber) && !is_string($pieceIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieceIdentificationNumber, true), gettype($pieceIdentificationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($pieceIdentificationNumber) && mb_strlen((string) $pieceIdentificationNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $pieceIdentificationNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($pieceIdentificationNumber) && mb_strlen((string) $pieceIdentificationNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $pieceIdentificationNumber)), __LINE__);
        }
        $this->PieceIdentificationNumber = $pieceIdentificationNumber;
        
        return $this;
    }
    /**
     * Get UseOwnPieceIdentificationNumber value
     * @return string|null
     */
    public function getUseOwnPieceIdentificationNumber(): ?string
    {
        return $this->UseOwnPieceIdentificationNumber;
    }
    /**
     * Set UseOwnPieceIdentificationNumber value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnPieceIdentificationNumber::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnPieceIdentificationNumber::getValidValues()
     * @throws InvalidArgumentException
     * @param string $useOwnPieceIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setUseOwnPieceIdentificationNumber(?string $useOwnPieceIdentificationNumber = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnPieceIdentificationNumber::valueIsValid($useOwnPieceIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnPieceIdentificationNumber', is_array($useOwnPieceIdentificationNumber) ? implode(', ', $useOwnPieceIdentificationNumber) : var_export($useOwnPieceIdentificationNumber, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\UseOwnPieceIdentificationNumber::getValidValues())), __LINE__);
        }
        $this->UseOwnPieceIdentificationNumber = $useOwnPieceIdentificationNumber;
        
        return $this;
    }
    /**
     * Get PackageContentDescription value
     * @return string|null
     */
    public function getPackageContentDescription(): ?string
    {
        return $this->PackageContentDescription;
    }
    /**
     * Set PackageContentDescription value
     * @param string $packageContentDescription
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setPackageContentDescription(?string $packageContentDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($packageContentDescription) && !is_string($packageContentDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageContentDescription, true), gettype($packageContentDescription)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($packageContentDescription) && mb_strlen((string) $packageContentDescription) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $packageContentDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($packageContentDescription) && mb_strlen((string) $packageContentDescription) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $packageContentDescription)), __LINE__);
        }
        $this->PackageContentDescription = $packageContentDescription;
        
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType|null
     */
    public function getDimensions(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType $dimensions
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setDimensions(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType $dimensions = null): self
    {
        $this->Dimensions = $dimensions;
        
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return string|null
     */
    public function getCustomerReferences(): ?string
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @param string $customerReferences
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setCustomerReferences(?string $customerReferences = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReferences) && !is_string($customerReferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReferences, true), gettype($customerReferences)), __LINE__);
        }
        // validation for constraint: maxLength(35, 50)
        if (!is_null($customerReferences) && mb_strlen((string) $customerReferences) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35,50', mb_strlen((string) $customerReferences)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($customerReferences) && mb_strlen((string) $customerReferences) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $customerReferences)), __LINE__);
        }
        $this->CustomerReferences = $customerReferences;
        
        return $this;
    }
    /**
     * Get ParentPieceIdentificationNumber value
     * @return string|null
     */
    public function getParentPieceIdentificationNumber(): ?string
    {
        return $this->ParentPieceIdentificationNumber;
    }
    /**
     * Set ParentPieceIdentificationNumber value
     * @param string $parentPieceIdentificationNumber
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setParentPieceIdentificationNumber(?string $parentPieceIdentificationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parentPieceIdentificationNumber) && !is_string($parentPieceIdentificationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentPieceIdentificationNumber, true), gettype($parentPieceIdentificationNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($parentPieceIdentificationNumber) && mb_strlen((string) $parentPieceIdentificationNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $parentPieceIdentificationNumber)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($parentPieceIdentificationNumber) && mb_strlen((string) $parentPieceIdentificationNumber) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $parentPieceIdentificationNumber)), __LINE__);
        }
        $this->ParentPieceIdentificationNumber = $parentPieceIdentificationNumber;
        
        return $this;
    }
    /**
     * Get CustomerReferenceType value
     * @return string|null
     */
    public function getCustomerReferenceType(): ?string
    {
        return $this->CustomerReferenceType;
    }
    /**
     * Set CustomerReferenceType value
     * @param string $customerReferenceType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setCustomerReferenceType(?string $customerReferenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReferenceType) && !is_string($customerReferenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReferenceType, true), gettype($customerReferenceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($customerReferenceType) && mb_strlen((string) $customerReferenceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $customerReferenceType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($customerReferenceType) && mb_strlen((string) $customerReferenceType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $customerReferenceType)), __LINE__);
        }
        $this->CustomerReferenceType = $customerReferenceType;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
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
        // validation for constraint: minLength(2)
        if (!is_null($packageTypeCode) && mb_strlen((string) $packageTypeCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $packageTypeCode)), __LINE__);
        }
        $this->PackageTypeCode = $packageTypeCode;
        
        return $this;
    }
    /**
     * Get BespokeLabelData value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData|null
     */
    public function getBespokeLabelData(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData
    {
        return $this->BespokeLabelData;
    }
    /**
     * Set BespokeLabelData value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData $bespokeLabelData
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setBespokeLabelData(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\BespokeLabelData $bespokeLabelData = null): self
    {
        $this->BespokeLabelData = $bespokeLabelData;
        
        return $this;
    }
    /**
     * Get PackageReferences value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences|null
     */
    public function getPackageReferences(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences
    {
        return $this->PackageReferences;
    }
    /**
     * Set PackageReferences value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences $packageReferences
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setPackageReferences(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PackageReferences $packageReferences = null): self
    {
        $this->PackageReferences = $packageReferences;
        
        return $this;
    }
    /**
     * Get PieceIdentificationNumberDataIdentifier value
     * @return string|null
     */
    public function getPieceIdentificationNumberDataIdentifier(): ?string
    {
        return $this->PieceIdentificationNumberDataIdentifier;
    }
    /**
     * Set PieceIdentificationNumberDataIdentifier value
     * @param string $pieceIdentificationNumberDataIdentifier
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_RequestedPackagesType
     */
    public function setPieceIdentificationNumberDataIdentifier(?string $pieceIdentificationNumberDataIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($pieceIdentificationNumberDataIdentifier) && !is_string($pieceIdentificationNumberDataIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieceIdentificationNumberDataIdentifier, true), gettype($pieceIdentificationNumberDataIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($pieceIdentificationNumberDataIdentifier) && mb_strlen((string) $pieceIdentificationNumberDataIdentifier) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $pieceIdentificationNumberDataIdentifier)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($pieceIdentificationNumberDataIdentifier) && mb_strlen((string) $pieceIdentificationNumberDataIdentifier) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $pieceIdentificationNumberDataIdentifier)), __LINE__);
        }
        $this->PieceIdentificationNumberDataIdentifier = $pieceIdentificationNumberDataIdentifier;
        
        return $this;
    }
}
