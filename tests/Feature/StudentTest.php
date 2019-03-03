<?php

namespace Tests\Feature;

use App\Student;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_student()
    {
        $this->withExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw();

        $this->post('/students', $student)
            ->assertRedirect('/admin')
            ->assertSessionHas('status', 'Student created successfully!');

        $this->assertDatabaseHas('students', $student);
    }

    /** @test */
    public function guests_cannot_create_students()
    {
        $student = factory(Student::class)->raw();

        $this->post('/students', $student)
            ->assertRedirect('/login');
    }

    /** @test */
    public function can_view_students()
    {
        $this->withExceptionHandling();

        $students = factory(Student::class, 2)->create();

        $this->get('/')
            ->assertSee($students[0]['first_name'])
            ->assertSee($students[1]['first_name']);
    }

    /** @test */
    public function can_view_message_for_empty_students()
    {
        $this->withExceptionHandling();

        $this->get('/')
            ->assertSee('Students are busy leveling up. Come back soon!');
    }

    /** @test */
    public function can_view_a_student()
    {
        $this->withExceptionHandling();

        $student = factory(Student::class)->create();

        $this->get($student->path())
            ->assertSee($student->first_name);
    }
    
    /** @test */
    public function a_student_requires_a_first_name()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['first_name' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('first_name');
    }

    /** @test */
    public function a_student_requires_a_last_name()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['last_name' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('last_name');
    }

    /** @test */
    public function a_student_requires_a_valid_email()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['email' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('email');

        $student = factory(Student::class)->raw(['email' => 'foobar']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_student_requires_a_bio()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['bio' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('bio');
    }

    /** @test */
    public function a_student_requires_a_valid_github_url()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['github_url' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('github_url');

        $student = factory(Student::class)->raw(['github_url' => 'foobar']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('github_url');
    }

    /** @test */
    public function a_student_requires_a_valid_portfolio_url()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['portfolio_url' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('portfolio_url');

        $student = factory(Student::class)->raw(['portfolio_url' => 'foobar']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('portfolio_url');
    }

    /** @test */
    public function a_student_requires_a_valid_profile_photo_url()
    {
        $this->actingAs(factory(User::class)->create());

        $student = factory(Student::class)->raw(['profile_photo_url' => '']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('profile_photo_url');

        $student = factory(Student::class)->raw(['profile_photo_url' => 'foobar']);

        $this->post('/students', $student)
            ->assertSessionHasErrors('profile_photo_url');
    }
}
