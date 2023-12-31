<?php


namespace App\Http\Controllers;
use App\Http\Controllers\ValidationException;
use App\Models\Proveedore;



use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * Class MedicamentoController
 * @package App\Http\Controllers
 */
class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = Medicamento::paginate(10);

        return view('medicamento.index', compact('medicamentos'))
            ->with('i', (request()->input('page', 1) - 1) * $medicamentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamento = new Medicamento();
        $proveedores = Proveedore::all();
        return view('medicamento.create', compact('medicamento', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Medicamento::$rules);

        // Retrieve the selected supplier
        $proveedor = Proveedore::find($request->input('proveedor'));

        // Check if the supplier exists
        if (!$proveedor) {
            return redirect()->route('medicamentos.create')
                ->with('error', 'Proveedor no encontrado.');
        }

        // Create the medication and associate the supplier
        $medicamento = new Medicamento($request->all());
        $medicamento->proveedore()->associate($proveedor);

        // Save the image if one has been uploaded
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            $file = $request->file('imagen');
            $destinationPath = 'images/featureds';
            $filename = time() . "-" . $file->getClientOriginalName();
            $file->storeAs($destinationPath, $filename, 'public');
            $medicamento->imagen = $destinationPath . '/' . $filename;
        }

        $medicamento->save();

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento creado exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
    //  * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
    //  * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamento = Medicamento::find($id);

        return view('medicamento.edit', compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicamento $medicamento
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $request->validate([
            // Agrega tus otras reglas de validación aquí
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $medicamento->fill($request->except('imagen'));

        // Si se proporciona una nueva imagen, actualiza el campo de imagen
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            $file = $request->file('imagen');
            $destinationPath = 'images/featureds';
            $filename = time() . "-" . $file->getClientOriginalName();
            $file->storeAs($destinationPath, $filename, 'public');
            $medicamento->imagen = $destinationPath . '/' . $filename;
        }

        $medicamento->save();

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id)->delete();

        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento deleted successfully');
    }
}
