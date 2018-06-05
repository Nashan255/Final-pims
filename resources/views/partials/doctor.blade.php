<div class="container">
    <h2>
        <span class="glyphicon glyphicon-dashboard"></span>&nbsp; My Dashboard
    </h2>
    <hr class="hr-custom">
    <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('schedule')}}" title="Schedule">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <br>
                            <h4>My Schedule</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('appointments')}}" title="Access Appointments">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <br>
                            <h4>Appointments</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./tile -->
            <!-- ./tile -->
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('patients')}}" title="Access patients">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <br>
                            <h4>Patients</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./tile -->
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('phamarcy')}}" title="Access Pharmacy">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                            <br>
                            <h4>Pharmacy</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./tile -->
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('laboratory')}}" title="Access Laboratory">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                            <br>
                            <h4>Laboratory</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./tile -->
            <div class="col-sm-4">
                <div class="panel panel-info tile animated pulse" data-view="{{URL('account')}}" title="Account Settings">
                    <div class="panel-body">
                        <div class="tile-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <br>
                            <h4>My Account</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./tile -->
        </div><!-- ./col-sm-6-->
        <div class="col-sm-6">
            
            <div class="panel panel-success">
                  <div class="panel-heading">
                        <h3 class="panel-title">Quick Appointment</h3>
                  </div>
                  <div class="panel-body">
                  <form action="" method="POST" class="" role="form">
                    <div class="form-group">
                        <label for="">Patient</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="text" class="form-control">
                    </div>
                    <hr style="margin-bottom:4px;">
                    <div class="form-group">  
                        <button type="button" class="btn btn-success">
                            <i class="fa fa-plus"></i> Add
                        </button>   
                    </div>

                 </form>
                  </div>
            </div>
            

            
        </div>
    </div><!-- ./row-->
</div>
