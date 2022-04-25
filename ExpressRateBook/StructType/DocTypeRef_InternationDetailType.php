<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_InternationDetailType StructType
 * @subpackage Structs
 */
class DocTypeRef_InternationDetailType extends AbstractStructBase
{
    /**
     * The Commodities
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType $Commodities = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Details whether a shipment is non-dutiable (value DOCUMENTS) or dutiable (NON_DOCUMENTS)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The ExportDeclaration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration $ExportDeclaration = null;
    /**
     * Constructor method for docTypeRef_InternationDetailType
     * @uses DocTypeRef_InternationDetailType::setCommodities()
     * @uses DocTypeRef_InternationDetailType::setContent()
     * @uses DocTypeRef_InternationDetailType::setExportDeclaration()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType $commodities
     * @param string $content
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration $exportDeclaration
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType $commodities = null, ?string $content = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration $exportDeclaration = null)
    {
        $this
            ->setCommodities($commodities)
            ->setContent($content)
            ->setExportDeclaration($exportDeclaration);
    }
    /**
     * Get Commodities value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType|null
     */
    public function getCommodities(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType $commodities
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType
     */
    public function setCommodities(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_CommoditiesType $commodities = null): self
    {
        $this->Commodities = $commodities;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\Content::valueIsValid()
     * @uses \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\Content::getValidValues()
     * @throws InvalidArgumentException
     * @param string $content
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: enumeration
        if (!\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\Content::valueIsValid($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\Content', is_array($content) ? implode(', ', $content) : var_export($content, true), implode(', ', \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\EnumType\Content::getValidValues())), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
    /**
     * Get ExportDeclaration value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration|null
     */
    public function getExportDeclaration(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration
    {
        return $this->ExportDeclaration;
    }
    /**
     * Set ExportDeclaration value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration $exportDeclaration
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_InternationDetailType
     */
    public function setExportDeclaration(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ExportDeclaration $exportDeclaration = null): self
    {
        $this->ExportDeclaration = $exportDeclaration;
        
        return $this;
    }
}
