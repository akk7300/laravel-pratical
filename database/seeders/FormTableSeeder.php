<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'form_name' => 'Test Form'
        ]);
    }
}
