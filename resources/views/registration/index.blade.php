@extends('layout.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Registration of new students at Wikrama Vocational School
        </div>
        <div class="card-body">
            <form action="{{ url('/registration') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="Laki - laki" checked>
                        <label class="form-check-label" for="gender1">
                            Laki - laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="Perempuan">
                        <label class="form-check-label" for="gender2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>

                    <textarea class="form-control" name="address" id="address" cols="30" rows="5"></textarea>

                </div>
                <div class="mb-3">
                    <label for="religion" class="form-label">Religion</label>
                    <select class="form-select form-control" name="religion" id="religion">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fromjhs" class="form-label">Junior High School</label>

                    <input type="text" class="form-control" id="fromjhs" name="from_jhs" value="">

                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">Major</label>

                    <select class="form-select form-control" id="major" name="major">
                        <option value="" disabled selected>- Your Major Interest</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Tata Boga">Tata Boga</option>
                        <option value="Tata Busana">Tata Busana</option>
                        <option value="Multimedia">Multimedia</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">
                        Save Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
@if (Session::has('message'))
    <script>
        if(confirm("{{ Session::get('message') }}, print bukti pendaftaran?")){
            window.location = `/registration/print/{{ Session::get('id') }}`;
        }

    </script>
@endif

@endsection
