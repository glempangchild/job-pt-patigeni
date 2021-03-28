<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithheadingRow;


class EmployeeImport implements ToModel, WithheadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'nama' => $row['nama'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => $row['tgl_lahir'],
            'kelamin' => $row['kelamin'],
            'alamat' => $row['alamat'],
            'agama' => $row['agama'],
            'status' => $row['status'],
            'pekerjaan' => $row['pekerjaan'],
            'warga_negara' => $row['warga_negara'],
            'masa_berlaku' => $row['masa_berlaku'],
            'foto' => $row['foto'],
            'created_by' => $row['created_by'],
        ]);
    }
}
