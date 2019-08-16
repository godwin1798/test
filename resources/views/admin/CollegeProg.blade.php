@extends('layouts.adminBase')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="my-3 col-md-10 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <button class="btn" data-toggle="modal" data-target="#addCollegeModal">Add College</button>
                </div>
                <div class="card-body">
                
                    <table class="table table-responsive col-xl-12">
                    <thead>
                        <th>#</th>
                        <th>College Acronym</th>
                        <th>College Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                        <tbody>
                            <tr ng-repeat="college in colleges">
                                <td><span ng-bind="college.id"></span></td>
                                <td><span ng-bind="college.college_acronym"></span></td>
                                <td><span ng-bind="college.college_name"></span></td>
                                <td><button ng-click="showEditCollegeModal(college.id,college.college_acronym,college.college_name)"><i class="fa fa-pencil"></i></button></td>
                                <td><button ng-click="removeCollege(college.id)"><i class="fa fa-trash"></i></button></td>
                            </tr>   
                        </tbody>
                     </table>  
                </div>
            </div>
        </div>
    </div>
     <div class="row justify-content-center">
        <div class="my-2 col-md-10 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <button class="btn" data-toggle="modal" data-target="#addProgModal">Add Program</button>
                </div>
                <div class="card-body">
                
                   <table class="table table-responsive">
                    <thead>
                        <th>#</th>
                        <th>Program Acronym</th>
                        <th>Program Name</th>
                        <th>College Acronym</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="program in programs">
                            <td><span ng-bind="program.id"></span></td>
                            <td><span ng-bind="program.prog_acronym"></span></td>
                            <td><span ng-bind="program.prog_name"></span></td>
                            <td><span ng-bind="program.college.college_acronym"></span></td>
                            <td><button ng-click="showUpProgModal(program.id,program.college.id,program.prog_acronym,program.prog_name)"><i class="fa fa-pencil"></i></button></td>
                            <td><button ng-click="removeProgram(program.id)"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                   
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.modals')
</div>

@section('js')
 <script src="{{ asset('assets/js/controllers/admin.js') }}"></script>
@endsection

@endsection

