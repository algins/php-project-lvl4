@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.task_status.index.statuses') }}</h1>

    @auth
        <a href="{{ route('task_statuses.create') }}" class="btn btn-primary mb-2">{{ __('views.task_status.index.create_status') }}</a>
    @endauth

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('views.task_status.index.id') }}</th>
                    <th>{{ __('views.task_status.index.name') }}</th>
                    <th>{{ __('views.task_status.index.created_at') }}</th>

                    @auth
                        <th>{{ __('views.task_status.index.actions') }}</th>
                    @endauth
                </tr>
            </thead>

            <tbody>
                @foreach ($taskStatuses as $taskStatus)
                    <tr>
                        <td>{{ $taskStatus->id }}</td>
                        <td>{{ $taskStatus->name }}</td>
                        <td>{{ $taskStatus->created_at }}</td>

                        @auth
                            <td>
                                <a class="text-danger text-decoration-none" href="{{ route('task_statuses.destroy', $taskStatus) }}" data-confirm="{{ __('views.task_status.index.confirm_destroy') }}" data-method="delete">{{ __('views.task_status.index.destroy') }}</a>
                                <a class="text-decoration-none" href="{{ route('task_statuses.edit', $taskStatus) }}">{{ __('views.task_status.index.edit') }}</a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $taskStatuses->links() }}
@endsection
