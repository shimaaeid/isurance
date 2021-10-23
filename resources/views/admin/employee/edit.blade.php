@extends('admin.layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('public/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('public/assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
    Edit Employee Details
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Employee</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/Edit Delails</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ url('employee/update') }}" method="POST">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" id="id" name="id" value="{{ $emp->id }}">

                                <div class="form-group col-6">
                                    <label>Employee Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $emp->name }}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Job Number</label>
                                    <input type="number" class="form-control" id="Job_number" name="Job_number" value="{{ $emp->Job_number }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Job Title</label>
                                    <input type="text" class="form-control" id="Job_title" name="Job_title" value="{{ $emp->Job_title }}">
                                </div>

                                <div class="form-group col-6">
                                    <label>Salary</label>
                                    <input type="number" class="form-control" id="salary" name="salary" value="{{ $emp->salary }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Contract Type</label>
                                    <select name="contract_id" id="contract_id" class="form-control" required>
                                        <option value="{{ $emp->contract->id }}">{{ $emp->contract->name }}</option>
                                        @foreach ($contract as $contract)
                                            <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label>Insurance Type</label>
                                    <select name="insurance_type_id" id="insurance_type_id" class="form-control" required>
                                        <option value="{{ $emp->insurance_type->id }}">{{ $emp->insurance_type->name }}</option>
                                        @foreach ($insurance_type as $insurance_type)
                                            <option value="{{ $insurance_type->id }}">{{ $insurance_type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Evaluation Type</label>
                                    <select name="evaluation_type_id" id="evaluation_type_id" class="form-control" required>
                                        <option value="{{ $emp->evaluation_type->id }}">{{ $emp->evaluation_type->name }}</option>
                                        @foreach ($evaluation_type as $evaluation_type)
                                            <option value="{{ $evaluation_type->id }}">{{ $evaluation_type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    <label>Insurance Grade</label>
                                    <select name="insurance_grade_id" id="insurance_grade_id" class="form-control" required>
                                        <option value="{{ $emp->insurance_grade->id }}">{{ $emp->insurance_grade->name }}</option>
                                        @foreach ($insurance_grade as $insurance_grade)
                                            <option value="{{ $insurance_grade->id }}">{{ $insurance_grade->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-6">
                                    <label>Family Members</label>
                                    <input type="number" class="form-control" id="family_members" name="family_members"
                                        value="{{ $emp->family_members }}">
                                </div>


                                <div class="form-group col-6">
                                    <label>Wifes Members</label>
                                    <input type="number" class="form-control" id="wives_number" name="wives_number"
                                        value="{{ $emp->wives_number }}">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Grand Childern</label>
                                    <input type="number" class="form-control" id="grandchildren" name="grandchildren"
                                        value="{{ $emp->grandchildren }}">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>

    <script>
        $(document).ready(function() {
            $('select[name="Section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('section') }}/" + SectionId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product"]').append('<option value="' +
                                    key + '">' + key + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>


    <script>
        function myFunction() {
            var Amount_Commission = parseFloat(document.getElementById("Amount_Commission").value);
            var Discount = parseFloat(document.getElementById("Discount").value);
            var Rate_VAT = parseFloat(document.getElementById("Rate_VAT").value);
            var Value_VAT = parseFloat(document.getElementById("Value_VAT").value);
            var Amount_Commission2 = Amount_Commission - Discount;
            if (typeof Amount_Commission === 'undefined' || !Amount_Commission) {
                alert('يرجي ادخال مبلغ العمولة ');
            } else {
                var intResults = Amount_Commission2 * Rate_VAT / 100;
                var intResults2 = parseFloat(intResults + Amount_Commission2);
                sumq = parseFloat(intResults).toFixed(2);
                sumt = parseFloat(intResults2).toFixed(2);
                document.getElementById("Value_VAT").value = sumq;
                document.getElementById("Total").value = sumt;
            }
        }
    </script>


@endsection
