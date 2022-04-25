<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_NotificationType3 StructType
 * @subpackage Structs
 */
class DocTypeRef_NotificationType3 extends AbstractStructBase
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
     * The MessageDetail
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $MessageDetail = null;
    /**
     * The code
     * Meta information extracted from the WSDL
     * - documentation: Notification code: valid values are 0=SUCCESS, other value=ERROR
     * - base: xsd:token
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The src
     * Meta information extracted from the WSDL
     * - base: xsd:token
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $src = null;
    /**
     * Constructor method for docTypeRef_NotificationType3
     * @uses DocTypeRef_NotificationType3::setMessage()
     * @uses DocTypeRef_NotificationType3::setMessageDetail()
     * @uses DocTypeRef_NotificationType3::setCode()
     * @uses DocTypeRef_NotificationType3::setSrc()
     * @param string $message
     * @param string $messageDetail
     * @param string $code
     * @param string $src
     */
    public function __construct(?string $message = null, ?string $messageDetail = null, ?string $code = null, ?string $src = null)
    {
        $this
            ->setMessage($message)
            ->setMessageDetail($messageDetail)
            ->setCode($code)
            ->setSrc($src);
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3
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
     * Get MessageDetail value
     * @return string|null
     */
    public function getMessageDetail(): ?string
    {
        return $this->MessageDetail;
    }
    /**
     * Set MessageDetail value
     * @param string $messageDetail
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3
     */
    public function setMessageDetail(?string $messageDetail = null): self
    {
        // validation for constraint: string
        if (!is_null($messageDetail) && !is_string($messageDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageDetail, true), gettype($messageDetail)), __LINE__);
        }
        $this->MessageDetail = $messageDetail;
        
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
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3
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
    /**
     * Get src value
     * @return string|null
     */
    public function getSrc(): ?string
    {
        return $this->src;
    }
    /**
     * Set src value
     * @param string $src
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType3
     */
    public function setSrc(?string $src = null): self
    {
        // validation for constraint: string
        if (!is_null($src) && !is_string($src)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($src, true), gettype($src)), __LINE__);
        }
        $this->src = $src;
        
        return $this;
    }
}
