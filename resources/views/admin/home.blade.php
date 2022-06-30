@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center t4-h80vh">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-1 col-sm-1 t4-card-app">
                <div class="row flex-column align-items-center justify-content-center t4-container-text">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 class="t4-orange-title">{{ __('Hai effettuato l\'accesso!') }}</h2>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-md-1o col-sm-10 col-12">
                        <a href="{{ route('admin.user.index') }}" class="btn t4-add-btn t4-bg-black ">
                            Vai alla Dashboard
                            <span class="t4-dashboard-img ms-2"><img src="/images/report.png" alt="dashboard-logo"></span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
