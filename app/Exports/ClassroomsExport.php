<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Excel;

class ClassroomsExport implements FromArray
{

    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     //
    // }

    public function array(): array
    {
        return $this->data;
    }
}
