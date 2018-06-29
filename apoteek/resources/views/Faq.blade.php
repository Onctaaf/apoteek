@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >

                  <section class="scrollclass">
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Er zit een <span class="highlightSpan">teek</span> op mijn lichaam. Wat nu?</p>
                      <p class="antwoordFaq">Zorg dat u de teek zo spoedig mogelijk wordt verwijderd en doe daarna de test op onze website. Als u niet weet hoe dit moet volg dan de <a href="https://www.youtube.com" target="_blank">video<a>.<p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Ik heb een <span class="highlightSpan">teek</span> gevonden. Krijg <span class="highlightSpan">ik</span> nu <span class="highlightSpan">lyme </span>?</p>
                      <p class="antwoordFaq">Niet persé, maar een klein percentage van mensen die een teek gehad hebben krijgen lyme. <br>Zorg dat u de test op onze website invult om de kans zo klein mogelijk te maken dat u in een ernstig stadium van lyme terechtkomt.<p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Hoe herken ik de ziekte van <span class="highlightSpan">Lyme</span>?</p>
                      <p class="antwoordFaq">De ziekte van Lyme is erg lastig te herkennen. Er zijn veel mogelijke symptomen die kunnen voorkomen. <br>De beste manier om erachter te komen of je lyme hebt
                        is kijken of er een rode kring ontstaat rondom de tekenbeet. Als u deze kring heeft betekent dit dat u zeker lyme heeft.<br><br> Andere symptomen (die lyme niet met zekerheid aangeven)
                         zijn hoofdpijn, spierpijn, last van ogen, vermoeidheid en veel meer. Als u niet zeker bent is het een goed idee om de test te maken en daarna te beslissen of u naar de huisarts wilt of niet.<p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Hoe wordt de <span class="highlightSpan">diagnose</a> "de ziekte van <span class="highlightSpan">Lyme</a>" gesteld?</p>
                      <p class="antwoordFaq">De ziekte van Lyme is een klinische diagnose. Dit betekent dat de arts de diagnose moet stellen op basis van de ziektegeschiedenis en symptomen. Bij het zien van een EM zal de arts de diagnose "ziekte van Lyme" stellen. Zonder een EM is de diagnose moeilijker te stellen. Vaak worden dan testen gebruikt. Deze testen zijn ter ondersteuning van de diagnose. Er kan niet een diagnose gesteld worden op grond van de uitslag van de test alleen. De testen kunnen om verschillende redenen zowel fout positieve als fout negatieve uitslagen geven.</p></div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Hoe raakt men <span class="highlightSpan">geïnfecteerd</span> met de Lyme-<span class="highlightSpan">bacterie</span>?</p>
                      <p class="antwoordFaq">  De Lyme-bacterie wordt meestal overgedragen door de beet van een geïnfecteerde teek. Teken zijn kleine parasieten die vooral voorkomen in bossen en velden. De teek hecht zich vast in de huid en zuigt zich vol met bloed. Als de teek is geïnfecteerd, dan kunnen de Lyme-bacteriën worden overgedragen naar de mens.
Ook is aangetoond dat een zwangere vrouw die geïnfecteerd is met de Lyme-bacterie, deze kan overdragen op het ongeboren kind.
Andere besmettingswegen die door sommigen worden vermoed, zijn borstvoeding, menselijk en dierlijk contact, bloedzuigende insecten (muggen, vliegen, vlooien), bloedtransfusies en transplantaties, maar deze besmettingswegen zijn (nog) niet wetenschappelijk aangetoond.
                <p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Hoe wordt de ziekte van Lyme <span class="highlightSpan">behandeld</span>?</p>
                      <p class="antwoordFaq">Maakt u zich geen zorgen. U kunt altijd bij ons terecht op de contact pagina als u meer informatie wilt. We proberen u zo snel mogelijk van een goed antwoord te voorzienen<p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Kunnen <span class="highlightSpan">huisdieren</span> ook de ziekte van Lyme krijgen?</p>
                      <p class="antwoordFaq">Maakt u zich geen zorgen. U kunt altijd bij ons terecht op de contact pagina als u meer informatie wilt. We proberen u zo snel mogelijk van een goed antwoord te voorzienen<p>
                    </div>
                    <div class="apoteekFaq">
                      <p class="vraagFaq" >Mijn vraag is niet <span class="highlightSpan">beantwoord</span> wat nu ?</p>
                      <p class="antwoordFaq">Maakt u zich geen zorgen. U kunt altijd bij ons terecht op de contact pagina als u meer informatie wilt. We proberen u zo snel mogelijk van een goed antwoord te voorzienen<p>
                    </div>
                  </section>
                  <!-- <section class="scrollclass">
                    worstdfasdfadf
                  </section>
                  <section class="scrollclass">
                    brood
                  </section> -->
                </div><script src="http://cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.js"></script>
<script src="http://yourjavascript.com/6140341282/jquery-scrollify-min.js"></script>

<script>
  console.log("Fix links");
  $( ".Apoteek" ).removeClass( "currentPage" );
  $( ".Test" ).removeClass( "currentPage" );
  $( ".Faq" ).addClass( "currentPage" );
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
