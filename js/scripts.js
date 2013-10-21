// I'm using codekit to mash all my js together.
// If you're not a codekit user, take a look as it's great, but also
// you can just add these into the head as normal .js files and they'll work.

//@codekit-prepend "parallax.js", "animateNumbers.js","vendor/bootstrap-affix.js","vendor/parsley.js"

// Replacing the original hack day javascript with something (hopefully) less wordy.

$(document).ready(function(){

  $( ".timeline-circles" ).click(function() { // Click on a bubble on the chart.

    $('.generated-infographic').show(); // Show the infographic container.

  });

  $('.time-line-href').click(function(e) {
    e.preventDefault();
    $('.timeline-circles').show(500);

    var year = $(this).data('year');
    var amount = $('#year'+year).data('amount');

    console.log('year ' + year);
    console.log('amount ' + amount);

    $('#totalyear').html( $(this).data('year') );
    
    $('.circleLine').css('opacity','0');
    $(this).find('div').css('opacity','1');
    
    $('#figures').fadeIn(1000);



    $('#amt').animateNumbers(parseInt(amount), true, 1500);
  });

});

