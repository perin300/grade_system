<?php

namespace App\Imports;

use App\VehType;
use Maatwebsite\Excel\Concerns\ToModel;

class VehTypeExport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VehType([
            'vtype_code'     => $row[0],
            'vtype_desc'    => $row[1], 
        ]);
    }
}
