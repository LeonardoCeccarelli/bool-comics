<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config("comics");

        foreach ($data as $value) {

            $newValue = new Comic();
            $newValue->fill($value);

            $newValue->price = (float)$value["price"];

            $time = strtotime($value["sale_date"]);
            $newValue->sale_date = date("Y-m-d", $time);

            $newValue->save();
        }
    }
}
