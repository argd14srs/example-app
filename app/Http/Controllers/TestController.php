<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use App\Services\TestService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreTestRequest;

class TestController extends Controller
{

    public function __construct(
        private readonly TestService $Test
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {

        try {
            $tests = $this->Test->getAllTests();
            return response()->json(makeResponseArray(true, $tests, 'Operación exitosa', null), 201);
        } catch (\Throwable $th) {
            return response()->json(makeResponseArray(false, null, 'Error de la validacion', ['general' => $th->getMessage()]), 400);
        }
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
        try {
            $this->Test->create([
                'name' => 'Sample Name',
                'description' => 'Sample Description'
            ]);
            // test::create([
            //     'name' => 'Sample Name',
            //     'description' => 'Sample Description'
            // ]);
            return response()->json(makeResponseArray(true, null, 'Test creado con exito', null));
        } catch (\Throwable $th) {
            return response()->json(makeResponseArray(false, null, 'Error al crear el test', ['general' => $th->getMessage()]));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request): JsonResponse
    {
        try {
            $test = $this->Test->create($request->validated());

            return response()->json(
                makeResponseArray(true, $test, 'Test creado con exito', null),
                201
            );
        } catch (\Throwable $th) {
            return response()->json(
                makeResponseArray(false, null, 'Error al crear el test', ['general' => $th->getMessage()]),
                500
            );
        }
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
