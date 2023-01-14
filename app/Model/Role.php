<?php

declare(strict_types=1);

namespace App\Model;



/**
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'roles';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [
        'id' => 'string',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
