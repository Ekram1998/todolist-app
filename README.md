# To-Do List Application

## Setup & Install Part
1. First is created a to-do list application with laravel 10 
  ->composer create-project laravel/laravel:^10.0 todolist_app.

  2. Then created connection to mysql database with Laravel 10 through .env file 

  ## Database Design part 
  I used Laravel Migration to create the task table with the following columns in the migration file:

    1. id: primary key

    2. title: string, task title

    3. description: text, description of the task

    4. is_completed: boolean, the status of the task

    5. create_at and update_at: timestamp

## API Endpoints
Model file and controller files are created for the database data insert.A new task is created with a title and description.

    1. read tasks: get /api/tasks

    2. Retrieve a list of all jobs.

    3. Read single task: GET /api/tasks/{id}

    4. Retrieve a specific job by ID.

    5. Update task: PUT /api/tasks/{id}

    6. Update the title, description, or completion status of a task.

    7. Delete task: DELETE /api/tasks/{id}

    8. Delete a task by ID.

## Create Route 
Resource Route is created to check the above tasks
within the api .php file

## Postman 
Checking the data in the database using the API route via the Postman server: 

1. Inter the data in database

2. Show the data
 
3. Update the data in database

4. Delete the data in database
