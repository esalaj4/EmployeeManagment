<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class AddRolesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:roles';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $roles = [    ['name' => 'Admin'],
            ['name' => 'Employee'],
            ['name' => 'TeamLeader'],
            ['name' => 'ProjectManager'],
        ];
        
        DB::table('roles')->insert($roles);
        
        return Command::SUCCESS;
    }
}
