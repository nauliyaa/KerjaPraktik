@extends('layouts.nav')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<div class="row justify-content-center">
    <div class="col-sm-11">
      <h2></h2>
        <div class="row">
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="{{ Vite::asset('resources/images/procurement.png') }}" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Procurement</h3>
               </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="{{ Vite::asset('resources/images/hr.png') }}" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Human Resource</h3>
               </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="{{ Vite::asset('resources/images/finance.png') }}" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Finance</h3>
               </div>
            </div>
            </div>
        </div>
        @vite('resources/js/app.js')
   </div>
</div>
@endsection