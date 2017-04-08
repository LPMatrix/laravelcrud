@extends('layout.master')

@section('body')
    <div class="panel panel-default">
        <div class="panel-heading">New</div>
            <div class="panel-body">

    <div class="row" style="padding: 10px">
                <form id="contact-form" method="post" action="{{route('store')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" name="mail" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Position</label>
                            <select id="subject" name="position" class="form-control" required="required">
                                <option value="" selected="">Choose One:</option>
                                <option value="developer">Developer</option>
                                <option value="designer">Designer</option>
                                <option value="project manager">Project Manger</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="github">
                                Github handle</label>
                            <input type="text" class="form-control" id="github" placeholder="Enter github" required="required" name="github" />
                        </div>
                        <div class="form-group">
                            <label for="school">
                                School</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" id="school" placeholder="Enter school" required="required" name="school" /></div>
                        </div>
                        <div class="form-group">
                            <label for="gender">
                                Gender</label>
                            <select id="gender" name="gender" class="form-control" required="required">
                                <option value="" selected="">Choose One:</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="panel-footer">
                        <button type="submit" class="btn btn-success " id="btnContactUs" name="save">
                            Add</button>
                    </div>
                    </form>
    </div>
@endsection