<?php

namespace App\Exports;
use App\Cod;
use Maatwebsite\Excel\Concerns\FromCollection;

class CodExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cod::all();
    }
}
