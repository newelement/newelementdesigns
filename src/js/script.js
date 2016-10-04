$(function() {
    $('form').submit(function(e){
        e.preventDefault();

        var email = $('#email').val();
        var message = $('#message').val();

        if( email === '' || message === '' ){
            $('.submit-message').text('Please enter your email and message');
            return false;
        }

        var data = { email: email, message: message };

        $.post('http://newelementdesigns.com', data, function(){
            $('.submit-message').text('Thanks! I\'ll be in touch soon!');
            $('#email').val('');
            $('#message').val('');
        });

    });
});
