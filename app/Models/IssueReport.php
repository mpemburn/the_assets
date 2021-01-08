<?php

namespace App\Models;

use Illuminate\Support\Collection;

class IssueReport
{
    public Collection $issues;
    public Collection $affectDevices;

    public function __construct()
    {
        $this->affectDevices = collect();
    }

    public function loadIssues(array $issues): void
    {
        $index = 0;
        $this->issues = collect($issues)->map(function ($issue) use (&$index) {
            $this->setAffectedDevices($issue[2], $index);
            $issue[2] = $index;
            $index++;

            return $issue;
        });
    }

    public function getAffectedDevices(int $index): Collection
    {
        return $this->affectDevices->pull($index);
    }

    protected function setAffectedDevices(string $deviceString, int $index): void
    {
        $this->affectDevices->put($index, collect(explode("\n", $deviceString)));
    }
}
