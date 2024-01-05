//Busca do CEP
$('#Form1').on('submit',function(event){
    event.preventDefault();
    var Dados=$(this).serialize();
    var Cep=$('#Cep').val();

    $.ajax({
        url: 'https://viacep.com.br/ws/'+Cep+'/json/',
        method:'get',
        dataType:'json',
        data: Dados,
        success:function(Dados){
            $('.ResultadoCep').html('').append(''+Dados.logradouro+','+Dados.bairro+'-'+Dados.localidade+'-'+Dados.uf+'');
        },
        error:function(Dados){
            alert('Cep não encontrado. Tente Novamente');
            $('#Cep').val('');
        }
    });
});