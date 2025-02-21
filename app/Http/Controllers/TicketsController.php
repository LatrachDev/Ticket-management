<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use App\Models\Category;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Tickets::with(['category', 'user'])->get();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('tickets.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'status' => 'nullable|in:open,closed'
        ]);

        $validateData['user_id'] = auth()->id();
        
        $ticket = Tickets::create($validateData);
        
        return redirect('/tickets')->with('success', 'Ticket created successfully');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tickets = Tickets::findOrFail($id);
        return  view('tickets.edit', compact('tickets'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                    'name'        => 'required', 
                    'description' => 'required'
                    ]
        );
        $tickets = Tickets::findOrFail($id);
        $tickets->update($validateData);

        return redirect('/tickets')->with('success', 'Tickets updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tickets = Tickets::findOrFail($id);
        $tickets->delete();

        return redirect('/tickets')->with('success', 'Tickets deleted successfully');
    }
}
