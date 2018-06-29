@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >

                  <section class="scrollclass">
                    <div class="apoteekHome">
                      <p class="titelText" >Waarom de test doen?</p>
                      <p class="insideText">
                        Denkt u dat u lijd aan de ziekte van Lyme? Dan kunt bij ons de test doen. Op deze manier kunt u een indicatie krijgen en daarnaast alvast een begin van een eventueel vervolgonderzoek bij de huisarts.
                      </p>
                    </div>
                    <div class="apoteekHome">
                      <p class="titelText" >Wat kan ik op deze pagina naast de test?</p>
                      <p class="insideText">
                      Naast de test die wij hier te bieden hebben, hebben we ook nog vele weetjes en informatie over de lymeziekte zelf. Ook kunt u contact opnemen bij vragen en bij opmerking over de site.
                      </p>
                    </div>
                    <div class="apoteekHome">
                      <p class="titelText" >Hoe wordt de diagnose "de ziekte van Lyme" gesteld?</p>
                      <p class="insideText">
                        De ziekte van Lyme is een klinische diagnose. Dit betekent dat de arts de diagnose moet stellen op basis van de ziektegeschiedenis en symptomen. Bij het zien van een EM zal de arts de diagnose "ziekte van Lyme" stellen. Zonder een EM is de diagnose moeilijker te stellen. Vaak worden dan testen gebruikt. Deze testen zijn ter ondersteuning van de diagnose. Er kan niet een diagnose gesteld worden op grond van de uitslag van de test alleen. De testen kunnen om verschillende redenen zowel fout positieve als fout negatieve uitslagen geven.
                      </p>
                    </div>
                    <div class="apoteekHome">
                      <p class="titelText" >Hoe lang bestaat de ziekte van Lyme?</p>
                      <p class="insideText">
                        De oudst bekende beschrijving van een geval van de ziekte van Lyme stamt uit 1883. In dat jaar beschreef de Duitse arts Alfred Buchwald een huidaandoening bij een patiënt dat tegenwoordig bekend staat als acrodermatitis chronica atrophicans(ACA). Deze huidaandoening komt voor bij late Lyme.
In 1884 werden in Hongarije teken die aan een kat vast zaten, verzameld en bewaard. Meer dan een eeuw later wordt ontdekt dat ze geïnfecteerd waren met Borrelia burgdorferi (Bb). Dit is het oudst bekende geval van infectie.
Waarschijnlijk bestaat de ziekte van Lyme al veel langer.
                      </p>
                    </div>
                  </section>
                  <!-- <section class="scrollclass">
                    worst
                  </section>
                  <section class="scrollclass">
                    brood
                  </section> -->
                </div>

<script>
  console.log("Fix links");
  $( ".Apoteek" ).addClass( "currentPage" );
  $( ".Test" ).removeClass( "currentPage" );
  $( ".Faq" ).removeClass( "currentPage" );
  $( ".Contact" ).removeClass( "currentPage" );


  // window.onbeforeunload = function(e) {
  //   console.log('Dialog text here.');
  // };
  // $(window).unload(function() {
  //   alert('Handler for .unload() called.');
  // });
</script>
    </div>
</div>
@endsection
