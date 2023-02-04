<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Testing\Fluent\Concerns\Interaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia , FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'gender',
        'first_phone',
        'second_phone',
        'address',
        'personal_id',

        //guarantor
        'guarantor_name',
        'guarantor_gender',
        'guarantor_first_phone',
        'guarantor_second_phone',
        'guarantor_personal_id',
        'guarantor_job',
        'guarantor_work_company',
        'guarantor_work_address',

        //housing
        'house_address',
        'house_owner',
        'house_owner_personal_id',
        'house_owner_gender',
        'house_owner_phone',
        'house_number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'type' => 'integer',
    ];

    const TYPE_STUDENT = 1;
    const TYPE_ADMIN = 2;
    const TYPE_BANK_EMPLOYEE = 3;

    const TYPES = [
        self::TYPE_STUDENT => 'طالب',
        self::TYPE_ADMIN => 'مدير',
        self::TYPE_BANK_EMPLOYEE => 'موظف البنك',
    ];

    public function canAccessFilament(): bool
    {
        return true;
        return $this->type === self::TYPE_ADMIN;
    }

    // public function orders() :HasMany {
    //     return $this->hasMany(Order::class);
    // }

    public function products() {
        return $this->belongsToMany(Product::class,'orders')->withPivot('quantity');
    }
}
