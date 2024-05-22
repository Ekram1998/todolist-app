
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstpar --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Student Management System</title>
</head>

{{-- innter style css --}}
<style>
    .row{
        padding: 30px;
    }
</style>

<body>
    <div class="container">
        {{-- nabvar --}}
        {{-- <div class="row">
            <div class="col-md-12">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <h3>Student Management</h3>
                        </a>
                    </div>
                </nav>
            </div>
        </div> --}}
        {{-- content part --}}
        <div class="row">
            {{-- sidebar --}}
            {{-- <div class="col-md-3">
                <div class="sidebar">
                    <a class="active" href="#home">Home</a>
                    <a href="#">Student</a>
                </div>
            </div> --}}
            {{-- content --}}
            <div class="content">
                @yield('content')
            </div>
        </div>

        {{-- script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </div>
</body>
</html>
