@extends('base')

@section('content')

@section('title',"Vendz | Message")

<div class="d-flex flex-nowrap" style="width: 100%; padding: 0 2%">

<style>
    .discussion {
        width: 90%;
        margin: 0 auto;

    }
</style>
    <div class="discussion">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0" style="padding: 15px 25px 0;background-color: white">
            @if (@session("success"))
            <div class="alert alert-success">
                {{@session('success')}}
            </div>
            @endif
            <span class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">

              <span class="fs-5 fw-semibold">Publier un article</span>
            </span>
            <form class="p-4 row" style="width: 100%" method="post" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
                    <label for="title" class="form-label">Titre de l'article</label>
                    <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{@old("title")}}">
                    @error("title")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
                    <label for="price" class="form-label">Prix de l'article en Ar</label>
                    <input type="number" class="form-control @error("price") is-invalid @enderror" id="price" name="price" value="{{@old("price")}}">
                    @error("price")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
                    <label for="city" class="form-label">Localisation actuelle</label>
                    <input type="text" class="form-control @error("city") is-invalid @enderror" id="city" name="city" value="{{@old("city")}}">
                    @error("city")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 col-lg-8 col-md-8 col-sm-8">
                    <label for="description" class="form-label">Description</label>
                    <textarea  class="form-control @error("description") is-invalid @enderror" id="description" name="description">{{@old("description")}}</textarea>
                    @error("description")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4">
                    <label for="category_id" class="form-label">Catégorie</label>
                    <select  class="form-control @error("category_id") is-invalid @enderror" id="category_id" name="category_id">
                        <option value="">Sélectionner une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>
                    @error("category_id")
                        <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="mb-3 ">
                        <label for="image" class="form-label">Photo de l'article</label>
                        <input type="file" class="form-control @error("image") is-invalid @enderror" id="imageInput" name="image">

                        @error("image")
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="vendu" name="vendu">
                        <label class="form-check-label" for="vendu">Vendu</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary ps-5 pe-5">Submit</button>
                    </div>
                </div>

                {{-- Affiche l'image sélectioné --}}
                <div class="mb-3 col-lg-4 col-md-4 col-sm-4" style="width: 150px;margin-left:100px; z-index:500">
                    <img id="previewImage" src="" alt="Aperçu de l'image" class="img-thumbnail d-none">
                </div>

              </form>
          </div>

    </div>
</div>
<script>
    document.getElementById('imageInput').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                document.getElementById('previewImage').setAttribute('src', event.target.result);
                document.getElementById('previewImage').classList.remove('d-none'); // Afficher l'élément
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('previewImage').setAttribute('src', '');
            document.getElementById('previewImage').classList.add('d-none'); // Masquer l'élément
        }
    });
</script>


@endsection
