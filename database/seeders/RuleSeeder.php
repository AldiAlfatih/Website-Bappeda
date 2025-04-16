<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rsa = Role::create(['name' => 'super_admin']);
        $ra = Role::create(['name' => 'admin']);
        $rpd = Role::create(['name' => 'perangkat_daerah']);
        $mpd = Permission::create(['name' => 'mengelola_perangkat_daerah']);

        $role->givePermissionTo($rsa);

        $user = User::factory()->create(['email' => 'super_admin@gmail.com', 'name' => 'Super Admin']);
        $user->assignRole($rsa);
    }
}
