<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->mediumText('content');
            $table->timestamps();


            //Permet d'ajouter une clé étrangère de la table post avec colonne id donc post_id source: https://laravel.com/docs/9.x/migrations#foreign-key-constraints
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            //Depuis laravel 7 on peut faire plus rapide UNIQUEMENT SI BONNES CONVENTIONS DE NOMS https://youtu.be/RoGjgghMHjU?t=667
            //$table->foreignId('post_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
