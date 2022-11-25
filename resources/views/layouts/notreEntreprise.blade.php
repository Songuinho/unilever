@extends('master', ["fit" => "entreprise"])

@section('heading')
Notre entreprise
@endsection

@section('body')

<div class="global-unilever">

    <div class="unilever-div">
        <h1>Nous sommes Unilever</h1>
        <p>Nous sommes 148 000 personnes à travers le monde, nous avons plus de 400 marques
            dans plus de 190 pays, nous sommes une entreprise mondiale avec un objectif mondial.
        </p>
    </div>

    <div class="img-logo1">
        <img src="{{ asset('img/logo1.png') }}">
    </div>

</div>

<div class="text">
    <h1>Nous faisons du mode de vie durable un standard.</h1>
    <p>C’est à cela que nous travaillons et que nous cherchons à maintenir toutes nos performances, faisant de nous un véritable leader.</p>
    <p>En 1883, le savon Sunlight a été lancé au Royaume-Uni par notre fondateur. Il faisait figure de précurseur, il était innovant et il avait un but : populariser la propreté et la mettre à la portée des gens ordinaires. À cette époque, il s’agissait déjà de construire un mode de vie durable. Aujourd’hui, nous possédons plus de 400 marques et nous sommes toujours guidés par un idéal.</p>
    <p>Nous souhaitons faire plus de bien pour notre planète et notre société, et pas seulement moins de mal. Nous souhaitons agir face aux questions sociales et environnementales auxquelles le monde est confronté et nous voulons améliorer la vie des gens avec nos produits.</p>
    <p>Depuis plus de 120 ans, nous sommes pionniers dans l’innovation – nous comptons le rester et faire cela de façon durable.</p>
    <a href="#">Consultez notre site web mondial pour en savoir plus sur la façon dont nous travaillons
    </a>
</div>

<!-- Worl-img -->

<div class="world-img">
    <img style="color: #fff;" src="https://cdn.sanity.io/images/92ui5egz/production/d1d7c5d3e6904118d2f655eb426ca7fb3682ee66-192x170.svg" alt="" width="90px" height="80px">
    <p>Nous sommes une entreprise réellement mondiale</p>
</div>

<div class="milliards-div">

    <div class="milliards-div-1 same milliards-bg">
        <p class="milliards-div-1-p1">190</p>
        <p class="milliards-div-1-p2">pays</p>
        <p class="milliards-div-1-p3">Nos marques sont disponibles dans + de</p>
    </div>

    <div class="milliards-div-2 same">
        <p class="milliards-div-2-p1"><span class="height-span">3,4</span> milliards</p>
        <p class="milliards-div-2-p2">de personnes</p>
        <p class="milliards-div-2-p3">utilisent nos produits chaque jour</p>
    </div>

    <div class="milliards-div-3 same milliards-bg">
        <p class="milliards-div-3-p1"> <span class="height-span">52</span> milliards d'euros</p>
        <p class="milliards-div-3-p2">de chiffre d'affaires en 2021</p>
    </div>

</div>


<!-- clean-img -->

<div class="clean-img">

    <div class="world-img">
        <img class="uol-c-stat-row__icon" src="https://cdn.sanity.io/images/92ui5egz/production/d08bfaf9cafa324f3ce420ba5a33b47f61c5c9d1-183x183.svg" alt="" width="90" height="90" data-testid="uol-c-stat-row-icon" aria-hidden="true" loading="lazy">
        <p style="color: #e60067;">Nous possédons des marques engagées</p>
    </div>

    <div class="milliards-div mt-4">

        <div class="milliards-div-1 same milliards-bg same-clean">
            <p class="milliards-div-1-p1 text-white">400 +</p>
            <p class="milliards-div-1-p2 text-white">marques</p>
            <p class="milliards-div-1-p3 text-white">mondialement connues</p>
        </div>

        <div class="milliards-div-2 same same-clean padding-div">
            <p class="milliards-div-2-p1text-white"><span class="height-span">13</span></p>
            <p class="milliards-div-2-p2 text-white">marques</p>
            <p class="milliards-div-2-p3 text-white">avec des ventes s’élevant à plus d’1 milliard d’euros en 2021</p>
        </div>

        <div class="milliards-div-3 same milliards-bg same-clean ">
            <p class="milliards-div-3-p1 text-white"> <span class="height-span">13</span></p>
            <p class="milliards-div-2-p2 text-white">marques</p>
            <p class="milliards-div-1-p3 text-white">Dans le top 50 de Kantar, nous appartiennent</p>
        </div>

    </div>
</div>

<!-- people -->

<div class="people">

    <div class="world-img">
        <img class="uol-c-stat-row__icon" src="https://cdn.sanity.io/images/92ui5egz/production/c097741db7bb37bc002aff1d9a389322eec428a8-183x183.svg" alt="" width="90" height="90" data-testid="uol-c-stat-row-icon" aria-hidden="true" loading="lazy">
        <p style="color: #e60067;">Nous possédons des marques engagées</p>
        <a href="#" class="text-primary fs-5">En savoir plus dans Carrières</a>
    </div>

    <div class="milliards-div mt-4">

        <div class="milliards-div-1 same-people milliards-bg same-people">
            <p class="milliards-div-1-p1 text-primary">148 000</p>
            <p class="milliards-div-1-p2 text-primary">employés</p>
            <p class="milliards-div-1-p3 text-primary">partout dans le monde</p>
        </div>

        <div class="milliards-div-2 same-people same-people padding-div">
            <p class="milliards-div-2-p1 text-primary"><span class="height-span-people">50</span></p>
            <p class="milliards-div-2-p2 text-primary">pays</p>
            <p class="milliards-div-2-p3 text-primary">dans lesquels nous sommes le premier employeur des jeunes diplômés du secteur PGC</p>
        </div>

        <div class="milliards-div-1 same-people milliards-bg same-people">
            <p class="milliards-div-1-p1-people text-primary">Parité à 52/48 %</p>
            <p class="milliards-div-1-p2 text-primary">dans nos postes</p>
            <p class="milliards-div-1-p3 text-primary">de direction</p>
        </div>

        <div class="milliards-div-3 same-people milliards-bg same-people ">
            <p class="milliards-div-3-p1 text-primary"> <span class="height-span">92 %</span></p>
            <p class="milliards-div-2-p2 text-primary">de nos leaders</p>
            <p class="milliards-div-1-p3 text-primary">sont natifs de leurs marchés locaux</p>
        </div>

    </div>
</div>





@endsection