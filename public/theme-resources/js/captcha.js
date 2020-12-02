$(document).ready(function(){

    min = Math.ceil(1);
    max = Math.floor(15);
    var random1 = Math.floor(Math.random() * (max - min) + min);
    var random2 = Math.floor(Math.random() * (max - min) + min);
    $('input[name="firstNumber"]').val(random1);
    $('input[name="secondNumber"]').val(random2);
    $('#captchaQuest').html(random1 + ' + ' + random2 + ' = ');



    $('#send').click(function(e) {

        e.preventDefault();

        var answer       = $('input[name="answer"]').val();
        var firstNumber  =  $('input[name="firstNumber"]').val();
        var secondNumber = $('input[name="secondNumber"]').val();
        min = Math.ceil(1);
        max = Math.floor(15);
        var random1 = Math.floor(Math.random() * (max - min) + min);
        var random2 = Math.floor(Math.random() * (max - min) + min);
        var addition = parseInt(firstNumber) + parseInt(secondNumber);

        if(answer) {
            if(addition != parseInt(answer)){
                var random1 = Math.floor(Math.random() * (max - min) + min);
                var random2 = Math.floor(Math.random() * (max - min) + min);
                $('input[name="firstNumber"]').val(random1);
                $('input[name="secondNumber"]').val(random2);
                $('#captchaQuest').html(random1 + ' + ' + random2 + ' = ');

                $('#status').html("Answer is wrong, try again."), $('#status').css('color', 'red');
            }else{
                $('#status').html("Answer is right, Form is submitted."), $('#status').css('color', 'green');
            }
        } else {
            $('#status').html("Please answer the captcha."), $('#status').css('color', 'red');
        }
    });
});