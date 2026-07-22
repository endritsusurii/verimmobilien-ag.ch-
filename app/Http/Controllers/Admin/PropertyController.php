<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function index(Request $request): View
    {
        $properties = Property::query()
            ->when(
                $request->filled('search'),
                function ($query) use ($request) {
                    $search = $request->string('search')->toString();

                    $query->where(function ($query) use ($search) {
                        $query
                            ->where('title', 'like', "%{$search}%")
                            ->orWhere('location', 'like', "%{$search}%")
                            ->orWhere('type', 'like', "%{$search}%");
                    });
                }
            )
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.properties.index', compact('properties'));
    }

    public function create(): View
    {
        return view('admin.properties.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:100'],
            'offer' => ['required', 'in:Kaufen,Vermieten,Verkaufen'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:Aktiv,Entwurf,Inaktiv'],
        ]);

        Property::create($validated);

        return redirect()
            ->route('admin.properties.index')
            ->with('success', 'Die Immobilie wurde erfolgreich erstellt.');
    }

    public function edit(Property $property): View
    {
        return view('admin.properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:100'],
            'offer' => ['required', 'in:Kaufen,Vermieten,Verkaufen'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:Aktiv,Entwurf,Inaktiv'],
        ]);

        $property->update($validated);

        return redirect()
            ->route('admin.properties.index')
            ->with('success', 'Die Immobilie wurde erfolgreich aktualisiert.');
    }

    public function destroy(Property $property): RedirectResponse
    {
        $property->delete();

        return redirect()
            ->route('admin.properties.index')
            ->with('success', 'Die Immobilie wurde gelöscht.');
    }
}