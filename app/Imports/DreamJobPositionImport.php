<?php

namespace App\Imports;

use App\Models\DreamJobPosition;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DreamJobPositionImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Creates a new DreamJobPosition for each row in the Excel file.
        return new DreamJobPosition([
            'name'                      => $row['name'],
            'dream_job_department_id'   => $row['dream_job_department_id'],
        ]);
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        // Defines validation rules for each row.
        return [
            'name' => 'required|string|max:255',
            // Ensures the department ID exists in the dream_job_departments table.
            'dream_job_department_id' => 'required|integer|exists:dream_job_departments,id',
        ];
    }
}
