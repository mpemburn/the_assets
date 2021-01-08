<?php

namespace App\Http\Controllers;

use App\Services\ReportService;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ReportController extends Controller
{
    public function show()
    {
        $report = new ReportService();
        $inventory = $report->getInventory();


        $mac = '90:a7:c1:07:80:18';
        $found = $inventory->findDevice($mac);

        !d($found);
    }

}
