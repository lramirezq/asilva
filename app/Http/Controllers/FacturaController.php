<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Factura;
use Inertia\Inertia;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('Index - Controller Factura.');
        $facturas = Factura::all(); // Obtén tus datos de alguna manera

        return Inertia::render('Facturas/Index', [
            'facturas' => $facturas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function buscarFactura($numeroFactura)
    {

        $client = new Client();
        Log::info('Número de factura recibido: ' . gettype($numeroFactura));
        $numeroEntero = intval($numeroFactura);

        Log::info('Número de factura recibido: ' . gettype($numeroEntero));

        if (is_int($numeroEntero) && $numeroEntero != 0) {
            // El número de factura es un entero
            // Tu lógica para buscar la factura aquí
            Log::info('Número de factura recibido: ' . $numeroEntero);
            try {
                $response = $client->request('POST', 'https://developers.gosocket.net/api/v1/Document/GetDocument', [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                        'Authorization' => 'Basic ZDcyN2UwOWItYmQyNS00MzA2LTkzNzUtODg3YTI0MzBlMWY3OjU1ZjA3YjU5YjI0YTRlYw==',
                        // Agrega cualquier otro encabezado necesario aquí
                    ],
                    'form_params' => [
                        'SenderCode' => '76245828-4',
                        'DateFrom' => '2024-01-01',
                        'DateTo' => '2024-12-31',
                        'DocumentTypeID' => '33',
                        'Number' => $numeroEntero,
                        'ResultMaxItemCount' => '10000',
                    ]
                ]);

                $body = $response->getBody();
                $data = json_decode($body, true);


                Log::info('UrlPdf ' . $data['Documents'][0]['UrlPdf']);
                Log::info('UrlXml ' . $data['Documents'][0]['UrlXml']);
                Log::info('UrlJson ' . $data['Documents'][0]['UrlJson']);
                Log::info('BarCodeText ' . $data['Documents'][0]['BarCodeText']);
                Log::info('GlobalDocumentId ' . $data['Documents'][0]['GlobalDocumentId']);
                Log::info('CountryDocumentId ' . $data['Documents'][0]['CountryDocumentId']);
                Log::info('ExternalId ' . $data['Documents'][0]['ExternalId']);
                Log::info('CountryId ' . $data['Documents'][0]['CountryId']);
                Log::info('Date ' . $data['Documents'][0]['Date']);
                Log::info('DocumentTypeId ' . $data['Documents'][0]['DocumentTypeId']);
                Log::info('DocumentTypeName ' . $data['Documents'][0]['DocumentTypeName']);
                Log::info('NetAmount ' . $data['Documents'][0]['NetAmount']);
                Log::info('FreeAmount ' . $data['Documents'][0]['FreeAmount']);
                Log::info('TaxAmount ' . $data['Documents'][0]['TaxAmount']);
                Log::info('TotalAmount ' . $data['Documents'][0]['TotalAmount']);
                Log::info('CurrencyType ' . $data['Documents'][0]['CurrencyType']);
                Log::info('SeriesNumber ' . $data['Documents'][0]['SeriesNumber']);
                Log::info('Series ' . $data['Documents'][0]['Series']);
                Log::info('Number ' . $data['Documents'][0]['Number']);
                Log::info('NumberStr ' . $data['Documents'][0]['NumberStr']);
                Log::info('DocumentSenderCode ' . $data['Documents'][0]['DocumentSenderCode']);
                Log::info('DocumentSenderName ' . $data['Documents'][0]['DocumentSenderName']);
                Log::info('DocumentReceiverCode ' . $data['Documents'][0]['DocumentReceiverCode']);
                Log::info('DocumentReceiverName ' . $data['Documents'][0]['DocumentReceiverName']);
                Log::info('DocumentFinancialOwnerCode ' . $data['Documents'][0]['DocumentFinancialOwnerCode']);
                Log::info('DocumentFinancialOwnerName ' . $data['Documents'][0]['DocumentFinancialOwnerName']);
                Log::info('FinancialDate ' . $data['Documents'][0]['FinancialDate']);
                Log::info('EstimatedPaymentDate ' . $data['Documents'][0]['EstimatedPaymentDate']);
                Log::info('DocumentTimeStamp ' . $data['Documents'][0]['DocumentTimeStamp']);
                Log::info('AuthorityTimeStamp ' . $data['Documents'][0]['AuthorityTimeStamp']);
                Log::info('DocumentTags ' . json_encode($data['Documents'][0]['DocumentTags']));
                Log::info('TwoCheck ' . json_encode($data['Documents'][0]['TwoCheck']));
                Log::info('Notes ' . json_encode($data['Documents'][0]['Notes']));
                Log::info('Offers ' . $data['Documents'][0]['Offers']);
                Log::info('Fields ' . json_encode($data['Documents'][0]['Fields']));
                Log::info('Author ' . $data['Documents'][0]['Author']);

                Log::info('Total doc Respuesta : ' . count($data['Documents']));

                Log::info('Respuesta de la API: [' . json_encode($data) . ']');


                //a grabar la Factura a la BD
                $factura = new Factura();
                $factura->UrlPdf = $data['Documents'][0]['UrlPdf'];
                $factura->UrlXml = $data['Documents'][0]['UrlXml'];
                $factura->UrlJson = $data['Documents'][0]['UrlJson'];
                $factura->BarCodeText = $data['Documents'][0]['BarCodeText'];
                $factura->GlobalDocumentId = $data['Documents'][0]['GlobalDocumentId'];
                $factura->CountryDocumentId = $data['Documents'][0]['CountryDocumentId'];
                $factura->ExternalId = $data['Documents'][0]['ExternalId'];
                $factura->CountryId = $data['Documents'][0]['CountryId'];
                $factura->Date = $data['Documents'][0]['Date'];
                $factura->DocumentTypeId = $data['Documents'][0]['DocumentTypeId'];
                $factura->DocumentTypeName = $data['Documents'][0]['DocumentTypeName'];
                $factura->NetAmount = $data['Documents'][0]['NetAmount'];
                $factura->FreeAmount = $data['Documents'][0]['FreeAmount'];
                $factura->TaxAmount = $data['Documents'][0]['TaxAmount'];
                $factura->TotalAmount = $data['Documents'][0]['TotalAmount'];
                $factura->CurrencyType = $data['Documents'][0]['CurrencyType'];
                $factura->SeriesNumber = $data['Documents'][0]['SeriesNumber'];
                $factura->Series = $data['Documents'][0]['Series'];
                $factura->Number = $data['Documents'][0]['Number'];
                $factura->NumberStr = $data['Documents'][0]['NumberStr'];
                $factura->DocumentSenderCode = $data['Documents'][0]['DocumentSenderCode'];
                $factura->DocumentSenderName = $data['Documents'][0]['DocumentSenderName'];
                $factura->DocumentReceiverCode = $data['Documents'][0]['DocumentReceiverCode'];
                $factura->DocumentReceiverName = $data['Documents'][0]['DocumentReceiverName'];
                $factura->DocumentFinancialOwnerCode = $data['Documents'][0]['DocumentFinancialOwnerCode'];
                $factura->DocumentFinancialOwnerName = $data['Documents'][0]['DocumentFinancialOwnerName'];
                $factura->FinancialDate = $data['Documents'][0]['FinancialDate'];
                $factura->EstimatedPaymentDate = $data['Documents'][0]['EstimatedPaymentDate'];
                $factura->DocumentTimeStamp = $data['Documents'][0]['DocumentTimeStamp'];
                $factura->AuthorityTimeStamp = $data['Documents'][0]['AuthorityTimeStamp'];
                $factura->DocumentTags = json_encode($data['Documents'][0]['DocumentTags']);
                $factura->TwoCheck = json_encode($data['Documents'][0]['TwoCheck']);
                $factura->Notes = json_encode($data['Documents'][0]['Notes']);
                $factura->Offers = $data['Documents'][0]['Offers'];
                $factura->Fields = json_encode($data['Documents'][0]['Fields']);
                $factura->Author = $data['Documents'][0]['Author'];
                $factura->save();

                $response = Http::get($factura->UrlPdf);

                // Verificar si la solicitud fue exitosa
                if ($response->successful()) {
                    // Obtener el contenido del archivo
                    $contents = $response->body();

                    // Guardar el archivo en el directorio de almacenamiento de Laravel
                    $rutaArchivo = 'archivos/' . basename($factura->Number) . '.pdf'; // Ruta donde se guardará el archivo
                    Storage::put($rutaArchivo, $contents);

                    // El archivo se ha guardado correctamente
                    echo 'El archivo se ha descargado y guardado correctamente en la ruta: ' . $rutaArchivo;
                } else {
                    // La solicitud no fue exitosa
                    echo 'Hubo un error al descargar el archivo desde la URL: ' . $factura->Number;
                }

                // Manejar la respuesta de la API aquí
            } catch (\Exception $e) {
                Log::info('ERROR: ' . $e);
            }
        } else {
            // El número de factura no es un entero
            Log::error('Error: El número de factura no es un entero.');
            // Puedes manejar el error de alguna manera, como retornar una respuesta de error
            return response()->json(['error' => 'El número de factura no es un entero.'], 400);
        }




    }

}
