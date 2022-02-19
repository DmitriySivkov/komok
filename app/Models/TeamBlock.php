<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamBlock extends Model
{
    use HasFactory;

    public function employeesList()
    {
        return Employee::all();
    }
}
