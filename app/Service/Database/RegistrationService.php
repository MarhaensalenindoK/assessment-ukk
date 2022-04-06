<?php

namespace App\Service\Database;

use App\Models\Registration;
use Illuminate\Support\Facades\Validator;

class RegistrationService {
    public function index($filter = [])
    {
        $orderBy = $filter['order_by'] ?? 'DESC';
        $per_page = $filter['per_page'] ?? 999;
        $page = $filter['page'] ?? 1;

        $query = Registration::orderBy('created_at', $orderBy);

        $registrations = $query->paginate($per_page, ['*'], 'page', $page);

        return $registrations->toArray();
    }

    public function detail($registrationId)
    {
        $user = Registration::findOrFail($registrationId);

        return $user->toArray();
    }

    public function create($payload)
    {
        $registration = new Registration();
        $registration = $this->fill($registration, $payload);
        $registration->save();

        return $registration->toArray();
    }

    public function update($registrationId, $payload)
    {
        $registration = Registration::findOrFail($registrationId);
        $registration = $this->fill($registration, $payload);
        $registration->save();

        return $registration->toArray();
    }

    public function destroy($registrationId)
    {
        Registration::findOrFail($registrationId)->delete();

        return true;
    }

    private function fill(Registration $registration, array $attributes)
    {

        foreach ($attributes as $key => $value) {
            $registration->$key = $value;
        }

        Validator::make($registration->toArray(), [
            'name' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'religion' => 'required|string',
            'from_jhs' => 'required|string',
            'major' => 'required|string',
        ])->validate();

        return $registration;
    }
}
