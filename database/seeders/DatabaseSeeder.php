<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'username1',
            'email' => 'username1@mail.com',
            'password' => Hash::make('username1'),
        ]);
        User::create([
            'name' => 'username2',
            'email' => 'username2@mail.com',
            'password' => Hash::make('username2'),
        ]);
        User::create([
            'name' => 'username3',
            'email' => 'username3@mail.com',
            'password' => Hash::make('username3'),
        ]);

        Recipe::create([
            'title' => 'Nasi Goreng',
            'desc' => 'Makanan teradisional indonesia yang terbuat dari nasi dan ditambah dengan bumbu-bumbu yang dibuat sendiri',
            'user_id' => 1,
            'img' => 'nasi goreng.jpg',
        ]);
        Ingredient::create(['name' => 'Nasi','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Saus Tomat','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Telur','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Sayur','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Bawang putih','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Garam','recipe_id' => 1,]);
        Ingredient::create(['name' => 'Sosis','recipe_id' => 1,]);
        Step::create(['name' => 'Siapkan bahan', 'recipe_id' => 1,]);
        Step::create(['name' => 'Panaskan minyak', 'recipe_id' => 1,]);
        Step::create(['name' => 'Tumis baeang putih, sosis, garam, dan telur hingga panas', 'recipe_id' => 1,]);
        Step::create(['name' => 'Masukan nasi dan panaskan', 'recipe_id' => 1,]);
        Step::create(['name' => 'Masukan saus tomat', 'recipe_id' => 1,]);
        Step::create(['name' => 'Masak hingga matang', 'recipe_id' => 1,]);
        Step::create(['name' => 'Makanan siap dihidangkan', 'recipe_id' => 1,]);

        Recipe::create([
            'title' => 'Soto',
            'desc' => 'Soto adalah makanan khas Indonesia yang terbuat dari daging sapi yang dipotong-potong, dibumbui, dan dicampur dengan bumbu-bumbu yang dibuat sendiri',
            'user_id' => 1,
            'img' => 'soto.jpg',
        ]);
        Ingredient::create(['name' => 'Bumbu Soto','recipe_id' => 2,]);
        Ingredient::create(['name' => 'Daging Sapi atau ayam','recipe_id' => 2,]);
        Ingredient::create(['name' => 'Daun bawang','recipe_id' => 2,]);
        Ingredient::create(['name' => 'Tomat','recipe_id' => 2,]);
        Step::create(['name' => 'Siapkan bahan', 'recipe_id' => 2,]);
        Step::create(['name' => 'Panaskan air', 'recipe_id' => 2,]);
        Step::create(['name' => 'Masukkan bumbu, tomat, dan tomat', 'recipe_id' => 2,]);
        Step::create(['name' => 'Masukkan masukkan dading sapi', 'recipe_id' => 2,]);
        Step::create(['name' => 'Aduk hingga matang', 'recipe_id' => 2,]);
        Step::create(['name' => 'Makanan siap dihidangkan', 'recipe_id' => 2,]);

        Recipe::create([
            'title' => 'Rawon',
            'desc' => 'Rawon adalah makanan khas Indonesia yang terbuat dari daging sapi yang dipotong-potong, dibumbui, dan dicampur dengan bumbu-bumbu yang dibuat sendiri',
            'user_id' => 1,
            'img' => 'rawon.jpg',
        ]);
        Ingredient::create(['name' => 'Bumbu Rawon','recipe_id' => 3,]);
        Ingredient::create(['name' => 'Daging Sapi atau Kambing','recipe_id' => 3,]);
        Ingredient::create(['name' => 'air secukupnya','recipe_id' => 3,]);
        Step::create(['name' => 'Siapkan bahan', 'recipe_id' => 3,]);
        Step::create(['name' => 'Panaskan air', 'recipe_id' => 3,]);
        Step::create(['name' => 'Masukkan bumbu', 'recipe_id' => 3,]);
        Step::create(['name' => 'Masukan daging', 'recipe_id' => 3,]);
        Step::create(['name' => 'Aduk hingga matang', 'recipe_id' => 3,]);
        Step::create(['name' => 'Makan siap hidangkan ', 'recipe_id' => 3,]);
        
        Recipe::create([
            'title' => 'Bakso',
            'desc' => 'Bakso adalah makanan khas Indonesia yang terbuat dari daging sapi yang dipotong-potong, dibumbui, dan dicampur dengan bumbu-bumbu yang dibuat sendiri',
            'user_id' => 2,
            'img' => 'bakso.jpg',
        ]);
        Ingredient::create(['name' => '1kg Tepung terigu','recipe_id' => 4,]);
        Ingredient::create(['name' => '1kg Daging sapi','recipe_id' => 4,]);
        Ingredient::create(['name' => 'Bawang Putih','recipe_id' => 4,]);
        Step::create(['name' => 'Siapkan bahan', 'recipe_id' => 4,]);
        Step::create(['name' => 'Campurkan tepung terigu dan daging dengan ari', 'recipe_id' => 4,]);
        Step::create(['name' => 'Aduk hingga merata', 'recipe_id' => 4,]);
        Step::create(['name' => 'Betuk adonan menjadi bulat dan masukan kealam air mendidih', 'recipe_id' => 4,]);
        Step::create(['name' => 'Buat kuah bakso dengan panaskan bawang putih', 'recipe_id' => 4,]);
        Step::create(['name' => 'Hidangkan bakso dengan kuanya', 'recipe_id' => 4,]);

        Recipe::create([
            'title' => 'Pecel',
            'desc' => 'Pecel adalah makanan khas Indonesia yang terbuat dari sayuran dengan dibumbui saus kacang, dan dicampur dengan bumbu-bumbu yang dibuat sendiri',
            'user_id' => 2,
            'img' => 'pecel.jpg',
        ]);
        Ingredient::create(['name' => 'Bumbu kacang pecel','recipe_id' => 5,]);
        Ingredient::create(['name' => '1 Sayur','recipe_id' => 5,]);
        Ingredient::create(['name' => '1 Tempe','recipe_id' => 5,]);
        Ingredient::create(['name' => 'Rempeye','recipe_id' => 5,]);
        Step::create(['name' => 'Buat saus kecang dengan bumbu kacakn pecel idaduk dengan air panas ', 'recipe_id' => 5,]);
        Step::create(['name' => 'potong sayur dan rebus', 'recipe_id' => 5,]);
        Step::create(['name' => 'Hidangkan dengan tempe dan rempeye', 'recipe_id' => 5,]);

        Recipe::create([
            'title' => 'Mie Ayam',
            'desc' => 'Mie ayam adalah makan yang terbuat dari mie basah dengan kuah yang dibut sendiri',
            'user_id' => 2,
            'img' => 'mie ayam.jpg',
        ]);
        Ingredient::create(['name' => 'Mie basah','recipe_id' => 6,]);
        Ingredient::create(['name' => 'Bumbu Mie basah','recipe_id' => 6,]);
        Ingredient::create(['name' => 'sayur','recipe_id' => 6,]);
        Ingredient::create(['name' => 'Daging ayam','recipe_id' => 6,]);
        Ingredient::create(['name' => 'Pangsit','recipe_id' => 6,]);
        Step::create(['name' => 'Rebus mie basah dengan potongan sayur', 'recipe_id' => 6,]);
        Step::create(['name' => 'Masukan Bumbu mie ke dalam mangkuk', 'recipe_id' => 6,]);
        Step::create(['name' => 'Aduk hingga mereata', 'recipe_id' => 6,]);
        Step::create(['name' => 'Hidangkan dengan daging ayam', 'recipe_id' => 6,]);

        Like::create(['user_id' => 1, 'recipe_id' => 1,]);
        Like::create(['user_id' => 1, 'recipe_id' => 3,]);
        Like::create(['user_id' => 1, 'recipe_id' => 4,]);
        Like::create(['user_id' => 2, 'recipe_id' => 1,]);
        Like::create(['user_id' => 2, 'recipe_id' => 2,]);
        Like::create(['user_id' => 3, 'recipe_id' => 1,]);
        Like::create(['user_id' => 3, 'recipe_id' => 5,]);
        Like::create(['user_id' => 3, 'recipe_id' => 6,]);


    }
}
