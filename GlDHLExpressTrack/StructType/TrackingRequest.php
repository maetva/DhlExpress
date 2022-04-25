<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingRequest StructType
 * Meta information extracted from the WSDL
 * - type: s0:TrackingRequest
 * @subpackage Structs
 */
class TrackingRequest extends AbstractStructBase
{
    /**
     * The ClientDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType $ClientDetail = null;
    /**
     * The Request
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request $Request = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: The language code requested by user. This field is mandatory when LanguageScriptCode and/or LanguageCountryCode is provided. Please refer to the Developer Guide for the supported language code | ISO Language Code
     * - base: xsd:string
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * The LanguageScriptCode
     * Meta information extracted from the WSDL
     * - documentation: Script Code
     * - base: xsd:string
     * - maxLength: 4
     * - minLength: 4
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageScriptCode = null;
    /**
     * The LanguageCountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 2 character code of country
     * - base: xsd:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $LanguageCountryCode = null;
    /**
     * The AWBNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber $AWBNumber = null;
    /**
     * The LPNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID $LPNumber = null;
    /**
     * The ReferenceQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery|null
     */
    protected ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery $ReferenceQuery = null;
    /**
     * The LevelOfDetails
     * Meta information extracted from the WSDL
     * - documentation: Checkpoint Detail Indicator
     * @var string|null
     */
    protected ?string $LevelOfDetails = null;
    /**
     * The PiecesEnabled
     * Meta information extracted from the WSDL
     * - documentation: Pieces Indicator
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PiecesEnabled = null;
    /**
     * The EstimatedDeliveryDateEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if estimated delivery date (EDD) should be included in the service response (Estimated Delivery Date is not always returned and is subject to the scans by the DHL Operations team).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EstimatedDeliveryDateEnabled = null;
    /**
     * Constructor method for TrackingRequest
     * @uses TrackingRequest::setClientDetail()
     * @uses TrackingRequest::setRequest()
     * @uses TrackingRequest::setLanguageCode()
     * @uses TrackingRequest::setLanguageScriptCode()
     * @uses TrackingRequest::setLanguageCountryCode()
     * @uses TrackingRequest::setAWBNumber()
     * @uses TrackingRequest::setLPNumber()
     * @uses TrackingRequest::setReferenceQuery()
     * @uses TrackingRequest::setLevelOfDetails()
     * @uses TrackingRequest::setPiecesEnabled()
     * @uses TrackingRequest::setEstimatedDeliveryDateEnabled()
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType $clientDetail
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request $request
     * @param string $languageCode
     * @param string $languageScriptCode
     * @param string $languageCountryCode
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber $aWBNumber
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID $lPNumber
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery $referenceQuery
     * @param string $levelOfDetails
     * @param string $piecesEnabled
     * @param bool $estimatedDeliveryDateEnabled
     */
    public function __construct(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType $clientDetail = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request $request = null, ?string $languageCode = null, ?string $languageScriptCode = null, ?string $languageCountryCode = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber $aWBNumber = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID $lPNumber = null, ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery $referenceQuery = null, ?string $levelOfDetails = null, ?string $piecesEnabled = null, ?bool $estimatedDeliveryDateEnabled = null)
    {
        $this
            ->setClientDetail($clientDetail)
            ->setRequest($request)
            ->setLanguageCode($languageCode)
            ->setLanguageScriptCode($languageScriptCode)
            ->setLanguageCountryCode($languageCountryCode)
            ->setAWBNumber($aWBNumber)
            ->setLPNumber($lPNumber)
            ->setReferenceQuery($referenceQuery)
            ->setLevelOfDetails($levelOfDetails)
            ->setPiecesEnabled($piecesEnabled)
            ->setEstimatedDeliveryDateEnabled($estimatedDeliveryDateEnabled);
    }
    /**
     * Get ClientDetail value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType|null
     */
    public function getClientDetail(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType $clientDetail
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setClientDetail(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\DocTypeRef_ClientDetailType $clientDetail = null): self
    {
        $this->ClientDetail = $clientDetail;
        
        return $this;
    }
    /**
     * Get Request value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request|null
     */
    public function getRequest(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request $request
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setRequest(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\Request $request = null): self
    {
        $this->Request = $request;
        
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($languageCode) && mb_strlen((string) $languageCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
    /**
     * Get LanguageScriptCode value
     * @return string|null
     */
    public function getLanguageScriptCode(): ?string
    {
        return $this->LanguageScriptCode;
    }
    /**
     * Set LanguageScriptCode value
     * @param string $languageScriptCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setLanguageScriptCode(?string $languageScriptCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageScriptCode) && !is_string($languageScriptCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageScriptCode, true), gettype($languageScriptCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($languageScriptCode) && mb_strlen((string) $languageScriptCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $languageScriptCode)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($languageScriptCode) && mb_strlen((string) $languageScriptCode) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $languageScriptCode)), __LINE__);
        }
        $this->LanguageScriptCode = $languageScriptCode;
        
        return $this;
    }
    /**
     * Get LanguageCountryCode value
     * @return string|null
     */
    public function getLanguageCountryCode(): ?string
    {
        return $this->LanguageCountryCode;
    }
    /**
     * Set LanguageCountryCode value
     * @param string $languageCountryCode
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setLanguageCountryCode(?string $languageCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCountryCode) && !is_string($languageCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCountryCode, true), gettype($languageCountryCode)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($languageCountryCode) && mb_strlen((string) $languageCountryCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $languageCountryCode)), __LINE__);
        }
        $this->LanguageCountryCode = $languageCountryCode;
        
        return $this;
    }
    /**
     * Get AWBNumber value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber|null
     */
    public function getAWBNumber(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber
    {
        return $this->AWBNumber;
    }
    /**
     * Set AWBNumber value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber $aWBNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setAWBNumber(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfAWBNumber $aWBNumber = null): self
    {
        $this->AWBNumber = $aWBNumber;
        
        return $this;
    }
    /**
     * Get LPNumber value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID|null
     */
    public function getLPNumber(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID
    {
        return $this->LPNumber;
    }
    /**
     * Set LPNumber value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID $lPNumber
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setLPNumber(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\ArrayType\ArrayOfTrackingPieceID $lPNumber = null): self
    {
        $this->LPNumber = $lPNumber;
        
        return $this;
    }
    /**
     * Get ReferenceQuery value
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery|null
     */
    public function getReferenceQuery(): ?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery
    {
        return $this->ReferenceQuery;
    }
    /**
     * Set ReferenceQuery value
     * @param \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery $referenceQuery
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setReferenceQuery(?\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\ReferenceQuery $referenceQuery = null): self
    {
        $this->ReferenceQuery = $referenceQuery;
        
        return $this;
    }
    /**
     * Get LevelOfDetails value
     * @return string|null
     */
    public function getLevelOfDetails(): ?string
    {
        return $this->LevelOfDetails;
    }
    /**
     * Set LevelOfDetails value
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\LevelOfDetails::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\LevelOfDetails::getValidValues()
     * @throws InvalidArgumentException
     * @param string $levelOfDetails
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setLevelOfDetails(?string $levelOfDetails = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\LevelOfDetails::valueIsValid($levelOfDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\LevelOfDetails', is_array($levelOfDetails) ? implode(', ', $levelOfDetails) : var_export($levelOfDetails, true), implode(', ', \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\LevelOfDetails::getValidValues())), __LINE__);
        }
        $this->LevelOfDetails = $levelOfDetails;
        
        return $this;
    }
    /**
     * Get PiecesEnabled value
     * @return string|null
     */
    public function getPiecesEnabled(): ?string
    {
        return $this->PiecesEnabled;
    }
    /**
     * Set PiecesEnabled value
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\PiecesEnabled::valueIsValid()
     * @uses \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\PiecesEnabled::getValidValues()
     * @throws InvalidArgumentException
     * @param string $piecesEnabled
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setPiecesEnabled(?string $piecesEnabled = null): self
    {
        // validation for constraint: enumeration
        if (!\Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\PiecesEnabled::valueIsValid($piecesEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\PiecesEnabled', is_array($piecesEnabled) ? implode(', ', $piecesEnabled) : var_export($piecesEnabled, true), implode(', ', \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\EnumType\PiecesEnabled::getValidValues())), __LINE__);
        }
        $this->PiecesEnabled = $piecesEnabled;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryDateEnabled value
     * @return bool|null
     */
    public function getEstimatedDeliveryDateEnabled(): ?bool
    {
        return $this->EstimatedDeliveryDateEnabled;
    }
    /**
     * Set EstimatedDeliveryDateEnabled value
     * @param bool $estimatedDeliveryDateEnabled
     * @return \Maetva\DhlExpress\Endpoint\GlDHLExpressTrack\StructType\TrackingRequest
     */
    public function setEstimatedDeliveryDateEnabled(?bool $estimatedDeliveryDateEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($estimatedDeliveryDateEnabled) && !is_bool($estimatedDeliveryDateEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($estimatedDeliveryDateEnabled, true), gettype($estimatedDeliveryDateEnabled)), __LINE__);
        }
        $this->EstimatedDeliveryDateEnabled = $estimatedDeliveryDateEnabled;
        
        return $this;
    }
}
