@extends('layouts.main_layout.main_header')
@section('content')

<main>
    <h1>Personalized one</h1>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />
    <form method="POST" action="{{ url('/personalized/insert_data') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <input type="hidden" name="status" class="form-control" value="unattended">
            <input type="hidden" name="complain_date" value="2021-05-18">
            <input class="input--style-1" type="text" placeholder="What is your Names" name="name" required="">
        </div>
        <div class="input-group">
            <input class="input--style-1" type="text" placeholder="What is your Primary phone number (07xxxxxxxx)" name="phone" maxlength="10" required="">
        </div>
        <div class="input-group">
            <input class="input--style-1" type="email" placeholder="Email" name="email">
        </div>
        <div class="row row-space">
            <div class="col-4">
                <div>
                    Date Of Incident:                     
                </div>
            </div>
            <div class="col-8">
                <div class="input-group">
                    {{-- Date Of Incident:  --}}
                    <div class="col-md-12">
                        <input class="input--style-1 js-datepicker" type="date" name="date_of_incident" required="">
                    </div>
                    {{-- <input type="date" id="birthday" placeholder="Date Of Incident" name="birthday"> --}}
                    {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                </div>
            </div>
            
        </div>
        
        <div class="input-group">
            <input class="input--style-1" type="textarea" placeholder="Place of Residence" name="place_of_residence" required="">
        </div>
        
        <div class="input-group">
            <input class="input--style-1" type="textarea" placeholder="Breifly state your compain" name="complain" required="">
        </div>
        
        <div class="form-group">
            <div class="row">
                <label class="col-md-4" align="left">Image if any:</label>
                <div class="col-md-8">
                    <input type="file" name="user_image" />
                </div>
            </div>
        </div>
        
        
        <div class="p-t-20">
            <button class="btn btn--radius btn--green" type="submit" name="save">Submit</button>
        </div>
    </form>
</main>
@endsection
