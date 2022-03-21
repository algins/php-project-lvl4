<?php

namespace App\Http\Controllers;

use App\Http\Requests\LabelRequest;
use App\Models\Label;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LabelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index(): View
    {
        $labels = Label::paginate();

        return view('label.index', compact('labels'));
    }

    public function create(): View
    {
        $label = new Label();

        return view('label.create', compact('label'));
    }

    public function store(LabelRequest $request): RedirectResponse
    {
        $label = new Label($request->validated());
        $label->save();

        /** @var string $message */
        $message = __('views.layouts.app.label_stored');
        flash($message)->success();

        return redirect()->route('labels.index');
    }

    public function edit(Label $label): View
    {
        return view('label.edit', compact('label'));
    }

    public function update(LabelRequest $request, Label $label): RedirectResponse
    {
        $label->fill($request->validated());
        $label->save();

        /** @var string $message */
        $message = __('views.layouts.app.label_updated');
        flash($message)->success();

        return redirect()->route('labels.index');
    }

    public function destroy(Label $label): RedirectResponse
    {
        try {
            $label->delete();

            /** @var string $message */
            $message = __('views.layouts.app.label_destroyed');
            flash($message)->success();
        } catch (Exception $e) {
            /** @var string $message */
            $message = __('views.layouts.app.label_not_destroyed');
            flash($message)->error();
        }

        return redirect()->route('labels.index');
    }
}
