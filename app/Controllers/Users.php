<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // This array is temporary data. A database can replace it later.
        $users = [
            ['username' => 'admin', 'name' => 'Alex Ramos', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'name' => 'Bea Cruz', 'role' => 'Cashier'],
            ['username' => 'cashier2', 'name' => 'Chris Lim', 'role' => 'Cashier'],
            ['username' => 'stock1', 'name' => 'Dana Flores', 'role' => 'Inventory Staff'],
            ['username' => 'manager', 'name' => 'Eli Tan', 'role' => 'Manager'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
