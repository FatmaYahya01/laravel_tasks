@extends('layouts.app')

@section('title') Create @endsection

@section('content')
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-12">
            <div class="card" style="width: 18rem;" >
            <div class="card-header"> Post Info</div>
           <ul class="list-group list-group-flush">
             <li class="list-group-item"><strong>Title:-</strong>Special title treatment</li>
             <li class="list-group-item"><strong>Description:-</strong>With supporting text below as a natural lead-in to additinal content.</li>
           </ul>
           </div>
           <br><br>

            <div class="mb-12">
            <div class="card" style="width: 18rem;">
            <div class="card-header">Post Creator info</div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:-</strong>Ahmed</li>
                <li class="list-group-item"><strong>Email:-</strong>Ahmed@gmail.com</li>
                <li class="list-group-item"><strong>Created at:-</strong>Thursday 25th December 1975 02:15:16 PM</li>
                </ul>
            </div>
            </div>
         

        </form>
@endsection