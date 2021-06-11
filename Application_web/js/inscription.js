//FORMULAIRE AJAX

$(function(){

$('#forminscri').submit(function(e){
    
    e.preventDefault();
    window.location.hash = '#forminscri';
    $("#errorsuscribe").removeClass("alert-error");
    $("#successsuscribe").removeClass("alert-success");
    $("#errorsuscribe").empty();
    $("#successsuscribe").empty();
    nominscription = $(this).find('input[name=nominscription').val()
    prenominscription = $(this).find('input[name=prenominscription').val()
    pseudoinscription = $(this).find('input[name=pseudoinscription').val()
    mailinscription = $(this).find('input[name=mailinscription').val()
    mdpinscription = $(this).find('input[name=mdpinscription').val()
    mdp2inscription = $(this).find('input[name=mdp2inscription').val()
    adresseinscription = $(this).find('input[name=adresseinscription').val()
    villeinscription = $(this).find('input[name=villeinscription').val()
    cpinscription = $(this).find('input[name=cpinscription').val()
    telinscription = $(this).find('input[name=telinscription').val()
    filminscription = $(this).find('input[name=filminscription').val()
    livreinscription = $(this).find('input[name=livreinscription').val()
    musiqueinscription = $(this).find('input[name=musiqueinscription').val()
    sportinscription = $(this).find('input[name=sportinscription').val()
    jvinscription = $(this).find('input[name=jvinscription').val()
    csrf_token = $(this).find('input[name=csrf_token').val()

    $.post("CONTROLLER/suscribe_process.php", {nominscription: nominscription, 
                            prenominscription: prenominscription,
                            pseudoinscription: pseudoinscription, 
                            mailinscription: mailinscription,
                            mdpinscription: mdpinscription,
                            mdp2inscription: mdp2inscription,
                            adresseinscription: adresseinscription,
                            villeinscription: villeinscription,
                            cpinscription: cpinscription,
                            telinscription: telinscription,
                            filminscription: filminscription,
                            livreinscription: livreinscription,
                            musiqueinscription: musiqueinscription,
                            sportinscription: sportinscription,
                            jvinscription: jvinscription,
                            csrf_token: csrf_token}, function(data){
            
           if(data != "DONE : Vous pouvez dès à présent vous connecter !"){
                $('#errorsuscribe').addClass( "alert-error");
                $("#errorsuscribe").append(data);
                window.location.hash = '#focuserror';
           } else {
                $('#successsuscribe').addClass( "alert-success");
                $("#successsuscribe").append(data);
                window.location.hash = '#focuserror';
           }
            
        });

    return false;

})


});
