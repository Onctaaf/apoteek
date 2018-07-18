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
                          <br><br>
                      <!--  <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup"> -->
                           <p><input type="text" class="textveld" name="fname" placeholder="Voornaam"><br>
                           <input type="text" class="textveld" name="lname" placeholder="Achternaam"><br></p>
                           <!-- <p onclick="scrolldown()" class="arrowDown" style="cursor: pointer; ">></p> -->
                           <img onclick="scrolldown()" id="kaasbroodje" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                         </div>
                       </div>

                       <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                         <div class="inMiddenVraag">
                         <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                           <p>Hoe oud bent u?</p>
                           <input type="number" name="age" value="">
                           <br>
                           <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                         </div>
                       </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van hoofdpijn?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                           <input type="radio" name="hoofdpijn" value="Ja"> Ja            <br>
                           <input type="radio" name="hoofdpijn" value="Nee"> Nee           <br>
                           <input type="radio" name="hoofdpijn" value="Ik twijfel"> Ik twijfel    <br>
                         </div>
                       <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Wat voor hoofdpijn?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="wathoofdpijn" value="Kloppend"> Kloppend<br>
                         <input type="radio" name="wathoofdpijn" value="Bonkend"> Bonkend<br>
                         <input type="radio" name="wathoofdpijn" value="Stekend"> Stekend<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Bent u laatst vaak moe?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="moe" value="Ja"> Ja<br>
                         <input type="radio" name="moe" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u een tekenbeet opgemerkt?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="opgemerkt" value="Ja"> Ja<br>
                         <input type="radio" name="opgemerkt" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u de teek verwijderd?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="verweiderd" value="Ja"d> Ja<br>
                         <input type="radio" name="verweiderd" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Wilt u een informatieve video zien over hoe de teek verwijderd moet worden?</p>
                          <a href="https://www.youtube.com/watch?v=fDf_nPTRY2k" target="_blank"><button type="button" class = "submitButton">Bekijk video</button> </a><br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van uitslag of andere huidafwijkingen ter plaatse van de tekenbeet (zoals een EM: rode kring)?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring" value="Ja"> Ja<br>
                         <input type="radio" name="kring" value="Nee"> Nee<br>
                         <input type="radio" name="kring" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u pijnlijke gewrichten?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring1" value="Ja"> Ja<br>
                         <input type="radio" name="kring1" value="Nee"> Nee<br>
                         <input type="radio" name="kring1" value="Een beetje"> Een beetje<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u onverklaarbare koorts, verhoging, zweten, koude rillingen, of warmte-aanvallen?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring2" value="Ja"> Ja<br>
                         <input type="radio" name="kring2" value="Nee"> Nee<br>
                         <input type="radio" name="kring2" value="weinig"> weinig<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van onverklaarbare gewichtsverandering: Zowel aankomen als afvallen?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring3" value="Ja"> Ja<br>
                         <input type="radio" name="kring3" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van onverklaarbaar haarverlies?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring4" value="Ja"> Ja<br>
                         <input type="radio" name="kring4" value="Nee"> Nee<br>
                         <input type="radio" name="kring4" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van een pijnlijke keel?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring5" value="Ja"> Ja<br>
                         <input type="radio" name="kring5" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">

                         <p>Heeft u last van opgezette klieren bij de keel?</p>
                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring6" value="Ja"> Ja<br>
                         <input type="radio" name="kring6" value="Nee"> Nee<br>
                         <input type="radio" name="kring6" value="onzeker"> niet zeker<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van pijn bij testikels of bekkenpijn?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring7" value="Ja"> Ja<br>
                         <input type="radio" name="kring7" value="Nee"> Nee<br>
                         <input type="radio" name="kring7" value="Mogelijk"> Mogelijk wel<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van geïrriteerde blaas of verstoorde blaasfunctie?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring8" value="Ja"> Ja<br>
                         <input type="radio" name="kring8" value="Nee"> Nee<br>
                         <input type="radio" name="kring8" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van maagpijnen?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring9" value="Ja"> Ja<br>
                         <input type="radio" name="kring9" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van verandering in darmfunctie (constipatie of diarree)?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring10" value="Ja"> Ja<br>
                         <input type="radio" name="kring10" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van ademnood of hoesten?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring11" value="Ja"> Ja<br>
                         <input type="radio" name="kring11" value="Nee"> Nee<br>
                         <input type="radio" name="kring11" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van hartkloppingen, overslaan van hartslag?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring12" value="Ja"> Ja<br>
                         <input type="radio" name="kring12" value="Nee"> Nee<br>
                         <input type="radio" name="kring12" value="onzeker"> niet zeker<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van gewrichtspijn en/of gewrichtszwelling?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring13" value="Ja"> Ja<br>
                         <input type="radio" name="kring13" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van stijfheid in rug en/of nek?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring14" value="Ja"> Ja<br>
                         <input type="radio" name="kring14" value="Nee"> Nee<br>
                         <input type="radio" name="kring14" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van spierpijn en/of spierkrampen?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring15" value="Ja"> Ja<br>
                         <input type="radio" name="kring15" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van bibberen van lichaamsdelen (bv. handen)?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring16" value="Ja"> Ja<br>
                         <input type="radio" name="kring16" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van mist in het hoofd; moeite met denken?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring17" value="Ja"> Ja<br>
                         <input type="radio" name="kring17" value="Nee"> Nee<br>
                         <input type="radio" name="kring17" value="Misschien"> Misschien<br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van moeilijkheden met concentreren en/of lezen?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring18" value="Ja"> Ja<br>
                         <input type="radio" name="kring18" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van slaapproblemen: te veel, te weinig, te vroeg wakker?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring19" value="Ja"> Ja<br>
                         <input type="radio" name="kring19" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Heeft u last van  gevoelige rode ogen?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="kring20" value="Ja"> Ja<br>
                         <input type="radio" name="kring20" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p>Zou u een foto willen uploaden van de tekenbeet?</p>

                         <div class="leftpusher"></div>
                         <div id="thisisatest">
                         <input type="radio" name="fotoLoad" value="Ja"> Ja<br>
                         <input type="radio" name="fotoLoad" value="Nee"> Nee<br>
                         <br>
                       </div>
                         <input type="file" name="fileToUpload" id="fileToUpload"><br>
                         <img onclick="scrolldown()" src="{{ asset('images/pijl.svg')}}" class="pijldown">
                       </div>
                     </div>

                     <div class="fullSizeVraag test werk_container colorpad" data-section-name="werk_container">
                       <div class="inMiddenVraag">
                       <img onclick="scrollup()" src="{{ asset('images/pijl.svg')}}" class="pijlup">
                         <p><input class="textveld" type="text" name="emailDoc" placeholder="huisarts E-mail" style="width: 40%;" required><br>
                         <input class="textveld" type="text" name="emailJij" placeholder="eigen E-mail" style="width: 40%;" required><br></p>
                         <input type="submit" value="Submit" class="submitButton" style="width: 40%;"><br>
                         <br>
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
