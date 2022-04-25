<?php

declare(strict_types=1);

namespace Drupal\commerce_dhl_express\Endpoint\GlDHLExpressTrack;

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
            'TrackingRequest' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackingRequest',
            'docTypeRef_ClientDetailType' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\DocTypeRef_ClientDetailType',
            'Request' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Request',
            'ServiceHeader' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ServiceHeader',
            'ArrayOfAWBNumber' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfAWBNumber',
            'ArrayOfTrackingPieceID' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfTrackingPieceID',
            'ReferenceQuery' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ReferenceQuery',
            'Reference' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Reference',
            'ShipmentDate' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ShipmentDate',
            'TrackingResponse' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackingResponse',
            'Response' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Response',
            'ResponseServiceHeader' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ResponseServiceHeader',
            'ArrayOfAWBInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfAWBInfo',
            'AWBInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\AWBInfo',
            'TrackedBy' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackedBy',
            'Status' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Status',
            'ArrayOfCondition' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfCondition',
            'Condition' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Condition',
            'ShipmentInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ShipmentInfo',
            'OriginServiceArea' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\OriginServiceArea',
            'DestinationServiceArea' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\DestinationServiceArea',
            'Shipper' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Shipper',
            'Consignee' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Consignee',
            'ArrayOfShipmentEvent' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfShipmentEvent',
            'ShipmentEvent' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ShipmentEvent',
            'ServiceEvent' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ServiceEvent',
            'EventRemarks' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\EventRemarks',
            'ServiceArea' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ServiceArea',
            'ArrayOfChildShipmentIdentificationNumbers' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfChildShipmentIdentificationNumbers',
            'TrackingPieces' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackingPieces',
            'PieceInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PieceInfo',
            'PieceDetails' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PieceDetails',
            'PieceEvent' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PieceEvent',
            'ArrayOfPieceEvent' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceEvent',
            'ArrayOfPieceInfo' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceInfo',
            'Fault' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\Fault',
            'PieceFault' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PieceFault',
            'ArrayOfPieceFault' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceFault',
            'trackShipmentRequest' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackShipmentRequest',
            'pubTrackingRequest' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PubTrackingRequest',
            'trackShipmentRequestResponse' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\TrackShipmentRequestResponse',
            'pubTrackingResponse' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\PubTrackingResponse',
            'ShipperReference' => '\\Drupal\\commerce_dhl_express\\Endpoint\\GlDHLExpressTrack\\StructType\\ShipperReference',
        ];
    }
}
