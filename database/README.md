### Database Management with Artisan

This section provides a comprehensive guide on using Laravel Artisan commands for effective database management. From creating tables and modifying columns to setting default values, rolling back changes, and eventually dropping the database, here’s how you can manage each process.

#### Creating Database Tables

To begin working with databases, you first need to create tables:

1.  **Create a Migration File**: Generate a migration file where you will define your table structure.


    `php artisan make:migration create_your_table_name_table --create=your_table_name` 


2.  **Define the Table Structure**: Open the generated migration file in the `database/migrations` directory and define your columns and data types inside the `up` method.


    Schema::create('your_table_name', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->timestamps();
    });

3.  **Run the Migration**: Apply the migration to create the table in the database.


    `php artisan migrate` 

#### Modifying Table Columns

If you need to change the structure of an existing table, such as adding or modifying columns:

1.  **Create a New Migration**: Generate a migration specifically for modifying the table.


    `php artisan make:migration modify_your_table_name_table --table=your_table_name` 

2.  **Modify Columns in the Migration File**: Use the Schema builder to add or change columns.


    `Schema::table('your_table_name', function (Blueprint $table) {
        $table->string('new_column')->nullable();
        $table->integer('existing_column')->default(0)->change();
    });` 

3.  **Run the Migration**: Apply the changes to update the table.


    `php artisan migrate` 


#### Setting Default Values

To set or change default values:

1.  **Create/Modify a Migration**: If not already in progress, create a new migration as shown above.

2.  **Set Default Values**: In the migration file, specify default values for new or existing columns.


    `$table->string('status')->default('active');` 

3.  **Execute the Migration**:


    `php artisan migrate` 


#### Rolling Back Changes

If you need to undo the last batch of migrations:


`php artisan migrate:rollback`

To roll back a specific number of migrations, use the `--step` option:


`php artisan migrate:rollback --step=1`

#### Removing Database Tables

To drop an entire table:

1.  **Create a Migration for Dropping the Table**:


    `php artisan make:migration drop_your_table_name_table --table=your_table_name` 

2.  **Drop the Table in the Migration File**:


    `Schema::dropIfExists('your_table_name');` 

3.  **Run the Migration**:


    `php artisan migrate` 


### Conclusion

If possible, think before create, after created, don't simply change your dataase schema.
Alright, I know this is possible, we need append a lot of things. I would suggest append then remove instead of just 
simply modify it.
