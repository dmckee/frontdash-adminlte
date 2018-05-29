# Install all dependencies

```
composer install
```
or
```
composer update
```


### Generate a migration file

```
php artisan make:migration create_items_table
```

### Add migration fields
```
Schema::create('items', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 150);
    $table->string('item_type')->nullable();
    $table->integer('category_id')->unsigned()->nullable();
    $table->datetime('start_date');
    $table->datetime('end_date');
    $table->tinyInteger('use_pin');
    $table->char('pin', 4);
    $table->string('url', 255);
    $table->timestamps();
});
```

### Perform migration
```
php artisan migrate
```

### Generate CRUD scaffold
```
php artisan infyom:scaffold Item --fromTable --tableName=items
```
