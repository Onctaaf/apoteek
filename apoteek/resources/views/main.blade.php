@extends('layouts.app')
@section('title', 'Page Title')
@section('body', 'main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
                  <section class="scrollclass">
                    <div class="mainHome">
                      <p class="titelText" >De test</p>
                      <p class="insideText">
                        Denkt u de ziekte van Lyme te hebben? <br><br>Doe hier de test en neem de resultaten mee naar de huisarts om zo snel mogelijk duidelijk te hebben over uw probleem. Wij voorzien u van een pdf bestand dat u mee kunt nemen naar de huisarts of van tevoren kunt mailen om zo uw tijd zo efficiënt mogelijk te kunnen benutten.
                      </p>
                      <input onclick="window.location.href = 'home'" class = "submitButton" type="submit" value="Doe de test nu!" style="width: 50%; margin-left: 25%; margin-bottom: 15px;  font-size: 1.5em;">
                    </div>
                  </section>
                </div>
<script>
  console.log("Fix links");
  $( ".Main" ).addClass( "currentPage" );
  $( ".Apoteek" ).removeClass( "currentPage" );
  $( ".Test" ).removeClass( "currentPage" );
  $( ".Faq" ).removeClass( "currentPage" );
  $( ".Contact" ).removeClass( "currentPage" );
</script>
    </div>
</div>
@endsection
