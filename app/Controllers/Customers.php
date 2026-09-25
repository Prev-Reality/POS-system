<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        // This array is temporary data. A database can replace it later.
        $customers = [
            ['name' => 'Maria Santos', 'email' => 'maria.santos@email.com', 'phone' => '0917-555-0101'],
            ['name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@email.com', 'phone' => '0917-555-0102'],
            ['name' => 'Ana Reyes', 'email' => 'ana.reyes@email.com', 'phone' => '0917-555-0103'],
            ['name' => 'Carlo Garcia', 'email' => 'carlo.garcia@email.com', 'phone' => '0917-555-0104'],
            ['name' => 'Liza Cruz', 'email' => 'liza.cruz@email.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
