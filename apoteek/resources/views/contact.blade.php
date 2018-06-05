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
           <input type="text" name="naam" placeholder="naam" style="margin-top: .3em; width: 50%;" required><br>
           <input type="text" name="email" placeholder="E-mail" style="margin-top: .3em; width: 50%;" required><br>
             <input type="text" name="subject" placeholder="onderwerp" style="margin-top: .3em; width: 24.7%;" required>

             <select placeholder="categorie" style="width: 24.8%; height: 2em;">
                 <option value="ideeën">ideeën</option>
                 <option value="klachten">klachten</option>
                 <option value="vragen">vragen</option>
                 <option value="anders">anders</option>
             </select>

             <br>
           <textarea type="text" name="content" placeholder="inhoud" required style="margin-top: .3em; width: 50%; font-size: .8em; resize: none;" rows="7" maxlength="800"></textarea><br>
           <input type="submit" value="Submit" style="width: 50%; background-color: #009688; border: 0; border-radius: 4px;">
         </p>
           <!-- <p onclick="scrolldown()" class="arrowDown" style="cursor: pointer; ">></p> -->
         </div>
       </div>
     </form>
</div>
@endsection
