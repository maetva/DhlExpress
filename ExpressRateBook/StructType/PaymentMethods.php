<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMethods StructType
 * @subpackage Structs
 */
class PaymentMethods extends AbstractStructBase
{
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: To indicate the payment method code. Valid values: CSH - CASH CRC - CREDIT CARD CHQ - CHEQUE DRD - DIRECT DEBIT MOB - PAYMENT WITH MOBILE PHONE
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 3
     * @var string|null
     */
    protected ?string $PaymentMethod = null;
    /**
     * Constructor method for PaymentMethods
     * @uses PaymentMethods::setPaymentMethod()
     * @param string $paymentMethod
     */
    public function __construct(?string $paymentMethod = null)
    {
        $this
            ->setPaymentMethod($paymentMethod);
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @param string $paymentMethod
     * @return \Drupal\commerce_dhl_express\Endpoint\ExpressRateBook\StructType\PaymentMethods
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($paymentMethod) && mb_strlen((string) $paymentMethod) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $paymentMethod)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($paymentMethod) && mb_strlen((string) $paymentMethod) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $paymentMethod)), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        
        return $this;
    }
}
