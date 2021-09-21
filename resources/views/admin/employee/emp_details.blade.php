@extends('admin.layouts.master')
@section("title")
Employee Details
@stop
@section('css')
    <!---Internal  Prism css-->
    <link href="{{ URL::asset('public/assets/plugins/prism/prism.css') }}" rel="stylesheet">
    <!---Internal Input tags css-->
    <link href="{{ URL::asset('public/assets/plugins/inputtags/inputtags.css') }}" rel="stylesheet">
    <!--- Custom-scroll -->
    <link href="{{ URL::asset('public/assets/plugins/custom-scroll/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
@endsection
@section('css')
@endsection

@section('content')
				<!-- row -->
				<div class="row">
                    @if(session()->has('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('delete') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <!-- div -->
                            <div class="card mg-b-20" id="tabs-style2">
                                <div class="card-body">
                                    <div class="card-header pb-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="col-sm-6 col-md-4 col-xl-3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-wrap">
                                        <div class="example">
                                            <div class="panel panel-primary tabs-style-2">
                                                <div class=" tab-menu-heading">
                                                    <div class="tabs-menu1">
                                                        <!-- Tabs -->
                                                        <ul class="nav panel-tabs main-nav-line">
                                                            <li><a href="#tab4" class="nav-link active" data-toggle="tab">Employee Details</a></li>
                                                            <li><a href="#tab5" class="nav-link" data-toggle="tab">Relatives</a></li>
                                                            <li><a href="#tab6" class="nav-link" data-toggle="tab">Attachment</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="panel-body tabs-menu-body main-content-body-right border">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab4">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Employee Name</th>
                                                                        <td>{{ $employee->name }}</td>
                                                                        <th scope="row">Job Number</th>
                                                                        <td>{{ $employee->Job_number }}</td>
                                                                        <th scope="row">Job Title</th>
                                                                        <td>{{ $employee->Job_title }}</td>
                                                                        <th scope="row">Salary</th>
                                                                        <td>{{ $employee->salary }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Contract Type</th>
                                                                        <td>{{ $employee->contract->name }}</td>
                                                                        <th scope="row">Insurance Type</th>
                                                                        <td>{{ $employee->insurance_type->name }}</td>
                                                                        <th scope="row">Evaluation Type</th>
                                                                        <td>{{ $employee->evaluation_type->name }}</td>
                                                                        <th scope="row">Insurance Grade</th>
                                                                        <td>{{ $employee->insurance_grade->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Family Members</th>
                                                                        <td>{{ $employee->family_members }}</td>
                                                                        <th scope="row">Wives Number</th>
                                                                        <td>{{ $employee->wives_number }}</td>
                                                                        <th scope="row">Grandchild Number</th>
                                                                        <td>{{ $employee->grandchildren }}</td>

                                                                    </tr>
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                        <div class="tab-pane" id="tab5">
                                                            <div class="card card-statistics">
                                                                <div class="card-body">
                                                                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Add Relative</a>

                                                                </div>
                                                            </div>
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Name</th>
                                                                    <th>Relative Type</th>
                                                                </tr>
                                                                @foreach ($emp_relative as $emp_relative)
                                                                <tr>
                                                                    <td>{{ $emp_relative->id }}</td>
                                                                    <td>{{ $emp_relative->name}}</td>
                                                                    <td>{{ $emp_relative->relative->name }}</td>
                                                                </tr>

                                                                @endforeach


                                                            </table>
                                                        </div>
                                                        <div class="tab-pane" id="tab6">
                                                            <div class="card card-statistics">
                                                                <div class="card-body">
                                                                    <p class="text-danger">* File Format :- pdf, jpeg ,.jpg , png </p>
                                                                    <h5 class="card-title">Add Attachment</h5>
                                                                    <form method="post" action="{{ route('media.store') }}"
                                                                        enctype="multipart/form-data">
                                                                        {{ csrf_field() }}
                                                                        <div class="custom-file">

                                                                            <input type="file" class="custom-file-input" id="customFile"
                                                                                name="image" required>

                                                                            <input type="hidden" id="customFile" name="column_id"
                                                                                value="{{ $employee->id }}">


                                                                            <label class="custom-file-label" for="customFile">
                                                                                Attachment</label>
                                                                        </div><br><br>
                                                                        <button type="submit" class="btn btn-primary btn-sm "
                                                                            name="uploadedFile">ADD</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped table-responsive mt-15">
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>File Name</th>
                                                                    <th>Image</th>
                                                                    <th>العمليات</th>
                                                                </tr>
                                                                @foreach ($media as $media)
                                                                <tr>
                                                                    <td>{{ $media->id }}</td>
                                                                    <td>{{ $media->name }}</td>
                                                                    <td>{{ $media->image }}</td>
                                                                    <td colspan="2">
                                                                        <a
                                                                        class="btn btn-outline-success btn-sm" target="_blank"
                                                                        href="{{ url('view_file') }}/{{ $employee->id }}/{{ $media->image }}" role="button">
                                                                            <i class="fas fa-eye">&nbsp;</i>عرض
                                                                        </a>

                                                                        <a
                                                                        class="btn btn-outline-info btn-sm"
                                                                        href="{{ url('download') }}/{{ $employee->id }}/{{ $media->image }}" role="button">
                                                                            <i class="fas fa-download">&nbsp;</i>تحميل

                                                                        </a>


                                                                        <button class="btn btn-outline-danger btn-sm"
                                                                            data-toggle="modal"
                                                                            data-media_id="{{ $media->id }}"
                                                                            data-file_name="{{ $media->image }}"
                                                                            data-id_emp="{{ $employee->id }}"
                                                                            data-target="#delete_file">حذف</button>


                                                                    </td>
                                                                </tr>

                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

								</div>
							</div>
						</div>
					</div>
					</div>

				</div>
				<!-- row closed -->


                <!-- delete -->
    <div class="modal fade" id="delete_file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Attachment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('media.destroy', 'test') }}" method="post">
                {{ method_field('delete') }}

                {{ csrf_field() }}
                <div class="modal-body">
                    <p class="text-center">
                    <h6 style="color:red">Are you sure of delete an attachment</h6>
                    </p>

                    <input type="hidden" name="media_id" id="media_id" value="">
                    <input type="hidden" name="file_name" id="file_name" value="">
                    <input type="hidden" name="id_emp" id="id_emp" value="">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- Container closed -->


                <!-- Basic modal ADD -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Add Relative</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
                    <form action="{{ route('emp_relatives.store') }}" method="POST">
                        @csrf
					<div class="modal-body">
                        <input type="hidden" class="form-control" id="emp_id" name="emp_id" value="{{ $employee->id }}" required>

                        <div class="form-group">
                            <label>Relative Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>


                        <div class="form-group">
                            <label>Relative Type</label>
                            <select name="relative_id" id="relative_id" class="form-control" required>
                                @foreach ($relative_type as $relative_type)
                                    <option value="{{ $relative_type->id }}">{{ $relative_type->name }}</option>
                                @endforeach
                            </select>
                        </div>



					</div>

					<div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->

                    <!-- delete -->




			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('public/assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('public/assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Internal Input tags js-->
<script src="{{URL::asset('public/assets/plugins/inputtags/inputtags.js')}}"></script>
<!--- Tabs JS-->
<script src="{{URL::asset('public/assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
<script src="{{URL::asset('public/assets/js/tabs.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('public/assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('public/assets/plugins/prism/prism.js')}}"></script>
<script>
    $('#delete_file').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var media_id = button.data('media_id')
        var file_name = button.data('file_name')
        var id_emp = button.data('id_emp')
        var modal = $(this)
        modal.find('.modal-body #media_id').val(media_id);
        modal.find('.modal-body #file_name').val(file_name);
        modal.find('.modal-body #id_emp').val(id_emp);
    })
</script>
@endsection
