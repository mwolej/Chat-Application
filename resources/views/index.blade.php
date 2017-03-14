<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
@if ($errors->any())

    <ul style="color:red;">

        {{ implode('', $errors->all('<li>:message</li>')) }}

    </ul>

@endif

@if (Session::has('message'))

    <p>{{ Session::get('message') }}</p>

@endif
<div class="col-lg-4" align="@parent" >
{{ Form::open(array('url' => 'index')) }}

<p>Name :</p>

<p>{{ Form::text('name') }}</p>

<p>Email :</p>

<p>{{ Form::text('email') }}</p>

<p>Password :</p>

<p>{{ Form::password('password') }}</p>

<p>Confirm Password :</p>

<p>{{ Form::password('cpassword') }}</p>

<p>{{ Form::submit('Submit') }}</p>

{{ Form::close() }}
</div>

</body>
</html>
