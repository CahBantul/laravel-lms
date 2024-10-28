<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class ShowCourse extends Component
{
    public $title;

    public function mount(Course $course) : void {
        $this->title = $course->title;
    }

    public function render()
    {
        return view('livewire.show-course');
    }
}

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFactoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_factory_with_avatar()
    {
        // Buat user menggunakan metode withAvatar
        $user = User::factory()->withAvatar()->create();

        // Assert bahwa avatar tidak null dan memiliki URL yang benar
        $this->assertNotNull($user->avatar);
        $this->assertStringStartsWith('https://i.pravatar.cc/150?img=', $user->avatar);
    }
}
