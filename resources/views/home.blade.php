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
            <a class="navbar-brand" href="#">Student Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
        <h1 class="text-center">Student Management System</h1>
        <p>A Student Management System (SMS) is software designed to handle various administrative tasks related to
            students in an educational institution. It helps schools, colleges, and universities manage student data,
            track academic progress, and automate processes like enrollment, attendance, and fee management.</p>

        <h2>Key Features of a Student Management System</h2>
        <ul>
            <li><strong>Student Information Management:</strong> Store and manage student personal details (name, age,
                contact info, etc.). Maintain academic records, grades, and progress reports.</li>
            <li><strong>Teacher & Staff Management:</strong> Add, edit, and assign teachers to specific classes or
                subjects. Track teacher performance and schedules.</li>
            <li><strong>Course & Batch Management:</strong> Define courses and associate them with students and
                teachers. Manage different student batches and class schedules.</li>
            <li><strong>Enrollment & Admission:</strong> Automate student admission and enrollment processes. Generate
                enrollment reports for better analysis.</li>
            <li><strong>Attendance Tracking:</strong> Record daily attendance of students and teachers. Generate
                attendance reports for monitoring.</li>
            <li><strong>Fees & Payment Management:</strong> Track student fees, due dates, and payment history. Generate
                invoices and receipts.</li>
            <li><strong>Reports & Analytics:</strong> Generate detailed reports on student performance, attendance, and
                enrollments. Provide insights into academic progress and institute management.</li>
            <li><strong>Communication System:</strong> Send notifications or emails to students, parents, and teachers.
                Provide real-time updates on schedules, fees, and events.</li>
        </ul>

        <h2>Benefits of a Student Management System</h2>
        <ul>
            <li>✅ <strong>Efficiency</strong> – Automates repetitive administrative tasks.</li>
            <li>✅ <strong>Data Security</strong> – Keeps student records safe and accessible.</li>
            <li>✅ <strong>Easy Access</strong> – Web-based or cloud-based systems allow remote access.</li>
            <li>✅ <strong>Improved Communication</strong> – Facilitates communication between students, teachers, and
                parents.</li>
            <li>✅ <strong>Better Decision-Making</strong> – Generates insightful reports for analysis.</li>
        </ul>

        <h2>Who Uses a Student Management System?</h2>
        <ul>
            <li>Schools</li>
            <li>Colleges & Universities</li>
            <li>Coaching Institutes</li>
            <li>Online Education Platforms</li>
            <li>Training Centers</li>
        </ul>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Student Management System | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
