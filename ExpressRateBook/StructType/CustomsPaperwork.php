<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsPaperwork StructType
 * Meta information extracted from the WSDL
 * - documentation: Customs Invoice Reference entry
 * @subpackage Structs
 */
class CustomsPaperwork extends AbstractStructBase
{
    /**
     * The CustomsPaperworkType
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's Type | Export Declaration line items's Customs Paperwork Type code. Possible values: Code Description 972 T2LF Dispense Paiement Droits AHC Analysis and Health Certificate ATA ATA Carnet ATR
     * Preference Certificate ATR CHD CHED-D (Common Health Entry Document for Feed and Food of Non-Animal Origin CHP CHED-P (Common Health Entry Document for Products) CIT CITES Certificate COO Generic Certificate of Origin DEX Duty Exemption Certificate
     * EU1 Preference Certificate EUR1 EU2 Preferential Declaration of Origin on the Invoice - EUR2 EUS End Use Authorization FMA Certificate of Origin (Form A) PHY Phytosanitary Certificate VET Veterinary Entry Document VEX VAT Exemption Certificate CRL
     * Control Document CSD Consolidated Customs Entry PPY Proof Of Payment CI2 Export-only Invoice CIV Customs Invoice Value DOV Invoice INV Commercial Invoice PFI Pro-Forma ALC Agricultural License HLC Health Products Regulatory Authority (HPRA) Licensing
     * Requirements JLC Justice License LIC Specific Export Licenses LNP License or Permit PLI Permits and Licenses DLI Driver's License NID National Identity Card PAS Passport CHA Power of Attorney CPA Consignee Power of Attorney POA Power of Attorney
     * (Customer-based) BEX Branch Letter of Exemption DGD Dangerous Goods Declaration IPA Intellectual Property Authorization T2M T2M Transport Accompanying Document TAD TAD Transport Accompanying Document T1 TCS Transportation Charges Statement ROD
     * Receipt on Delivery EXL DCE Export of Customs Data HWB House Waybill Please refer to the DHL EXPRESS - MyDHL API - SOAP Developer Guide for valid enumeration values. For more information please contact your local DHL Express API representative.
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 2
     * @var string|null
     */
    protected ?string $CustomsPaperworkType = null;
    /**
     * The CustomsPaperworkID
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's ID | Export Declaration line items's Customs Paperwork ID
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    protected ?string $CustomsPaperworkID = null;
    /**
     * Constructor method for CustomsPaperwork
     * @uses CustomsPaperwork::setCustomsPaperworkType()
     * @uses CustomsPaperwork::setCustomsPaperworkID()
     * @param string $customsPaperworkType
     * @param string $customsPaperworkID
     */
    public function __construct(?string $customsPaperworkType = null, ?string $customsPaperworkID = null)
    {
        $this
            ->setCustomsPaperworkType($customsPaperworkType)
            ->setCustomsPaperworkID($customsPaperworkID);
    }
    /**
     * Get CustomsPaperworkType value
     * @return string|null
     */
    public function getCustomsPaperworkType(): ?string
    {
        return $this->CustomsPaperworkType;
    }
    /**
     * Set CustomsPaperworkType value
     * @param string $customsPaperworkType
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork
     */
    public function setCustomsPaperworkType(?string $customsPaperworkType = null): self
    {
        // validation for constraint: string
        if (!is_null($customsPaperworkType) && !is_string($customsPaperworkType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsPaperworkType, true), gettype($customsPaperworkType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($customsPaperworkType) && mb_strlen((string) $customsPaperworkType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $customsPaperworkType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($customsPaperworkType) && mb_strlen((string) $customsPaperworkType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $customsPaperworkType)), __LINE__);
        }
        $this->CustomsPaperworkType = $customsPaperworkType;
        
        return $this;
    }
    /**
     * Get CustomsPaperworkID value
     * @return string|null
     */
    public function getCustomsPaperworkID(): ?string
    {
        return $this->CustomsPaperworkID;
    }
    /**
     * Set CustomsPaperworkID value
     * @param string $customsPaperworkID
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\CustomsPaperwork
     */
    public function setCustomsPaperworkID(?string $customsPaperworkID = null): self
    {
        // validation for constraint: string
        if (!is_null($customsPaperworkID) && !is_string($customsPaperworkID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsPaperworkID, true), gettype($customsPaperworkID)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($customsPaperworkID) && mb_strlen((string) $customsPaperworkID) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $customsPaperworkID)), __LINE__);
        }
        $this->CustomsPaperworkID = $customsPaperworkID;
        
        return $this;
    }
}
