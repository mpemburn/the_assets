<?php

namespace App\Http\Controllers;

use App\Services\GoogleApiService;
use Google_Service_Sheets;

class GoogleApiController extends Controller
{
    public function show()
    {
        $googleService = new GoogleApiService();

        $client = $googleService->getClient();
        $service = new Google_Service_Sheets($client);
        $spreadsheetId ='1VPxkL4RxrF6i1j19TOHrLJEHNuUNeR3OpzfnjWE_E-4'; //It is present in your URL

        $sheetRange = 'Sheet1!A1:W';

        $response = $service->spreadsheets_values->get($spreadsheetId, $sheetRange);
        !d($response->getValues());
    }
}
