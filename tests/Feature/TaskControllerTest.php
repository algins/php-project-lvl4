<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Label;
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

    public function testShow(): void
    {
        $task = Task::factory()->create();

        $response = $this->get(route('tasks.show', $task));
        $response->assertOk();
    }

    public function testEdit(): void
    {
        $task = Task::factory()->create();

        $response = $this->get(route('tasks.edit', $task));
        $response->assertOk();
    }

    public function testStore(): void
    {
        /** @var Label $label */
        $label = Label::factory()->create();

        $taskData = Task::factory()->make()->toArray();

        $response = $this->post(route('tasks.store'), array_merge($taskData, ['labels' => [$label->id]]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('tasks', $taskData);

        /** @var Task $task */
        $task = Task::first();

        $this->assertDatabaseHas('label_task', [
            'task_id' => $task->id,
            'label_id' => $label->id,
        ]);
    }

    public function testUpdate(): void
    {
        /** @var Label $label */
        $label = Label::factory()->create();

        /** @var Task $task */
        $task = Task::factory()->create();
        $taskData = Task::factory()->make()->toArray();

        $response = $this->patch(route('tasks.update', $task), array_merge($taskData, ['labels' => [$label->id]]));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('tasks', $taskData);

        $this->assertDatabaseHas('label_task', [
            'task_id' => $task->id,
            'label_id' => $label->id,
        ]);
    }

    public function testDestroy(): void
    {
        /** @var Task $task */
        $task = Task::factory()->create();

        $response = $this->delete(route('tasks.destroy', $task));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseMissing('tasks', $task->only('id'));
    }
}
