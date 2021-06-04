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
$('#Modif').click(function (e) {

        document.getElementById(Focus).focus();

});

// CACHER HEADER SI MESSAGE ERREUR

$(document).ready(function (e){

    $('header').css("border-bottom", "none")

    // if($("#targetscript1").hasClass("alert-error") | $("#targetscript2").hasClass("alert-success") ){
    //     $('header').css("border-bottom", "none")
    // }
});