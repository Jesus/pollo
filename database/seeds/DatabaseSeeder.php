<?php

use pollo\User;
use pollo\Pedido;
use pollo\Comment;
use pollo\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Comment::truncate();
        User::truncate();
        Product::truncate();
        Pedido::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PedidoTableSeeder::class);

    }
}
