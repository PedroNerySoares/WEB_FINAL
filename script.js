



function validarTeste(){
        alert ("asdas")
}

/* FUNÇÃO: validarDadosObrigatorios 
 * OBJETIVO: verificar se todos os campos obrigatórios do form Aluno foram informados pelo usuário*/
function validarDadosObrigatorios(form){
    if (form.nome.value === ""){
        alert("Informe o nome completo.");
	    form.nome.focus();
    }
    return false;
}

function validarTamanho(nome){
    if (nome.value.length < 5){
        alert("Tamanho inválido");
	    form.nome.focus();
	}
}

/*Validar o campo telefone, usando a expressão regular definida */
function validarValorMonetario(valor){
        exp = /\d{1,5}\,\d{2}/;
        /* o método exec retorna o valor pesquisado
         * o test retorna true ou false*/
        if(!exp.test(valor.value)){
                valor.value = "";
                let div_msg_preco = document.getElementById("div_msg_preco");
                div_msg_preco.innerHTML = "Valor monetário inválido";
        }
}

window.onload = function(){

    document.getElementById("btnvoltar").addEventListener("click",function(e){
        e.preventDefault();
        alert("Cliquei no botão cancelar");
    });
}

/* ************************************************************************* */
/* OUTRAS FUNÇÕES NÃO UTILIZAS */
/* Validar o campo CEP, conforme a expressão regular definida */ 
function validarCEP(cep){
        exp = /\d{2}\.\d{3}\-\d{3}/;
        if(!exp.test(cep.value)){
	    cep.value = "";
            alert('Numero de Cep Inválido');               
	}
}

/* Validar o campo CPF, conforme a expressão regular definida */ 
function validarCPF(cpf){
        exp = /\d{3}\.\d{3}\.\d{3}\-\d{2}/;
        if(!exp.test(cpf.value)){
   	  cpf.value = "";
          alert('Numero do CPF Inválido');               
	}
}

/*Validar o campo telefone, usando a expressão regular definida */
function validarTelefone(tel){
        exp = /\(\d{2}\)\ \d{4,5}\-\d{4}/;
        /* o método exec retorna o valor pesquisado
         * o test retorna true ou false*/
        if(!exp.test(tel.value)){
                tel.value = "";
                alert('Numero de Telefone Inválido!');
        }
}

/* Validar o campo data, conforme a expressão regular definida */ 
function validarData(data){
        //alert('Data Invalida!'); 
        exp = /\d{2}\/\d{2}\/\d{4}/;
        /*     \/ – Uma barra literal  */
        if(exp.test(data.value)){
            var dia = data.value.substring(0,2);
            var mes = data.value.substring(3,5);
            var ano = data.value.substring(6,10);
            
            if((dia < 1) || (dia > 31)){
                alert('Data Invalida!');
            }else if((mes < 1) || (mes>12)){
                alert('Data Invalida!');
            }else if(ano<=1900){
                alert('Data Inválida!');
            }                  
        }
        else{
            data.value ="";
            alert('Data Invalida!');
        }       
}

/* Validar o campo e-mail, conforme a expressão regular definida */ 
function validarEmail(email){
        alert("entrei")
    /*A expressão regular abaixo veio da especificação do HTML5*/
    var filtro = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    /*
     * Explicação da expressão regular
     * 
     * 
     * outras expressões: 
     * [_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+).(\.[a-z]{2,3})$
     * ^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$
     *
     * (+) Casa o elemento precedente uma ou mais vezes. Por exemplo, ba+ casa
     *  "ba", "baa", "baaa", e assim por diante.
     * (\) Escape - anula o significado especial do metacaractere seguinte;
     * por exemplo, \. representa apenas um ponto.
     * (^) Casa o começo da cadeia de caracteres. Numa situação de múltiplas
     * linhas, casa o começo das linhas.
     * Logo percebe-se que as âncoras não casam pedaços do texto, elas servem 
     * apenas como uma referência.
     * ($) Casa o fim da cadeia de caracteres ou a posição logo antes da quebra
     * de linha do fim da cadeia.
     * Numa situação de múltiplas linhas, casa o fim das linhas.
     * (*) Coincidência dos caracteres precedidos ZERO ou mais vezes.  
     *   */
    
    if(filtro.test(email.value)) {
        return true;
    } else {
        email.value = "";
        return alert("E-mail inválido");
    }
    
}

/* Verificar se um campo só contém dígitos numéricos */
function validarDigNum(valor) {    
	
	if (!isNaN(valor.value)){
		return true;
	}else{
		valor.value = "";
        return alert("Este campo admite apenas números");
	}

}

/*Validar o tamanho do campo nome*/
function validarTamNome(nome){
	if (nome.value.length >= 4){
		return true;
	}else{		
        return alert("Informe ao menos 4 caracteres");
	}
}

