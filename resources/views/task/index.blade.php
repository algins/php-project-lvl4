@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task.index.tasks') }}</h1>

    @auth
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">{{ __('views.task.index.create_task') }}</a>
    @endauth

    {{ Form::open(['url' => route('tasks.index'), 'method' => 'GET']) }}
        <div class="row no-gutters">
            <div class="col-12 col-sm-3 mr-2">
                {{ Form::bsSelect('filter[status_id]', $taskStatuses->pluck('name', 'id'), request('filter.status_id'), __('views.task.index.status')) }}
            </div>

            <div class="col-12 col-sm-3 mr-2">
                {{ Form::bsSelect('filter[created_by_id]', $users->pluck('name', 'id'), request('filter.created_by_id'), __('views.task.index.creator')) }}
            </div>

            <div class="col-12 col-sm-3 mr-2">
                {{ Form::bsSelect('filter[assigned_to_id]', $users->pluck('name', 'id'), request('filter.assigned_to_id'), __('views.task.index.assignee')) }}
            </div>

            <div class="col-12 col-sm-2 mr-2">
                {{ Form::submit(__('views.task.index.filter'), ['class' => 'btn btn-outline-primary mb-2']) }}
            </div>
        </div>
    {{ Form::close() }}

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('views.task.index.id') }}</th>
                    <th>{{ __('views.task.index.status') }}</th>
                    <th>{{ __('views.task.index.name') }}</th>
                    <th>{{ __('views.task.index.creator') }}</th>
                    <th>{{ __('views.task.index.assignee') }}</th>
                    <th>{{ __('views.task.index.created_at') }}</th>

                    @auth
                        <th>{{ __('views.task.index.actions') }}</th>
                    @endauth
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->status->name }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a>
                        </td>
                        <td>{{ $task->creator->name }}</td>
                        <td>{{ $task->assignee->name ?? '' }}</td>
                        <td>{{ $task->created_at }}</td>

                        @auth
                            <td>
                                @can('delete', $task)
                                    <a class="text-danger text-decoration-none" href="{{ route('tasks.destroy', $task) }}" data-confirm="{{ __('views.task.index.confirm_destroy') }}" data-method="delete">{{ __('views.task.index.destroy') }}</a>
                                @endcan

                                <a class="text-decoration-none" href="{{ route('tasks.edit', $task) }}">{{ __('views.task.index.edit') }}</a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $tasks->links() }}
@endsection
