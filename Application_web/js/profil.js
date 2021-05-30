// const spanQuery = document.querySelectorAll('span');

// spanQuery.forEach((cells)=> {
//     cells.addEventListener('click', function(e) {
//         if(e.target.firstChild != null && e.target.firstChild.nodeType === 3){
//             input.value = actualText;
//             e.target.innerHTML = "";
//             e.target.appendChild(input);
//             input.focus();
//             input.setSelectionRange(input.value.length, input.value.length);

//             input.addEventListener('focusout', function(e){
//                 e.target.parentElement.innerHTML = e.target.value;
//             })
//         }
//     })
// })

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