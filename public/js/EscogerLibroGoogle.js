function bookChoose(btn){

    var search = btn.id

    document.getElementById('modal-default').innerHTML=""
    $.ajax({
        url:    "https://www.googleapis.com/books/v1/volumes/" + search,//+"&maxResults=40",
        dataType:   "json",

        success: function(data){
            console.log(data)
            $('#modal-default').append(
                '<div class="modal-dialog">'+
                '<div class="modal-content">'+
                '<div class="modal-header">'+
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                '<span aria-hidden="true">&times;</span></button>'+
                '<h4 class="modal-title">Nuevo Libro</h4>'+
                '</div>'+
                '<div class="modal-body">'+
                '<img src="'+data.volumeInfo.imageLinks.thumbnail+'" class="card-img-top " style="display: block;' +
                '  margin-left: auto;' +
                '  margin-right: auto;" >'+
                '<br/><br/>'+
                '<div class="box box-primary">'+

                '<!-- /.box-header -->'+
                '<!-- form start -->'+
                '<form role="form"  >'+
                '<div class="alert alert-danger" style="display:none"></div>'+
            '<div class="box-body">'+
            '<div class="form-group">'+
            '<label for="ISBNe">ISBN</label>'+
            '<input type="text" class="form-control" name ="ISBN" id="ISBN" value="'+data.volumeInfo.industryIdentifiers[1].identifier+'">'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="nombre">Nombre</label>'+
            '<input type="text" class="form-control" id="nombre" name="nombre" value="'+data.volumeInfo.title+'">'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="Autor">Autor</label>'+
            '<input type="text" class="form-control" id="autor" name="autor" value="'+data.volumeInfo.authors+'">'+
            '</div>'+
            '<div class="form-group">'+
            '<label for="Descripcion">Descripcion</label>'+
            '<textarea  class="form-control" name="descripcion" id="descripcion"'+data.volumeInfo.description+' ></textarea>'+
            '</div>'+
            '<button type="button" id="EscogerLibro" onclick="bookSave()" class="btn btn-primary">Add</button>'+
            '</div>'+
            '<!-- /.box-body -->'+
            '</div>'+
            '<!-- /.box -->'+
            '</div>'+
            '<div class="modal-footer">'+
            '<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>'+

            '</div>'+
            '</div>'+
            '</form>'+
            '<!-- /.modal-content -->'+
            '</div>'+
            '<!-- /.modal-dialog -->'
        )
        },
        type: 'GET'
    });

}
