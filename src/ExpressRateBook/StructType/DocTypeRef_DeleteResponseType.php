<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for docTypeRef_DeleteResponseType StructType
 * @subpackage Structs
 */
class DocTypeRef_DeleteResponseType extends AbstractStructBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType $Response = null;
    /**
     * The Notification
     * @var \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType|null
     */
    protected ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType $Notification = null;
    /**
     * Constructor method for docTypeRef_DeleteResponseType
     * @uses DocTypeRef_DeleteResponseType::setResponse()
     * @uses DocTypeRef_DeleteResponseType::setNotification()
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType $response
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification
     */
    public function __construct(?\Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType $response = null, ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification = null)
    {
        $this
            ->setResponse($response)
            ->setNotification($notification);
    }
    /**
     * Get Response value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType|null
     */
    public function getResponse(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType $response
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType
     */
    public function setResponse(?\Maetva\DhlExpress\ExpressRateBook\StructType\ResponseType $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Get Notification value
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType|null
     */
    public function getNotification(): ?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification
     * @return \Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType
     */
    public function setNotification(?\Maetva\DhlExpress\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification = null): self
    {
        $this->Notification = $notification;
        
        return $this;
    }
}
