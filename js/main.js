

    $( document ).ready(function() {
/*Video content Toggle*/
        $('.content-more').hide();
        $('#content-more').click(function(){
            $('.content-more').toggle('slow');
            $('#content-more').toggleClass('more-toggle');
        });

/*Click to Channels*/
        $('.dropdown').hide();
        $('.parent').click(function(event){
        	event.stopPropagation();
        	$('.dropdown').slideToggle('fast');
        });
        $('.dropdown').on('click', function(event){
        	event.stopPropagation();
        });
    });
    $(document).on('click', function(){
    	$('.dropdown').hide();
    });
/*-----------------------*/