<?php
namespace App\Http\Controllers;

use App\Doctor;
use App\Deadline;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DoctorController extends Controller
{

    public function mainSite()
    {
        return View('lekarz-panel/panel-lekarza');
    }

     public function doctorsList()
    {
        $doctors = Doctor::all();
        return View('lista-lekarzy', ['doctors' => $doctors]);
    }

    public function doctorsDeadlines($id)
    {
        $doctorsDeadlines = Deadline::findDoctorFreeDeadlines($id);

        if ($doctorsDeadlines==false) {
            abort(404);
            return;
        }

        return View('terminy', ['doctorsDeadlines' => $doctorsDeadlines]);
    }

    public function patientsList()
    {
        $patients = Patient::all();
        return View('lekarz-panel/lista-pacjentow', ['patients' => $patients]);
    }
}