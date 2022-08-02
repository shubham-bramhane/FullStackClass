@extends('layouts.main')



@section('page-content')


<div class="container">
    <h1 class="text-center mt-2">data form</h1>
    <form action="{{route('course.store')}} " method="post">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
