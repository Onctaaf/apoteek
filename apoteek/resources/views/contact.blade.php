@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container" scroll="no" style="overflow: hidden">
    <div class="row justify-content-center" scroll="no" style="overflow: hidden">
        <div class="col-md-8" scroll="no" style="overflow: hidden">

                  <section class="scrollclass">

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
  console.log("Fix links");
  $( ".Apoteek" ).removeClass( "currentPage" );
  $( ".Test" ).removeClass( "currentPage" );
  $( ".Faq" ).removeClass( "currentPage" );
  $( ".Contact" ).addClass( "currentPage" );


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
  function scrollNext(){
    console.log("Activeer scrolllsss");
    $.scrollify.next();//Doesnt work bro
  }


  // window.onbeforeunload = function(e) {
  //   console.log('Dialog text here.');
  // };
  // $(window).unload(function() {
  //   alert('Handler for .unload() called.');kaas
  // });
</script>
    </div>
    <form action="/action_page.php" method="get">
      <div class="fullSizeVraag test colorpad" style="position fixed; overflow: hidden; ">
        <div class="inMiddenVraag" scroll="no" style="overflow: hidden">
           <p>
           <input id="naam" class="textveld" type="text" name="naam" placeholder="Naam" style="margin-top: .3em; width: 50%;" required><br>
           <input id="email" class="textveld" type="text" name="email" placeholder="E-mail" style="margin-top: .3em; width: 50%;" required><br>
             <input id="onderwerp" class="textveld" type="text" name="subject" placeholder="Onderwerp" style="margin-top: .3em; width: 24.7%;" required>

             <select placeholder="categorie" style="width: 24.8%; height: 2em;">
                 <option value="ideeën">Ideeën</option>
                 <option value="klachten">Klachten</option>
                 <option value="vragen">Vragen</option>
                 <option value="anders">Anders</option>
             </select>

             <br>
           <textarea id="text" class="textveld" type="text" name="content" placeholder="Inhoud" required style="margin-top: .3em; width: 50%; font-size: 1em; resize: none; border-radius: 5px;" rows="6" maxlength="800"></textarea><br>
           <input class = "submitButton" type="submit" value="Submit">
         </p>
           <!-- <p onclick="scrolldown()" class="arrowDown" style="cursor: pointer; ">></p> -->
         </div>
       </div>
     </form>
</div>
@endsection
