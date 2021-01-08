<?php

namespace App\Http\Controllers;

use App\Services\ReportService;

class ReportController extends Controller
{
    public function show()
    {
        $report = new ReportService();

        $issues = $report->getWyebotIssues();
        !d($issues->getAffectedDevices(2));

    }

}
