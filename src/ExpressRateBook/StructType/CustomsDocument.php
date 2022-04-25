<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDocument StructType
 * Meta information extracted from the WSDL
 * - documentation: Export Declaration's Customs Document entry
 * @subpackage Structs
 */
class CustomsDocument extends AbstractStructBase
{
    /**
     * The CustomsDocumentType
     * Meta information extracted from the WSDL
     * - documentation: Export Declaration's Customs Document entry's Type | Export Declaration Customs Document Type. Possible values: Code Description 972 T2LF Dispense Paiement Droits AHC Analysis and Health Certificate ATA ATA Carnet ATR Preference
     * Certificate ATR CHD CHED-D (Common Health Entry Document for Feed and Food of Non-Animal Origin CHP CHED-P (Common Health Entry Document for Products) CIT CITES Certificate COO Generic Certificate of Origin DEX Duty Exemption Certificate EU1
     * Preference Certificate EUR1 EU2 Preferential Declaration of Origin on the Invoice - EUR2 EUS End Use Authorization FMA Certificate of Origin (Form A) PHY Phytosanitary Certificate VET Veterinary Entry Document VEX VAT Exemption Certificate CRL
     * Control Document CSD Consolidated Customs Entry PPY Proof Of Payment CI2 Export-only Invoice CIV Customs Invoice Value DOV Invoice INV Commercial Invoice PFI Pro-Forma ALC Agricultural License HLC Health Products Regulatory Authority (HPRA) Licensing
     * Requirements JLC Justice License LIC Specific Export Licenses LNP License or Permit PLI Permits and Licenses DLI Driver's License NID National Identity Card PAS Passport CHA Power of Attorney CPA Consignee Power of Attorney POA Power of Attorney
     * (Customer-based) BEX Branch Letter of Exemption DGD Dangerous Goods Declaration IPA Intellectual Property Authorization T2M T2M Transport Accompanying Document TAD TAD Transport Accompanying Document T1 TCS Transportation Charges Statement ROD
     * Receipt on Delivery EXL DCE Export of Customs Data HWB House Waybill Please refer to the DHL EXPRESS - MyDHL API - SOAP Developer Guide for valid enumeration values. For more information please contact your local DHL Express API representative.
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 2
     * @var string|null
     */
    protected ?string $CustomsDocumentType = null;
    /**
     * The CustomsDocumentID
     * Meta information extracted from the WSDL
     * - documentation: Export Declaration's Customs Document entry's ID | Export Declaration line's Customs Document ID
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    protected ?string $CustomsDocumentID = null;
    /**
     * Constructor method for CustomsDocument
     * @uses CustomsDocument::setCustomsDocumentType()
     * @uses CustomsDocument::setCustomsDocumentID()
     * @param string $customsDocumentType
     * @param string $customsDocumentID
     */
    public function __construct(?string $customsDocumentType = null, ?string $customsDocumentID = null)
    {
        $this
            ->setCustomsDocumentType($customsDocumentType)
            ->setCustomsDocumentID($customsDocumentID);
    }
    /**
     * Get CustomsDocumentType value
     * @return string|null
     */
    public function getCustomsDocumentType(): ?string
    {
        return $this->CustomsDocumentType;
    }
    /**
     * Set CustomsDocumentType value
     * @param string $customsDocumentType
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocument
     */
    public function setCustomsDocumentType(?string $customsDocumentType = null): self
    {
        // validation for constraint: string
        if (!is_null($customsDocumentType) && !is_string($customsDocumentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsDocumentType, true), gettype($customsDocumentType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($customsDocumentType) && mb_strlen((string) $customsDocumentType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $customsDocumentType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($customsDocumentType) && mb_strlen((string) $customsDocumentType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $customsDocumentType)), __LINE__);
        }
        $this->CustomsDocumentType = $customsDocumentType;
        
        return $this;
    }
    /**
     * Get CustomsDocumentID value
     * @return string|null
     */
    public function getCustomsDocumentID(): ?string
    {
        return $this->CustomsDocumentID;
    }
    /**
     * Set CustomsDocumentID value
     * @param string $customsDocumentID
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\CustomsDocument
     */
    public function setCustomsDocumentID(?string $customsDocumentID = null): self
    {
        // validation for constraint: string
        if (!is_null($customsDocumentID) && !is_string($customsDocumentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsDocumentID, true), gettype($customsDocumentID)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($customsDocumentID) && mb_strlen((string) $customsDocumentID) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $customsDocumentID)), __LINE__);
        }
        $this->CustomsDocumentID = $customsDocumentID;
        
        return $this;
    }
}
