<h1>Registration Form</h1>

@if(!empty($errors))
<ul>
    @foreach ($errors as $error)
        <li class="label label-danger">{{$error}}</li>
    @endforeach
</ul>
@endif

<h2>{{!empty($message) ? $message : ''}}</h2>

{!! Form::open(['url' => '/registration' , 'files' => true]) !!}
    <div class="form-group">
        {{ Form::label('name:', null) }}
        {{ Form::text('name', '', ['placeholder' => '']) }}
    </div>
    <div class="form-group">
        {{ Form::label('user name:', null) }}
        {{ Form::text('user_name', '', ['placeholder' => 'User Name' , 'class' => 'user_name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email:', null) }}
        {{ Form::email('email',  '') }}
    </div>
    <div class="form-group">
        {{ Form::label('password:', null) }}
        {{ Form::password('password') }}
    </div>
    <div class="form-group">
        {{ Form::label('retype-password:', null) }}
        {{ Form::password('retype-password' ) }}
    </div>
    <div class="form-group">
        {{ Form::label('Male:', null) }}
        {{ Form::radio('gender', 'male', true)}}
        {{ Form::label('Fe-Male:', null) }}
        {{ Form::radio('gender', 'fe-male')}}
    </div>
    <div class="form-group">
        {{ Form::label('Date of Birth:', null) }}
        {{ Form::date('dob', \Carbon\Carbon::now()) }}
    </div>
    <div class="form-group">
        {{ Form::label('Select Country :', null) }}
        {{  Form::select('country', ['pak'=> 'Pakistan' , 'in'=> 'India']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Profile Image:', null) }}
        {{ Form::file('image') }}
    </div>
    {{ Form::submit('Register' , ['class' => 'btn btn-success']) }}
{!! Form::close() !!}
