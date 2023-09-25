@extends('admin.layouts.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Patients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('patients.index')}}">Patients</a></li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <h5 class="col-9 card-title">Patients</h5>
              </div>
                {{ $dataTable->table() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal" id="patient_edit_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Update Patient Details</h1>
          </div>
          <div class="modal-body">
            <form id="patient_edit_form">
              <div class="form_fields">
                <div class="row g-1 p-2">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="p_id" id="p_id">
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
                    <label for="dob">Date of Birth.:</label><input type="date" name="dob" id="dob" max="<?php echo date('Y-m-d',strtotime('-24 hours'))?>">
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
                        <option value="Bermuda">Bermuda</option>
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
                    <button type="submit" name="patient_update_submit" class="btn btn-primary">Update Details</button>
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
  </main>
  @push('page_scripts')
  {{ $dataTable->scripts() }}
  <script>
    $(document).ready(function(){
      $(document).on("click", ".del_user", function() {
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'patients/'+$(this).attr('data-id'),
          type:"DELETE",
          data:{
            d_id:$(this).attr('data-id'),
            method:'delete_doc',
          },
          success:function(data){
            window.LaravelDataTables["user-table"].draw();
            // toastr.success(data.success);
            console.log(data.success);
          }
        })
      })
      $(document).on("click", ".edit_user", function() {
        $('#patient_edit_form')[0].reset();
        $('#patient_edit_form').validate().resetForm();
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'patients/'+$(this).attr('data-id'),
          data: {
            id: $(this).attr('data-id'),
            method: 'fetch_doc',
          },
          type: 'GET',
          success: function(data) {
            $('#p_id').val(data[0].id);
            $('#firstname').val(data[0].firstname);
            $('#lastname').val(data[0].lastname);
            $('#email').val(data[0].email);
            $('#phone_no').val(data[0].phone_no);
            $('#' + data[0].gender).attr('checked', true);
            $('#dob').val(data[0].dob);
            $('#country').val(data[0].country);
            $('#address').val(data[0].address);
            $('#patient_edit_modal').modal('show');
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
          }
        })
      })
      $('#patient_edit_form').validate({
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
              url: '{{ route('check_useremail_update')}}',
              type: 'GET',
              data: {
                id: function(){ return $('#p_id').val()},
                method: 'check_useremail_update',
              },
            }
          },
          address: {
            required:true,
          },
          gender: {
            required:true,
          },
          country: {
            required:true,
          },
          phone_no: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10,
            remote: {
              url: '{{ route('check_userphoneno_update')}}',
              type: 'GET',
              data: {
                id: function(){ return $('#p_id').val()},
                method: 'check_userphoneno_update',
              },
            },
          },
          dob: {
            required: true,
            date: true,
          },
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
          country: {
            required:"* Country is required!",
          },
          dob: {
            required: '* Date of Birth is required!',
            date: "* Invalid date entered!",
            dateITA: "* Invalid date entered!",
          },
        },
        submitHandler: function(form) {
          var form_data = new FormData(form);
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'patients/'+$('#p_id').val(),
            type: 'POST',
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              $('#patient_edit_modal').modal('hide');
              window.LaravelDataTables["user-table"].draw();
              // toastr.success(data.success);
              console.log(data.success);
            },
            error: function(xhr, status, error) {
              console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
              $.each(xhr.responseJSON.errors, function(i, error) {
                  var element = $('#patient_edit_form').find('[name="' + i + '"]').last();
                  element.after($('<span class="' + i + 'error" style="color: red;">' + error[0] + '</span>'));
              });
            },
          })
        }
      });
    })
  </script>
  @endpush
@endsection