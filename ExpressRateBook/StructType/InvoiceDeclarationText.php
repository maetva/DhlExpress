<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDeclarationText StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional Declaration text in invoice
 * @subpackage Structs
 */
class InvoiceDeclarationText extends AbstractStructBase
{
    /**
     * The DeclarationText
     * Meta information extracted from the WSDL
     * - documentation: Declaration text
     * - base: xsd:string
     * - maxLength: 700
     * @var string|null
     */
    protected ?string $DeclarationText = null;
    /**
     * Constructor method for InvoiceDeclarationText
     * @uses InvoiceDeclarationText::setDeclarationText()
     * @param string $declarationText
     */
    public function __construct(?string $declarationText = null)
    {
        $this
            ->setDeclarationText($declarationText);
    }
    /**
     * Get DeclarationText value
     * @return string|null
     */
    public function getDeclarationText(): ?string
    {
        return $this->DeclarationText;
    }
    /**
     * Set DeclarationText value
     * @param string $declarationText
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\InvoiceDeclarationText
     */
    public function setDeclarationText(?string $declarationText = null): self
    {
        // validation for constraint: string
        if (!is_null($declarationText) && !is_string($declarationText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declarationText, true), gettype($declarationText)), __LINE__);
        }
        // validation for constraint: maxLength(700)
        if (!is_null($declarationText) && mb_strlen((string) $declarationText) > 700) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 700', mb_strlen((string) $declarationText)), __LINE__);
        }
        $this->DeclarationText = $declarationText;
        
        return $this;
    }
}
