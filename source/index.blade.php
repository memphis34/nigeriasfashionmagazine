@extends('_layouts.master')

@section('content')
    <style>
     h1{
     text-align: center;
     }
     p{
     text-align: center;
     }
     .img{
     display: flex;
     justify-content: center;
     align-content: center;
     }
     </style>
    <h1 style="color:dodgerblue">NIGERIA FASHION MAGAZINE</h1>

    <p>Africa's award winning fashion and style magazine spread across 35 countries in the world with channels of distribution. Office No 92c adeola Adelu victoria Island Lagos and No 6a Edinbirhh hallow Essex cm 20-2je eastern region England </p>

     


    <div class="img">
        <img src="{{ media('logo.jpg') }}" alt="ko-fi" width="300" height="260">
</div>

    

    

    
@endsection
