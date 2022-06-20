@extends('layouts.app')

@push('css')
    <style>


    </style>
@endpush

@section('content')
    <div class="container text-center text-white">
        <div class="d-flex justify-content-evenly mb-5">
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Identity</span>
                    <i class="fa-solid fa-circle-dot current"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Logistics</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Style</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Specialities</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <span>Priorities</span>
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
            </div>
        </div>

        <div>
            <div class="text-center">
                <h1>{{ __('Do you have an age preference for your provider?') }}</h1>
                <span class="lead">{{ __('Choose all that may apply:') }}</span>
            </div>
            <form action="{{route('begins.age')}}" method="POST">
                @csrf
                <div class="agesArray">
                </div>
                <div class="row justify-content-between mt-5">
                    <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 age" data-value="24-45" type="button">{{ __('24-45') }}</button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 age" data-value="46-65" type="button">{{ __('46-65') }}</button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 age" data-value="68-85" type="button">{{ __('68-85') }}</button>
                </div>
                <div class="col-md my-md-0 my-2">
                    <button class="btn btn-light input multiple btn-lg rounded-pill px-5 w-100 age" data-value="No preference"
                    type="button">{{ __('No preference') }}</button>
                </div>
            </div>
            <div class="mt-5">
                    <button
                    class="btn btn-warning text-white rounded-pill fw-bold btn-lg px-5" type="submit">{{ __('Next') }}</button>
            </div>
        </form>
            <div class="text-center mt-2">
                <i class="fa-solid fa-circle done "></i>
                <i class="fa-solid fa-circle done"></i>
                <i class="fa-solid fa-circle-dot current"></i>
                <i class="fa-solid fa-circle-dot "></i>

            </div>
            <div class="d-flex justify-content-center mt-2 mb-5">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-white lead"><i
                        class="fa-solid fa-chevron-left me-1"></i>{{ __('3 of 4') }}</a>
            </div>
        </div>
        <div class="lead">
            <p>{{ __('If you are in immediate need of services, feeling unsafe in this current moment, or are experiencing
                                                    thoughts of harming yourself or others, please do not use this site. Instead,') }}
                <a class="text-white" href="#">{{ __('please use one of these resources.') }}</a>
                {{ __('For a medical emergency,') }}
                <a class="text-white"
                    href="#">{{ __('call 9-1-1') }}</a>{{ __('or visit your local Emergency Room.') }}
            </p>
        </div>
    </div>
@endsection
@push('js')
    <script>
        file_count.num = 0;
        function file_count() {
            return file_count.num++;
        }
        $('.age').click(function(){
            var value = $(this).attr('data-value');
            c = file_count();
            $('.agesArray').append("<input type='hidden' name='age[" + c + "]' id='age_" + c + "' value='" + value + "'>");
        });
    </script>
@endpush
