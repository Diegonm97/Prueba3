<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        $clientes = Clientes::search1($request->nuip)->orderBy('id')->paginate('8');

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        $clientes = new Clientes;

            $clientes->nuip            = $request->nuip;
            $clientes->nombreCli       = $request->nombreCli;
            $clientes->estadoCli       = $request->estadoCli;
            $clientes->tipoIdCli       = $request->tipoIdCli;
            $clientes->direccionCli    = $request->direccionCli;
            $clientes->oficinaCli      = $request->oficinaCli;
            $clientes->ciudadCli       = $request->ciudadCli;
            $clientes->telefonoCli     = $request->telefonoCli;
            $clientes->emailCli        = $request->emailCli;
            $clientes->fechaNacCli     = $request->fechaNacCli;
            $clientes->salarioCli      = $request->salarioCli;
            $clientes->rangoCli        = $request->rangoCli;
            $clientes->EPScli          = $request->EPScli;
            $clientes->ARLcli          = $request->ARLcli;
            $clientes->AFPcli          = $request->AFPcli;
            $clientes->cajaCompCli     = $request->cajaCompCli;
            $clientes->beneficioCli    = $request->beneficioCli;
            $clientes->fechaIngCli     = $request->fechaIngCli;
            $clientes->idEmpresaContraCli = $request->idEmpresaContraCli;
            $clientes->idNIT           = $request->idNIT;
            $clientes->nombreEmpCli    = $request->nombreEmpCli;
            $clientes->UPCadicCli    = $request->UPCadicCli;
            $clientes->estadoPago      = $request->estadoPago;

            $clientes->save();

            return redirect()->route('clientes.index')
            ->with('info','El cliente fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente =Clientes::find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente =Clientes::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {
            $clientes = Clientes::find($id);

            $clientes->nuip            = $request->nuip;
            $clientes->nombreCli       = $request->nombreCli;
            $clientes->estadoCli       = $request->estadoCli;
            $clientes->tipoIdCli       = $request->tipoIdCli;
            $clientes->direccionCli    = $request->direccionCli;
            $clientes->oficinaCli      = $request->oficinaCli;
            $clientes->ciudadCli       = $request->ciudadCli;
            $clientes->telefonoCli     = $request->telefonoCli;
            $clientes->emailCli        = $request->emailCli;
            $clientes->fechaNacCli     = $request->fechaNacCli;
            $clientes->salarioCli      = $request->salarioCli;
            $clientes->rangoCli        = $request->rangoCli;
            $clientes->EPScli          = $request->EPScli;
            $clientes->ARLcli          = $request->ARLcli;
            $clientes->AFPcli          = $request->AFPcli;
            $clientes->cajaCompCli     = $request->cajaCompCli;
            $clientes->beneficioCli    = $request->beneficioCli;
            $clientes->fechaIngCli     = $request->fechaIngCli;
            $clientes->idEmpresaContraCli = $request->idEmpresaContraCli;
            $clientes->idNIT           = $request->idNIT;
            $clientes->nombreEmpCli    = $request->nombreEmpCli;
            $clientes->UPCadicCli    = $request->UPCadicCli;
            $clientes->estadoPago      = $request->estadoPago;

            $clientes->save();

            return redirect()->route('clientes.index')
            ->with('info','El cliente fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
