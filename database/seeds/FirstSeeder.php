<?php

use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name' => 'home',
                'alias' => 'home',
                'images' => 'home.jpg',
                'text' => "<h2>we create<strong>awesome</strong>sum text has bin detected whan we work</h2>"
            ],
            [
                'name' => 'about us',
                'alias' => 'aboutUs',
                'images' => 'about.jpg',
                'text' => "<h3>Это самая простая страница о нас в которой леждит просто какой то текст</h3>"
            ]
        ]);

        DB::table('peoples')->insert([
            [
                'name' => 'Bob',
                'position' => 'Big boss',
                'images' => "boss.jpg",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ],
            [
                'name' => 'Denial',
                'position' => 'Admin',
                'images' => "admin.jpg",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ],
            [
                'name' => 'Migel',
                'position' => 'litle boss',
                'images' => "litle_bos.jpg",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ]

        ]);

        DB::table('partfolios')->insert([
            [
                'name' => 'SMS Mobole APP',
                'filter' => 'portfolio_1.jpg',
                'images' => "AppleOS",
            ],
            [
                'name' => 'finance APP',
                'filter' => 'portfolio_2.jpg',
                'images' => "design",
            ],
            [
                'name' => 'GPS Concept',
                'filter' => 'portfolio_3.jpg',
                'images' => "design",
            ],
            [
                'name' => 'Shopping',
                'filter' => 'portfolio_4.jpg',
                'images' => "android",
            ],
            [
                'name' => 'Menegment',
                'filter' => 'portfolio_5.jpg',
                'images' => "design",
            ],
            [
                'name' => 'iPhone',
                'filter' => 'portfolio_6.jpg',
                'images' => "web",
            ],
            [
                'name' => 'SNexus Phone',
                'filter' => 'portfolio_1.jpg',
                'images' => "web",
            ],
            [
                'name' => 'Android',
                'filter' => 'portfolio_8.jpg',
                'images' => "android",
            ]


        ]);

        DB::table('services')->insert([
            [
                'name' => 'Android',
                'icon' => "icon_1",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ],
            [
                'name' => 'Apple',
                'icon' => "icon_2",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ],
            [
                'name' => 'Design',
                'icon' => "icon_3",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ]
            ,
            [
                'name' => 'Concept',
                'icon' => "icon_4",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ]
            ,
            [
                'name' => 'User Research',
                'icon' => "icon_5",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ],
            [
                'name' => 'Expaence',
                'icon' => "icon_6",
                'text' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Praesentium modi commodi nostrum odit, exercitationem aut saepe assumenda. Doloribus, pariatur eveniet dolores at voluptate delectus vel possimus sit! Dignissimos, voluptates, id.'
            ]


        ]);

    }
}
