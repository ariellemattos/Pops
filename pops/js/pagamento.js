$(document).ready(function() { 
    var form = $("#frmPagamento")
    
    //get session variables
    var name = sessionStorage.getItem("name");
    var logradouro = sessionStorage.getItem("logradouro");
    var cidade = sessionStorage.getItem("cidade");
    var cep = sessionStorage.getItem("cep");
    var num = sessionStorage.getItem("num");

    //get form values
    var holder = $("#txtNome").val();
    var mes = $("#sltMes").val();
    var ano = $("#sltAno").val();
    var numCartao = $("#txtNumCartao").val();
    var codSeg = $("#txtCodSeguranca").val();

    form.submit(function(event) {
        event.preventDefault();
        var card = {} 
        card.card_holder_name = holder
        card.card_expiration_date =  mes + '/' + ano;
        card.card_number = numCartao;
        card.card_cvv = codSeg;
        
        //const pagarme = require('pagarme')
        // pega os erros de validação nos campos do form e a bandeira do cartão
        var cardValidations = pagarme.validate({card: card})
				
        //Então você pode verificar se algum campo não é válido
        if(!cardValidations.card.card_number)
          swal('Oops, número de cartão incorreto', {icon:"error"});
         
        //Mas caso esteja tudo certo, você pode seguir o fluxo
        pagarme.client.connect({ encryption_key: 'ek_test_IDW9bbVSmjmYmaMxAQaSoD023y84xm' })
          .then(client => client.security.encrypt(card))
          .then(card_hash => $("#hash").html((card_hash)))
    
          pagarme.client.connect({ api_key: 'ak_test_nlWrn8okbIUe8n7UfLUXvq4I0mcH0A' })
    .then(client => client.transactions.create({
        "amount": 21000,
        "card_number": numCartao,
        "card_cvv": codSeg,
        "card_expiration_date": card.card_expiration_date,
        "card_holder_name": holder,
        "customer": {
        "external_id": "#3311",
        "name": holder,
        "type": "individual",
        "country": "br",
        "email": "randersonvieira1999@gmail.com",
        "phone_numbers": [
            "+5511948612289",
            
        ],
        "documents": [
            {
            "type": "cpf",
            "number": "46777025863"
            }
        ],
        "birthday": "1999-01-09"
        },
        "billing": {
        "name": name,
        "address": {
            "country": "br",
            "state": "sp",
            "city": cidade,
            "neighborhood": "null",
            "street": logradouro,
            "street_number":num,
            "zipcode": cep
        }
        },
        "shipping": {
        "name": name,
        "fee": 1000,
        "delivery_date": "2019-12-21",
        "expedited": true,
        "address": {
            "country": "br",
            "state": "sp",
            "city": cidade,
            "neighborhood": "null",
            "street": logradouro,
            "street_number": num,
            "zipcode": cep
      }
    },
    "items": [
      {
        "id": "r123",
        "title": "7up",
        "unit_price": 550,
        "quantity": 4,
        "tangible": true
      },
    ]
  }))
  .then(transaction => console.log(transaction))

        return false
    })


    $("#form_compra").submit(function(evt){
        evt.preventDefault();
        sessionStorage.setItem("name", $("#destinatario").val());
        sessionStorage.setItem("logradouro", $("#logradouro").val());
        sessionStorage.setItem("cidade", $("#cidade").val());
        sessionStorage.setItem("cep", $("#cep").val());
        sessionStorage.setItem("num", $("#num").val());
        
        
       
       
        window.location.href = "pagamento.php";
        
        //console.log(name);
    
    });
}); 







