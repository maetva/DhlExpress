<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_DimensionsType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_DimensionsType2 extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - documentation: Length of the piece listed
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 10
     * @var float|null
     */
    protected ?float $Length = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - documentation: Width of the piece listed
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 10
     * @var float|null
     */
    protected ?float $Width = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - documentation: Height of the piece listed
     * - base: xsd:decimal
     * - fractionDigits: 3
     * - totalDigits: 10
     * @var float|null
     */
    protected ?float $Height = null;
    /**
     * Constructor method for docTypeRef_DimensionsType2
     * @uses DocTypeRef_DimensionsType2::setLength()
     * @uses DocTypeRef_DimensionsType2::setWidth()
     * @uses DocTypeRef_DimensionsType2::setHeight()
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(?float $length = null, ?float $width = null, ?float $height = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height);
    }
    /**
     * Get Length value
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2
     */
    public function setLength(?float $length = null): self
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($length) && mb_strlen(mb_substr((string) $length, false !== mb_strpos((string) $length, '.') ? mb_strpos((string) $length, '.') + 1 : mb_strlen((string) $length))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($length, true), mb_strlen(mb_substr((string) $length, mb_strpos((string) $length, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($length) && mb_strlen(preg_replace('/(\D)/', '', (string) $length)) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($length, true), mb_strlen(preg_replace('/(\D)/', '', (string) $length))), __LINE__);
        }
        $this->Length = $length;
        
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2
     */
    public function setWidth(?float $width = null): self
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($width) && mb_strlen(mb_substr((string) $width, false !== mb_strpos((string) $width, '.') ? mb_strpos((string) $width, '.') + 1 : mb_strlen((string) $width))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($width, true), mb_strlen(mb_substr((string) $width, mb_strpos((string) $width, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($width) && mb_strlen(preg_replace('/(\D)/', '', (string) $width)) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($width, true), mb_strlen(preg_replace('/(\D)/', '', (string) $width))), __LINE__);
        }
        $this->Width = $width;
        
        return $this;
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DimensionsType2
     */
    public function setHeight(?float $height = null): self
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        // validation for constraint: fractionDigits(3)
        if (!is_null($height) && mb_strlen(mb_substr((string) $height, false !== mb_strpos((string) $height, '.') ? mb_strpos((string) $height, '.') + 1 : mb_strlen((string) $height))) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 3 fraction digits, %d given', var_export($height, true), mb_strlen(mb_substr((string) $height, mb_strpos((string) $height, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($height) && mb_strlen(preg_replace('/(\D)/', '', (string) $height)) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($height, true), mb_strlen(preg_replace('/(\D)/', '', (string) $height))), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
}
