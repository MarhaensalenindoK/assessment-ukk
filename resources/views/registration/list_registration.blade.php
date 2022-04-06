@extends('layout.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            List Registration of new students at Wikrama Vocational School
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="table_registration">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Religion</th>
                        <th>Junior High School</th>
                        <th>Major</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrations as $registration)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $registration['name'] }}
                        </td>
                        <td>
                            {{ $registration['gender'] }}
                        </td>
                        <td>
                            {{ $registration['address'] }}
                        </td>
                        <td>
                            {{ $registration['religion'] }}
                        </td>
                        <td>
                            {{ $registration['from_jhs'] }}
                        </td>
                        <td>
                            {{ $registration['major'] }}
                        </td>
                        <td class="">
                            <div class="d-flex justify-content-around">
                                <a href="javascript:void(0)" class="btn btn-sm m-1 btn-secondary" onclick="showModalUpdate('{{ $registration['id'] }}')">Update</a>
                                <a href="javascript:void(0)" onclick="confirmDelete('{{ $registration['id'] }}')" class="btn btn-sm m-1 btn-secondary">Delete</a>
                                <a href="{{ url('/registration/print/' . $registration['id']) }}" class="btn btn-sm m-1 btn-success">Print</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('registration.modals._update_registration')
@endsection

@section('script')
@if (Session::has('message'))
    <script>
        let message = "{{ Session::get('message') }}"
        alert(message)
    </script>
@endif

<script>
    let registrations = @json($registrations);

    $(document).ready( function () {
        $('#table_registration').DataTable();
    } );

    function showModalUpdate(id) {
        let regis = registrations.find(registration => registration.id == id)

        $("#updateRegistration").find("input[type=hidden][name=registration_id]").val(regis.id);
        $("#updateRegistration").find("input[type=text][name=name]").val(regis.name);
        $("#updateRegistration").find(`input[type=radio][name=gender][value="${regis.geder}"]`).prop('checked', true);
        $("#updateRegistration").find("textarea[name=address]").val(regis.address);
        $("#updateRegistration").find(`select[name=religion] option[value="${regis.religion}"]`).prop('selected', true);
        $("#updateRegistration").find("input[type=text][name=from_jhs]").val(regis.from_jhs);
        $("#updateRegistration").find(`select[name=major] option[value="${regis.major}"]`).prop('selected', true);

        $("#updateRegistration").modal('show')
    }

    function confirmDelete(id) {
        if(confirm("Apakah yakin data akan dihapus?")){
            window.location.href = `/registration/delete/${id}`
        }
        else{
            return false;
        }
    }
</script>
@endsection
