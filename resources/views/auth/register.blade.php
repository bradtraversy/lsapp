@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--------------------------------------------------------------------->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                            <label for="gender" class="" style="margin-right:10px;">
                                {{Form ::radio('gender','m')}}
                                M
                            </label>
                            <label for="gender" class="">
                               {{Form ::radio('gender','f')}}
                                F
                            </label>
                            </div>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                        </div>
                       

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">DOB</label>

                            <div class="col-md-6">
                                <!--<label class="radio-inline">
                                {{ Form::label('valid_from', 'Valid From') }}-->
                                    {{ Form::date('dob', null, array('class' => 'form-control')) }}
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                      

                        <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">    
                            <label for="industry" class="col-md-4 control-label">Industry</label>
                            <div class="col-md-6">                             
                        <select class="form-control" id="selectIndustry" name="industry" required focus>
                         <option value="" disabled selected>Please select industry</option>        
                             @foreach($industry_arr as $industry)
                            <option value="{{$industry}}">{{ $industry }}</option>
                            @endforeach
                       </select>
                       </div>
                     </div>

                     <div class="form-group{{ $errors->has('tier') ? ' has-error' : '' }}">    
                        <label for="tier" class="col-md-4 control-label">Tier</label>
                        <div class="col-md-6">                             
                        {{Form::select('tier', array(
                            ' ' => array(' ' => ''),
                            '$2000 - $4000' => array('3:2' => '3 bronze, 2 silver','4:1' => '4 bronze, 1 silver'),
                            '$4000 - $6000' => array('5:2' => '5 silver, 2 gold', '4:3' => '2 silver, 3 gold'),
                        ),'$2000 - $4000')}}
                        </div>
                    </div>


          

                    



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
