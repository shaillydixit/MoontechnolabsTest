<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in" ) }} {{Illuminate\Support\Facades\Auth::user()->first_name }}
                    {{Illuminate\Support\Facades\Auth::user()->last_name}}!
                </div>
            </div>


            <br>

            <div class="card" style="width: 100%;">
                <img style=" padding: 2px;   width: 94px;"
                    src="{{ url('/storage/files/company/' . Illuminate\Support\Facades\Auth::user()->image)}}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><strong>Name :</strong>
                        {{Illuminate\Support\Facades\Auth::user()->first_name }}
                        {{Illuminate\Support\Facades\Auth::user()->last_name}}</h5>
                    <h5 class="card-title"> <strong>Date of Birth :
                        </strong>{{Illuminate\Support\Facades\Auth::user()->dob }}</h5>
                    <h5 class="card-title"> <strong>Gender :</strong>
                        {{Illuminate\Support\Facades\Auth::user()->gender }}</h5>
                    <h5 class="card-title"><strong> Email :</strong> {{Illuminate\Support\Facades\Auth::user()->email }}
                    </h5>
                    <h5 class="card-title"> <strong>Address:
                        </strong>{{Illuminate\Support\Facades\Auth::user()->address }}</h5>

                </div>
                <div class="card-footer">
                    <a href="{{route('profile.edit')}}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
            <br>

        </div>
    </div>


</x-app-layout>
