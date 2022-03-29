@extends('layouts.app')

@section('content')
    <h1 class="mb-5">{{ __('views.label.index.labels') }}</h1>

    @auth
        <a href="{{ route('labels.create') }}" class="btn btn-primary mb-2">{{ __('views.label.index.create_label') }}</a>
    @endauth

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>{{ __('views.label.index.id') }}</th>
                    <th>{{ __('views.label.index.name') }}</th>
                    <th>{{ __('views.label.index.name') }}</th>
                    <th>{{ __('views.label.index.created_at') }}</th>

                    @auth
                        <th>{{ __('views.label.index.actions') }}</th>
                    @endauth
                </tr>
            </thead>

            <tbody>
                @foreach ($labels as $label)
                    <tr>
                        <td>{{ $label->id }}</td>
                        <td>{{ $label->name }}</td>
                        <td>{{ $label->description }}</td>
                        <td>{{ $label->created_at }}</td>

                        @auth
                            <td>
                                <a class="text-danger text-decoration-none" href="{{ route('labels.destroy', $label) }}" data-confirm="{{ __('views.label.index.confirm_destroy') }}" data-method="delete">{{ __('views.label.index.destroy') }}</a>
                                <a class="text-decoration-none" href="{{ route('labels.edit', $label) }}">{{ __('views.label.index.edit') }}</a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $labels->links() }}
@endsection
