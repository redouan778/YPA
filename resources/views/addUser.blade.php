@extends('app.layout')
@section('section')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <form action="{{route('store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="naam"  class="col-sm-2 control-label">name</label>
                        <div class="col-sm-6">
                            <input type="text"  name="name" class="form-control" placeholder="Task naam">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="opmerking" class="col-sm-2 control-label">first name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="first_name" placeholder="Task Description">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="opmerking" class="col-sm-2 control-label">last name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Task Description">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="opmerking" class="col-sm-2 control-label">email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" placeholder="Task Description">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="opmerking" class="col-sm-2 control-label">password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password" placeholder="Task Description">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add Task</button>
                        </div>
                    </div>

                </form>
        </div>
    </div>
    </div>
@endsection
