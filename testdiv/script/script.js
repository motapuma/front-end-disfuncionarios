$.ajax({
    url: 'http://disfuncionarios.org:3000/api/zone',
    dataType: 'json',
    type: 'get',
    cache: false,
    success: function(data){

        $(data.muncipios).each(function(index, value){
            $("#municipios").append('<option value="'+ this.name +'">'+ this.name +'</option>')

            console.log(value.name);
        });



    }
});
