<?php include('head.php'); ?>
<?php include('header.php'); ?>

<!--
  Using DOM elements as a storage location.
  Yeah, not ideal, but this will do for now.
-->

<div id="year1999" data-amount="724400000000"></div>
<div id="year2000" data-amount="1591700000000"></div>
<div id="year2001" data-amount="1707600000000"></div>
<div id="year2002" data-amount="1230900000000"></div>
<div id="year2003" data-amount="2074300000000"></div>
<div id="year2004" data-amount="3354800000000"></div>
<div id="year2005" data-amount="4762400000000"></div>
<div id="year2006" data-amount="5287600000000"></div>
<div id="year2007" data-amount="4462900000000"></div>
<div id="year2008" data-amount="6530600000000"></div>
<div id="year2009" data-amount="3191900000000"></div>
<div id="year2010" data-amount="5396100000000"></div>
<div id="year2011" data-amount="8879000000000"></div>
<div id="year2012" data-amount="8025950000000"></div>

<div class="header-bg" style="height: 130px; background-color: rgba(0,0,0,0.7);">
</div>
<div id="wrapper" class="infographic" >
    
  <div id="profession" class="total">
    <span id="figures" style="display: none;">
      <span id="tags">TOTAL OIL REVENUE</span> <span id="totalyear"></span>
      <span> ₦ </span>
      <span id="amt"></span>
    </span>
    <div style="clear:right"></div>
  </div>

  <div class="instruction year-instructions">
    Click on a year below to discover what could be done.
  </div>

  <div id="middle">
    <script>function change1() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change1";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_1999");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and1";document.getElementById("textcircid1").onclick = ptext1;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change1";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_1999");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and1";document.getElementById("textcircid2").onclick = ptext2;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change1";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_1999");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and1";document.getElementById("textcircid3").onclick = ptext3;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change1";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_1999");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and1";document.getElementById("textcircid4").onclick = ptext4;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change1";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_1999");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and1";document.getElementById("textcircid5").onclick = ptext5;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change1";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_1999");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and1";document.getElementById("textcircid6").onclick = ptext6;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change2() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change2";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2000");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and2";document.getElementById("textcircid1").onclick = ptext7;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change2";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2000");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and2";document.getElementById("textcircid2").onclick = ptext8;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change2";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2000");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and2";document.getElementById("textcircid3").onclick = ptext9;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change2";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2000");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and2";document.getElementById("textcircid4").onclick = ptext10;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change2";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2000");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and2";document.getElementById("textcircid5").onclick = ptext11;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change2";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2000");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and2";document.getElementById("textcircid6").onclick = ptext12;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change3() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change3";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2001");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and3";document.getElementById("textcircid1").onclick = ptext13;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change3";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2001");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and3";document.getElementById("textcircid2").onclick = ptext14;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change3";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2001");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and3";document.getElementById("textcircid3").onclick = ptext15;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change3";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2001");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and3";document.getElementById("textcircid4").onclick = ptext16;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change3";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2001");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and3";document.getElementById("textcircid5").onclick = ptext17;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change3";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2001");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and3";document.getElementById("textcircid6").onclick = ptext18;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change4() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change4";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2002");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and4";document.getElementById("textcircid1").onclick = ptext19;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change4";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2002");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and4";document.getElementById("textcircid2").onclick = ptext20;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change4";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2002");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and4";document.getElementById("textcircid3").onclick = ptext21;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change4";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2002");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and4";document.getElementById("textcircid4").onclick = ptext22;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change4";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2002");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and4";document.getElementById("textcircid5").onclick = ptext23;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change4";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2002");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and4";document.getElementById("textcircid6").onclick = ptext24;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change5() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change5";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2003");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and5";document.getElementById("textcircid1").onclick = ptext25;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change5";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2003");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and5";document.getElementById("textcircid2").onclick = ptext26;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change5";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2003");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and5";document.getElementById("textcircid3").onclick = ptext27;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change5";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2003");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and5";document.getElementById("textcircid4").onclick = ptext28;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change5";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2003");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and5";document.getElementById("textcircid5").onclick = ptext29;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change5";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2003");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and5";document.getElementById("textcircid6").onclick = ptext30;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change6() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change6";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2004");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and6";document.getElementById("textcircid1").onclick = ptext31;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change6";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2004");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and6";document.getElementById("textcircid2").onclick = ptext32;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change6";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2004");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and6";document.getElementById("textcircid3").onclick = ptext33;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change6";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2004");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and6";document.getElementById("textcircid4").onclick = ptext34;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change6";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2004");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and6";document.getElementById("textcircid5").onclick = ptext35;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change6";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2004");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and6";document.getElementById("textcircid6").onclick = ptext36;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change7() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change7";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2005");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and7";document.getElementById("textcircid1").onclick = ptext37;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change7";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2005");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and7";document.getElementById("textcircid2").onclick = ptext38;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change7";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2005");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and7";document.getElementById("textcircid3").onclick = ptext39;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change7";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2005");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and7";document.getElementById("textcircid4").onclick = ptext40;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change7";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2005");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and7";document.getElementById("textcircid5").onclick = ptext41;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change7";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2005");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and7";document.getElementById("textcircid6").onclick = ptext42;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change8() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change8";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2006");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and8";document.getElementById("textcircid1").onclick = ptext43;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change8";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2006");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and8";document.getElementById("textcircid2").onclick = ptext44;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change8";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2006");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and8";document.getElementById("textcircid3").onclick = ptext45;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change8";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2006");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and8";document.getElementById("textcircid4").onclick = ptext46;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change8";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2006");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and8";document.getElementById("textcircid5").onclick = ptext47;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change8";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2006");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and8";document.getElementById("textcircid6").onclick = ptext48;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change9() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change9";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2007");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and9";document.getElementById("textcircid1").onclick = ptext49;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change9";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2007");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and9";document.getElementById("textcircid2").onclick = ptext50;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change9";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2007");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and9";document.getElementById("textcircid3").onclick = ptext51;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change9";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2007");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and9";document.getElementById("textcircid4").onclick = ptext52;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change9";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2007");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and9";document.getElementById("textcircid5").onclick = ptext53;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change9";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2007");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and9";document.getElementById("textcircid6").onclick = ptext54;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change10() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change10";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2008");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and10";document.getElementById("textcircid1").onclick = ptext55;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change10";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2008");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and10";document.getElementById("textcircid2").onclick = ptext56;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change10";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2008");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and10";document.getElementById("textcircid3").onclick = ptext57;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change10";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2008");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and10";document.getElementById("textcircid4").onclick = ptext58;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change10";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2008");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and10";document.getElementById("textcircid5").onclick = ptext59;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change10";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2008");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and10";document.getElementById("textcircid6").onclick = ptext60;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change11() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change11";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2009");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and11";document.getElementById("textcircid1").onclick = ptext61;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change11";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2009");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and11";document.getElementById("textcircid2").onclick = ptext62;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change11";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2009");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and11";document.getElementById("textcircid3").onclick = ptext63;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change11";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2009");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and11";document.getElementById("textcircid4").onclick = ptext64;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change11";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2009");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and11";document.getElementById("textcircid5").onclick = ptext65;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change11";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2009");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and11";document.getElementById("textcircid6").onclick = ptext66;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change12() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change12";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2010");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and12";document.getElementById("textcircid1").onclick = ptext67;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change12";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2010");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and12";document.getElementById("textcircid2").onclick = ptext68;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change12";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2010");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and12";document.getElementById("textcircid3").onclick = ptext69;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change12";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2010");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and12";document.getElementById("textcircid4").onclick = ptext70;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change12";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2010");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and12";document.getElementById("textcircid5").onclick = ptext71;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change12";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2010");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and12";document.getElementById("textcircid6").onclick = ptext72;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change13() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change13";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2011");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and13";document.getElementById("textcircid1").onclick = ptext73;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change13";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2011");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and13";document.getElementById("textcircid2").onclick = ptext74;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change13";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2011");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and13";document.getElementById("textcircid3").onclick = ptext75;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change13";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2011");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and13";document.getElementById("textcircid4").onclick = ptext76;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change13";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2011");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and13";document.getElementById("textcircid5").onclick = ptext77;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change13";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2011");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and13";document.getElementById("textcircid6").onclick = ptext78;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function change14() {document.getElementById("timeline-circid1").className = "timeline-circles timeline-circle1change14";document.getElementById("timeline-circid1").setAttribute("title", "Primary Health Clinics_2012");document.getElementById("textcircid1").className = "timeline-textformat textincircle1and14";document.getElementById("textcircid1").onclick = ptext79;document.getElementById("textcircid1").innerHTML = "Primary Health Clinics";document.getElementById("timeline-circid2").className = "timeline-circles timeline-circle2change14";document.getElementById("timeline-circid2").setAttribute("title", "Classrooms_2012");document.getElementById("textcircid2").className = "timeline-textformat textincircle2and14";document.getElementById("textcircid2").onclick = ptext80;document.getElementById("textcircid2").innerHTML = "Classrooms";document.getElementById("timeline-circid3").className = "timeline-circles timeline-circle3change14";document.getElementById("timeline-circid3").setAttribute("title", "Police Stations_2012");document.getElementById("textcircid3").className = "timeline-textformat textincircle3and14";document.getElementById("textcircid3").onclick = ptext81;document.getElementById("textcircid3").innerHTML = "Police Stations";document.getElementById("timeline-circid4").className = "timeline-circles timeline-circle4change14";document.getElementById("timeline-circid4").setAttribute("title", "Fertilizer_2012");document.getElementById("textcircid4").className = "timeline-textformat textincircle4and14";document.getElementById("textcircid4").onclick = ptext82;document.getElementById("textcircid4").innerHTML = "Fertilizer";document.getElementById("timeline-circid5").className = "timeline-circles timeline-circle5change14";document.getElementById("timeline-circid5").setAttribute("title", "Solar Powered Borehole_2012");document.getElementById("textcircid5").className = "timeline-textformat textincircle5and14";document.getElementById("textcircid5").onclick = ptext83;document.getElementById("textcircid5").innerHTML = "Solar Powered Borehole";document.getElementById("timeline-circid6").className = "timeline-circles timeline-circle6change14";document.getElementById("timeline-circid6").setAttribute("title", "Vocational Centers_2012");document.getElementById("textcircid6").className = "timeline-textformat textincircle6and14";document.getElementById("textcircid6").onclick = ptext84;document.getElementById("textcircid6").innerHTML = "Vocational Centers";}function ptext1() {setTimeout('timeout_trigger1()', 400);}function timeout_trigger1() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext2() {setTimeout('timeout_trigger2()', 400);}function timeout_trigger2() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext3() {setTimeout('timeout_trigger3()', 400);}function timeout_trigger3() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext4() {setTimeout('timeout_trigger4()', 400);}function timeout_trigger4() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext5() {setTimeout('timeout_trigger5()', 400);}function timeout_trigger5() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext6() {setTimeout('timeout_trigger6()', 400);}function timeout_trigger6() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext7() {setTimeout('timeout_trigger7()', 400);}function timeout_trigger7() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext8() {setTimeout('timeout_trigger8()', 400);}function timeout_trigger8() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext9() {setTimeout('timeout_trigger9()', 400);}function timeout_trigger9() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext10() {setTimeout('timeout_trigger10()', 400);}function timeout_trigger10() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext11() {setTimeout('timeout_trigger11()', 400);}function timeout_trigger11() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext12() {setTimeout('timeout_trigger12()', 400);}function timeout_trigger12() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext13() {setTimeout('timeout_trigger13()', 400);}function timeout_trigger13() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext14() {setTimeout('timeout_trigger14()', 400);}function timeout_trigger14() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext15() {setTimeout('timeout_trigger15()', 400);}function timeout_trigger15() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext16() {setTimeout('timeout_trigger16()', 400);}function timeout_trigger16() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext17() {setTimeout('timeout_trigger17()', 400);}function timeout_trigger17() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext18() {setTimeout('timeout_trigger18()', 400);}function timeout_trigger18() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext19() {setTimeout('timeout_trigger19()', 400);}function timeout_trigger19() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext20() {setTimeout('timeout_trigger20()', 400);}function timeout_trigger20() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext21() {setTimeout('timeout_trigger21()', 400);}function timeout_trigger21() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext22() {setTimeout('timeout_trigger22()', 400);}function timeout_trigger22() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext23() {setTimeout('timeout_trigger23()', 400);}function timeout_trigger23() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext24() {setTimeout('timeout_trigger24()', 400);}function timeout_trigger24() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext25() {setTimeout('timeout_trigger25()', 400);}function timeout_trigger25() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext26() {setTimeout('timeout_trigger26()', 400);}function timeout_trigger26() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext27() {setTimeout('timeout_trigger27()', 400);}function timeout_trigger27() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext28() {setTimeout('timeout_trigger28()', 400);}function timeout_trigger28() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext29() {setTimeout('timeout_trigger29()', 400);}function timeout_trigger29() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext30() {setTimeout('timeout_trigger30()', 400);}function timeout_trigger30() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext31() {setTimeout('timeout_trigger31()', 400);}function timeout_trigger31() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext32() {setTimeout('timeout_trigger32()', 400);}function timeout_trigger32() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext33() {setTimeout('timeout_trigger33()', 400);}function timeout_trigger33() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext34() {setTimeout('timeout_trigger34()', 400);}function timeout_trigger34() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext35() {setTimeout('timeout_trigger35()', 400);}function timeout_trigger35() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext36() {setTimeout('timeout_trigger36()', 400);}function timeout_trigger36() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext37() {setTimeout('timeout_trigger37()', 400);}function timeout_trigger37() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext38() {setTimeout('timeout_trigger38()', 400);}function timeout_trigger38() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext39() {setTimeout('timeout_trigger39()', 400);}function timeout_trigger39() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext40() {setTimeout('timeout_trigger40()', 400);}function timeout_trigger40() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext41() {setTimeout('timeout_trigger41()', 400);}function timeout_trigger41() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext42() {setTimeout('timeout_trigger42()', 400);}function timeout_trigger42() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext43() {setTimeout('timeout_trigger43()', 400);}function timeout_trigger43() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext44() {setTimeout('timeout_trigger44()', 400);}function timeout_trigger44() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext45() {setTimeout('timeout_trigger45()', 400);}function timeout_trigger45() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext46() {setTimeout('timeout_trigger46()', 400);}function timeout_trigger46() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext47() {setTimeout('timeout_trigger47()', 400);}function timeout_trigger47() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext48() {setTimeout('timeout_trigger48()', 400);}function timeout_trigger48() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext49() {setTimeout('timeout_trigger49()', 400);}function timeout_trigger49() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext50() {setTimeout('timeout_trigger50()', 400);}function timeout_trigger50() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext51() {setTimeout('timeout_trigger51()', 400);}function timeout_trigger51() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext52() {setTimeout('timeout_trigger52()', 400);}function timeout_trigger52() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext53() {setTimeout('timeout_trigger53()', 400);}function timeout_trigger53() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext54() {setTimeout('timeout_trigger54()', 400);}function timeout_trigger54() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext55() {setTimeout('timeout_trigger55()', 400);}function timeout_trigger55() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext56() {setTimeout('timeout_trigger56()', 400);}function timeout_trigger56() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext57() {setTimeout('timeout_trigger57()', 400);}function timeout_trigger57() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext58() {setTimeout('timeout_trigger58()', 400);}function timeout_trigger58() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext59() {setTimeout('timeout_trigger59()', 400);}function timeout_trigger59() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext60() {setTimeout('timeout_trigger60()', 400);}function timeout_trigger60() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext61() {setTimeout('timeout_trigger61()', 400);}function timeout_trigger61() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext62() {setTimeout('timeout_trigger62()', 400);}function timeout_trigger62() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext63() {setTimeout('timeout_trigger63()', 400);}function timeout_trigger63() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext64() {setTimeout('timeout_trigger64()', 400);}function timeout_trigger64() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext65() {setTimeout('timeout_trigger65()', 400);}function timeout_trigger65() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext66() {setTimeout('timeout_trigger66()', 400);}function timeout_trigger66() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext67() {setTimeout('timeout_trigger67()', 400);}function timeout_trigger67() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext68() {setTimeout('timeout_trigger68()', 400);}function timeout_trigger68() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext69() {setTimeout('timeout_trigger69()', 400);}function timeout_trigger69() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext70() {setTimeout('timeout_trigger70()', 400);}function timeout_trigger70() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext71() {setTimeout('timeout_trigger71()', 400);}function timeout_trigger71() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext72() {setTimeout('timeout_trigger72()', 400);}function timeout_trigger72() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext73() {setTimeout('timeout_trigger73()', 400);}function timeout_trigger73() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext74() {setTimeout('timeout_trigger74()', 400);}function timeout_trigger74() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext75() {setTimeout('timeout_trigger75()', 400);}function timeout_trigger75() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext76() {setTimeout('timeout_trigger76()', 400);}function timeout_trigger76() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext77() {setTimeout('timeout_trigger77()', 400);}function timeout_trigger77() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext78() {setTimeout('timeout_trigger78()', 400);}function timeout_trigger78() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext79() {setTimeout('timeout_trigger79()', 400);}function timeout_trigger79() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext80() {setTimeout('timeout_trigger80()', 400);}function timeout_trigger80() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext81() {setTimeout('timeout_trigger81()', 400);}function timeout_trigger81() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext82() {setTimeout('timeout_trigger82()', 400);}function timeout_trigger82() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext83() {setTimeout('timeout_trigger83()', 400);}function timeout_trigger83() {document.getElementById("timeline-outputtext").innerHTML = "";}function ptext84() {setTimeout('timeout_trigger84()', 400);}function timeout_trigger84() {document.getElementById("timeline-outputtext").innerHTML = "";}</script>
    <div class="timeline-container" style="width:800;margin-top:80px;">
      <div class="time-line-time">
        <div id="timeline-line" style="width:800;"></div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href1" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change1()" id="time_click" data-year="1999">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>1999</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href2" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change2()" id="time_click" data-year="2000">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2000</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href3" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change3()" id="time_click" data-year="2001">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2001</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href4" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change4()" id="time_click" data-year="2002">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2002</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href5" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change5()" id="time_click" data-year="2003">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2003</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href6" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change6()" id="time_click" data-year="2004">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2004</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href7" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change7()" id="time_click" data-year="2005">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2005</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href8" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change8()" id="time_click" data-year="2006">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2006</span></a>
          </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href9" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change9()" id="time_click" data-year="2007">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2007</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href10" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change10()" id="time_click" data-year="2008">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2008</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href11" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change11()" id="time_click" data-year="2009">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2009</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href12" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change12()" id="time_click" data-year="2010">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2010</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href13" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change13()" id="time_click" data-year="2011">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2011</span>
          </a>
        </div>
        <div class="time-line-circle" style="width:7.14285714286%">
          <a class="time-line-href href14" href="http://www.yourbudgit.com/webroot/obi/atare/infographics/#" onclick="change14()" id="time_click" data-year="2012">
            <div class="circleLine" style="opacity: 0;"></div>
            <span>2012</span>
          </a>
        </div>
      </div>
      <div style="width:800; height:400;margin-top: 20px; font-size: 0;">
        <div class="timeline-circles timeline-circle1change1" data-itemcost="40000000" id="timeline-circid1" style="display: none;" title="Primary Health Clinics_1999">
          <span id="textcircid1" class="timeline-textformat textincircle1and1">Primary Health Clinics</span>
        </div>
        <div class="timeline-circles timeline-circle2change1" data-itemcost="18000198.7873969" id="timeline-circid2" style="display: none;" title="Classrooms_1999">
          <span id="textcircid2" class="timeline-textformat textincircle2and1">Classrooms</span>
        </div>
        <div class="timeline-circles timeline-circle3change1" data-itemcost="23400200.2778047" id="timeline-circid3" style="display: none;" title="Police Stations_1999">
          <span id="textcircid3" class="timeline-textformat textincircle3and1">Police Stations</span>
        </div>
        <div class="timeline-circles timeline-circle4change1" data-itemcost="6500008.97295551" id="timeline-circid4" style="display: none;" title="Fertilizer_1999">
          <span id="textcircid4" class="timeline-textformat textincircle4and1">Fertilizer</span>
        </div>
        <div class="timeline-circles timeline-circle5change1" data-itemcost="16000000" id="timeline-circid5" style="display: none;" title="Solar Powered Borehole_1999">
          <span id="textcircid5" class="timeline-textformat textincircle5and1">Solar Powered Borehole</span>
        </div>
        <div class="timeline-circles timeline-circle6change1" data-itemcost="22000182" id="timeline-circid6" style="display: none;" title="Vocational Centers_1999">
          <span id="textcircid6" class="timeline-textformat textincircle6and1">Vocational Centers</span>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = change1;
    $(document).ready(function(){
      
      $('.timeline-circles').hide();
      function replaceAll(find, replace, str) {
          return str.replace(new RegExp(find, 'g'), replace);
      }
       
      var con = $('.timeline-container');
        
      var position = con.position();
      $('#timeline-outputtext').css({'top':'0'}).hide();
          
      $('.timeline-circles').bind('click',function(){
        var that=$(this);
        var loading=$('<div id=loading-cont>Loading...</div>');
        if(!$('#header').hasClass('loading')){
          $('#header').append(loading);
          $('#header').addClass('loading');
        }

        var info_yrs=that.attr('title');  
        var info_yrs_arr=info_yrs.split('_');
        var yrs=info_yrs_arr[1];
        var width=$('body').width();
        var height=$('wrapper').outerHeight();
        var minheight=$(document).height();
        
        $('#infographic_cont').append('<div id=info_img ></div>');
        $('#infographic_cont').append('<div id=comments></div>');
        
        $('#comment_form_area').focus(function(){
            $(this).animate({height:'90px'},{width:'300px'});
        });
          
        var varss=that.find('span');
        var info= info_yrs_arr[0];
        var newInfo=info.toLowerCase().replace(new RegExp(' ', 'g'), '_');

        $.get('http://www.yourbudgit.com/webroot/obi/atare/infographics/request.php?year='+yrs+'&table='+newInfo, function(data,status,xhr){
          $('#loading-cont').remove();
          $('#header').removeClass('loading');
          $('#info_comment').jOverlay({center:false,css:{position:'absolute',left:'10%',top:'20px'}});
          if(info=='Primary Health Clinics'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon6.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }
          if(info=='Classrooms'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon8.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }
          if(info =='Police Stations'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon9.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }if(info=='Fertilizer'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon7.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }if(info=='Vocational Centers'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon10.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }if(info=='Solar Powered Borehole'){
            var infoData=$.parseJSON(data)
            var insertData=$('<span class=total-amt>'+amount+'</span><span class=fed-number>'+parseInt(infoData['federal'])+'</span><span class=state-number>'+parseInt(infoData['state'])+'</span><span class=lga-number>'+parseInt(infoData['lga'])+'</span><span class=ward-number>'+parseInt(infoData['ward'])+'</span><img src=hackathon11.png>');
            $('#info_gra').html(insertData).hide().show('slow');
          }
        });
      });
    });

  </script>


  <div class="item-totals container generated-infographic" style="display: none;">
    <div class="total-year"></div>
    <div class="total-nigeria"></div>
    <div class="total-state"></div>
    <div class="total-lga"></div>
    <div class="total-ward"></div>
  </div>

  <div class="feedback-form container">
    <div class="form-caption instruction">
      Imagine what oil revenue can do to your community if we spend it on items for everyone. Tell us what you want the money to be spent on.
    </div>
    <div id="info_comment" class="info-comment">
      <div id="info_gra" class="info-gra">
      </div>
      <div id="comment_form" class="comment">
        <div id="comment_form">
          <span id="comment">
          </span>
          <form class="form" data-validate="parsley">
            <section class="tag-cont">
              <label>Full Name</label>
              <input type="text" id="name" placeholder="John Smith">
            </section>
            <section class="tag-cont">
              <label>E-mail</label>
              <input type="text" id="email" placeholder="john@example.com"  data-trigger="change" data-required="true" data-type="email" >
            </section>
            <section class="tag-cont">
              <label>Local Government</label>
              <input type="text" id="lga" value="" placeholder="Local Government Areas">
            </section>
            <section class="tag-cont">
              <label> How Should Oil Money Benefit You?</label>
              <textarea name="comment" id="comment_form_area"> </textarea>
            </section> 
            <section class="tag-cont contact-select">
              <label style="width: 100%;">Report to?</label>
              <input type="checkbox" name="senator" id="senator" value="senator" placeholder="your district">
              <span>Your Senator</span>
              <br>
              <input type="checkbox" name="rep" id="rep" value="representative" placeholder="your district">
              <span>Your Representative</span>
              <br>
              <input type="checkbox" name="minis" id="minis" value="finance_minster" placeholder="your district">
              <span>Your Finance Minister</span>
            </section>
            <section class="tag-cont">
              <button name="submit" id="submit-button" class="btn btn-primary">Send Your Feedback</button>
            </section>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="item-totals container">
    
    <h3>
      What things cost.
    </h3>
    <table class="item-table">
      <tr>
        <td class="total-title">
          Building a Primary Health Clinic
        </td>
        <td class="total-naira">
          ₦40,000,000
        </td>
        <td class="total-gbp">
          &pound;155,002
        </td>
      </tr>

      <tr>
        <td class="total-title">
          Building a Classroom
        </td>
        <td class="total-naira">
          ₦18,000,198
        </td>
        <td class="total-gbp">
          &pound;69,751
        </td>
      </tr>

      <tr>
        <td class="total-title">
          Building a Police Station
        </td>
        <td class="total-naira">
          ₦23400200
        </td>
        <td class="total-gbp">
          &pound;90,677
        </td>
      </tr>


      <tr>
        <td class="total-title">
          Buying Fertilizer
        </td>
        <td class="total-naira">
          ₦6,500,008
        </td>
        <td class="total-gbp">
          &pound;25,188
        </td>
      </tr>

      <tr>
        <td class="total-title">
          Running a Solar Powered Borehole
        </td>
        <td class="total-naira">
          ₦16,000,000
        </td>
        <td class="total-gbp">
          &pound;62,000
        </td>
      </tr>
    


      <tr>
        <td class="total-title">
          Running a Vocational Centre
        </td>
        <td class="total-naira">
          ₦22,000,182
        </td>
        <td class="total-gbp">
          &pound;85,206
        </td>
      </tr>
    </table>

  </div>

  </body>
</html>
<?php include('footer.php'); ?>