@extends('sys') @section('content')
<div class="container">
    <h2>
        <i class="fa fa-users"></i>&nbsp;
        Patients
    </h2>
    <hr class="hr-custom">
</div>
<div class="container">
    <form action="" method="POST" class="form-inline" role="form" style="margin-bottom:5px;">
        <div class="form-group">
            <label class="sr-only" for="">search</label>
            <input type="text" class="form-control" id="" placeholder="search patient">
        </div>
        <button type="submit" class="btn btn-success">Search</button>
    </form>
    <div class="panel panel-default">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge">
                    3 June 2018 - 12:00
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-trash"></i>&nbsp;Delete
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-external-link"></i>&nbsp;View
                    </a>
                    &nbsp;
                </span>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                Francis Ganya
            </li>
            <!-- ./appointment item -->
            <li class="list-group-item">
                <span class="badge">
                    3 June 2018 - 12:00
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-trash"></i>&nbsp;Delete
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-external-link"></i>&nbsp;View
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn" title="check">
                        <i class="fa fa-check"></i>&nbsp;C
                    </a>
                    &nbsp;
                </span>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                Francis Ganya
            </li>
            <!-- ./appointment item -->
            <li class="list-group-item">
                <span class="badge">
                    3 June 2018 - 12:00
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-trash"></i>&nbsp;Delete
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-external-link"></i>&nbsp;View
                    </a>
                    &nbsp;
                </span>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                Francis Ganya
            </li>
            <!-- ./appointment item -->
            <li class="list-group-item">
                <span class="badge">
                    3 June 2018 - 12:00
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-trash"></i>&nbsp;Delete
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-external-link"></i>&nbsp;View
                    </a>
                    &nbsp;
                </span>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                Francis Ganya
            </li>
            <!-- ./appointment item -->
            <li class="list-group-item">
                <span class="badge">
                    3 June 2018 - 12:00
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-trash"></i>&nbsp;Delete
                    </a>
                    &nbsp;
                </span>
                <span class="badge ">
                    <a href="" class="panel-btn">
                        <i class="fa fa-external-link"></i>&nbsp;View
                    </a>
                    &nbsp;
                </span>
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                Francis Ganya
            </li>
            <!-- ./appointment item -->
        </ul>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-default">Prev</button>
            <button class="btn btn-default">Next</button>


            <form action="" method="POST" class="form-inline" role="form" style="display:inline-block;">

                <div class="form-group">
                    <label class="sr-only" for="">label</label>

                    <select name="" id="" class="form-control" required="required">
                        <option value="">All</option>
                        <option value="">Upcoming</option>
                        <option value="">Checked</option>
                    </select>

                </div>



                <button type="submit" class="btn btn-warning">Filter</button>
            </form>

        </div>
    </div>
</div>
@stop
