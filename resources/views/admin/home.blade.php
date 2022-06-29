@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card t4-bg-dash">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Hai effettuato l\'accesso!') }}
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <button href="{{ route('admin.user.index') }}" class="btn t4-add-btn">
                                Vai alla Dashboard
                                <span class="t4-dashboard-img ms-2"><img src="/images/report.png"
                                        alt="dashboard-logo"></span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
