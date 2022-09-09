<?php

namespace Softwarescares\Intelitimetable\app\Extensions;

use Softwarescares\Intelitimetable\app\Models\Venue;

use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Intelistaff\app\Models\Teacher;
use Softwarescares\Inteliacademic\app\Models\Section;

class Lesson
{
    public $teacher;
    public $subject;
    public $venue;
    public $level;
    public $stream;

    public function __construct(Teacher $teacher = null, Subject $subject = null, Venue $venue = null,Level $level = null, Stream $stream = null)
    {
        $this->teacher = $teacher;
        $this->subject = $subject;
        $this->venue = $venue;
        $this->level = $level;
        $this->stream = $stream;
    }
}