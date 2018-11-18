<?php
//namespace App;

use Illuminate\Database\Seeder;
use App\Shop;

class ShopTableSeeder extends Seeder
{
//use DB;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('shops')->truncate();
        //
$shops = [
['cat_name'=>'test', 
'children'=>[['cat_name'=>'kid'],['cat_name'=>'kid2']]],
['cat_name'=>'test2']];
        foreach($shops as $shop)
        {
            Shop::create($shop);
        }
    }
}
