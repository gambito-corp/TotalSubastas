<select class="select2-test"></select>


<script type="text/javascript">
var pais = 
$('.select2-test').select2({
    ajax: {
        url:process.env.MIX_APP_URL+'/test/consulta/',
        data: function (params) {
            var queryParameters = {
                id : params.term,
                idPais : pais
            }

            return queryParameters;
        },
        processResults: function (data) {
        // Transforms the top-level key of the response object from 'items' to 'results'
            return {
                results: data.id
            };
        },
    }
});

</script>

