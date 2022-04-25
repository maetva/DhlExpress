<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_NotificationType2 StructType
 * @subpackage Structs
 */
class DocTypeRef_NotificationType2 extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Short description of the error / status
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - base: xsd:nonNegativeInteger
     * - totalDigits: 6
     * - whiteSpace: collapse
     * @var int|null
     */
    protected ?int $code = null;
    /**
     * Constructor method for docTypeRef_NotificationType2
     * @uses DocTypeRef_NotificationType2::setMessage()
     * @uses DocTypeRef_NotificationType2::setCode()
     * @param string $message
     * @param int $code
     */
    public function __construct(?string $message = null, ?int $code = null)
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
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2
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
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param int $code
     * @return \Maetva\DhlExpress\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType2
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: totalDigits(6)
        if (!is_null($code) && mb_strlen(preg_replace('/(\D)/', '', (string) $code)) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 6 digits, "%d" given', var_export($code, true), mb_strlen(preg_replace('/(\D)/', '', (string) $code))), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
