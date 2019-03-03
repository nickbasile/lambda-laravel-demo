<?php

namespace Tests\Unit;

use App\Student;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function it_has_a_path()
    {
        $student = factory(Student::class)->create();

        $this->assertEquals('/students/' . $student->id, $student->path());
    }
}
