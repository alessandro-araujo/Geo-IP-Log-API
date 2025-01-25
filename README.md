# geoLog

<h2><b>Boa noite Devs, vamos falar de APIs❓❓</b></h2>

<p><b>Application Programming Interface</b> (Interface de Programação de Aplicação), APIs são parâmetros que permitem que duas ou mais funções se comuniquem usando um conjunto de definições e protocolos de plataformas distintas.</p>

<p>Complexo ❓ kkkk na verdade não, vou te explicar, com as APIs podemos executar algumas funções que estão em servidores diferentes para com outros, até mesmo usando linguagens de programação diferentes, Exemplo.</p>

<p>Antes de introduzir, vou explicar para que serve e como funciona a API de localização, primeiro você deve entender que temos um IP definido do nosso provedor de Internet e esse IP é rastreável, você pode estar verificando seu IP no site, https://meuip.com.br/ 
Nesse site você descobre seu IP externo dado pelo seu provedor de Internet, ele funciona como uma espécie de endereço.</p>

<p>1° - Entre no site que está disponibilizando a API, https://ip-api.com/</p>

<p>Como podem ver, a API pega alguns dados, como a cidade que está localizado, uma LAT e LON próxima, e o provedor da sua Internet</p>

<h3>Mas o que nos interessa, é as formas de integração. da para utilizar JSON, XML, CVS, Newline e PHP, entre na opção JSON para continuar.</h3>

<p>2° - Você deve definir os parâmetros com o método GET, utilizando modelo URL.</p>

<p>Vamos configurar a API, podemos escolher que tipo de dados ela vai fazer a requisição para recuperar em nosso sistema, marque as opções que lhe agrada.</p>

<p>3° - Vamos integrar a API ao seu sistema. basta, digitar o código no cabeçalho em seu sistema, vamos entende-lo.</p>

<br>
Vamos utilizar os recursos do PHP para pegar o IP externo, segue a variavel.<br>
<code>$ip_addr = $_SERVER['REMOTE_ADDR'];</code>

<br>
<p>Criando a variável URL, vamos adicionar a URL que configuramos na pagina anterior.</p>
<code>$url = "http://ip-api.com/json/$ip_addr?fields=258047&lang=pt-BR";</code>

<p>agora é simples, utilizando o curl_init, curl_setopt, com a função json_decode agora basta, integrar os valores dentro das variáveis que você configurou.</p>

<h2>Obs: Essa API em especifico não funciona somente com a configuração padrão do localhost pelo XAMPP e pelo WAMPP, devera testar em um domínio.</h2>
