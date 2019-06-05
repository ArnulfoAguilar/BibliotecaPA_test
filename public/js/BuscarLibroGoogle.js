function bookSearch(){

    var search = document.getElementById('examplebook').value
    document.getElementById('results').innerHTML=""

    $.ajax({
        url:    "https://www.googleapis.com/books/v1/volumes?q=" + search,//+"&maxResults=40",
        dataType:   "json",

        success: function(data){
            console.log(data)
            for(i=0; i<data.items.length; i++){
                $('#results').append(
                    ' <div class="card  col-md-12" id="'+data.items[i].id+'" style="width: 18rem;heigth:20rem;">'+
                    '<img src="'+data.items[i].volumeInfo.imageLinks.thumbnail+'" class="card-img-top " style="max-width:250px;max-height: 250px;display: block;' +
                    '  margin-left: auto;' +
                    '  margin-right: auto;" >'+
                    '<div class="card-body">'+
                    '<h5 class="card-title">'+data.items[i].volumeInfo.title+'</h5>'+
                    '<p class="card-text">'+data.items[i].volumeInfo.authors+'</p>'+
                    '<a href="#" id="'+data.items[i].id+'" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" onclick="bookChoose(this)">Clic</a>'+
                    '</div>'+
                    '</div>'
                )
            }
        },
        type: 'GET'
    });

}
document.getElementById('button').addEventListener('click', bookSearch, false)