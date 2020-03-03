function escreve_mensagem(valor){
            mensagem = "você escreveu '"+valor+"' ";
            alert(mensagem);
            if(isNaN(valor)){
                alert(valor + " não é um número");
            }
            else{
                alert(valor + " é um número");
            }
        }
