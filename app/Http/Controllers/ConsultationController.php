<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Http\Requests\Consultations\StoreConsultation;

class ConsultationController extends Controller
{
    public function store(StoreConsultation $request)
	{
		$validated = $request->validated();

		Consultation::create($validated);

		return back()->with('consultationStatus', 'Thank you! Your consultation has been set');
	}
}
