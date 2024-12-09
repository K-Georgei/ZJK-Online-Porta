<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class FilamentAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'filament-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::create([
            "first_name" => "Porta",
            "last_name" => "Admin",
            "email" => "admin@porta.hu",
            "password" => "Admin123"
        ]);

        $user->assignRole("admin");



        $this->info("Felhasználó létrehozva");

    }
}
