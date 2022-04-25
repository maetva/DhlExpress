<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_Documents StructType
 * @subpackage Structs
 */
class DocTypeRef_Documents extends AbstractStructBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document[]
     */
    protected ?array $Document = null;
    /**
     * Constructor method for docTypeRef_Documents
     * @uses DocTypeRef_Documents::setDocument()
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document[] $document
     */
    public function __construct(?array $document = null)
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get Document value
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document[]
     */
    public function getDocument(): ?array
    {
        return $this->Document;
    }
    /**
     * This method is responsible for validating the values passed to the setDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForArrayConstraintsFromSetDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $docTypeRef_DocumentsDocumentItem) {
            // validation for constraint: itemType
            if (!$docTypeRef_DocumentsDocumentItem instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document) {
                $invalidValues[] = is_object($docTypeRef_DocumentsDocumentItem) ? get_class($docTypeRef_DocumentsDocumentItem) : sprintf('%s(%s)', gettype($docTypeRef_DocumentsDocumentItem), var_export($docTypeRef_DocumentsDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Document property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Document value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document[] $document
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents
     */
    public function setDocument(?array $document = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentArrayErrorMessage = self::validateDocumentForArrayConstraintsFromSetDocument($document))) {
            throw new InvalidArgumentException($documentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($document) && count($document) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($document)), __LINE__);
        }
        $this->Document = $document;
        
        return $this;
    }
    /**
     * Add item to Document value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document $item
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Documents
     */
    public function addToDocument(\Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document) {
            throw new InvalidArgumentException(sprintf('The Document property can only contain items of type \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_Document, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Document) && count($this->Document) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Document)), __LINE__);
        }
        $this->Document[] = $item;
        
        return $this;
    }
}
