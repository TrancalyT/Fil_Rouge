//PREVISUALISER IMG
$(document).ready(function (e) {
    $('input[type="file"]').on('change', (e) => {
        let that = e.currentTarget
        if (that.files && that.files[0]) {
            $(that).next('.custom-file-label').html(that.files[0].name)
            let reader = new FileReader()
            reader.onload = (e) => {
                $('#preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(that.files[0])
        }
    })
});

// FOCUS SUR BOUTON
$('#modifprofil').submit(function (e) {

    window.location.hash = '#Modif';

});

$('#backprofil').click(function (e) {

    window.location.hash = '#Profil';

});

// CACHER HEADER SI MESSAGE ERREUR
$(document).ready(function (e){

    $('header').css("border-bottom", "none")

});

//FORMULAIRE AJAX

$(function(){

    $('#formmodif').submit(function(e){
        
        e.preventDefault();
        window.location.hash = '#formmodif';
        $("#errorsuscribe").removeClass("alert-error");
        $("#successsuscribe").removeClass("alert-success");
        $("#errorsuscribe").empty();
        $("#successsuscribe").empty();
 
        avatar = $(this).find('input[type=file]')[0].files[0]
        nickname = $(this).find('input[name=nickname').val()
        username = $(this).find('input[name=name').val()
        lastname = $(this).find('input[name=lastname').val()
        mail = $(this).find('input[name=mail').val()
        adress = $(this).find('input[name=adress').val()
        city = $(this).find('input[name=city').val()
        cp = $(this).find('input[name=cp').val()
        tel = $(this).find('input[name=tel').val()
        bio = $(this).find('textarea[name=bio').val()
        movie = $(this).find('input[name=movie').val()
        book = $(this).find('input[name=book').val()
        music = $(this).find('input[name=music').val()
        sport = $(this).find('input[name=sport').val()
        vg = $(this).find('input[name=vg').val()
        csrf_token = $(this).find('input[name=csrf_token').val()

        formData = new FormData();
        formData.append('avatar', avatar)
        formData.append('nickname', nickname)
        formData.append('name', username)
        formData.append('lastname', lastname)
        formData.append('mail', mail)
        formData.append('adress', adress)
        formData.append('city', city)
        formData.append('cp', cp)
        formData.append('tel', tel)
        formData.append('bio', bio)
        formData.append('movie', movie)
        formData.append('book', book)
        formData.append('music', music)
        formData.append('sport', sport)
        formData.append('vg', vg)
        formData.append('csrf_token', csrf_token)

        $.ajax({
            url: 'CONTROLLER/updateUser_process.php',
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success : function(data){
                            if(data != "DONE : Vos infos sont mises à jour !"){
                                $('#errorsuscribe').addClass( "alert-error");
                                $("#errorsuscribe").append(data);
                                window.location.hash = '#focuserror';
                            } else {
                                $('#successsuscribe').addClass( "alert-success");
                                $("#successsuscribe").append(data);
                                window.location.hash = '#focusdone';
                            }
                },
            error : function(data){
                    $('#errorsuscribe').addClass( "alert-error");
                    $("#errorsuscribe").append("Erreur : Le chargement des données à rencontrer une erreur, si le problème persiste, veuillez nous contacter.");
                    window.location.hash = '#focuserror';
                },
            
        });

    })
    
    });