/* Limpar os campos dentro de uma área/div */ /* Aula - 5 */
function limparCampos(area){
    
   /*pegar todos os elementos (neste caso campos) dentro de uma área informada*/
    var elementos = document.getElementById(area).querySelectorAll('*');
    for(var i = 0; i<elementos.length;i++){  
        switch (elementos[i].type) {
               case "text":
               case "textarea":
               case "password":               	   
                    elementos[i].value="";
                    break;
               case "file":	   
                   elementos[i].value="";                   
               case "select-one":
                    elementos[i].selectedIndex = 0;
                    break;
               case "radio":
               case "checkbox":
                    elementos[i].checked = false;
				break;
        }
    }   
}


/* MÁSCARAS DE CAMPO */

/* Máscara de CPF */ 
function mascaraCpf(cpf){  
        if(mascaraInteiro(cpf)===false){
                event.returnValue = false;
        }       
        return formataCampo(cpf, '000.000.000-00', event);
}

/* Máscara de Telefone */ 
function mascaraTelefone(tel){  
        if(mascaraInteiro(tel)===false){
                event.returnValue = false;
        }       
        return formataCampo(tel, '(00) 0000-0000', event);
}

/* Máscara de Celular */ 
function mascaraCelular(cel){  
        if(mascaraInteiro(cel)===false){
                event.returnValue = false;
        }       
        return formataCampo(cel, '(00) 00000-0000', event);
}

/* Máscara de Data */
function mascaraData(data){ 
        if(mascaraInteiro(data)===false){
                vent.returnValue = false;
        }       
        return formataCampo(data, '00/00/0000', event);
}

/* Máscara de CEP */ 
function mascaraCep(cep){  
        if(mascaraInteiro(cep)===false){
                event.returnValue = false;
        }       
        return formataCampo(cep, '00.000-000', event);
}

/*Máscara de Moeda - complicado demais - melhor usar JQuery MaskMoney*/
/*Não estudar - existem soluções melhores*/
function MascaraMoeda(valor, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if ((whichCode == 13) || (whichCode == 0) || (whichCode == 8)) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = valor.value.length;
    for(i = 0; i < len; i++)
        if ((valor.value.charAt(i) != '0') && (valor.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(valor.value.charAt(i))!=-1) aux += valor.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) valor.value = '';
    if (len == 1) valor.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) valor.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        valor.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        valor.value += aux2.charAt(i);
        valor.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}



/* Validar se um campo é numérico */
function mascaraInteiro(){
        //veja a tabela de códigos ASCII
        if (event.keyCode < 48 || event.keyCode > 57){ 
                event.returnValue = false;
                return false;
        }
        return true;
}

/* Formatar a máscara de um campo para ser exibido a cada 
 * tecla pressionada */
function formataCampo(campo, mascara, evento) { 
        var booleanoMascara; 

        var digitado = evento.keyCode;
        exp = /\:|\-|\.|\/|\(|\)| /g; //Verifica toda a string (global). 
        // OBS: No espaço antes da / final - usado na máscara de telefone
        
        /* pegar a expressão e removar os caracteres / ( : , etc ... 
         * de modo que fique só número */
        campoSoNumeros = campo.value.toString().replace(exp,""); 
         
        var posicaoCampo = 0; //indice para percorrer o campoSoNumeros
        var novoValorCampo="";
        var tamanhoMascara = campoSoNumeros.length;; 

        if (digitado !== 8) { // 8 é o ASCII do backspace 
                for(i=0; i<= tamanhoMascara; i++) { // pecorre a máscara
                        booleanoMascara  = ((mascara.charAt(i) === "-") ||
                                            (mascara.charAt(i) === ".") ||
                                            (mascara.charAt(i) === "/") ||
                                            (mascara.charAt(i) === "(") ||
                                            (mascara.charAt(i) === ")") ||
                                            (mascara.charAt(i) === " ") ||
                                            (mascara.charAt(i) === "%") ||
                                            (mascara.charAt(i) === ":")); 
                        
                        /* Se o caracter avaliado na máscara é um dos listados
                         * acima*/
                        if (booleanoMascara) { 
                                novoValorCampo += mascara.charAt(i); 
                                /* o incremento a seguir aumenta o tamanho da 
                                 * máscara, pois agora incluiu-se um dos 
                                 * caracteres listados acima*/
                                tamanhoMascara++; 
                        }else { /* Se o caracter avaliado na máscara
                             *  for um número (neste caso o 0) */
                           novoValorCampo +=campoSoNumeros.charAt(posicaoCampo); 
                           posicaoCampo++; 
                        }              
                  }
                  campo.value = novoValorCampo; //colocar o novo valor no campo
                  return true; 
        }else { 
                return true; 
        }
}

/* ************************************************************************* */

