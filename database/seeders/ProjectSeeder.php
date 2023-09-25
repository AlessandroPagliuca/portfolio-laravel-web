<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'boolbnb-front-end',
                'slug' => 'boolbnb-front-end',
                'description' => 'prova',
                'url_github' => 'prova',
                'main_img' => 'prova',
                'visible' => true,
                'user_id' => 1,
            ],
            [
                'title' => 'boolbnb-back-end',
                'slug' => 'boolbnb-back-end',
                'description' => 'prova',
                'url_github' => 'prova',
                'main_img' => 'prova',
                'visible' => true,
                'user_id' => 1,
            ],
            [
                'title' => 'portfolio-vue-web',
                'slug' => 'portfolio-vue-web',
                'description' => 'prova',
                'url_github' => 'prova',
                'main_img' => 'prova',
                'visible' => true,
                'user_id' => 1,
            ],
            [
                'title' => 'portfolio-laravel-web',
                'slug' => 'portfolio-laravel-web',
                'description' => 'prova',
                'url_github' => 'prova',
                'main_img' => 'prova',
                'visible' => true,
                'user_id' => 1,
            ],
            [
                'title' => 'php-strong-password-generator',
                'slug' => 'php-strong-password-generator',
                'description' => 'prova',
                'url_github' => 'https://github.com/AlessandroPagliuca/php-strong-password-generator',
                'main_img' => 'prova',
                'visible' => true,
                'user_id' => 1,
            ],
        ];
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->slug = Str::slug($project['title'], '-');
            $newProject->description = $project['description'];
            $newProject->url_github = $project['url_github'];
            $newProject->main_img = $project['main_img'];
            $newProject->visible = $project['visible'];
            $newProject->user_id = $project['user_id'];
            $newProject->save();
        }
    }
}