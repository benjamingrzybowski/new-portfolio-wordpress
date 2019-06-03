jQuery( document ).ready( function( $ ) {

    function check_if_in_view() {

        var slideInTrigger = document.getElementById('slide-in-trigger').getBoundingClientRect();
        var gridSlideTrigger = document.getElementById('grid-slide-up-trigger').getBoundingClientRect();
        var slideUp = document.querySelector('.grid-slide-up');
        var slideLeft = document.querySelector('.slide-left');
        var slideRight = document.querySelector('.slide-right');
        

        if (slideInTrigger.top >= 0 && (slideInTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
            slideLeft.classList.add('slides-in-left');
            slideRight.classList.add('slides-in-right');
        }
        
        if (gridSlideTrigger.top >= 0 && (gridSlideTrigger.bottom + 200) <= (window.innerHeight || document.documentElement.clientHeight)) {
            slideUp.classList.add('slide-up');
        }


      var formSlideTrigger = document.getElementById('form-slide-trigger').getBoundingClientRect();
      var form = document.querySelector('.form-slide-up');

      if (formSlideTrigger.top >= 0 && (formSlideTrigger.bottom + 400) <= (window.innerHeight || document.documentElement.clientHeight)) {
        form.classList.add('slide-up');
        } 
    }
    $(window).on('scroll resize', check_if_in_view);
    $(window).trigger('scroll');

    var helpBtn = document.getElementById('help-btn');
    var helpDest = document.getElementById('help-dest');

    helpBtn.addEventListener('click', function(){
        helpDest.scrollIntoView({block: 'center', behavior: 'smooth'});
    });

});
