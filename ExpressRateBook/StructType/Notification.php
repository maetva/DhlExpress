<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification StructType
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Short description of the error / status
     * - base: xsd:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The DetailedMessage
     * Meta information extracted from the WSDL
     * - documentation: Detailed description of the error / status
     * - base: xsd:string
     * - maxLength: 1024
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailedMessage = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * Constructor method for Notification
     * @uses Notification::setMessage()
     * @uses Notification::setDetailedMessage()
     * @uses Notification::setCode()
     * @param string $message
     * @param string $detailedMessage
     * @param string $code
     */
    public function __construct(?string $message = null, ?string $detailedMessage = null, ?string $code = null)
    {
        $this
            ->setMessage($message)
            ->setDetailedMessage($detailedMessage)
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
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Notification
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($message) && mb_strlen((string) $message) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get DetailedMessage value
     * @return string|null
     */
    public function getDetailedMessage(): ?string
    {
        return $this->DetailedMessage;
    }
    /**
     * Set DetailedMessage value
     * @param string $detailedMessage
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Notification
     */
    public function setDetailedMessage(?string $detailedMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($detailedMessage) && !is_string($detailedMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailedMessage, true), gettype($detailedMessage)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($detailedMessage) && mb_strlen((string) $detailedMessage) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $detailedMessage)), __LINE__);
        }
        $this->DetailedMessage = $detailedMessage;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\Notification
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}
