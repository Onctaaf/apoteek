@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" id="colmd8">

                  <section class="scrollclass" id="scrollclass">
                    <form id="formid" action="/generatePdf" method="post" onsubmit="return validateForm()" name="test">
                      {{ csrf_field() }}
                      <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                        <div class="inMiddenVraag">
                        <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                           <p><input type="text" name="fname" placeholder="voornaam"><br>
                           <input type="text" name="lname" placeholder="achternaam"><br></p>
                           <!-- <p onclick="scrolldown()" class="arrowDown" style="cursor: pointer; ">></p> -->
                           <img onclick="scrolldown()" id="kaasbroodje" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                         </div>
                       </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van hoofdpijn?</p>
                         <input type="radio" name="hoofdpijn" value="Ja" required>Ja<br>
                         <input type="radio" name="hoofdpijn" value="Nee">Nee<br>
                         <input type="radio" name="hoofdpijn" value="Beetje">Beetje<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Wat voor hoofdpijn?</p>
                         <input type="radio" name="wathoofdpijn" value="Kloppend" required>Kloppend<br>
                         <input type="radio" name="wathoofdpijn" value="Bonkend">Bonkend<br>
                         <input type="radio" name="wathoofdpijn" value="Stekend">Stekend<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Bent u laatst vaak moe?</p>
                         <input type="radio" name="moe" value="Ja" required>Ja<br>
                         <input type="radio" name="moe" value="Nee">Nee<br>
                         <input type="radio" name="moe" value="Beetje">Beetje<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u een tekenbeet opgemerkt?</p>
                         <input type="radio" name="opgemerkt" value="Ja" required>Ja<br>
                         <input type="radio" name="opgemerkt" value="Nee">Nee<br>
                         <input type="radio" name="opgemerkt" value="Twijfel">Twijfel<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Wanneer heeft u de tekenbeet opgemerkt?</p>
                         <input type="radio" name="wanopgemerkt" value="Binnen24">Binnen 24 uur na de beet<br>

                        <input type="radio" name="wanopgemerkt" value="Na24" required>Na 24 na de beet<br>
                         <input type="radio" name="wanopgemerkt" value="Twijfel">Ik weet het niet<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u de teek verwijderd?</p>
                         <input type="radio" name="verweiderd" value="Ja" required>Ja<br>
                         <input type="radio" name="verweiderd" value="Nee">Nee<br>
                         <input type="radio" name="verweiderd" value="Beetje">I tried<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Wilt u een informatie filmpje hoe je een teek verwijderd?</p>
                         <input type="radio" name="filmpje" value="Later">Ja, na deze vragenlijst<br>
                         <input type="radio" name="filmpje" value="Nee">Nee<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u een rode kring?</p>
                         <input type="radio" name="kring" value="Ja" required>Ja<br>
                         <input type="radio" name="kring" value="Nee">Nee<br>
                         <input type="radio" name="kring" value="Beetje">Misschien<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u een vorm van Lyme?</p>
                         <input type="radio" name="uLyme" value="Ja" required>Ja<br>
                         <input type="radio" name="uLyme" value="Nee">Nee<br>
                         <input type="radio" name="uLyme" value="Beetje">Misschien<br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Hoe oud bent u?</p>
                         <input type="number" name="age" value="" required>
                         <br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Zou u een foto willen uploaden van de tekenbeet?</p>
                         <input type="radio" name="fotoLoad" value="Ja" required>Ja<br>
                         <input type="radio" name="fotoLoad" value="Nee">Nee<br>
                         <br>
                         <input type="file" name="fileToUpload" id="fileToUpload"><br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p><input type="text" name="fname" placeholder="E-mail huisarts" style="width: 40%;" required><br>
                         <input type="text" name="lname" placeholder="eigen E-mail" style="width: 40%;" required><br></p>
                         <input type="submit" value="Submit" class="submitButton" style="width: 40%;"><br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <br>
                     <br>
                     <br>
                     <br>

                  </form>
                  </section>
                  <!-- <section class="scrollclass">
                    worst
                  </section>
                  <section class="scrollclass">
                    brood
                  </section> -->
                </div>
                <div>
                </div>

                <script src="http://cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.js"></script>
<script src="http://yourjavascript.com/6140341282/jquery-scrollify-min.js"></script>

<script>
  $( ".Apoteek" ).removeClass( "currentPage" );
  $( ".Test" ).addClass( "currentPage" );
  $( ".Faq" ).removeClass( "currentPage" );
  $( ".Contact" ).removeClass( "currentPage" );

  $(function () {
    $.scrollify({
        section: ".card",
        sectionName: false,
        scrollSpeed: 700,
        offset: -70,
        interstitialSection: ".card, .flow-header"
    });
});
  $(function(){
              $(".test").css({"height":$(window).height()});
              $.scrollify({
                  section:".test"
              });
          });


  // $(window).scroll(function (event) {
  //   var scroll = $(window).scrollTop();
  //   console.log(scroll);
  //   console.log(document.body.scrollHeight);
  //
  //   var helemaal = document.body.scrollHeight;
  //   var temp = helemaal/100;
  //   var positie = scroll/temp;
  //   var parseIntergert = parseInt(positie);
  //   console.log(parseIntergert);
  //   console.log("Ding", parseIntergert);
  //
  //   $('#inhoudLine').css("width", ""+parseIntergert+"%");
  //
  //
  //   });
  // function scrollNext(){
  //   console.log("Activeer scrolllsss");
  //   $.scrollify.next();//Doesnt work bro
  // }

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
