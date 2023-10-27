@extends('base')

@section('content')

@section('title',"Vendz | Message")

<div class="d-flex flex-nowrap" style="width: 100%; padding: 0 2%">

<style>
    .discussion {
        width: 90%;
        margin: 0 auto
    }
</style>
    <div class="discussion">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" style="padding: 15px 25px 0">
            @if (@session("success"))
            <div class="alert alert-success">
                {{@session('success')}}
            </div>
            @endif
            <span class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">

              <span class="fs-5 fw-semibold">Ajouter une catégorie</span>
            </span>
            <form class="p-4 row" style="width: 100%" method="post" action="">
                @csrf
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
                    <label for="name" class="form-label">Nom de la catégorie</label>
                    <input type="text" class="form-control @error("name") is-invalid @enderror" id="name" name="name" value="{{@old("name")}}">
                    @error("name")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="float-end col-lg-12 col-md-12 col-sm-12s">
                    <button type="submit" class="btn btn-primary" style="width: 12%">Submit</button>
                </div>
              </form>
          </div>

    </div>
</div>



@endsection
