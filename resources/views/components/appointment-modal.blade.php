<div class="modal" id="appointment_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Book appointment</h1>
            </div>
            <div class="modal-body">
                <form id="appointment_form">
                    <div class="form_fields">
                        <div class="row g-1 p-2">
                            @csrf
                            <div class="row g-1 p-2">
                                <span class="doc-error"></span>
                            </div>
                            <div class="row g-1 p-2">
                                <label for="email">Patient's Email :</label>
                                <input type="email" name="email" id="email" class="block mt-1 w-full"
                                    value="{{ $userEmail ?? !empty($userEmail) }}" @disabled(!empty($userEmail)) />
                            </div>
                            <div class="row g-1 p-2">
                                <label for="dname">Doctor's Name :</label>
                                <select name="dname" id="dname">
                                    <option value="" disabled selected> Select doctor </option>
                                    @foreach ($doctors as $doc)
                                        <option value="{{ $doc['id'] }}" @selected(old('dname') == $doc['id'])>
                                            {{ $doc['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row g-1 p-2">
                                <label for="date_time">Appointment Date :</label>
                                <input type="date" name="adate" id="adate"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    min="{{ date('Y-m-d') }}">
                            </div>
                            <div class="row g-1 p-2">
                                <label for="date_time">Appointment Time :</label>
                                <input type="time" name="atime" id="atime"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    min="<?php date_default_timezone_set('Asia/Calcutta');
                                    echo date('H:i'); ?>">
                            </div>
                            <div class="row g-1 p-2">
                                <button type="submit" name="appointment_submit" id="appointment_submit"
                                    class="btn btn-primary">Submit Details</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
