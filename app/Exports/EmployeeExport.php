<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'id',
            'Nama',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Kelamin',
            'Alamat',
            'Agama',
            'Status',
            'Pekerjaan',
            'Warga Negara',
            'Masa Berlaku',
            'Foto',
            'Careated By'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Employee::getEmployee());
    }
}
