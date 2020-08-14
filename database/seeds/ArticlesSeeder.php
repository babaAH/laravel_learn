<?php

use Illuminate\Database\Seeder;

use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES(?,?,?)',[
            'Blog post',
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate nam hic asperiores officia ratione maxime nemo iusto ad architecto atque corrupti alias commodi distinctio eos, modi labore pariatur quos dolores.',
            'pic1.jpg',
        ]);

        //2
        DB::table('articles')->insert(
            [
                [
                    'name' => 'Sample blog post',
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur a in odio ex quidem, ratione dicta et ducimus provident molestiae laborum eveniet omnis, architecto sapiente velit, vel at nemo magnam.',
                    'img' => 'pic2.jpg'
                ],
                [
                    'name' => '22Sample blog post',
                    'text' => '222Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur a in odio ex quidem, ratione dicta et ducimus provident molestiae laborum eveniet omnis, architecto sapiente velit, vel at nemo magnam.',
                    'img' => '222pic2.jpg'
                ],

            ]
        );

        //3

        Article::create([
            'name' => "333 post blog",
            'text' => '333Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur a in odio ex quidem, ratione dicta et ducimus provident molestiae laborum eveniet omnis, architecto sapiente velit, vel at nemo magnam.',
            'img'  => '333pic2.jpg'        
        ]);

    }
}
