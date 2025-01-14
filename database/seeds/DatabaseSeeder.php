<?php

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'name' => 'Learn Laravel Migrations',
                'description' => 'This task involves understanding how to create migration files to define the structure of database tables in a Laravel application.',
                'done' => true,
            ],
            [
                'name' => 'Write Seeders for Tasks',
                'description' => 'This task involves creating seed files to populate the tasks table with some sample data.',
                'done' => true,
            ],
            [
                'name' => 'Implement Task CRUD Operations',
                'description' => 'This task involves creating, reading, updating, and deleting tasks within the application.',
                'done' => false,
            ],
            [
                'name' => 'Create User Authentication',
                'description' => 'This task involves implementing user registration, login, and logout functionalities.',
                'done' => false,
            ],
            [
                'name' => 'Design User Interface for Tasks',
                'description' => 'This task involves creating a user-friendly interface to view, add, edit, and mark tasks as done.',
            ],
            [
                'name' => 'Deploy Application to Server',
                'description' => 'This task involves deploying the application to a web server to make it accessible online.',
                'done' => false,
            ],
            [
                'name' => 'Write Unit Tests for Tasks',
                'description' => 'This task involves writing unit tests to ensure the functionality of the task management features.',
                'done' => false,
            ],
        ];
        foreach ($tasks as $task) {
            Task::create($task);
        }
        
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('secret'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('secret123'),
            ],
            // Add more users as needed
        ];

        foreach ($users as $user) {
            User::create($user);
        }

    }
}
