<div class="modal fade" id="updateRegistration" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateRegistrationLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateRegistrationLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/registration') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="registration_id" value="">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
