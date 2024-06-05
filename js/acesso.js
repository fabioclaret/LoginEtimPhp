window.onload = setInterval(acesso, 1000);
function acesso(){
    var relogio = document.querySelector(".data");

    var data  = new Date()
    var dias  = data.getDay()
    var mes   = data.getMonth()
    var ano   = data.getFullYear()
    var meses = new Array(
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    )
    
    var diaSemana = new Array(
        'Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado'
    )

    var hoje    = data.getDate()
    var hora    = data.getHours()
    var min     = data.getMinutes()
    var sec     = data.getSeconds()
    var strHora = hora + ":" + min + ":" + sec
    var strData = diaSemana[dias] + ", " + hoje + " de " + meses[mes] + " de " + ano + ", " + strHora
    relogio.innerHTML = strData
   
}