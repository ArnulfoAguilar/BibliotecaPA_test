$(document).ready(function(){
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
});
    function bookSave() {

        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });


        var my_data= {

            ISBN:  document.getElementById('ISBN').value,
            nombre : document.getElementById('nombre').value,
            autor: document.getElementById('autor').value,
            descripcion: document.getElementById('descripcion').value,

        }
        console.log(my_data)
        $.ajax({
            url: "guardarLibro",
            method: "POST",
            dataType: "JSON",
            data: my_data,
            success: function (result) {
               console.log(result)
            }
        });
    }


