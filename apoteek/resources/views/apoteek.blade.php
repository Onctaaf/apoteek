@extends('layouts.app')
@section('title', 'Page Title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >

                  <section class="scrollclass">
                    <div class="apoteekHome">
                      <p class="titelText" >Apoteek</p>
                      <p class="insideText">
                      Lorem ipsum dolor sit amet, ut vis ludus laoreet referrentur.<span class="highlightSpan"> Mandamus</span> corrumpit elaboraret pro ut. Vim posse verterem an, postea gloriatur in quo, regione utroque nec no. Ea ceteros mediocrem interpretaris eum.<br><br>

Doctus option verterem his ex. Suas<span class="highlightSpan"> deterruisset</span> ut eam. Mel ea tantas constituto accommodare. rip lorus kip. Ne purto iisque legimus vel, id nam nisl fabulas.<br><br>

Postea luptatum ea vis, quo et partiendo suavitate, liber movet <span class="highlightSpan"> interpretaris </span> quo at. Cu nec tempor vidisse, quo fugit mucius pertinax ut. Vitae meliore pericula an eum. Luptatum mandamus ei vix, duo tibique accusam mediocritatem ne. Mea cu expetenda signiferumque, pro mentitum tincidunt ea. An omnes blandit est, sit at munere legimus suavitate.
</p>
                    </div>
                    <div class="apoteekHome">
                      <p class="titelText" >Over</p>
                      <p class="insideText">No sed soluta accusata. In cum eius <span class="highlightSpan">complectitur</span>, mea errem euismod utroque ad. Mei tollit propriae id. An sed oblique platonem sapientem. In homero neglegentur eos, vim quem postea intellegebat an, habeo adipisci id sit.<br><br>

Has quaeque veritus appetere ne, pro inani dolore elaboraret ea, velit dolore per et. Quas <span class="highlightSpan">conclusionemque</span> eam ea. Ex audiam aeterno singulis sea, te eos reque tollit. Sed nibh congue consul at. His nonumes minimum at. At velit populo instructior vim, ut movet fabellas lobortis est. Cum epicuri deterruisset conclusionemque at, sed te augue tempor sensibus, in omnes nusquam corrumpit vis.
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
