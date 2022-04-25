<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

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
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType $Response = null;
    /**
     * The Notification
     * @var \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType|null
     */
    protected ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType $Notification = null;
    /**
     * Constructor method for docTypeRef_DeleteResponseType
     * @uses DocTypeRef_DeleteResponseType::setResponse()
     * @uses DocTypeRef_DeleteResponseType::setNotification()
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType $response
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification
     */
    public function __construct(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType $response = null, ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification = null)
    {
        $this
            ->setResponse($response)
            ->setNotification($notification);
    }
    /**
     * Get Response value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType|null
     */
    public function getResponse(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType $response
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType
     */
    public function setResponse(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\ResponseType $response = null): self
    {
        $this->Response = $response;
        
        return $this;
    }
    /**
     * Get Notification value
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType|null
     */
    public function getNotification(): ?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_DeleteResponseType
     */
    public function setNotification(?\Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\DocTypeRef_NotificationType $notification = null): self
    {
        $this->Notification = $notification;
        
        return $this;
    }
}
