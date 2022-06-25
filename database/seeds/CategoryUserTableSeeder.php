<?php

use Illuminate\Database\Seeder;
use App\User;

class CategoryUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            [null],
            [2,1,6],
            [4,5,3],
            [1,2],
            [2,6],
            [6]
        ];

        for($i = 1; $i < 6; $i++){
            $user = User::find($i);
            $user->categories()->sync($category[$i]);
            $user->save();
        }

    }
}
