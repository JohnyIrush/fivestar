<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merits', function (Blueprint $table) {
            $table->id();
            $table->integer("exam_id");
            $table->integer("student_id");
            $table->integer("subject_id");
            $table->integer("marks");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merits');
    }
}

/*

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Softwarescares\Inteliexam\app\plugins\Model\ExamMerit;

use Softwarescares\Inteliacademic\app\Models\Subject;

class CreateMeritsTable extends Migration
{

    public function up()
    {
        $exammerit = new ExamMerit();

        $fields = [
            [
            "name" => "student_id",
            "type" => "integer"
            ],
            [
            "name" => "level_id",
            "type" => "integer"
            ],
        ];

        foreach (Subject::all() as $subject)
        {
            array_push($fields, [
              "name" => $subject->subject,
              "type" => "string"
            ]);
        }

        $exammerit->create($fields);
    }

    public function down()
    {
        Schema::dropIfExists('merits');
    }
}

*/