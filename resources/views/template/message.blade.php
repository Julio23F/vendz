@extends('base')

@section('content')

@section('title',"Vendz | Message")

<div class="d-flex flex-nowrap" style="width: 100%; padding: 0 2%">
    <style>
        .liste_amis {
            width: 505px; /* Définissez la largeur de votre élément div */
            height: 500px; /* Définissez la hauteur de votre élément div */
            overflow: auto; /* Active la barre de défilement automatiquement lorsque le contenu dépasse la taille définie */

        }
    </style>
    <div class="liste_amis" >
        <div class="d-flex flex-column align-items-stretch flex-shrink-0" style="width: 100%;background-color: white">
            <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold">Liste des messages</span>
            </div>
            <div class="list-group list-group-flush border-bottom scrollarea">
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>

                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action active py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">FARALAHY Julio</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Je vous ai déjà envoyé l'argent</div>
                </a>

            </div>
          </div>


    </div>

    <div class="discussion" style="margin-left: 20px;background-color: white">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0">
            <div href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-5 fw-semibold">John Doe</span>
            </div>
            <div class="list-group list-group-flush border-bottom scrollarea">

                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Moi</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">John Doe</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">John Doe</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">Moi</strong>
                    <small>Wed</small>
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>


            </div>
          </div>







    </div>
</div>



@endsection
