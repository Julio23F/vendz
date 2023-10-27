@extends('base')

@section('title',"Vendz | Article")
@section('content')


<div class="d-flex flex-column align-items-stretch flex-shrink-0 row" style="width: 100%; ">


    <div class="info card col-3" style=" height: 250px; background-color: white;position:fixed">
        <div class="card-body" style="text-align: center; ">
            Profil
            <div style="border-radius: 50%; overflow:hidden; margin: 0 auto; width: 80px">
                <img src="images/cYQSliFKYCdM1UnrHxXsJ2A3g2hQCjyjxw7ivrph.jpg" style="width: 100%" >
            </div>

        </div>
    </div>
    <div class="col-9" style="margin-left:25%;">
        <div style="width: 57%; margin: 0 auto;background-color: white; border-radius:12px;" class="p-2">
            @foreach ($articles as $article)
                <section class="card m-3">
                    <div class="card-header" style="background-color: white">
                        <div class="mb-3" style="display: flex; gap: 15px">
                            <div style="width: 50px;height: 50px; border-radius: 100%; overflow:hidden">
                                <img src="/images/cYQSliFKYCdM1UnrHxXsJ2A3g2hQCjyjxw7ivrph.jpg" alt="" style="width: 100%; height: 100%">
                            </div>
                            <div>
                                <h5>FARALAHY Julio</h5>
                                <div style="margin-top: -5px">
                                    <span class="text-secondary" style="font-size: 0.85em">{{$article->title}},</span>
                                    <span class="badge bg-secondary">{{$article->category?->name}}</span>
                                </div>
                            </div>

                        </div>
                        <p class="desciption">{{$article->description}}</p>
                    </div>
                    <img src="images/{{$article->image}}" class="card-img-top" style="border-radius: 0%">
                    <div class="card-body">

                        <button class="btn btn-primary float-end" style="text-align: center">Message</button>
                    </div>

                </section>
            {{-- <section class="card">
                <img src="images/{{$article->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </section> --}}
            @endforeach
        </div>

    </div>



</div>


@endsection
