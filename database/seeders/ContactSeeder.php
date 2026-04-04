<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'address' => 'Address Line 1',
                'phone' => '`13213213',
                'email' => 'email.com',
                'map' => 'fdsfsdsfsdfsd',
            ],
            [
                'address' => 'Address Line 2',
                'phone' => '`13213213',
                'email' => 'email.com',
                'map' => 'fdsfsdsfsdfsd',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
