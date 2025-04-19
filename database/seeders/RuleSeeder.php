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
        $rsa = Role::firstOrCreate(['name' => 'super_admin']);
        $ra = Role::firstOrCreate(['name' => 'admin']);
        $op = Role::firstOrCreate(['name'=> 'operator']);
        $rpd = Role::firstOrCreate(['name' => 'perangkat_daerah']);
        // $rsa = Permission::create(['name']);
        $mpd = Permission::firstOrCreate(['name' => 'mengelola_perangkat_daerah']);

        $rsa->givePermissionTo($mpd);

        $user = User::factory()->create(['email' => 'super_admin@gmail.com', 'name' => 'Super Admin']);
        $user->assignRole($rsa);

        $user2 = User::factory()->create(['email' => 'admin@gmail.com', 'name' => 'Admin']);
        $user2->assignRole($ra);

        $user3 = User::factory()->create([
            'name' => 'Bappeda',
            'email' => 'Bappeda@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user3->assignRole($op);

        $user4 = User::factory()->create(['email' => 'dinas@gmail.com', 'name' => 'Dinas']);
        $user4->assignRole($rpd);

        
    }
}
