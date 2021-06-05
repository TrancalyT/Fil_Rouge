$(".star").click(function (e){

    selected = $(this).find('input[type=radio]')

    $(selected).mouseleave(function (e){
        selected.focus()

    })

})

// TEST POUR GARDER ETOILE SUR GB QUAND CLICK AILLEURS

