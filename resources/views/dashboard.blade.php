@extends('sys')

@section('content')
    @include('partials/'.$userType)
@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            //set current username in navbar
            /**Handle events **/

            //handle tile click function
             $('.tile').on('click',function(){
                var targetWin=$(this).attr('data-view');
                window.location.assign(targetWin);
            });
            

        });
    </script>
@stop