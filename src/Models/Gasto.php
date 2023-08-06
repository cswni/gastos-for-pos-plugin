<?php

namespace Cswni\GastosForPosPlugin\Models;

use App\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
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
        'tipo_id',
    ];

    protected $casts = [
        'fecha' => 'datetime',
    ];
}
