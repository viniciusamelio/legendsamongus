
$(function exibe(){

    $('#lol').click(function(e){
        $('.hs').hide();
        $('.lol').toggle("slow");
    })

    $('#hs').click(function(e){
        $('.lol').hide();
        $('.hs').toggle('slow');
    })

})
