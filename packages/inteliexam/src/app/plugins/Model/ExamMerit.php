<?php

namespace Softwarescares\Inteliexam\app\plugins\Model;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Class ExamMerit extends Migration
{
   public function create(array $fields)
   	{
         Schema::table('merits', function (Blueprint $table) use ($fields) {
            foreach ($fields as $field)
            {
              $type = $field["type"]; $name = $field["name"];
              $table->$type($name);
             }
         });

   	}	
}