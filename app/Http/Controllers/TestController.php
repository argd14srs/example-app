<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Repositories\Contracts\TestRepositoryInterface;
use App\Services\TestService;
use Illuminate\Http\RedirectResponse;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = new TestService(app(TestRepositoryInterface::class))->getAllTests();
        return response()->json($tests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Add 'name' to fillable in App\Models\test to allow mass assignment.
        // In app/Models/test.php, add:
        // protected $fillable = ['name', 'description'];

        // Create a new test record
        test::create([
            'name' => 'Sample Name',
            'description' => 'Sample Description'
        ]);
        return redirect()->route('tests.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
