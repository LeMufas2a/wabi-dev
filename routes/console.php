<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('truncate', function () {

    $databaseName = 'db_food_one';
    $this->comment('Truncating all tables'.$databaseName);
     try{
         Schema::disableForeignKeyConstraints();
         $databaseName = DB::getDatabaseName();
         $tables = DB::select("SELECT * FROM information_schema.tables WHERE table_schema = '$databaseName'");
         foreach ($tables as $table) {
             $name = $table->TABLE_NAME;
    
             if ($name == 'booked_services'
                || $name == 'hours_services'
                || $name == 'service_items'
                || $name == 'services_bookings_logs'
                || $name == 'total_bookings_slots'
             ) {
                //  continue;
                 DB::table($name)->truncate();
             }
         }
         Schema::enableForeignKeyConstraints();
         $this->comment('Truncate finished.');
         $this->comment('Don\'t forget to run db:seed');
     }catch(Exception $e){
         $this->comment('Error !');
         $this->comment($e->getMessage());
         Schema::enableForeignKeyConstraints();#dont forget this if it fails
     }
    })->purpose('Truncate all tables in database');

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
