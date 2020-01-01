@extends('layouts.app')

@section('content')
{{--This css and js has been taken from the website: https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=crud-data-table-for-database-with-modal-form
 it is mixed with the css and js the layout by default has--}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">   {{--authentication--}}
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
{{--form to search--}}
{{--action on the path searchView--}}         <form method="post" action="{{url('/')}}/searchView">

                                 <input type="text" placeholder="Search Id" name="id">
                                 <input type="submit" value="Search">
                            @csrf

                              </form>


                        <div class="container">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Non severity crime <b>Table</b></h2>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Record</span></a>

                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                                        </th>
                                        <th>ID</th>
                                        <th>Geography  (Footnotes in parentheses–see bottom of spreadsheet)</th>
           {{--table--}}                             <th>2008</th>
                                        <th>2009</th>
                                        <th>2010</th>
                                        <th>2011</th>
                                        <th>2012</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($dataValues as $rec)
                                    <tr>
                                        <td>
							<span class="custom-checkbox">
							{{--if I have the time I am going to add the hidden feature--}}	<input type="checkbox" id="checkbox1" name="options[]" value="{{$rec->id}}">
								<label for="checkbox1"></label>
							</span>
                                        </td>
                                        <td>{{$rec->id }}</td>
                {{--records display--}}            <td>{{$rec->Geography }}</td>
                                        <td>{{$rec->record_2008 }}</td>
                                        <td>{{$rec->record_2009 }}</td>
                                        <td>{{$rec->record_2010 }}</td>
                                        <td>{{$rec->record_2011 }}</td>
                                        <td>{{$rec->record_2012 }}</td>
                                        <td>{{--the form employee is what the code has been made for but I change the actual form but not the #deleteEmployee because I can be confusing --}}
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="{{url('/')}}/create">     {{--use action on create those record entered will be use by the function create--}}
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Geography</label>
                                                <input type="text" name="geo" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>2008 record </label>
                                                <input type="text" name="rec08" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2009 record</label>
                                                <input type="text" name="rec09" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2010 record</label>
                                                <input type="text" name="rec10" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>2011 record</label>
                                                <input type="text" name="rec11" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>2012 record</label>
                                                <input type="text" name="rec12" class="form-control" required>

                                            </div>

                                        </div>
                                        @csrf
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-success" value="Add">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" action="{{url('/')}}/update">    {{--same thing here--}}
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        @csrf
                                        <div class="modal-body">
                                            <label>Row Number</label>
                                            <input type="text" name="id" class="form-control" required>
                                        </div>

                                        <div class="modal-body">
                                            <label>Geography</label>
                                            <input type="text" name="geo" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>2008 record </label>
                                            <input type="text" name="rec08" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2009 record</label>
                                            <input type="text" name="rec09" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2010 record</label>
                                            <input type="text" name="rec10" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>2011 record</label>
                                            <input type="text" name="rec11" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>2012 record</label>
                                            <input type="text" name="rec12" class="form-control" required>

                                        </div>

                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal HTML -->

                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form method="post" action="{{url('/')}}/delete"> {{--action on delete--}}
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        @csrf
                                        <div class="modal-body">
                                             <input type="text" name="id" placeholder="Please enter row id" required>
                                            <p>Are you sure you want to delete this row?</p>
                                            <p class="text-warning"><small>This action will be executed when delete id pressed.</small></p>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="content">
                            <div class="title m-b-md">
                                Laravel
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{$dataValues->links()}}    {{--links generate automatically--}}

                                </ul>
                            </nav>

<form method="post" action="{{url('/')}}/download">            {{--by using /download--}}
    <input type="submit" value="Download CSV">

    @csrf
</form>
                            <form method="post" action="{{url('/')}}/import" enctype="multipart/form-data"> {{--small form to import--}}
                                <input type="file" name="fil">
                                <input type="submit" value="Upload">
                                @csrf

                            </form>

                        </div>
                </div>
                </div>


@endsection
