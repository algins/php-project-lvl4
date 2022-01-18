<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Label;

class LabelControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get(route('labels.index'));
        $response->assertOk();
    }

    public function testCreate(): void
    {
        $response = $this->get(route('labels.create'));
        $response->assertOk();
    }

    public function testEdit(): void
    {
        $label = Label::factory()->create();

        $response = $this->get(route('labels.edit', $label));
        $response->assertOk();
    }

    public function testStore(): void
    {
        $labelData = Label::factory()->make()->toArray();

        $response = $this->post(route('labels.store'), $labelData);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('labels', $labelData);
    }

    public function testUpdate(): void
    {
        $label = Label::factory()->create();
        $labelData = Label::factory()->make()->toArray();

        $response = $this->patch(route('labels.update', $label), $labelData);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('labels', $labelData);
    }

    public function testDestroy(): void
    {
        /** @var Label $label */
        $label = Label::factory()->create();

        $response = $this->delete(route('labels.destroy', $label));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDeleted($label);
    }
}
