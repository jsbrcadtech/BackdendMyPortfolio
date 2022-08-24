<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Background;
use App\Models\Picture;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Education::truncate();
        Skill::truncate();
        Contact::truncate();
        Description::truncate();
        Background::truncate();
        Picture::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Education::factory()->count(4)->create();
        Skill::factory()->count(4)->create();
        Contact::factory()->count(4)->create();
        Description::factory()->count(4)->create();
        Background::factory()->count(4)->create();
        Picture::factory()->count(4)->create();
            
    }
}
