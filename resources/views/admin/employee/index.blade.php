@extends('admin.layouts.master')
@section("title")
Employee
@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('public/assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('public/assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('public/assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('public/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
				<!-- row -->
				<div class="row">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    @if(Session()->has('Add'))
                      <div class="alert alert-success alert-dismissable fade show">
                          <strong>{{ Session()->get('Add') }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                    @endif

                    @if(Session()->has('Error'))
                    <div class="alert alert-success alert-dismissable fade show">
                        <strong>{{ Session()->get('Error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif


                  @if(session()->has('update'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('update') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                  @endif


                  @if(session()->has('delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>{{ session()->get('delete') }}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif





                    <div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<div class="col-sm-6 col-md-4 col-xl-3">
                                        @can('add-emp')

                                          <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Add Employee</a>

                                        @endcan
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Job Number</th>
                                                <th class="border-bottom-0">Job Title</th>
												<th class="border-bottom-0">Operation</th>

											</tr>
										</thead>
										<tbody>
                                            @foreach ($employee as $employee)
                                            <tr>
												<td>{{ $employee->id }}</td>
												<td><a href="{{ url('employeeDetails') }}/{{ $employee->id  }}">{{ $employee->name }}</a></td>
                                                <td>{{ $employee->Job_number }}</td>
                                                <td>{{ $employee->Job_title }}</td>
												<td>

                                                    <a
                                                    class="modal-effect btn btn-sm btn-info"
                                                    data-effect="effect-scale"
                                                    data-id="{{ $employee->id }}"
                                                    data-name="{{ $employee->name }}"
                                                    data-toggle="modal"
                                                    href="#exampleModal2"
                                                    title="Edit"><i class="las la-pen"></i>Edit</a>


                                                    @can('delete-emp')

                                                    <a
                                                    class="modal-effect btn btn-sm btn-danger"
                                                    data-effect="effect-scale"
                                                    data-id="{{ $employee->id }}"
                                                    data-name="{{ $employee->name }}"
                                                    data-toggle="modal"
                                                    href="#modaldemo9" title="Delete"><i class="las la-trash"></i>Delete</a>

                                                    @endcan

                                            </td>
											</tr>

                                            @endforeach



										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


		<!-- Basic modal ADD -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Add Evaluation</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
					<div class="modal-body">
                        <div class="form-group">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Job Number</label>
                            <input type="number" class="form-control" id="Job_number" name="Job_number" required>
                        </div>

                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" id="Job_title" name="Job_title" required>
                        </div>

                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" class="form-control" id="salary" name="salary" required>
                        </div>

                        <div class="form-group">
                            <label>Contract Type</label>
                            <select name="contract_id" id="contract_id" class="form-control" required>
                                @foreach ($contract as $contract)
                                    <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Insurance Type</label>
                            <select name="insurance_type_id" id="insurance_type_id" class="form-control" required>
                                @foreach ($insurance_type as $insurance_type)
                                    <option value="{{ $insurance_type->id }}">{{ $insurance_type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Evaluation  Type</label>
                            <select name="evaluation_type_id" id="evaluation_type_id" class="form-control" required>
                                @foreach ($evaluation_type as $evaluation_type)
                                    <option value="{{ $evaluation_type->id }}">{{ $evaluation_type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Insurance Grade</label>
                            <select name="insurance_grade_id" id="insurance_grade_id" class="form-control" required>
                                @foreach ($insurance_grade as $insurance_grade)
                                    <option value="{{ $insurance_grade->id }}">{{ $insurance_grade->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Family Members</label>
                            <input type="number" class="form-control" id="family_members" name="family_members" required>
                        </div>


                        <div class="form-group">
                            <label>Wifes Members</label>
                            <input type="number" class="form-control" id="wives_number" name="wives_number" required>
                        </div>

                        <div class="form-group">
                            <label>Grand Childern</label>
                            <input type="number" class="form-control" id="grandchildren" name="grandchildren" required>
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






         <!-- edit -->
         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Eployee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('employee.update', 'test') }}" method="post" autocomplete="off">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="recipient-name" class="col-form-label"> Employee Name :</label>
                            <input class="form-control" name="name" id="name" type="text">
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
    <!-- end edit -->


      <!-- delete -->
      <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Employee</h6><button aria-label="Close" class="close" data-dismiss="modal"
                                                                   type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="employee/destroy" method="post">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <div class="modal-body">
                        <p>are sure of the deleting process ?</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="name" id="name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end delete -->

				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
{{-- <script src="{{URL::asset('public/assets/plugins/datatable/js/jquery.dataTables.js')}}"></script> --}}
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('public/assets/js/table-data.js')}}"></script>
<script src="{{URL::asset('public/assets/js/modal.js')}}"></script>

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
    })
</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
    })
</script>
@endsection
