$.ajax({
    url: 'lista.json',
    dataType: 'json',
    type: 'get',
    cache: false,
    success: function(data){

        $(data.muncipios).each(function(index, value){
            $("#myselect").append('<option value="'+ this.value +'">'+ this.name +'</option>'+'<a href="/municipios/' + this.name + '</a>')

            console.log(value.name);
        });



    }
});