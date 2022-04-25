<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceReference StructType
 * Meta information extracted from the WSDL
 * - documentation: Customs Invoice Reference entry
 * @subpackage Structs
 */
class InvoiceReference extends AbstractStructBase
{
    /**
     * The InvoiceReferenceType
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's Type | Invoice Reference Type code. Possible values: Code Description ACL Parent Shipment ID for BBX CID Customer Identifier CN Contract Number CU Consignor reference number ITN US Export declaration
     * reference ID MRN Movement Reference number UCN Unique reference of a consignment (UCRN) OID Order Number PON Purchase Order Number RMA RMA Number Please refer to the DHL EXPRESS - MyDHL API - SOAP Developer Guide for valid enumeration values. For
     * more information please contact your local DHL Express API representative.
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 2
     * @var string|null
     */
    protected ?string $InvoiceReferenceType = null;
    /**
     * The InvoiceReferenceNumber
     * Meta information extracted from the WSDL
     * - documentation: Customs Invoice Reference entry's Number | Invoice Reference Number
     * - base: xsd:string
     * - maxLength: 35
     * @var string|null
     */
    protected ?string $InvoiceReferenceNumber = null;
    /**
     * Constructor method for InvoiceReference
     * @uses InvoiceReference::setInvoiceReferenceType()
     * @uses InvoiceReference::setInvoiceReferenceNumber()
     * @param string $invoiceReferenceType
     * @param string $invoiceReferenceNumber
     */
    public function __construct(?string $invoiceReferenceType = null, ?string $invoiceReferenceNumber = null)
    {
        $this
            ->setInvoiceReferenceType($invoiceReferenceType)
            ->setInvoiceReferenceNumber($invoiceReferenceNumber);
    }
    /**
     * Get InvoiceReferenceType value
     * @return string|null
     */
    public function getInvoiceReferenceType(): ?string
    {
        return $this->InvoiceReferenceType;
    }
    /**
     * Set InvoiceReferenceType value
     * @param string $invoiceReferenceType
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\InvoiceReference
     */
    public function setInvoiceReferenceType(?string $invoiceReferenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceReferenceType) && !is_string($invoiceReferenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceReferenceType, true), gettype($invoiceReferenceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($invoiceReferenceType) && mb_strlen((string) $invoiceReferenceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $invoiceReferenceType)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($invoiceReferenceType) && mb_strlen((string) $invoiceReferenceType) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $invoiceReferenceType)), __LINE__);
        }
        $this->InvoiceReferenceType = $invoiceReferenceType;
        
        return $this;
    }
    /**
     * Get InvoiceReferenceNumber value
     * @return string|null
     */
    public function getInvoiceReferenceNumber(): ?string
    {
        return $this->InvoiceReferenceNumber;
    }
    /**
     * Set InvoiceReferenceNumber value
     * @param string $invoiceReferenceNumber
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\InvoiceReference
     */
    public function setInvoiceReferenceNumber(?string $invoiceReferenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceReferenceNumber) && !is_string($invoiceReferenceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceReferenceNumber, true), gettype($invoiceReferenceNumber)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($invoiceReferenceNumber) && mb_strlen((string) $invoiceReferenceNumber) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $invoiceReferenceNumber)), __LINE__);
        }
        $this->InvoiceReferenceNumber = $invoiceReferenceNumber;
        
        return $this;
    }
}
