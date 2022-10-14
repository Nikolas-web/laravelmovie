@extends('layouts.main')

<html lang="en">

@section('container')

	<h1>List Film</h1>
	
	<div class="my-4 col-12 col-sm-1 col-md-5 mb-3">
        <form action="" method="get">   
            <div class="input-group mb-3">
                <input type="text" class="form-control"  placeholder="nyari apa hayo..." name="nyari apa hayo...">
                <button class="input-group-text btn btn-dark" >Search</button>
            </div>
        </form>
    </div>
    <!-- show blade -->
	<div class="col-md-8" style="max-height: 1200px; overflow:hidden;">
		<img src="data:image/jpeg;base64,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" class="row justify-content-center mb-1" width="">
        <div class="card-body">
            <h1>JAILANGKUNG</h1>
			<div class="text-danger">
			   <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
               <i class='far fa-star'></i>
            <br>
			</div>
			<p>kwdvbiegbfekdgbcekj</p>

            <h3>Cast
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                </button>
            </h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Ferdy-<span class="text-muted font-italic">Lukmas Sardi</span</li>
                <li class="list-group-item">Rama-<span class="text-muted font-italic">Jefri Nichol</span</li>
            </ul>
            <h3>Comments</h3>
            <p>No comments</p>
            <form action="#" method="POST">
                <input type="text" class="form-control" placeholder="say something...">
                <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
            </form>
		</div>
        <div class="card-footer">
            <form action="#">
                <button type="submit" class="btn btn-link float-right">Delete</button>
            </form>
        </div>
	</div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Cast</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <h1>Cast Role</h1>
                <form action="#" method="POST">
                    <div class="form-group">
                        <select name="cast_film_name">
                               <option value="" disable selected>Chose Cast</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="cast_film_role">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1>New Cast</h1>
                <form action="#" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="cast_name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="cast_image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection