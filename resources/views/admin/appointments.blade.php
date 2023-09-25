@extends('admin.layouts.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Appointments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="{{ route('appointments.index')}}">Appointments</a></li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <h5 class="col-9 card-title">Appointments</h5>
              </div>
              <div>
                {{ $dataTable->table() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal" id="appointment_edit_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Update Appointment Details</h1>
          </div>
          <div class="modal-body">
            <form id="appointment_edit_form">
              <div class="form_fields">
                <div class="row g-1 p-2">
                  <input type="hidden" name="a_id" id="a_id">
                  @csrf
                  @method('PUT')
                  <div class="row g-1 p-2">
                    <span class="error doc-error"></span>
                  </div>
                  <div class="row g-1 p-2">
                    <label for="email">Patient's Email :</label><input type="email" name="email" id="email">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="dname">Doctor's Name :</label><input type="text" name="dname" id="dname">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="date_time">Appointment Date :</label><input type="date" name="adate" id="adate" min="{{ date("Y-m-d")}}">
                  </div>
                  <div class="row g-1 p-2">
                    <label for="date_time">Appointment Time :</label><input type="time" name="atime" id="atime" min="<?php date_default_timezone_set("Asia/Calcutta");echo(date("H:i:s"))?>">
                  </div>
                  <div class="row g-1 p-2">
                    <button type="submit" name="appointment_update_submit" id="appointment_update_submit" class="btn btn-primary">Update Details</button>
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
      $(document).on("click", ".del_appointment", function() {
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'appointments/'+$(this).attr('data-id'),
          type:"DELETE",
          data:{
            id:$(this).attr('data-id'),
            method:'delete_appointment',
          },
          success:function(data){
            window.LaravelDataTables["appointment-table"].draw();
            // toastr.success(data.success);
            console.log(data.success);
          }
        })
      })
      $(document).on("click", ".edit_appointment", function() {
        $('#appointment_edit_form')[0].reset();
        $('#appointment_edit_form').validate().resetForm();
        $('#email').attr('Disabled',true);
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'appointments/'+$(this).attr('data-id'),
          data: {
            id: $(this).attr('data-id'),
            method: 'fetch_appointment',
          },
          type: 'GET',
          success: function(data) {
            $('#a_id').val(data[0].id);
            $('#dname').val(data[0].doctor.firstname);
            $('#email').val(data[0].user.email);
            $('#adate').val(data[0].adate);
            $('#atime').val(data[0].atime);
            $('#appointment_edit_modal').modal('show');
          },
          error: function(xhr, status, error) {
            console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
          }
        })
      })
      $('#appointment_edit_form').validate({
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
        submitHandler: function(form) {
          $('#email').attr('Disabled',false);
          var form_data = new FormData(form);
          $.ajax({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'appointments/'+$('#a_id').val(),
            type: 'POST',
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
              $('#appointment_edit_modal').modal('hide');
              window.LaravelDataTables["appointment-table"].draw();
              // toastr.success(data.success);
              console.log(data.success);
            },
            error: function(xhr, status, error) {
              console.log("xhr =>" + xhr + "|| status =>" + status + "|| error =>" + error);
              $.each(xhr.responseJSON.errors, function(i, error) {
                  var element = $('#appointment_edit_form').find('[name="' + i + '"]').last();
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