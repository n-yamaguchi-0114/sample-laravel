<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Authenticatable
{
    use HasFactory;

    const ROLE_SYSTEM = 'SYSTEM';
    const ROLE_SYSTEM_NAME = 'システム';
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_ADMIN_NAME = '管理者';
    const ROLE_GENERAL = 'GENERAL';
    const ROLE_GENERAL_NAME = '一般';
    const ROLE_LIST = [
        self::ROLE_SYSTEM => self::ROLE_SYSTEM_NAME,
        self::ROLE_ADMIN => self::ROLE_ADMIN_NAME,
        self::ROLE_GENERAL => self::ROLE_GENERAL_NAME,
    ];

    protected $table = 'operators';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
    ];
}
