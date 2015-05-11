


<html>
<head>
    <title>JSON jQuery AJAX
    </title>

    <script src="js/jquery.js"></script>




</head>
<body>


<h1>Hola</h1>

<div id="contenido"></div>
<div id="muni"></div>

<script>

    $.ajax({
        url: 'lista.json',
        dataType: 'json',
        type: 'get',
        cache: false,
        success: function(data){

            $(data.muncipios).each(function(index, value){
                $("#myselect").append('<option value="'+ this.value +'">'+ this.name +'</option>')

                console.log(value.name);
            });



        }
    });

</script>


</body>
<select id="myselect"><option></option></select>

</html>