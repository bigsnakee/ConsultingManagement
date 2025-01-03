<?php

namespace App\Http\Controllers;

use App\Models\Interact;
use App\Enums\MethodEnum;
use App\Enums\StatusEnum;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class InteractController extends Controller
{
    /**

     * Display a listing of the resource.

     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View

    {

        $interacts = Interact::latest()->paginate(5);



        return view('interacts.index', compact('interacts'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**

     * Show the form for creating a new resource.

     */

    public function create(): View

    {
        return view('interacts.create');
    }



    /**

     * Store a newly created resource in storage.

     */

     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'fullname' => 'required|string|max:255',
             'email' => 'required|email|max:255',
             'phone' => 'required|string|max:20',
             'content' => 'required|string',
             'time' => 'required|date_format:H:i',
             'date' => 'required|date',
             'method' => ['required', Rule::in(MethodEnum::values())],
             'results' => 'nullable|string',
             'status' => ['required', Rule::in(StatusEnum::values())],
         ]);

         Interact::create($request->all());

         return redirect()->route('interacts.index')
                          ->with('success', 'Interact created successfully.');
     }



    /**

     * Display the specified resource.

     */

    public function show(Interact $interact): View

    {

        return view('interacts.show', compact('interact'));
    }



    /**

     * Show the form for editing the specified resource.

     */

    public function edit(Interact $interact): View

    {

        return view('interacts.edit', compact('interact'));
    }



    /**

     * Update the specified resource in storage.

     */

    public function update(Request $request, Interact $Interact): RedirectResponse

    {

        $request->validate([

            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'Content' => 'required|string',
            'Time' => 'required|date_format:H:i',
            'Date' => 'required|date',
            'Method' => 'required|string|max:255',
            'Results' => 'nullable|string',
            'Status' => 'required|string|max:255',

        ]);



        $Interact->update($request->all());



        return redirect()->route('interacts.index')

            ->with('success', 'Interact updated successfully');
    }



    /**

     * Remove the specified resource from storage.

     */

    public function destroy(Interact $Interact): RedirectResponse

    {

        $Interact->delete();



        return redirect()->route('interacts.index')

            ->with('success', 'Interact deleted successfully');
    }
}
