@extends('layouts.app')
@section('title')
    Bookings 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bookings</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('bookings.create')}}" class="btn btn-primary form-btn">Booking <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('bookings.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

