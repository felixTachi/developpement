<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'felix',
            'email' => 'f.tachi@afrikpay.com',
            'role' => 'admin',
            'password' => bcrypt('admin'),
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'marie',
            'email' => 'm.njomo@afrikpay.com',
            'password' => bcrypt('user'),
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'rostand',
            'email' => 'r.ngandjeu@afrikpay.com',
            'password' => bcrypt('user'),
            'email_verified_at' => Carbon::now(),
        ]);

    }
}
