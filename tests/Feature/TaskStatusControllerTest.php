<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\TaskStatus;

class TaskStatusControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get(route('task_statuses.index'));
        $response->assertOk();
    }

    public function testCreate(): void
    {
        $response = $this->get(route('task_statuses.create'));
        $response->assertOk();
    }

    public function testEdit(): void
    {
        $taskStatus = TaskStatus::factory()->create();

        $response = $this->get(route('task_statuses.edit', $taskStatus));
        $response->assertOk();
    }

    public function testStore(): void
    {
        $taskStatusData = TaskStatus::factory()->make()->toArray();

        $response = $this->post(route('task_statuses.store'), $taskStatusData);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('task_statuses', $taskStatusData);
    }

    public function testUpdate(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $taskStatusData = TaskStatus::factory()->make()->toArray();

        $response = $this->patch(route('task_statuses.update', $taskStatus), $taskStatusData);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('task_statuses', $taskStatusData);
    }

    public function testDestroy(): void
    {
        /** @var TaskStatus $taskStatus */
        $taskStatus = TaskStatus::factory()->create();

        $response = $this->delete(route('task_statuses.destroy', $taskStatus));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseMissing('task_statuses', $taskStatus->only('id'));
    }
}
