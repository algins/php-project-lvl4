<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;

class TaskControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get(route('tasks.index'));
        $response->assertOk();
    }

    public function testCreate(): void
    {
        $response = $this->get(route('tasks.create'));
        $response->assertOk();
    }

    public function testEdit(): void
    {
        $task = Task::factory()->create();

        $response = $this->get(route('tasks.edit', [$task]));
        $response->assertOk();
    }

    public function testStore(): void
    {
        $data = Task::factory()->make()->toArray();

        $response = $this->post(route('tasks.store'), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('tasks', $data);
    }

    public function testUpdate(): void
    {
        $task = Task::factory()->create();
        $data = Task::factory()->make()->toArray();

        $response = $this->patch(route('tasks.update', $task), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('tasks', $data);
    }

    public function testDestroy(): void
    {
        /** @var Task $task */
        $task = Task::factory()->create();

        $response = $this->delete(route('tasks.destroy', [$task]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDeleted($task);
    }
}
