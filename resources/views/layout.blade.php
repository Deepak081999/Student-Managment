<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/home')}}">Student Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item"><a class="nav-link" href="{{url('/home')}}">Home</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{url('/students')}}">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/teachers')}}">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/batches')}}">Batches</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/courses')}}">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/enrollments')}}">Enrollment</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/payment')}}">Payment</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Student Management System | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
