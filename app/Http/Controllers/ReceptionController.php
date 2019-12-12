<?php
namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Deadline;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceptionController extends Controller {

    public function mainSite()
    {
        return View('recepcja-panel/recepcja');
    }

    public function doctorsList()
    {
        $doctors = Doctor::all();
        return View('recepcja-panel/lista-lekarzy', ['doctors' => $doctors]);
    }

    public function doctorsDeadlines($id)
    {
        $doctorsDeadlines = Deadline::findDoctorFreeDeadlines($id);

        if ($doctorsDeadlines==false) {
            abort(404);
            return;
        }

        return View('recepcja-panel/lekarz', ['doctorsDeadlines' => $doctorsDeadlines]);
    }

     public function patientsList()
    {
        $patients = Patient::all();
        return View('recepcja-panel/lista-pacjentow', ['patients' => $patients]);
    }


    public function patientData($id)
    {
       // do napisania, zwraca view recepcja-panel/pacjent i tablice z danymi pacjenta i jego wizytami
       //return View('recepcja-panel/pacjent', [...]);
    }

    


}