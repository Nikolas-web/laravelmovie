@extends('dashboard.layouts.main')

@section('container')
<div class="card my-4 col-12 col-sm-1 col-md-5 mb-3">
    <img class="card-image-top" src="data:image/jpeg;base64,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" width="200">
    <div class="card-body">
        <h1>Rama</h1>
        <p>All Movies of Nicholas</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="#">Jailangkung</a>
          </li>
        </ul>
    </div>
    <div class="card-footer">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-link float-right">Delete</button>
        </form>
    </div>
</div>
@endsection