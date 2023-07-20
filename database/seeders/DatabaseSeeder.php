<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Func;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $groups=[
            ['name' => 'Naranja'],
            ['name' => 'Rojo'],
            ['name' => 'Verde'],
            ['name' => 'Blanco'],
        ];
        \App\Models\Group::insert($groups);
        // $products=[
        //     ['name' => 'Product 01','code'=>'AB02D', 'image'=>'', 'group_id'=>1],
        //     ['name' => 'Product 02','code'=>'J4K8A', 'image'=>'', 'group_id'=>2],
        //     ['name' => 'Product 03','code'=>'B7TEU', 'image'=>'', 'group_id'=>3],
        //     ['name' => 'Product 04','code'=>'8AIBF', 'image'=>'', 'group_id'=>1],
        //     ['name' => 'Product 05','code'=>'7S5D6', 'image'=>'', 'group_id'=>2],
        // ];
        // \App\Models\Product::insert($products);
        $j=1;$y=1;
        $products=[];
        for ($i=1; $i <=28 ; $i++) {
            if($j>7){
                $j=1;
                $y+=1;
            }
            $a=['name' => 'Product '.$i,'code'=>Func::generateCode(6), 'image'=>'', 'group_id'=>$y];
            $j++;
            $products[]=$a;
        }
        \Log::info($products);
        \App\Models\Product::insert($products);
        $coins=[
            ['name'=>'bronce','pts'=>10],
            ['name'=>'plata','pts'=>20],
            ['name'=>'oro','pts'=>30],
            ['name'=>'diamante','pts'=>50],
        ];
        \App\Models\Coin::insert($coins);
        $users=[
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make(12345678),'group_id'=>null],
            ['name'=>'user 01','email'=>'user01@gmail.com','password'=>Hash::make(12345678),'group_id'=>1],
            ['name'=>'user 02','email'=>'user02@gmail.com','password'=>Hash::make(12345678),'group_id'=>2],
            ['name'=>'user 03','email'=>'user03@gmail.com','password'=>Hash::make(12345678),'group_id'=>3],
            ['name'=>'user 03','email'=>'user04@gmail.com','password'=>Hash::make(12345678),'group_id'=>4],
        ];
        \App\Models\User::insert($users);
    }
}
