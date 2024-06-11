<?php

namespace App\Imports;

use App\Models\SoftwareHouse;
use Maatwebsite\Excel\Concerns\ToModel;

class SoftwareHousesImport implements ToModel
{
    public function model(array $row)
    {
        return new SoftwareHouse([
            'name' => $row[0],
            'summary' => $row[1],
            'location' => $row[2],
            'phone' => $row[3],
            'email' => $row[4],
            'website' => $row[5],
            'person' => $row[6],
            'designation' => $row[7],
            'source_link' => $row[8],
        ]);
    }
}
