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
                                    value="{{ $userEmail ?? !empty($userEmail) }}" {{ !empty($userEmail) ? 'readonly' : '' }} />
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
                                    echo date('H:i:s'); ?>">
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
</div>
<script>
    $(document).ready(function(){
        $('.appointment_modal_button').click(function() {
            $('#appointment_form')[0].reset();
            $('#appointment_form').validate().resetForm();
            $('#appointment_submit').html("Submit Details");
            $('#appointment_submit').attr('disabled', false);
        })
        $('#dname').on('change', function() {
            $(this).valid();
        });
        $('#appointment_form').change(function() {
            $('.doc-error').html('');
            $('.error').html('');
        })
        $('#appointment_form').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    maxlength: 30,
                    minlength: 2,
                    remote: {
                        url: '{{ route('validate_patient') }}',
                        type: 'GET',
                        data: {
                            method: 'validate_patient',
                        },
                    },
                },
                dname: {
                    required: true,
                    remote: {
                        url: '{{ route('validate_doc') }}',
                        type: 'GET',
                        data: {
                            method: 'validate_doc',
                        },
                    },
                },
                adate: {
                    required: true,
                },
                atime: {
                    required: true,
                },
            },
            messages: {
                dname: {
                    required: "* Doctor's Name is required!",
                    remote: "* Doctor Not available!",
                },
                email: {
                    required: "* Patient's Email is required",
                    email: "* Provide Valid Email!",
                    remote: "* Patient is not registered!",
                },
                adate: {
                    required: '* Appointment date is required!',
                },
                atime: {
                    required: '* Appointment time is required!',
                },
            },
            submitHandler: function() {
                // $('#appointment_submit').html("Sending Email, Please Wait....");
                $('#appointment_submit').attr('disabled', true);
                $.ajax({
                    url: '{{ route('book-appointment') }}',
                    type: 'POST',
                    data: $("#appointment_form").serialize(),
                    success: function(res) {
                        if (res && res.success) {
                            $('.doc-error').html('');
                            $('#appointment_submit').html("Submit Details");
                            $('#appointment_submit').attr('disabled', false);
                            $('#appointment_modal').modal('hide');
                            toastr.success('Appointment booked successfully!', 'Success');
                            // alert('Appointment Booked Successfully, Email sent to the Patient.');
                        } else {
                            var error = 'Somethiong went wrong';
                            if(res && res.error) error = res.error;
                            $('.doc-error').html(error);
                            $('#appointment_submit').html("Submit Details");
                            $('#appointment_submit').attr('disabled', false);
                            toastr.error('Failed to book appointment', 'Error');
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#appointment_submit').attr('disabled', false);
                        $.each(xhr.responseJSON.errors, function(i, error) {
                            var element = $('#appointment_form').find('[name="' + i + '"]').last();
                            element.after($('<span class="'+i+'error error" style="color: red;">' + error[0] + '</span>'));
                        });
                    },
                })
            }
        })
    })
</script>
