@extends('master', ["fit" => "entreprise", "fot" => "entreprise"])

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
@endsection