<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PieceDetails StructType
 * @subpackage Structs
 */
class PieceDetails extends AbstractStructBase
{
    /**
     * The AWBNumber
     * Meta information extracted from the WSDL
     * - documentation: Airbill associated to the Piece (same as the parent node airbill)
     * @var string|null
     */
    protected ?string $AWBNumber = null;
    /**
     * The LicensePlate
     * Meta information extracted from the WSDL
     * - documentation: DHL Piece ID
     * - base: xsd:string
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $LicensePlate = null;
    /**
     * The PieceNumber
     * Meta information extracted from the WSDL
     * - documentation: Number of the Piece
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PieceNumber = null;
    /**
     * The ActualDepth
     * Meta information extracted from the WSDL
     * - documentation: Actual Depth of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActualDepth = null;
    /**
     * The ActualWidth
     * Meta information extracted from the WSDL
     * - documentation: Actual Width of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActualWidth = null;
    /**
     * The ActualHeight
     * Meta information extracted from the WSDL
     * - documentation: Actual Height of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActualHeight = null;
    /**
     * The ActualWeight
     * Meta information extracted from the WSDL
     * - documentation: Actual Weight of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActualWeight = null;
    /**
     * The Depth
     * Meta information extracted from the WSDL
     * - documentation: Depth of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Depth = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - documentation: Width of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Width = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - documentation: Height of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Height = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - documentation: Weight of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Weight = null;
    /**
     * The PackageType
     * Meta information extracted from the WSDL
     * - documentation: Package Type of Shipment
     * - base: xsd:string
     * - maxLength: 3
     * - minOccurs: 0
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $PackageType = null;
    /**
     * The DimWeight
     * Meta information extracted from the WSDL
     * - documentation: Volumetric Weight of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DimWeight = null;
    /**
     * The WeightUnit
     * Meta information extracted from the WSDL
     * - documentation: L = Pounds, K = Kilogram, G = Grams
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WeightUnit = null;
    /**
     * The PieceContents
     * Meta information extracted from the WSDL
     * - documentation: Contents or description of the piece
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PieceContents = null;
    /**
     * Constructor method for PieceDetails
     * @uses PieceDetails::setAWBNumber()
     * @uses PieceDetails::setLicensePlate()
     * @uses PieceDetails::setPieceNumber()
     * @uses PieceDetails::setActualDepth()
     * @uses PieceDetails::setActualWidth()
     * @uses PieceDetails::setActualHeight()
     * @uses PieceDetails::setActualWeight()
     * @uses PieceDetails::setDepth()
     * @uses PieceDetails::setWidth()
     * @uses PieceDetails::setHeight()
     * @uses PieceDetails::setWeight()
     * @uses PieceDetails::setPackageType()
     * @uses PieceDetails::setDimWeight()
     * @uses PieceDetails::setWeightUnit()
     * @uses PieceDetails::setPieceContents()
     * @param string $aWBNumber
     * @param string $licensePlate
     * @param string $pieceNumber
     * @param string $actualDepth
     * @param string $actualWidth
     * @param string $actualHeight
     * @param string $actualWeight
     * @param string $depth
     * @param string $width
     * @param string $height
     * @param string $weight
     * @param string $packageType
     * @param string $dimWeight
     * @param string $weightUnit
     * @param string $pieceContents
     */
    public function __construct(?string $aWBNumber = null, ?string $licensePlate = null, ?string $pieceNumber = null, ?string $actualDepth = null, ?string $actualWidth = null, ?string $actualHeight = null, ?string $actualWeight = null, ?string $depth = null, ?string $width = null, ?string $height = null, ?string $weight = null, ?string $packageType = null, ?string $dimWeight = null, ?string $weightUnit = null, ?string $pieceContents = null)
    {
        $this
            ->setAWBNumber($aWBNumber)
            ->setLicensePlate($licensePlate)
            ->setPieceNumber($pieceNumber)
            ->setActualDepth($actualDepth)
            ->setActualWidth($actualWidth)
            ->setActualHeight($actualHeight)
            ->setActualWeight($actualWeight)
            ->setDepth($depth)
            ->setWidth($width)
            ->setHeight($height)
            ->setWeight($weight)
            ->setPackageType($packageType)
            ->setDimWeight($dimWeight)
            ->setWeightUnit($weightUnit)
            ->setPieceContents($pieceContents);
    }
    /**
     * Get AWBNumber value
     * @return string|null
     */
    public function getAWBNumber(): ?string
    {
        return $this->AWBNumber;
    }
    /**
     * Set AWBNumber value
     * @param string $aWBNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setAWBNumber(?string $aWBNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($aWBNumber) && !is_string($aWBNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aWBNumber, true), gettype($aWBNumber)), __LINE__);
        }
        $this->AWBNumber = $aWBNumber;
        
        return $this;
    }
    /**
     * Get LicensePlate value
     * @return string|null
     */
    public function getLicensePlate(): ?string
    {
        return $this->LicensePlate;
    }
    /**
     * Set LicensePlate value
     * @param string $licensePlate
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setLicensePlate(?string $licensePlate = null): self
    {
        // validation for constraint: string
        if (!is_null($licensePlate) && !is_string($licensePlate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licensePlate, true), gettype($licensePlate)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($licensePlate) && mb_strlen((string) $licensePlate) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $licensePlate)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($licensePlate) && mb_strlen((string) $licensePlate) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $licensePlate)), __LINE__);
        }
        $this->LicensePlate = $licensePlate;
        
        return $this;
    }
    /**
     * Get PieceNumber value
     * @return string|null
     */
    public function getPieceNumber(): ?string
    {
        return $this->PieceNumber;
    }
    /**
     * Set PieceNumber value
     * @param string $pieceNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setPieceNumber(?string $pieceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pieceNumber) && !is_string($pieceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieceNumber, true), gettype($pieceNumber)), __LINE__);
        }
        $this->PieceNumber = $pieceNumber;
        
        return $this;
    }
    /**
     * Get ActualDepth value
     * @return string|null
     */
    public function getActualDepth(): ?string
    {
        return $this->ActualDepth;
    }
    /**
     * Set ActualDepth value
     * @param string $actualDepth
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setActualDepth(?string $actualDepth = null): self
    {
        // validation for constraint: string
        if (!is_null($actualDepth) && !is_string($actualDepth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualDepth, true), gettype($actualDepth)), __LINE__);
        }
        $this->ActualDepth = $actualDepth;
        
        return $this;
    }
    /**
     * Get ActualWidth value
     * @return string|null
     */
    public function getActualWidth(): ?string
    {
        return $this->ActualWidth;
    }
    /**
     * Set ActualWidth value
     * @param string $actualWidth
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setActualWidth(?string $actualWidth = null): self
    {
        // validation for constraint: string
        if (!is_null($actualWidth) && !is_string($actualWidth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualWidth, true), gettype($actualWidth)), __LINE__);
        }
        $this->ActualWidth = $actualWidth;
        
        return $this;
    }
    /**
     * Get ActualHeight value
     * @return string|null
     */
    public function getActualHeight(): ?string
    {
        return $this->ActualHeight;
    }
    /**
     * Set ActualHeight value
     * @param string $actualHeight
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setActualHeight(?string $actualHeight = null): self
    {
        // validation for constraint: string
        if (!is_null($actualHeight) && !is_string($actualHeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualHeight, true), gettype($actualHeight)), __LINE__);
        }
        $this->ActualHeight = $actualHeight;
        
        return $this;
    }
    /**
     * Get ActualWeight value
     * @return string|null
     */
    public function getActualWeight(): ?string
    {
        return $this->ActualWeight;
    }
    /**
     * Set ActualWeight value
     * @param string $actualWeight
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setActualWeight(?string $actualWeight = null): self
    {
        // validation for constraint: string
        if (!is_null($actualWeight) && !is_string($actualWeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualWeight, true), gettype($actualWeight)), __LINE__);
        }
        $this->ActualWeight = $actualWeight;
        
        return $this;
    }
    /**
     * Get Depth value
     * @return string|null
     */
    public function getDepth(): ?string
    {
        return $this->Depth;
    }
    /**
     * Set Depth value
     * @param string $depth
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setDepth(?string $depth = null): self
    {
        // validation for constraint: string
        if (!is_null($depth) && !is_string($depth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depth, true), gettype($depth)), __LINE__);
        }
        $this->Depth = $depth;
        
        return $this;
    }
    /**
     * Get Width value
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param string $width
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        
        return $this;
    }
    /**
     * Get Height value
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param string $height
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $weight
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        
        return $this;
    }
    /**
     * Get PackageType value
     * @return string|null
     */
    public function getPackageType(): ?string
    {
        return $this->PackageType;
    }
    /**
     * Set PackageType value
     * @param string $packageType
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setPackageType(?string $packageType = null): self
    {
        // validation for constraint: string
        if (!is_null($packageType) && !is_string($packageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageType, true), gettype($packageType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($packageType) && mb_strlen((string) $packageType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $packageType)), __LINE__);
        }
        $this->PackageType = $packageType;
        
        return $this;
    }
    /**
     * Get DimWeight value
     * @return string|null
     */
    public function getDimWeight(): ?string
    {
        return $this->DimWeight;
    }
    /**
     * Set DimWeight value
     * @param string $dimWeight
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setDimWeight(?string $dimWeight = null): self
    {
        // validation for constraint: string
        if (!is_null($dimWeight) && !is_string($dimWeight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimWeight, true), gettype($dimWeight)), __LINE__);
        }
        $this->DimWeight = $dimWeight;
        
        return $this;
    }
    /**
     * Get WeightUnit value
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->WeightUnit;
    }
    /**
     * Set WeightUnit value
     * @param string $weightUnit
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($weightUnit) && !is_string($weightUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightUnit, true), gettype($weightUnit)), __LINE__);
        }
        $this->WeightUnit = $weightUnit;
        
        return $this;
    }
    /**
     * Get PieceContents value
     * @return string|null
     */
    public function getPieceContents(): ?string
    {
        return $this->PieceContents;
    }
    /**
     * Set PieceContents value
     * @param string $pieceContents
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\PieceDetails
     */
    public function setPieceContents(?string $pieceContents = null): self
    {
        // validation for constraint: string
        if (!is_null($pieceContents) && !is_string($pieceContents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieceContents, true), gettype($pieceContents)), __LINE__);
        }
        $this->PieceContents = $pieceContents;
        
        return $this;
    }
}
