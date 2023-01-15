<?php

declare(strict_types=1);

namespace App\Model;
use Hyperf\Snowflake\Concern\Snowflake;
use Qbhy\HyperfAuth\AuthAbility;

/**
 */
class User extends Model
{
    use Snowflake, AuthAbility;
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'users';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
