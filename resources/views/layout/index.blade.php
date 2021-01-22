<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

	<style>
		.header{
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
	</style>

</head>
<body style="padding: 20px;">
<div class="container py-2">
    @yield('content')
</div>

@yield('script')
</body>
</html>