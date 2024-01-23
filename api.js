let cep = "88540000"
let endPoint = `https://viacep.com.br/ws/${cep}/json/`

fetch(endPoint)
    .then(res => res.json())
    .then(ret => console.log(ret))