<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\Endpoint\ExpressRateBook;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'docTypeRef_ProcessShipmentRequestType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ProcessShipmentRequestType',
            'docTypeRef_ClientDetailType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ClientDetailType2',
            'Request' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Request',
            'ServiceHeaderType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ServiceHeaderType',
            'docTypeRef_Content' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_Content',
            'docTypeRef_DangerousGoods' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DangerousGoods',
            'docTypeRef_RequestedShipmentType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RequestedShipmentType',
            'docTypeRef_ShipmentInfoType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipmentInfoType',
            'ShipmentPrepaidTotalCharge' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ShipmentPrepaidTotalCharge',
            'docTypeRef_InternationDetailType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_InternationDetailType',
            'docTypeRef_CommoditiesType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_CommoditiesType',
            'ExportDeclaration' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ExportDeclaration',
            'ExportLineItems' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ExportLineItems',
            'ExportLineItemType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ExportLineItemType',
            'AdditionalInformation' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\AdditionalInformation',
            'ItemReferences' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ItemReferences',
            'ItemReference' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ItemReference',
            'CustomsPaperworks' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomsPaperworks',
            'CustomsPaperwork' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomsPaperwork',
            'InvoiceDeclarationTexts' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\InvoiceDeclarationTexts',
            'InvoiceDeclarationText' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\InvoiceDeclarationText',
            'CustomsDocuments' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomsDocuments',
            'CustomsDocument' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomsDocument',
            'InvoiceSignatureDetails' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\InvoiceSignatureDetails',
            'OtherCharges' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\OtherCharges',
            'OtherCharge' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\OtherCharge',
            'Remarks' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Remarks',
            'Remark' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Remark',
            'CustomerDataTextEntries' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomerDataTextEntries',
            'CustomerDataTextEntry' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomerDataTextEntry',
            'InvoiceReferences' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\InvoiceReferences',
            'InvoiceReference' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\InvoiceReference',
            'docTypeRef_OnDemandDeliveryOptions' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_OnDemandDeliveryOptions',
            'docTypeRef_ShipType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipType',
            'docTypeRef_ContactInfoType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ContactInfoType',
            'docTypeRef_ContactInfoType1' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ContactInfoType1',
            'docTypeRef_ContactType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ContactType',
            'docTypeRef_ContactType1' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ContactType1',
            'docTypeRef_AddressType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_AddressType',
            'docTypeRef_AddressType1' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_AddressType1',
            'docTypeRef_RegistrationNumbers' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RegistrationNumbers',
            'docTypeRef_RegistrationNumber' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RegistrationNumber',
            'docTypeRef_BankDetails' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_BankDetails',
            'docTypeRef_BankDetail' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_BankDetail',
            'docTypeRef_PackagesType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_PackagesType',
            'docTypeRef_RequestedPackagesType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RequestedPackagesType',
            'docTypeRef_DimensionsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DimensionsType',
            'Billing' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Billing',
            'Services' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Services',
            'Service' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Service',
            'PaymentMethods' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\PaymentMethods',
            'DocumentImages' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocumentImages',
            'DocumentImage' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocumentImage',
            'LabelOptions' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LabelOptions',
            'CustomerLogo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomerLogo',
            'CustomerBarcode' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\CustomerBarcode',
            'DetachOptions' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DetachOptions',
            'ShipmentReferences' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ShipmentReferences',
            'ShipmentReferenceType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ShipmentReferenceType',
            'BespokeLabelData' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\BespokeLabelData',
            'LabelBarcodes' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LabelBarcodes',
            'LabelBarcode' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LabelBarcode',
            'LabelTextEntries' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LabelTextEntries',
            'LabelTextEntry' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LabelTextEntry',
            'PackageReferences' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\PackageReferences',
            'PackageReferenceType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\PackageReferenceType',
            'docTypeRef_ShipmentNotifications' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipmentNotifications',
            'docTypeRef_ShipmentNotification' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipmentNotification',
            'docTypeRef_RateRequestType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RateRequestType',
            'docTypeRef_ClientDetailType3' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ClientDetailType3',
            'RequestType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\RequestType',
            'docTypeRef_RequestedShipmentType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RequestedShipmentType2',
            'docTypeRef_ShipType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipType2',
            'docTypeRef_AddressType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_AddressType2',
            'docTypeRef_PackagesType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_PackagesType2',
            'docTypeRef_RequestedPackagesType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RequestedPackagesType2',
            'docTypeRef_WeightType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_WeightType',
            'docTypeRef_DimensionsType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DimensionsType2',
            'Billing2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Billing2',
            'Services2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Services2',
            'Service2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Service2',
            'ProductsAndServices2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ProductsAndServices2',
            'ProductAndServices' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ProductAndServices',
            'LandedCostType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\LandedCostType',
            'ItemsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ItemsType',
            'ItemType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ItemType',
            'GoodsCharacteristicsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\GoodsCharacteristicsType',
            'GoodsCharacteristicType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\GoodsCharacteristicType',
            'AdditionalQuantityDefinitionsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\AdditionalQuantityDefinitionsType',
            'AdditionalQuantityDefinitionType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\AdditionalQuantityDefinitionType',
            'ShipmentMonetaryAmountType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ShipmentMonetaryAmountType',
            'ChargesType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ChargesType',
            'docTypeRef_DeleteResponseType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DeleteResponseType',
            'ResponseType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ResponseType',
            'docTypeRef_NotificationType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_NotificationType',
            'docTypeRef_DeleteRequestType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DeleteRequestType',
            'docTypeRef_ClientDetailType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ClientDetailType',
            'docTypeRef_RateResponseType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_RateResponseType',
            'docTypeRef_ProviderType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ProviderType',
            'docTypeRef_NotificationType3' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_NotificationType3',
            'docTypeRef_WarningType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_WarningType',
            'docTypeRef_ServiceType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ServiceType',
            'TotalNet' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\TotalNet',
            'Charges' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Charges',
            'docTypeRef_TotalNetType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_TotalNetType',
            'docTypeRef_TotalChargeTypes' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_TotalChargeTypes',
            'TotalChargeType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\TotalChargeType',
            'docTypeRef_ChargesType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ChargesType',
            'docTypeRef_ChargeType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ChargeType',
            'ChargeBreakdown' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ChargeBreakdown',
            'Breakdown' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Breakdown',
            'docTypeRef_ItemsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ItemsType',
            'docTypeRef_ItemType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ItemType',
            'Notification' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\Notification',
            'docTypeRef_ServiceAreaType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ServiceAreaType',
            'docTypeRef_ExchangeRateType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ExchangeRateType',
            'ExchangeRate' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ExchangeRate',
            'docTypeRef_ShipmentDetailType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_ShipmentDetailType',
            'docTypeRef_Response' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_Response',
            'docTypeRef_NotificationType2' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_NotificationType2',
            'docTypeRef_PackagesResultsType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_PackagesResultsType',
            'docTypeRef_PackageResultType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_PackageResultType',
            'docTypeRef_LabelImageType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_LabelImageType',
            'docTypeRef_Documents' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_Documents',
            'docTypeRef_Document' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_Document',
            'docTypeRef_TotalNet' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_TotalNet',
            'docTypeRef_Charges' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_Charges',
            'docTypeRef_OriginServiceAreaType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_OriginServiceAreaType',
            'docTypeRef_DestinationServiceAreaType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_DestinationServiceAreaType',
            'ServiceHandlingFeatureCodes' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\ServiceHandlingFeatureCodes',
            'BarcodeInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\BarcodeInfo',
            'docTypeRef_TrackingNumberBarcodes' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_TrackingNumberBarcodes',
            'docTypeRef_TrackingNumberBarcode' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\DocTypeRef_TrackingNumberBarcode',
            'EstimatedDeliveryDate' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\EstimatedDeliveryDate',
            'PickupDetails' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\PickupDetails',
            'QRCode' => '\\Drupal\\commerce_dhl_express\\Endpoint\\ExpressRateBook\\StructType\\QRCode',
        ];
    }
}
