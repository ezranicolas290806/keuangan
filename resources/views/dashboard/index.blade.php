@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row">
           
                <div class="col-3">
                    <a href="{{url('dashboard/user')}}" class="text-decoration-none">
                        <div class="card bg-c-blue ">
                            <div class="card-body text-white">
                                <h1 class="text-right"><span
                                        class="f-right"></span></h1>
                                <h2>role</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{url('dashboard/surat/jenis')}}" class="text-decoration-none">
                        <div class="card bg-c-green">
                            <div class="card-body text-white">
                                <h1 class="text-right"><span></span></h1>
                                <h2>layanan</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            <div class="col-3">
                <a href="{{url('dashboard/surat')}}" class="text-decoration-none">
                    <div class="card bg-c-yellow">
                        <div class="card-body text-white">
                            <h1 class="text-right"><span
                                    class="f-right"></span>
                            </h1>
                            <h2>pembayaran</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="{{url('dashboard/log')}}" class="text-decoration-none">
                    <div class="card bg-c-pink">
                        <div class="card-body text-white">
                            <h1 class="text-right"><span class="f-right"></span>
                            </h1>
                            <h2>pengeluaran</h2>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('footer')
    <script src="{{ $jsChart->cdn() }}"></script>

   
    <script src="{{ $suratChart->cdn() }}"></script>

   
@endsection

