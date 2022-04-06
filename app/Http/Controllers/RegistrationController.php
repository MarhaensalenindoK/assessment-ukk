<?php

namespace App\Http\Controllers;

use App\Service\Database\RegistrationService;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function index()
    {
        $DBregistration = new RegistrationService;

        $registrations = $DBregistration->index();

        return view('registration.list_registration')
        ->with('registrations', $registrations['data']);
    }

    public function createRegistration(Request $request)
    {
        $DBregistration = new RegistrationService;

        $payload = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'religion' => $request->religion,
            'from_jhs' => $request->from_jhs,
            'major' => $request->major,
        ];

        $create = $DBregistration->create($payload);

        if ($create) {
            return redirect('/registration')
            ->with('message', 'Selamat Registerasi Berhasil !')
            ->with('id', $create['id']);
        }

        return redirect('/registration')->with('message', 'Gagal Menambahkan Registrasi Anda !');
    }

    public function updateRegistration(Request $request)
    {
        $DBregistration = new RegistrationService;

        $payload = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'religion' => $request->religion,
            'from_jhs' => $request->from_jhs,
            'major' => $request->major,
        ];

        $update = $DBregistration->update($request->registration_id, $payload);

        if ($update) {
            return redirect('/list-registrations')->with('message', 'Data berhasil diubah !');
        }

        return redirect('/list-registrations')->with('message', 'Data gagal diubah !');
    }

    public function deleteRegistration($id) {
        $DBregistration = new RegistrationService;

        $delete = $DBregistration->destroy($id);

        if ($delete) {
            return redirect('/list-registrations')->with('message', 'Data sudah dihapus!');
        }

        return redirect('/list-registrations')->with('message', 'Gagal menghapus data registrasi');
    }

    public function printRegistration($id)
    {
        $DBregistration = new RegistrationService;

        $registration = $DBregistration->detail($id);

        return view('registration._print')
        ->with('registration', $registration);
    }
}
