<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage users',       // Admin
            'manage appointments', // Admin & Doctor
            'view appointments',  // Patient & Doctor
            'create appointments', // Patient
            'edit medical records', // Doctor
            'view medical records' // Patient & Doctor
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

                // Create roles and assign permissions
                $adminRole = Role::firstOrCreate(['name' => 'admin']);
                $doctorRole = Role::firstOrCreate(['name' => 'doctor']);
                $patientRole = Role::firstOrCreate(['name' => 'patient']);
        
                // Assign permissions
                $adminRole->syncPermissions(['manage users', 'manage appointments']);
                $doctorRole->syncPermissions(['manage appointments', 'edit medical records', 'view medical records', 'view appointments']);
                $patientRole->syncPermissions(['view appointments', 'create appointments', 'view medical records']);
    }
}
