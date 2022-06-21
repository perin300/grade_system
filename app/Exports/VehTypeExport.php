<?php

namespace App\Exports;

use App\VehType;
use Maatwebsite\Excel\Concerns\FromCollection;

class VehTypeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VehType::all();
    }
}
