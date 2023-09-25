@extends('admin.layouts.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Doctors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('doctors.index')}}">Doctors</a></li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <h5 class=" col-9 card-title">Doctors</h5>
              </div>
              <div>
                {{ $dataTable->table() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal" id="doctor_edit_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Update Doctor Details</h1>
          </div>
          <div class="modal-body">
            <form id="doctor_edit_form">
              <div class="form_fields">
                <div class="row g-1 p-2">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="d_id" id="d_id">
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
                    <label for="start_time">Shift Start Time :</label><input type="time" name="start_time" id="start_time">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="end_time">Shift End Time :</label><input type="time" name="end_time" id="end_time">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="address">Address: </label><textarea name="address" id="address"></textarea>
                  </div>
                  <div class="row g-1 p-2">
                    <button type="submit" name="doctor_update_submit" class="btn btn-primary">Update Details</button>
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
      $(document).on("click", ".del_doc", function() {
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'doctors/'+$(this).attr('data-id'),
          type:"DELETE",
          data:{
            d_id:$(this).attr('data-id'),
            method:'delete_doc',
          },
          success:function(data){
            window.LaravelDataTables["doctor-table"].draw();
            // toastr.success(data.success);
            console.log(data.success);
          }
        })
      })
      $(document).on("click", ".edit_doc", function() {
        $('#doctor_edit_form')[0].reset();
        $('#doctor_edit_form').validate().resetForm();
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'doctors/'+$(this).attr('data-id'),
          data: {
            id: $(this).attr('data-id'),
            method: 'fetch_doc',
          },
          type: 'GET',
          success: function(data) {
            $('#d_id').val(data[0].id);
            $('#firstname').val(data[0].firstname);
            $('#lastname').val(data[0].lastname);
            $('#email').val(data[0].email);
            $('#phone_no').val(data[0].phone_no);
            $('#' + data[0].gender).attr('checked', true);
            $('#shift').val(data[0].shift);
            $('#start_time').val(data[0].start_time);
            $('#end_time').val(data[0].end_time);
            $('#department').val(data[0].department);
            $('#address').val(data[0].address);
            $('#doctor_edit_modal').modal('show');
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
          }
        })
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
      $('#doctor_edit_form').validate({
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
              url: '{{ route('check_docemail_update')}}',
              type: 'GET',
              data: {
                id: function(){ return $('#d_id').val()},
                method: 'check_docemail_update',
              },
            }
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
          phone_no: {
            required: true,
            number: true,
            minlength: 10,
            maxlength: 10,
            remote: {
              url: '{{ route('check_docphoneno_update')}}',
              type: 'GET',
              data: {
                id: function(){ return $('#d_id').val()},
                method: 'check_docphoneno_update',
              },
            },
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
        },
        submitHandler: function(form) {
          var form_data = new FormData(form);
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'doctors/'+$('#d_id').val(),
            type: 'POST',
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              $('#doctor_edit_modal').modal('hide');
              window.LaravelDataTables["doctor-table"].draw();
              // toastr.success(data.success);
              console.log(data.success);
            },
            error: function(xhr, status, error) {
              console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
              $.each(xhr.responseJSON.errors, function(i, error) {
                  var element = $('#doctor_edit_form').find('[name="' + i + '"]').last();
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