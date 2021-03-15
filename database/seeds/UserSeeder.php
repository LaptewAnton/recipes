<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'a@a',
            'status_id' => 1,
            'admin' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis hendrerit lacus. Fusce ut mollis elit. Suspendisse ultrices ipsum sed aliquet elementum. Maecenas eleifend feugiat orci dapibus cursus. Fusce convallis dui nec nisl dignissim vulputate ultricies a nibh. Quisque bibendum ante quis diam condimentum semper. Sed eu placerat urna. Vivamus eros urna, congue nec justo in, efficitur iaculis sapien. Quisque vel diam suscipit erat consequat pulvinar vitae quis mi. Nulla ac orci nunc.Sed bibendum mattis lacus non consectetur. Nulla sollicitudin nisl in tortor rutrum eleifend. Mauris et hendrerit dui. Integer mauris urna, imperdiet quis orci eu, volutpat egestas nulla. Morbi et eros vulputate, accumsan quam nec, vulputate magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec purus magna, mollis quis bibendum id, porttitor ut risus. Quisque faucibus sapien volutpat ipsum elementum commodo. Donec dapibus venenatis odio, at accumsan magna. Etiam dignissim nunc vel nibh elementum bibendum et nec mi. Pellentesque elit sem, semper nec porta ultricies, tempus vitae eros. Aliquam non mi nulla. Morbi in egestas turpis. Phasellus facilisis, mi et vestibulum malesuada, metus massa ultrices orci, laoreet egestas turpis neque et enim. Quisque nibh nisl, cursus quis euismod eget, maximus id ex. Praesent aliquet porttitor malesuada.',
            'password' => Hash::make('a'),
            'remember_token' => Str::random(10),
        ]);
        factory(\App\User::class, 10)->create();
    }
}
