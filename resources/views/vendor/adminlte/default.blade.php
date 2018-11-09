@extends('adminlte::layouts.app')

@section('htmlheader_title')
    @yield('contentheader_title')
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                    @include('flash::message')

                <!-- Default box -->
                <div class="box box-primary">
                    <div class="box-body">



                        @yield('content')


                    </div>
                    <!-- Styles -->




                    <!-- /.box-body -->
                </div>
                <!-- Scripts -->

                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
