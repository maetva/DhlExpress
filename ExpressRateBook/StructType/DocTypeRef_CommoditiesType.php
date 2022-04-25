<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_CommoditiesType StructType
 * @subpackage Structs
 */
class DocTypeRef_CommoditiesType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the content of the shipment
     * - base: xsd:token
     * - maxLength: 70
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The CustomsValue
     * Meta information extracted from the WSDL
     * - documentation: The value which needs to be declared for customs
     * - base: xsd:decimal
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var float|null
     */
    protected ?float $CustomsValue = null;
    /**
     * The USFilingTypeValue
     * Meta information extracted from the WSDL
     * - documentation: USFilingTypeValue is a field meant for US export/import EEI Filing (ITN Number, FTR Number and AES4 Number
     * - base: xsd:string
     * - maxLength: 20
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $USFilingTypeValue = null;
    /**
     * Constructor method for docTypeRef_CommoditiesType
     * @uses DocTypeRef_CommoditiesType::setDescription()
     * @uses DocTypeRef_CommoditiesType::setCustomsValue()
     * @uses DocTypeRef_CommoditiesType::setUSFilingTypeValue()
     * @param string $description
     * @param float $customsValue
     * @param string $uSFilingTypeValue
     */
    public function __construct(?string $description = null, ?float $customsValue = null, ?string $uSFilingTypeValue = null)
    {
        $this
            ->setDescription($description)
            ->setCustomsValue($customsValue)
            ->setUSFilingTypeValue($uSFilingTypeValue);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(70)
        if (!is_null($description) && mb_strlen((string) $description) > 70) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 70', mb_strlen((string) $description)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($description) && mb_strlen((string) $description) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return float|null
     */
    public function getCustomsValue(): ?float
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param float $customsValue
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType
     */
    public function setCustomsValue(?float $customsValue = null): self
    {
        // validation for constraint: float
        if (!is_null($customsValue) && !(is_float($customsValue) || is_numeric($customsValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        $this->CustomsValue = $customsValue;
        
        return $this;
    }
    /**
     * Get USFilingTypeValue value
     * @return string|null
     */
    public function getUSFilingTypeValue(): ?string
    {
        return $this->USFilingTypeValue;
    }
    /**
     * Set USFilingTypeValue value
     * @param string $uSFilingTypeValue
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType
     */
    public function setUSFilingTypeValue(?string $uSFilingTypeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($uSFilingTypeValue) && !is_string($uSFilingTypeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uSFilingTypeValue, true), gettype($uSFilingTypeValue)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($uSFilingTypeValue) && mb_strlen((string) $uSFilingTypeValue) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $uSFilingTypeValue)), __LINE__);
        }
        $this->USFilingTypeValue = $uSFilingTypeValue;
        
        return $this;
    }
}
