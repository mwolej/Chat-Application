@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome back please update your profile!
                    <form class="form-horizontal">
                        <h3><strong><u>Personal Details</u></strong></h3>    
                        <div class="form-group">
                        <label class="control-label col-sm-2">First Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="first_name" placeholder="First Name"><br><br>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2">Last Name</label>
                        <div class="col-sm-10">
                        <input type="text" name="last_name" placeholder="Last Name"><br><br>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2">Email Address</label>
                        <div class="col-sm-10">
                        <input type="text" name="email address" placeholder="Email Address"><br><br>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                        <input type="Password" name="Password" placeholder="Password"><br><br>
                        </div>
                        </div>
                        <div class="container" style="margin-left: 200px;">
                        <button type="button" class="btn btn-primary col-md-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
