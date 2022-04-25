<?php

declare(strict_types=1);

namespace Maetva\DhlExpress\GlDHLExpressTrack;

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
            'TrackingRequest' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackingRequest',
            'docTypeRef_ClientDetailType' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\DocTypeRef_ClientDetailType',
            'Request' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Request',
            'ServiceHeader' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ServiceHeader',
            'ArrayOfAWBNumber' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfAWBNumber',
            'ArrayOfTrackingPieceID' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfTrackingPieceID',
            'ReferenceQuery' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ReferenceQuery',
            'Reference' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Reference',
            'ShipmentDate' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ShipmentDate',
            'TrackingResponse' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackingResponse',
            'Response' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Response',
            'ResponseServiceHeader' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ResponseServiceHeader',
            'ArrayOfAWBInfo' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfAWBInfo',
            'AWBInfo' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\AWBInfo',
            'TrackedBy' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackedBy',
            'Status' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Status',
            'ArrayOfCondition' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfCondition',
            'Condition' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Condition',
            'ShipmentInfo' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ShipmentInfo',
            'OriginServiceArea' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\OriginServiceArea',
            'DestinationServiceArea' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\DestinationServiceArea',
            'Shipper' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Shipper',
            'Consignee' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Consignee',
            'ArrayOfShipmentEvent' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfShipmentEvent',
            'ShipmentEvent' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ShipmentEvent',
            'ServiceEvent' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ServiceEvent',
            'EventRemarks' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\EventRemarks',
            'ServiceArea' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ServiceArea',
            'ArrayOfChildShipmentIdentificationNumbers' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfChildShipmentIdentificationNumbers',
            'TrackingPieces' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackingPieces',
            'PieceInfo' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PieceInfo',
            'PieceDetails' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PieceDetails',
            'PieceEvent' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PieceEvent',
            'ArrayOfPieceEvent' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceEvent',
            'ArrayOfPieceInfo' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceInfo',
            'Fault' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\Fault',
            'PieceFault' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PieceFault',
            'ArrayOfPieceFault' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\ArrayType\\ArrayOfPieceFault',
            'trackShipmentRequest' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackShipmentRequest',
            'pubTrackingRequest' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PubTrackingRequest',
            'trackShipmentRequestResponse' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\TrackShipmentRequestResponse',
            'pubTrackingResponse' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\PubTrackingResponse',
            'ShipperReference' => '\\Maetva\\DhlExpress\\GlDHLExpressTrack\\StructType\\ShipperReference',
        ];
    }
}
