<?php

namespace Cswni\GastosForPosPlugin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Traits\BelongsToCompany;
use Spatie\DeletedModels\Models\Concerns\KeepsDeletedModels;

class Gasto extends Model
{
    use BelongsToCompany;
    use HasUuids;
    use KeepsDeletedModels;

    protected $fillable = [
        'company_id',
        'fecha',
        'monto',
        'descripcion',
        'tipo_id'
    ];
    protected $casts = [
        'fecha' => 'datetime',
    ];
}
