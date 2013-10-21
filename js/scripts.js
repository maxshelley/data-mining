// I'm using codekit to mash all my js together.
// If you're not a codekit user, take a look as it's great, but also
// you can just add these into the head as normal .js files and they'll work.

//@codekit-prepend "parallax.js", "animateNumbers.js","vendor/bootstrap-affix.js"

// Replacing the original hack day javascript with something (hopefully) less wordy.

function calculateTotals() {

  var year1999 = 724400000000;

  console.log(year1999);

}


$(document).ready(function(){

  $( ".timeline-circles" ).click(function() { // Click on a bubble on the chart.

    $('.generated-infographic').show(); // Show the infographic container.

    calculateTotals();

  });

});

