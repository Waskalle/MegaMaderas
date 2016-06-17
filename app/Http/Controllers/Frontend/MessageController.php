<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use Session;
use Redirect;
use App\Contacto;
use App\Http\Requests;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MessageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('Frontend.contact.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hoy = date('d-m-Y H:m a');
		$data = [];
		$data['Nombre'] = $request->name;
		$data['Email'] = $request->email;
		$data['Telefono'] = $request->telephone;
		$data['Mensaje'] = $request->message;
		$data['Fecha'] = $hoy;

		Mail::send('Frontend.contact.plantilla',['data' => $data], function($msj){
			$msj->subject('Mensaje desde la web');
			$msj->to('klopezmegamaderas@gmail.com');
		});

		Flash::success("El mensaje ha sido enviado correctamente");
		return redirect('/contacto');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
