// I'm using codekit to mash all my js together.
// If you're not a codekit user, take a look as it's great, but also
// you can just add these into the head as normal .js files and they'll work.

//@codekit-prepend "vendor/jquery-1.10.2.js","parallax.js", "animateNumbers.js","vendor/bootstrap-affix.js","vendor/parsley.js"

// Replacing the original hack day javascript with something (hopefully) less wordy.

function populateInfographic(year, cost, amount) {


  var countryTotal = Math.floor(amount / cost);
  var stateTotal = Math.floor( countryTotal / 36 );
  var lgaTotal = Math.floor( stateTotal / 21.5 );
  var wardTotal = Math.floor( lgaTotal / 12.5 );

  $('.total-year').html( Math.floor( amount ) );
  $('.total-nigeria').html( countryTotal );
  $('.total-state').html( stateTotal );
  $('.total-lga').html( stateTotal );
  $('.total-ward').html( wardTotal );

  $('.item-totals').fadeIn();

}

$(document).ready(function(){

  $( ".timeline-circles" ).click(function() { // Click on a bubble on the chart.

    $('.generated-infographic').show(); // Show the infographic container.
    $('.feedback-form').show(); // Show the infographic container.


    var year = $('#totalyear').text();
    var itemcost = $(this).data('itemcost');
    var amount = $('#year'+year).data('amount');

    populateInfographic( year , itemcost, amount );

    $('html, body').animate({
      scrollTop: ( $( $('.generated-infographic') ).offset().top - 350 )
    }, 800, 'swing');

  });

  $('.time-line-href').click(function(e) {
    
    e.preventDefault();

    $('.timeline-circles').show(500);

    var year = $(this).data('year');
    var amount = $('#year'+year).data('amount');

    $('#totalyear').html( $(this).data('year') );
    
    $('.circleLine').css('opacity','0');
    $(this).find('div').css('opacity','1');
    
    $('#figures').fadeIn(1000);

    $('#amt').animateNumbers(parseInt(amount), true, 1500);

    $('.year-instructions').fadeOut('slow');
    $('.year-instructions').html("Now click on a circle and see what could be purchased.");
    $('.year-instructions').fadeIn('slow');

  });

  $("#chart-div").html($("canvas").attr("width", 800).attr("height", 600).attr("id", "chart"));
    console.log('CHARTFIRED');
    var c = [];
    var b = [];
    $(".data-storage").each(function (e) {
        b.push($(this).data("amount") / 1000000000);
        var f = $(this).attr("id");
        c.push(f.replace("year", ""))
    });
    var d = {
        labels: c,
        datasets: [{
            fillColor: "rgba(79,107,181,0.5)",
            strokeColor: "rgba(57,77,133,1)",
            pointColor: "rgba(43,60,105,1)",
            pointStrokeColor: "#fff",
            data: b
        }]
    };
    var a = $("#chart").get(0).getContext("2d");
    $("#chart").fadeOut(50, function () {
        $("#chart").fadeIn();
        new Chart(a).Line(d, {
            showTooltips: true
        })
    })

});

