<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_WarningType StructType
 * @subpackage Structs
 */
class DocTypeRef_WarningType extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - documentation: Warning code associated with the warning description.
     * - base: xsd:token
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * Constructor method for docTypeRef_WarningType
     * @uses DocTypeRef_WarningType::setMessage()
     * @uses DocTypeRef_WarningType::setCode()
     * @param string $message
     * @param string $code
     */
    public function __construct(?string $message = null, ?string $code = null)
    {
        $this
            ->setMessage($message)
            ->setCode($code);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_WarningType
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
