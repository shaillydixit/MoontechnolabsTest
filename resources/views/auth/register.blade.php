<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="containter">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h4>Register your details here!</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form method="POST" action="{{ route('register.user') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="gender" class="form-label">Select Gender</label>
                                            <select class="form-select" id="gender" name="gender">
                                                <option selected>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dob" class="form-label">Select Date of Birth</label>
                                            <input type="text" class="form-control" id="datepicker" name="dob">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" placeholder="Enter your address" id="address"
                                                style="height: 100px"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <!-- <div id="showImage" class="mt-2">
                                                <img src="" alt="image" class="rounded-circle p-4 bg-primary">
                                            </div> -->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="password_confirmation" class="form-label">Password
                                                Confirmation</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password_confirmation">
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary"> {{ __('Register') }}</button>
                                    <div>
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });

    // $(document).ready(function () {
    //     $('#image').change(function (e) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $('#showImage').attr('src', e.target.result);
    //         }
    //         reader.readAsDataURL(e.target.files['0']);
    //     })
    // })

</script>

</html> -->
