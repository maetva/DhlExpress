<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentInfo StructType
 * @subpackage Structs
 */
class ShipmentInfo extends AbstractStructBase
{
    /**
     * The OriginServiceArea
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea $OriginServiceArea = null;
    /**
     * The DestinationServiceArea
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea $DestinationServiceArea = null;
    /**
     * The ShipperName
     * Meta information extracted from the WSDL
     * - documentation: Shipper Name
     * - base: xsd:string
     * - maxLength: 45
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $ShipperName = null;
    /**
     * The ShipperAccountNumber
     * Meta information extracted from the WSDL
     * - documentation: Shipper’s Account Number (currently not populated for tracking)
     * - base: xsd:positiveInteger
     * - maxInclusive: 9999999999
     * - minInclusive: 100000000
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShipperAccountNumber = null;
    /**
     * The ConsigneeName
     * Meta information extracted from the WSDL
     * - documentation: Receiver’s Name
     * - base: xsd:string
     * - maxLength: 45
     * - whiteSpace: preserve
     * @var string|null
     */
    protected ?string $ConsigneeName = null;
    /**
     * The ShipmentDate
     * Meta information extracted from the WSDL
     * - documentation: The shipment initiation date, local to origin
     * @var string|null
     */
    protected ?string $ShipmentDate = null;
    /**
     * The Pieces
     * Meta information extracted from the WSDL
     * - documentation: Number of pieces in shipment
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Pieces = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - documentation: Weight of shipment. Format 99999.999
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Weight = null;
    /**
     * The WeightUnit
     * Meta information extracted from the WSDL
     * - documentation: L = Pounds K = Kilogram G = Grams
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WeightUnit = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The shipping product requested for this shipment, corresponding to the DHL Global Product codes
     * - base: xsd:token
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The ShipmentDescription
     * Meta information extracted from the WSDL
     * - documentation: The description of the shipment
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentDescription = null;
    /**
     * The Shipper
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper $Shipper = null;
    /**
     * The Consignee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee $Consignee = null;
    /**
     * The ShipmentEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent $ShipmentEvent = null;
    /**
     * The ShipperReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference[]
     */
    protected ?array $ShipperReference = null;
    /**
     * The EstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - documentation: Estimted delivery date (EDD)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryDate = null;
    /**
     * The ArrayOfChildShipmentIdentificationNumbers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers $ArrayOfChildShipmentIdentificationNumbers = null;
    /**
     * Constructor method for ShipmentInfo
     * @uses ShipmentInfo::setOriginServiceArea()
     * @uses ShipmentInfo::setDestinationServiceArea()
     * @uses ShipmentInfo::setShipperName()
     * @uses ShipmentInfo::setShipperAccountNumber()
     * @uses ShipmentInfo::setConsigneeName()
     * @uses ShipmentInfo::setShipmentDate()
     * @uses ShipmentInfo::setPieces()
     * @uses ShipmentInfo::setWeight()
     * @uses ShipmentInfo::setWeightUnit()
     * @uses ShipmentInfo::setServiceType()
     * @uses ShipmentInfo::setShipmentDescription()
     * @uses ShipmentInfo::setShipper()
     * @uses ShipmentInfo::setConsignee()
     * @uses ShipmentInfo::setShipmentEvent()
     * @uses ShipmentInfo::setShipperReference()
     * @uses ShipmentInfo::setEstimatedDeliveryDate()
     * @uses ShipmentInfo::setArrayOfChildShipmentIdentificationNumbers()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea $originServiceArea
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea $destinationServiceArea
     * @param string $shipperName
     * @param int $shipperAccountNumber
     * @param string $consigneeName
     * @param string $shipmentDate
     * @param string $pieces
     * @param string $weight
     * @param string $weightUnit
     * @param string $serviceType
     * @param string $shipmentDescription
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper $shipper
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee $consignee
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent $shipmentEvent
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference[] $shipperReference
     * @param string $estimatedDeliveryDate
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers $arrayOfChildShipmentIdentificationNumbers
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea $originServiceArea = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea $destinationServiceArea = null, ?string $shipperName = null, ?int $shipperAccountNumber = null, ?string $consigneeName = null, ?string $shipmentDate = null, ?string $pieces = null, ?string $weight = null, ?string $weightUnit = null, ?string $serviceType = null, ?string $shipmentDescription = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper $shipper = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee $consignee = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent $shipmentEvent = null, ?array $shipperReference = null, ?string $estimatedDeliveryDate = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers $arrayOfChildShipmentIdentificationNumbers = null)
    {
        $this
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setShipperName($shipperName)
            ->setShipperAccountNumber($shipperAccountNumber)
            ->setConsigneeName($consigneeName)
            ->setShipmentDate($shipmentDate)
            ->setPieces($pieces)
            ->setWeight($weight)
            ->setWeightUnit($weightUnit)
            ->setServiceType($serviceType)
            ->setShipmentDescription($shipmentDescription)
            ->setShipper($shipper)
            ->setConsignee($consignee)
            ->setShipmentEvent($shipmentEvent)
            ->setShipperReference($shipperReference)
            ->setEstimatedDeliveryDate($estimatedDeliveryDate)
            ->setArrayOfChildShipmentIdentificationNumbers($arrayOfChildShipmentIdentificationNumbers);
    }
    /**
     * Get OriginServiceArea value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea|null
     */
    public function getOriginServiceArea(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea
    {
        return $this->OriginServiceArea;
    }
    /**
     * Set OriginServiceArea value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea $originServiceArea
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setOriginServiceArea(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\OriginServiceArea $originServiceArea = null): self
    {
        $this->OriginServiceArea = $originServiceArea;
        
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea|null
     */
    public function getDestinationServiceArea(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea $destinationServiceArea
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setDestinationServiceArea(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DestinationServiceArea $destinationServiceArea = null): self
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        
        return $this;
    }
    /**
     * Get ShipperName value
     * @return string|null
     */
    public function getShipperName(): ?string
    {
        return $this->ShipperName;
    }
    /**
     * Set ShipperName value
     * @param string $shipperName
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipperName(?string $shipperName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName) && !is_string($shipperName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), gettype($shipperName)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($shipperName) && mb_strlen((string) $shipperName) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $shipperName)), __LINE__);
        }
        $this->ShipperName = $shipperName;
        
        return $this;
    }
    /**
     * Get ShipperAccountNumber value
     * @return int|null
     */
    public function getShipperAccountNumber(): ?int
    {
        return $this->ShipperAccountNumber;
    }
    /**
     * Set ShipperAccountNumber value
     * @param int $shipperAccountNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipperAccountNumber(?int $shipperAccountNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($shipperAccountNumber) && !(is_int($shipperAccountNumber) || ctype_digit($shipperAccountNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperAccountNumber, true), gettype($shipperAccountNumber)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999999)
        if (!is_null($shipperAccountNumber) && $shipperAccountNumber > 9999999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999999', var_export($shipperAccountNumber, true)), __LINE__);
        }
        // validation for constraint: minInclusive(100000000)
        if (!is_null($shipperAccountNumber) && $shipperAccountNumber < 100000000) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 100000000', var_export($shipperAccountNumber, true)), __LINE__);
        }
        $this->ShipperAccountNumber = $shipperAccountNumber;
        
        return $this;
    }
    /**
     * Get ConsigneeName value
     * @return string|null
     */
    public function getConsigneeName(): ?string
    {
        return $this->ConsigneeName;
    }
    /**
     * Set ConsigneeName value
     * @param string $consigneeName
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setConsigneeName(?string $consigneeName = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneeName) && !is_string($consigneeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneeName, true), gettype($consigneeName)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($consigneeName) && mb_strlen((string) $consigneeName) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $consigneeName)), __LINE__);
        }
        $this->ConsigneeName = $consigneeName;
        
        return $this;
    }
    /**
     * Get ShipmentDate value
     * @return string|null
     */
    public function getShipmentDate(): ?string
    {
        return $this->ShipmentDate;
    }
    /**
     * Set ShipmentDate value
     * @param string $shipmentDate
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipmentDate(?string $shipmentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentDate) && !is_string($shipmentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentDate, true), gettype($shipmentDate)), __LINE__);
        }
        $this->ShipmentDate = $shipmentDate;
        
        return $this;
    }
    /**
     * Get Pieces value
     * @return string|null
     */
    public function getPieces(): ?string
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param string $pieces
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setPieces(?string $pieces = null): self
    {
        // validation for constraint: string
        if (!is_null($pieces) && !is_string($pieces)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pieces, true), gettype($pieces)), __LINE__);
        }
        $this->Pieces = $pieces;
        
        return $this;
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $weight
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        
        return $this;
    }
    /**
     * Get WeightUnit value
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->WeightUnit;
    }
    /**
     * Set WeightUnit value
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\WeightUnit::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\WeightUnit::getValidValues()
     * @throws InvalidArgumentException
     * @param string $weightUnit
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\WeightUnit::valueIsValid($weightUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\WeightUnit', is_array($weightUnit) ? implode(', ', $weightUnit) : var_export($weightUnit, true), implode(', ', \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\WeightUnit::getValidValues())), __LINE__);
        }
        $this->WeightUnit = $weightUnit;
        
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($serviceType) && mb_strlen((string) $serviceType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get ShipmentDescription value
     * @return string|null
     */
    public function getShipmentDescription(): ?string
    {
        return $this->ShipmentDescription;
    }
    /**
     * Set ShipmentDescription value
     * @param string $shipmentDescription
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipmentDescription(?string $shipmentDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentDescription) && !is_string($shipmentDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentDescription, true), gettype($shipmentDescription)), __LINE__);
        }
        $this->ShipmentDescription = $shipmentDescription;
        
        return $this;
    }
    /**
     * Get Shipper value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper|null
     */
    public function getShipper(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper $shipper
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipper(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Shipper $shipper = null): self
    {
        $this->Shipper = $shipper;
        
        return $this;
    }
    /**
     * Get Consignee value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee|null
     */
    public function getConsignee(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee
    {
        return $this->Consignee;
    }
    /**
     * Set Consignee value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee $consignee
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setConsignee(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Consignee $consignee = null): self
    {
        $this->Consignee = $consignee;
        
        return $this;
    }
    /**
     * Get ShipmentEvent value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent|null
     */
    public function getShipmentEvent(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent
    {
        return $this->ShipmentEvent;
    }
    /**
     * Set ShipmentEvent value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent $shipmentEvent
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipmentEvent(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfShipmentEvent $shipmentEvent = null): self
    {
        $this->ShipmentEvent = $shipmentEvent;
        
        return $this;
    }
    /**
     * Get ShipperReference value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference[]
     */
    public function getShipperReference(): ?array
    {
        return $this->ShipperReference;
    }
    /**
     * This method is responsible for validating the values passed to the setShipperReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperReference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperReferenceForArrayConstraintsFromSetShipperReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentInfoShipperReferenceItem) {
            // validation for constraint: itemType
            if (!$shipmentInfoShipperReferenceItem instanceof \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference) {
                $invalidValues[] = is_object($shipmentInfoShipperReferenceItem) ? get_class($shipmentInfoShipperReferenceItem) : sprintf('%s(%s)', gettype($shipmentInfoShipperReferenceItem), var_export($shipmentInfoShipperReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipperReference property can only contain items of type \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShipperReference value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference[] $shipperReference
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setShipperReference(?array $shipperReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipperReferenceArrayErrorMessage = self::validateShipperReferenceForArrayConstraintsFromSetShipperReference($shipperReference))) {
            throw new InvalidArgumentException($shipperReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($shipperReference) && count($shipperReference) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($shipperReference)), __LINE__);
        }
        $this->ShipperReference = $shipperReference;
        
        return $this;
    }
    /**
     * Add item to ShipperReference value
     * @throws InvalidArgumentException
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $item
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function addToShipperReference(\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference) {
            throw new InvalidArgumentException(sprintf('The ShipperReference property can only contain items of type \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipperReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ShipperReference) && count($this->ShipperReference) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ShipperReference)), __LINE__);
        }
        $this->ShipperReference[] = $item;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryDate value
     * @return string|null
     */
    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param string $estimatedDeliveryDate
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryDate) && !is_string($estimatedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryDate, true), gettype($estimatedDeliveryDate)), __LINE__);
        }
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        
        return $this;
    }
    /**
     * Get ArrayOfChildShipmentIdentificationNumbers value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers|null
     */
    public function getArrayOfChildShipmentIdentificationNumbers(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers
    {
        return $this->ArrayOfChildShipmentIdentificationNumbers;
    }
    /**
     * Set ArrayOfChildShipmentIdentificationNumbers value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers $arrayOfChildShipmentIdentificationNumbers
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ShipmentInfo
     */
    public function setArrayOfChildShipmentIdentificationNumbers(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfChildShipmentIdentificationNumbers $arrayOfChildShipmentIdentificationNumbers = null): self
    {
        $this->ArrayOfChildShipmentIdentificationNumbers = $arrayOfChildShipmentIdentificationNumbers;
        
        return $this;
    }
}
