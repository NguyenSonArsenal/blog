<?php

namespace Database\Seeders;

use App\Model\Entities\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tableName = Admin::getTableName();
        DB::table($tableName)->truncate();
        $entities = [];
        for ($i = 0; $i < 10; $i++) {
            $item = [
                'name' => 'Nguyễn Văn Admin_' . $i,
                'email' => 'nguyenvanadmin_' . $i . '@gmail.com',
            ];
            array_push($entities, $item);
        }
        DB::table($tableName)->insert($entities);
    }
}

