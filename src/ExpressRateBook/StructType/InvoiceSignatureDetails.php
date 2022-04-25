<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceSignatureDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Custom Invoice Signature details
 * @subpackage Structs
 */
class InvoiceSignatureDetails extends AbstractStructBase
{
    /**
     * The SignatureName
     * Meta information extracted from the WSDL
     * - documentation: Name of signatory | Signature name
     * - base: xsd:string
     * - maxLength: 35
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SignatureName = null;
    /**
     * The SignatureTitle
     * Meta information extracted from the WSDL
     * - documentation: Title of signatory | Signature title
     * - base: xsd:string
     * - maxLength: 35
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SignatureTitle = null;
    /**
     * The SignatureImage
     * Meta information extracted from the WSDL
     * - documentation: Signature image in base64 format. Max of size is 1 MB. Valid format of image are: PNG, GIF, JPEG, JPG | SignatureImage
     * - base: xsd:base64Binary
     * - maxLength: 1048576
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SignatureImage = null;
    /**
     * Constructor method for InvoiceSignatureDetails
     * @uses InvoiceSignatureDetails::setSignatureName()
     * @uses InvoiceSignatureDetails::setSignatureTitle()
     * @uses InvoiceSignatureDetails::setSignatureImage()
     * @param string $signatureName
     * @param string $signatureTitle
     * @param string $signatureImage
     */
    public function __construct(?string $signatureName = null, ?string $signatureTitle = null, ?string $signatureImage = null)
    {
        $this
            ->setSignatureName($signatureName)
            ->setSignatureTitle($signatureTitle)
            ->setSignatureImage($signatureImage);
    }
    /**
     * Get SignatureName value
     * @return string|null
     */
    public function getSignatureName(): ?string
    {
        return $this->SignatureName;
    }
    /**
     * Set SignatureName value
     * @param string $signatureName
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails
     */
    public function setSignatureName(?string $signatureName = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureName) && !is_string($signatureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureName, true), gettype($signatureName)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($signatureName) && mb_strlen((string) $signatureName) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $signatureName)), __LINE__);
        }
        $this->SignatureName = $signatureName;
        
        return $this;
    }
    /**
     * Get SignatureTitle value
     * @return string|null
     */
    public function getSignatureTitle(): ?string
    {
        return $this->SignatureTitle;
    }
    /**
     * Set SignatureTitle value
     * @param string $signatureTitle
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails
     */
    public function setSignatureTitle(?string $signatureTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureTitle) && !is_string($signatureTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureTitle, true), gettype($signatureTitle)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($signatureTitle) && mb_strlen((string) $signatureTitle) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $signatureTitle)), __LINE__);
        }
        $this->SignatureTitle = $signatureTitle;
        
        return $this;
    }
    /**
     * Get SignatureImage value
     * @return string|null
     */
    public function getSignatureImage(): ?string
    {
        return $this->SignatureImage;
    }
    /**
     * Set SignatureImage value
     * @param string $signatureImage
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\InvoiceSignatureDetails
     */
    public function setSignatureImage(?string $signatureImage = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureImage) && !is_string($signatureImage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureImage, true), gettype($signatureImage)), __LINE__);
        }
        // validation for constraint: maxLength(1048576)
        if (!is_null($signatureImage) && mb_strlen((string) $signatureImage) > 1048576) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1048576', mb_strlen((string) $signatureImage)), __LINE__);
        }
        $this->SignatureImage = $signatureImage;
        
        return $this;
    }
}
