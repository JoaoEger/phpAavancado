//setar elemento do html
const formulario = document.querySelector('form')

//iniciar um gerenciador de eventos
formulario.addEventListener('submit', function(event){
    event.preventDefault();//cancela evento html

    let valor = formulario.professor.value //pega valor do campo professor pelo name

    //valor = document.querySelector("#professor").value
    //valor = document.getElementById("professor").value
    
    fetch("http://localhost/phpAvancado/duvidas.php?professor="+valor)

    console.log(valor);
})