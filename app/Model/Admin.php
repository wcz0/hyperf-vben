<?php

declare(strict_types=1);

namespace App\Model;
use Hyperf\Snowflake\Concern\Snowflake;
use Qbhy\HyperfAuth\AuthAbility;



/**
 */
class Admin extends Model
{
    use Snowflake, AuthAbility;


    /**
     * The table associated with the model.
     */
    protected ?string $table = 'admins';

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
