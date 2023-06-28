// TRATAMENTO PARA OS CAMPOS cidade e estado
const URL_ESTADOS = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome'
var estados = document.getElementById('estados')

// o primeiro then captura os dados na variavel response
// o segundo then trata os dados recebidos
// o catch vai tratar os erros
// fetch(url).then(response)then.(json).catch(erro)
fetch(URL_ESTADOS).then(response => response.json()).then(
    json => {
        //inicia a variavel options com os itens da lista
        let options = '<option>Selecione um estado</option>'

        // laço para CONCATENAS a variável options com todos os estados
        for (const i in json) {
            options += `<option value="${json[i].id}">${json[i].nome}</option>`
        }


        //Mostra dentro do select estados
        estados.innerHTML = options
    }
).catch(erro => alert('Houve um erro na consulta: ' + erro))


//Quando o campo estados for atualizado o campo cidades será preenchido
estados.addEventListener('change', () => {
    let url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estados.value}/municipios`
    let cidades = document.getElementById('cidades')
    let options = '<option> Selecione uma cidade </option>'

    fetch(url).then(response => response.json()).then(json => {
        for (const i in json) {
            options += `<option value="${json[i].nome}">${json[i].nome}</option>`
        }
        cidades.innerHTML = options
    }).catch(erro => alert(`Erro na conexão -  ${erro}`))
})