<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application</title>
    <!-- Add your CSS here -->
</head>
<body>
    @include('sidebar')

    <div class="content">
        @yield('content')
    </div>
</body>
</html>

<style>
    .content {
        margin-left: 220px; /* Adjust based on sidebar width */
        padding: 20px;
    }
</style>
