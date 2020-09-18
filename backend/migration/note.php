<?php
use Illuminate\Database\Capsule\Manager as Capsule;
Capsule::schema()->create('notes', function ($table)
{
    $table->string('title')->unique();
    $table->string('body');
});
