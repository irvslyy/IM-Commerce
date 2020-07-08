<?php

namespace App\Exports;

use App\Grf;
use Maatwebsite\Excel\Concerns\FromCollection;

class GrfExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Grf::all();
    }
}
