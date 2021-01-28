<?php

namespace Database\Seeders;

use App\Model\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tableName = User::getTableName();
        DB::table($tableName)->truncate();
        $entities = [];
        for ($i = 0; $i < 105; $i++) {
            $item = [
                'name' => 'Nguyễn Văn User_' . $i,
                'email' => 'nguyenvanuser_' . $i . '@gmail.com',
                'phone_number' => '096404768' . $i,
                'date_of_birth' => '1995-07-29',
                'address' => 'Hà nội xịn _ @' . $i,
            ];

            $item['gender'] = $i%2==0 ? getConfig('gender_column.girl') : getConfig('gender_column.boy');

            array_push($entities, $item);
        }
        DB::table($tableName)->insert($entities);
    }
}
