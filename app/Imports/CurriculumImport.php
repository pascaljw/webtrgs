<?php

namespace App\Imports;

use App\Models\Curriculum;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CurriculumImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Curriculum([
            'code'     => $row['code'],
            'name'    => $row['name'],
            'credit'     => $row['credit'],
            'practice'    => $row['practice'],
            'semester'    => $row['semester'],
        ]);
    }
}
