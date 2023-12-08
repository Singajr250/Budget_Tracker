
@extends('layout')
@section('title','Home Page')
@section('content')

@push('styles')
<link rel="stylesheet" href="/app.css">
@endpush
<!--@auth{{auth()->user()->name}}@endauth-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Website</title>

    <!-- Add your CSS files here -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content">
        <section id="home">
            <h1>Welcome to Our Website</h1>
            <p>Explore the amazing content we have for you!</p>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p> We're dedicated to providing you with a great experience and valuable information. Feel free to navigate through our pages and learn more about us.
</p>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Efficient Budgeting</li>
                <li>User Empowerment</li>
                <li>Real-time Insights</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us at <a href="mailto:info@budgettracker.com">info@budgettracker.com</a>.</p>
        </section>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Our Website. All rights reserved.</p>
    </footer>

</body>

</html>
@endsection