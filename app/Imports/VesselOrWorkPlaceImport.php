<?php

namespace App\Imports;

use App\Models\VesselOrWorkPlace;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class VesselOrWorkPlaceImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // This will create a new Vessel/Work Place for each row in the Excel file.
        return new VesselOrWorkPlace([
            'name'                  => $row['name'],
            'dream_job_sector_id'   => $row['dream_job_sector_id'],
        ]);
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        // Validation rules for each row.
        return [
            'name' => 'required|string|max:255',
            'dream_job_sector_id' => 'required|integer|exists:dream_job_sectors,id',
        ];
    }
}
