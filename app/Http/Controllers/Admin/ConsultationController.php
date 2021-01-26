<?php

namespace App\Http\Controllers\Admin;

use App\Consultation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Consultations\UpdateConsultation;
use App\Http\Requests\Consultations\StoreConsultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$consultations = Consultation::latest()->get();

		return view('admin.consultations.index', compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.consultations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultation $request)
    {
		$validated = $request->validated();

		Consultation::create($validated);

		return redirect()->route('admin.consultations.index')->with('status', 'Consultation Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
		//return view('admin.consultations.show', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
		return view('admin.consultations.edit', compact('consultation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultation $request, Consultation $consultation)
    {
		$validated = $request->validated();

		$consultation->update($validated);

		return redirect()->route('admin.consultations.index')->with('status', 'Consultation updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
		$consultation->delete();

		return redirect()->route('admin.consultations.index')->with('status', 'Consultation deleted');
    }

	public function markDone(Consultation $consultation)
	{
		if($consultation->done == 0)
		{
			$consultation->done = 1;
		} else {
			$consultation->done = 0;
		}

		$consultation->save();

		return view('admin.consultations._consultation', compact('consultation'));
	}
}
