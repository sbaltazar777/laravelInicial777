<?php

use App\Book;
use App\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**operaciones de relaciones estaticos , llama un metodo de la clase , meotdo de la clase*/ 
        $categories=Category::all();
        
        $books = factory(Book::class,30)->make();

        $books->each(function($book) use ($categories){
        	$category=$categories->random();
        	
        	$book->category_id=$category->id;

        	$book->save();
        	/*es el meotod que creamos solo para relaciones de muchos a muchos*/

        	$book->authors()->attach([1,4,15,20]);
        	/**algunos por 1 y 2 otros por 2*/
        });
    }
}
