<?php

namespace App\Imports;

use App\Models\DreamJobDepartment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DreamJobDepartmentImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // This will find a department by name or create a new one if it doesn't exist.
        // This helps prevent creating duplicate departments from the Excel file.
        return DreamJobDepartment::firstOrCreate(
            ['name' => $row['name']],
        );
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        // This rule ensures that every row in the 'name' column is filled.
        return [
            'name' => 'required|string|max:255',
        ];
    }
}
