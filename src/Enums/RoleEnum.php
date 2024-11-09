<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;
use Illuminate\Support\Facades\Auth;
final class RoleEnum extends Enum
{
    // Definisikan role yang ada
    const ADMINISTRATOR = 'Administrator';
    const USER = 'User';

    // Fungsi untuk mendapatkan role saat ini <inisialisasi>
    public static function roles()
    {
        $roles = [
            'Administrator',
            'User',
        ];
        return $roles;
    }
}
