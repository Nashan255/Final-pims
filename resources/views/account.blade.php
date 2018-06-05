@extends('sys')



@section('content')
<div class="container">
        <h2>
            <span class="fa fa-cogs"></span>&nbsp; My Account
        </h2>
        <hr class="hr-custom">
        <div class="row">
            <div class="col-sm-6">

                    <div class="panel panel-success">
                            <div class="panel-heading">
                                  <h3 class="panel-title">Account Settings</h3>
                            </div>
                            <div class="panel-body">
                            <form action="" method="POST" class="" role="form">
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label for="">Password</label>
                                  <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="text" class="form-control">
                            </div>
                              <hr style="margin-bottom:4px;">
                              <div class="form-group"> 
                                  
                                  <button type="button" class="btn btn-success">
                                      <i class="fa fa-save"></i> Update
                                  </button>   
                              </div>
          
                           </form>
                            </div>
                      </div>
            </div>
        </div>
@stop