<?php

namespace Tests\Feature;

use App\Mail\StudentContact;
use App\Student;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StudentContactTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_student_can_receive_a_contact_email()
    {
        Mail::fake();

        Mail::assertNothingSent();

        $student = factory(Student::class)->create();

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertRedirect($student->path())
            ->assertSessionHas('status', 'Message sent!');

        Mail::assertSent(StudentContact::class, function ($mail) use ($student) {
            return $mail->hasTo($student->email);
        });
    }

    /** @test */
    public function a_student_contact_requires_a_name()
    {
        $student = factory(Student::class)->create();

        $attributes = [
            'name' => '',
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function a_student_contact_requires_a_company()
    {
        $student = factory(Student::class)->create();

        $attributes = [
            'name' => $this->faker->name,
            'company' => '',
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('company');
    }

    /** @test */
    public function a_student_contact_requires_a_valid_email()
    {
        $student = factory(Student::class)->create();

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => '',
            'message' => $this->faker->paragraph,
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('email');

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => 'foobar',
            'message' => $this->faker->paragraph,
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_student_contact_requires_a_message()
    {
        $student = factory(Student::class)->create();

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'message' => '',
            'student_id' => $student->id,
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('message');
    }

    /** @test */
    public function a_student_contact_requires_a_valid_student_id()
    {
        $student = factory(Student::class)->create();

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
            'student_id' => '',
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('student_id');

        $attributes = [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'message' => $this->faker->paragraph,
            'student_id' => 'foobar',
        ];

        $this->post($student->path() . '/contact', $attributes)
            ->assertSessionHasErrors('student_id');
    }
}
