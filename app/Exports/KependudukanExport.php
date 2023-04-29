<?php

namespace App\Exports;

use App\Models\Kependudukan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KependudukanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kependudukan::all();
    }
}
