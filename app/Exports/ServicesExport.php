<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServicesExport implements FromCollection
{
    public function collection()
    {
        return Service::all(['id', 'name', 'description', 'created_at']);
    }
}
