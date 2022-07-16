<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::create([
            'form_id' => '1',
            'field_name' => 'Enter your name',
            'field_type' => 'input'
        ]);

        Field::create([
            'form_id' => '1',
            'field_name' => 'Choose account type',
            'field_value' => json_encode(['Publisher','Advertiser']),
            'field_type' => 'select'
        ]);

        Field::create([
            'form_id' => '1',
            'field_name' => 'Choose your gender',
            'field_value' => json_encode(['Male','Female']),
            'field_type' => 'radio'
        ]);

        Field::create([
            'form_id' => '1',
            'field_name' => 'Enter your Address',
            'field_type' => 'textarea'
        ]);
        
        Field::create([
            'form_id' => '1',
            'field_name' => 'Get updated email for us?',
            'field_type' => 'checkbox'
        ]);

        
    }
}
