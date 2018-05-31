@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                  <section class="scrollclass">
                    <form action="/action_page.php" method="get">
                      <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                        <div class="inMiddenVraag">
                           Voornaam: <input type="text" name="fname"><br>
                           Achternaam: <input type="text" name="lname"><br>
                         </div>
                       </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Heeft u last van hoofdpijn?</p>
                         <input type="radio" name="hoofdpijn" value="Ja">Ja<br>
                         <input type="radio" name="hoofdpijn" value="Nee">Nee<br>
                         <input type="radio" name="hoofdpijn" value="Beetje">Beetje<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Wat voor hoofdpijn?</p>
                         <input type="radio" name="wathoofdpijn" value="Kloppend">Kloppend<br>
                         <input type="radio" name="wathoofdpijn" value="Bonkend">Bonkend<br>
                         <input type="radio" name="wathoofdpijn" value="Stekend">Stekend<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Bent u laatst vaak moe?</p>
                         <input type="radio" name="moe" value="Ja">Ja<br>
                         <input type="radio" name="moe" value="Nee">Nee<br>
                         <input type="radio" name="moe" value="Beetje">Beetje<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Heeft u een tekenbeet opgemerkt?</p>
                         <input type="radio" name="opgemerkt" value="Ja">Ja<br>
                         <input type="radio" name="opgemerkt" value="Nee">Nee<br>
                         <input type="radio" name="opgemerkt" value="Twijfel">Twijfel<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Wanneer heeft u de tekenbeet opgemerkt?</p>
                         <input type="radio" name="wanopgemerkt" value="Binnen24">Binnen 24 uur na de beet<br>

                        <input type="radio" name="wanopgemerkt" value="Na24">Na 24 na de beet<br>
                         <input type="radio" name="wanopgemerkt" value="Twijfel">Ik weet het niet<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Heeft u de teek verweiderd?</p>
                         <input type="radio" name="verweiderd" value="Ja">Ja<br>
                         <input type="radio" name="verweiderd" value="Nee">Nee<br>
                         <input type="radio" name="verweiderd" value="Beetje">I tried<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Wilt u een informatie filmpje hoe je een teek verweiderd?</p>
                         <input type="radio" name="filmpje" value="Ja">Ja<br>
                         <input type="radio" name="filmpje" value="Nee">Nee<br>
                         <input type="radio" name="filmpje" value="Later">Ja, na deze vragenlijst<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Heeft u een rode kring?</p>
                         <input type="radio" name="kring" value="Ja">Ja<br>
                         <input type="radio" name="kring" value="Nee">Nee<br>
                         <input type="radio" name="kring" value="Beetje">Misschien<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Heeft u een vorm van Lyme?</p>
                         <input type="radio" name="uLyme" value="Ja">Ja<br>
                         <input type="radio" name="uLyme" value="Nee">Nee<br>
                         <input type="radio" name="uLyme" value="Beetje">Misschien<br>
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Hoe oud bent u?</p>
                         <input type="number" name="age" value="">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         <p>Upload de foto van uw tekenbeet</p>
                         <input type="radio" name="fotoLoad" value="Ja">Ja<br>
                         <input type="radio" name="fotoLoad" value="Nee">Nee<br>
                         <br>
                         <input type="file" name="fileToUpload" id="fileToUpload">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                         E-mail van huisarts: <input type="text" name="fname"><br>
                         Uw E-mail: <input type="text" name="lname"><br>
                         <input type="submit" value="Submit">
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
                </div><script src="http://cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.js"></script>
<script src="http://yourjavascript.com/6140341282/jquery-scrollify-min.js"></script>

<script>
  console.log('Wats deze');
  $(function(){
              $(".test").css({"height":$(window).height()});
              $.scrollify({
                  section:".test"
              });
          });
</script>
    </div>
</div>
@endsection
