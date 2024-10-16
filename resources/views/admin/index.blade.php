@extends('admin.layouts.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Appointments <span>| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="appointments_count">{{ $appointment_count}}</h6>
                      <!-- <span class="text-primary small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-light text-primary fw-bold appointment_modal_button" data-bs-toggle='modal' data-bs-target='#appointment_modal'>Create New Appointment</button>
              </div>
            </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Doctors <span>| Available</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-plus"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="doc_count">{{ $doc_count}}</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-light text-success fw-bold doctor_modal_button" data-bs-toggle='modal' data-bs-target='#doctor_modal'>Add New Doctor</button>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Patients <span>| Registered</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="patients_count">{{ $patient_count}}</h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-light text-danger fw-bold patient_modal_button" data-bs-toggle='modal' data-bs-target='#patient_modal'>Add New Patient</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <h5 class="col-9 card-title">Appointments | Today</h5>
          </div>
          <div>
            {{ $dataTable->table()}}
          </div>
        </div>
      </div>
    </section>
    <div class="modal" id="doctor_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Submit Doctor Details</h1>
          </div>
          <div class="modal-body">
            <form id="doctor_form">
              <div class="form_fields">
                <div class="row g-1 p-2">
                  @csrf
                  <div class="row g-1 p-2">
                    <label for="firstname">FirstName :</label><input type="text" name="firstname" id="firstname">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="lastname">LastName :</label><input type="text" name="lastname" id="lastname">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="email">Email :</label><input type="email" name="email" id="email">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="phone_no">Phone No. :</label><input type="number" name="phone_no" id="phone_no">
                  </div>
                  <div class="row g-1 p-2">
                    <label class="col" for="gender">Gender:</label>
                    Male <input class="col" type="radio" name="gender" value="male" id="male">
                    Female <input class="col" type="radio" name="gender" value="female" id="female">
                    Other <input class="col" type="radio" name="gender" value="other" id="other">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="department">Department: </label>
                    <select id="department" name="department">
                      <option value="Cardiology">Cardiology</option>
                      <option value="Neurology">Neurology</option>
                      <option value="Hepatology">Hepatology</option>
                      <option value="Pediatrics">Pediatrics</option>
                    </select>
                  </div>
                  <div class="row g-1 p-2">
                    <label for="shift">Shift :</label>
                    <select id="shift" name="shift">
                      <option value="Morning">Morning</option>
                      <option value="Evening">Evening</option>
                    </select>
                  </div>
                  <div class="row g-1 p-2">
                    <label for="start_time">Shift Start Time :</label><input type="time" name="start_time" id="start_time" value="23:59">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="end_time">Shift End Time :</label><input type="time" name="end_time" id="end_time" value="23:59">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="address">Address: </label><textarea name="address" id="address"></textarea>
                  </div>
                  <div class="row g-1 p-2">
                    <button type="submit" name="doctor_submit" class="btn btn-primary">Submit Details</button>
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
    <div class="modal" id="patient_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Submit Patient Details</h1>
          </div>
          <div class="modal-body">
            <form id="patient_form">
              <div class="form_fields">
                <div class="row g-1 p-2">
                  @csrf
                  <div class="row g-1 p-2">
                    <label for="firstname">First Name :</label><input type="text" name="firstname" id="firstname">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="lastname">Last Name :</label><input type="text" name="lastname" id="lastname">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="email">Email :</label><input type="email" name="email" id="email">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="phone_no">Phone No. :</label><input type="number" name="phone_no" id="phone_no">
                  </div>
                  <div class="row g-1 p-2">
                    <label class="col" for="gender">Gender:</label>
                    Male <input class="col" type="radio" name="gender" value="male" id="male">
                    Female <input class="col" type="radio" name="gender" value="female" id="female">
                    Other <input class="col" type="radio" name="gender" value="other" id="other">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="dob">Date of Birth.:</label><input type="date" name="dob" id="dob" max="{{ date('Y-m-d',strtotime('-24 hours'))}}" >
                  </div>
                  <div class="row g-1 p-2">
                    <x-label for="country" :value="__('Country')" />
                    <select name="country" id="country" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="">Select Country</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nepal">Nepal</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Erimates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="row g-1 p-2">
                    <label for="address">Address: </label><textarea name="address" id="address"></textarea>
                  </div>
                  <div class="row g-1 p-2">
                    <x-label for="password" :value="__('Password')" />
    
                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    autocomplete="new-password" />
                  </div>
      
                  <!-- Confirm Password -->
                  <div class="row g-1 p-2">
                      <x-label for="password_confirmation" :value="__('Confirm Password')" />
      
                      <x-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" />
                  </div>
                  <div class="row g-1 p-2">
                    <button type="submit" name="patient_submit" class="btn btn-primary">Submit Details</button>
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
    <x-appointment-modal />
  </main>
  @push('page_scripts')
  {{ $dataTable->scripts()}}
  <script>
  $(document).ready(function(){
    $('.doctor_modal_button').click(function() {
      $('#doctor_form')[0].reset();
      $('#doctor_form').validate().resetForm();
    })
    $('.patient_modal_button').click(function() {
      $('#patient_form')[0].reset();
      $('#patient_form').validate().resetForm();
    })
    $('.appointment_modal_button').click(function() {
      // $.ajax({
      //   url:'method.php',
      //   type:'POST',
      //   data:{
      //     method:'user_avl',
      //   },
      //   success:function(data){
      //     $('select').html("<option value='test'>TEST</option>");
      //   }
      // })
      $('#appointment_form')[0].reset();
      $('#appointment_form').validate().resetForm();
      $('#appointment_submit').html("Submit Details");
      $('#appointment_submit').attr('disabled', false);
    })
    $('#appointment_form').change(function() {
      $('.doc-error').html('');
    })
    $.validator.addMethod("greaterThan",
      function(value, element, param) {
        var i = parseInt(value);
        var j = parseInt($(param).val());
        return (i > j) ? true : false;
      }
    );
    $.validator.addMethod("lessThan",
      function(value, element, param) {
        var i = parseInt(value);
        var j = parseInt($(param).val());
        return (i < j) ? true : false;
      }
    );
    $('#doctor_form').validate({
      rules: {
        firstname: {
          required: true,
          lettersonly: true,
          maxlength:30,
          minlength:2,
        },
        lastname: {
          required: true,
          lettersonly: true,
          maxlength:30,
          minlength:2,
        },
        email: {
          required: true,
          email: true,
          maxlength:30,
          minlength:2,
          remote: {
            url: '{{ route('check_doctor_email')}}',
            type: 'GET',
            data: {
              method: 'check_doctor_email',
            },
          },
        },
        phone_no: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10,
          remote: {
            url: '{{ route('check_doctor_phone_no')}}',
            type: 'GET',
            data: {
              method: 'check_doctor_phone_no',
            },
          },
        },
        address: {
          required:true,
        },
        gender: {
          required:true,
        },
        department: {
          required:true,
        },
        shift: {
          required: true,
          lettersonly: true,
        },
        start_time: {
          required: true,
          time: true,
          lessThan: '#end_time',
        },
        end_time: {
          required: true,
          time: true,
          greaterThan: '#start_time',
        }
      },
      messages: {
        firstname: {
          required: "* FirstName is required!",
          lettersonly: "* Only Characters allowed!",
        },
        lastname: {
          required: "* LastName is required!",
          lettersonly: "* Only Characters allowed!",
        },
        email: {
          required: "* Email is required",
          email: "* Provide Valid Email!",
          remote: "* Email Already Exists!",
        },
        phone_no: {
          required: "* Phone number is required!",
          number: "* Provide valid Phone Number!",
          minlength: '* Invalid Mobile Number',
          maxlength: '* Invalid Mobile Number',
          remote: "* Phone number Already Exists!",
        },
        address: {
          required:"* Address is required!",
        },
        gender: {
          required:"* Gender is required!",
        },
        department: {
          required:"* Department is required!",
        },
        shift: {
          required: "* Shift is required!",
          lettersonly: "* Only Characters Allowed!",
        },
        start_time: {
          required: "* Shift Starting time is required!",
          time: "* Provide Valid time!",
          lessThan: "* Must be less than End Time!"
        },
        end_time: {
          required: "* Shift End time is required!",
          time: "* Provide valid time!",
          greaterThan: "* Must be Greater than Start Time!"
        }
      },
      submitHandler: function() {
        $.ajax({
          url: '{{ route('doctors.store')}}',
          type: 'POST',
          data: $("#doctor_form").serialize(),
          success: function(data) {
            if (data == true) {
              $('#doctor_modal').modal('hide');
              window.location='{{route('doctors.index')}}';
            } else {
              alert(data);
            }
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
            $.each(xhr.responseJSON.errors, function(i, error) {
                var element = $('#doctor_form').find('[name="' + i + '"]').last();
                element.after($('<span class="' + i +'error" style="color: red;">' + error[0] + '</span>'));
            });
          },
        })
      }
    })
    $('#patient_form').validate({
      rules: {
        firstname: {
          required: true,
          lettersonly: true,
          maxlength:30,
          minlength:2,
        },
        lastname: {
          required: true,
          lettersonly: true,
          maxlength:30,
          minlength:2,
        },
        email: {
          required: true,
          email: true,
          maxlength:30,
          minlength:2,
          remote: {
            url: '{{ route('check_patient_email')}}',
            type: 'GET',
            data: {
              method: 'check_patient_email',
            },
          },
        },
        phone_no: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10,
          remote: {
            url: '{{route('check_patient_phone_no')}}',
            type: 'GET',
            data: {
              method: 'check_patient_phone_no',
            },
          },
        },
        dob: {
          required: true,
          date: true,
        },
        address: 'required',
        gender: {
          required:true,
        },
        country:{
          required:true,
        },
        password:{
          required:true,
          minlength: 9,
        },
        password_confirmation:{
          required:true,
          equalTo: '#password',
        }
      },
      messages: {
        firstname: {
          required: "* First Name is required!",
          lettersonly: "* Only Characters allowed!",
        },
        lastname: {
          required: "* Last Name is required!",
          lettersonly: "* Only Characters allowed!",
        },
        email: {
          required: "* Email is required",
          email: "* Provide Valid Email!",
          remote: "* Email Already Exists!",
        },
        phone_no: {
          required: "* Phone number is required!",
          number: "* Provide valid Phone Number!",
          minlength: '* Invalid Mobile Number',
          maxlength: '* Invalid Mobile Number',
          remote: "* Phone number Already Exists!",
        },
        dob: {
          required: '* Date of Birth is required!',
          date: "* Invalid date entered!",
          dateITA: "* Invalid date entered!",
        },
        address: '* Addresss is required!',
        gender: '* Gender is required!',
        country:{
          required:"* Country is required!",
        },
        password: {
            required: "* Password is required!",
            minlength: "* Password requires min 9 characters!",
        },
        password_confirmation: {
            required: "* Confirm Password is required!",
            equalTo: "* Confirm password must be same as Password!",
        }
      },
      submitHandler: function() {
        $.ajax({
          url: '{{ route('register')}}',
          type: 'POST',
          data: $("#patient_form").serialize(),
          success: function(data) {
            if (data == true) {
              $('#patient_modal').modal('hide');
              window.location='{{ route('patients.index')}}';
            } else {
              alert(data);
            }
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
            $.each(xhr.responseJSON.errors, function(i, error) {
                var element = $('#patient_form').find('[name="' + i + '"]').last();
                element.after($('<span class="' + i +'error" style="color: red;">' + error[0] + '</span>'));
            });
          },
        })
      }
    })
    $('#appointment_form').validate({
      rules: {
        email: {
          required: true,
          email: true,
          maxlength:30,
          minlength:2,
          remote: {
            url: '{{ route('validate_patient')}}',
            type: 'GET',
            data: {
              method: 'validate_patient',
            },
          },
        },
        dname: {
          required: true,
          lettersonly: true,
          maxlength:30,
          minlength:2,
          remote: {
            url: '{{ route('validate_doc')}}',
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
          lettersonly: "* Only Characters allowed!",
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
          url: '{{ route('appointments.store')}}',
          type: 'POST',
          data: $("#appointment_form").serialize(),
          success: function(data) {
            if (data == true) {
              $('.doc-error').html('');
              $('#appointment_submit').html("Submit Details");
              $('#appointment_submit').attr('disabled', false);
              $('#appointment_modal').modal('hide');
              window.location = '{{ route('appointments.index')}}';
              // alert('Appointment Booked Successfully, Email sent to the Patient.');
            } else {
              $('.doc-error').html(data);
              $('#appointment_submit').html("Submit Details");
              $('#appointment_submit').attr('disabled', false);
            }
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
            $.each(xhr.responseJSON.errors, function(i, error) {
                var element = $('#appointment_form').find('[name="' + i + '"]').last();
                element.after($('<span class="' + i +'error" style="color: red;">' + error[0] + '</span>'));
            });
          },
        })
      }
    })
  })
  </script>
  @endpush
@endsection