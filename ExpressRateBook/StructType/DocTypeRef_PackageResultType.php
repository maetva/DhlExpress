<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_PackageResultType StructType
 * @subpackage Structs
 */
class DocTypeRef_PackageResultType extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: This field contains a unique number for the individual package.
     * - base: xsd:token
     * - maxLength: 35
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $TrackingNumber = null;
    /**
     * The VolumetricWeight
     * Meta information extracted from the WSDL
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - minOccurs: 0
     * - totalDigits: 15 | 12
     * @var float|null
     */
    protected ?float $VolumetricWeight = null;
    /**
     * The QRCode
     * Meta information extracted from the WSDL
     * - documentation: This field contains the individual package's QR code details.
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\QRCode $QRCode = null;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $number = null;
    /**
     * Constructor method for docTypeRef_PackageResultType
     * @uses DocTypeRef_PackageResultType::setTrackingNumber()
     * @uses DocTypeRef_PackageResultType::setVolumetricWeight()
     * @uses DocTypeRef_PackageResultType::setQRCode()
     * @uses DocTypeRef_PackageResultType::setNumber()
     * @param string $trackingNumber
     * @param float $volumetricWeight
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode $qRCode
     * @param int $number
     */
    public function __construct(?string $trackingNumber = null, ?float $volumetricWeight = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\QRCode $qRCode = null, ?int $number = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setVolumetricWeight($volumetricWeight)
            ->setQRCode($qRCode)
            ->setNumber($number);
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType
     */
    public function setTrackingNumber(?string $trackingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumber, true), gettype($trackingNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($trackingNumber) && mb_strlen((string) $trackingNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $trackingNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($trackingNumber) && mb_strlen((string) $trackingNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        
        return $this;
    }
    /**
     * Get VolumetricWeight value
     * @return float|null
     */
    public function getVolumetricWeight(): ?float
    {
        return $this->VolumetricWeight;
    }
    /**
     * Set VolumetricWeight value
     * @param float $volumetricWeight
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType
     */
    public function setVolumetricWeight(?float $volumetricWeight = null): self
    {
        // validation for constraint: float
        if (!is_null($volumetricWeight) && !(is_float($volumetricWeight) || is_numeric($volumetricWeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($volumetricWeight, true), gettype($volumetricWeight)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($volumetricWeight) && mb_strlen(mb_substr((string) $volumetricWeight, false !== mb_strpos((string) $volumetricWeight, '.') ? mb_strpos((string) $volumetricWeight, '.') + 1 : mb_strlen((string) $volumetricWeight))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($volumetricWeight, true), mb_strlen(mb_substr((string) $volumetricWeight, mb_strpos((string) $volumetricWeight, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(15, 12)
        if (!is_null($volumetricWeight) && mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight)) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 1 digits, "%d" given', var_export($volumetricWeight, true), mb_strlen(preg_replace('/(\D)/', '', (string) $volumetricWeight))), __LINE__);
        }
        $this->VolumetricWeight = $volumetricWeight;
        
        return $this;
    }
    /**
     * Get QRCode value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode|null
     */
    public function getQRCode(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\QRCode
    {
        return $this->QRCode;
    }
    /**
     * Set QRCode value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\QRCode $qRCode
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType
     */
    public function setQRCode(?\Maetva\DhlExpress\ExpressRateBook\StructType\QRCode $qRCode = null): self
    {
        $this->QRCode = $qRCode;
        
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_PackageResultType
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
