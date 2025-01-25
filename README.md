# geoLog

<h2><b>Boa noite Devs, vamos falar de APIs❓❓</b></h2>

<p><b>Application Programming Interface</b> (Interface de Programação de Aplicação), APIs são parâmetros que permitem que duas ou mais funções se comuniquem usando um conjunto de definições e protocolos de plataformas distintas.</p>

<p>Complexo ❓ kkkk na verdade não, vou te explicar, com as APIs podemos executar algumas funções que estão em servidores diferentes para com outros, até mesmo usando linguagens de programação diferentes, Exemplo.</p>

<p>Antes de introduzir, vou explicar para que serve e como funciona a API de localização, primeiro você deve entender que temos um IP definido do nosso provedor de Internet e esse IP é rastreável, você pode estar verificando seu IP no site, https://meuip.com.br/ 
Nesse site você descobre seu IP externo dado pelo seu provedor de Internet, ele funciona como uma espécie de endereço.</p>

<p>1° - Entre no site que está disponibilizando a API, https://ip-api.com/</p>

<p>Como podem ver, a API pega alguns dados, como a cidade que está localizado, uma LAT e LON próxima, e o provedor da sua Internet, como mostra na primeira imagem</p>
<img src="https://scontent.fpoo2-1.fna.fbcdn.net/v/t39.30808-6/312561210_2703610999775107_3763246804021877197_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=4oB2AfsdJ3EAX-u-rqK&_nc_ht=scontent.fpoo2-1.fna&oh=00_AfCgPv38997zr-d2NjIrLM8T4jfa8HYUrQgVz17YuYs3Ew&oe=6395AAAE" alt="">
<p>Obs: escondi meus dados por questões de segurança.</p>

<h3>Mas o que nos interessa, é as formas de integração. da para utilizar JSON, XML, CVS, Newline e PHP, entre na opção JSON para continuar.</h3>

<p>2° - Como na imagem, você deve definir os parâmetros com o método GET, utilizando modelo URL.</p>
<img src="https://scontent.fpoo2-1.fna.fbcdn.net/v/t39.30808-6/312000623_2703612939774913_2833088542373587236_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=f_t7H4ztpTgAX8Agm2T&_nc_ht=scontent.fpoo2-1.fna&oh=00_AfA-Tnnjpm0utodo4-cI8xR-govyIxPn748PXf4WRqTTsg&oe=639610A9" alt="">

<p>Vamos configurar a API, seguindo a imagem, podemos escolher que tipo de dados ela vai fazer a requisição para recuperar em nosso sistema, marque as opções que lhe agrada.</p>
<img src="https://scontent.fpoo2-1.fna.fbcdn.net/v/t39.30808-6/312813613_2703659866436887_3874706474716812871_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=2ZLuNAheqiwQ7kNvgEuy1fJ&_nc_oc=AdgajUhh6EPHRxDArDei-3uJ3gwSkWPfOJ-qkGSPnYvzeIyQU6UE2lRQcwp8VDoD3eE&_nc_zt=23&_nc_ht=scontent.fpoo2-1.fna&_nc_gid=AjmRPcIvumtAt8hvYrknY-U&oh=00_AYAYUyTawzN1V3idMtc1wmS4yiDmbOFvM5g4OIc3mUpMcw&oe=679B39C6" alt="">

<p>3° - Vamos integrar a API ao seu sistema. basta, digitar o código no cabeçalho em seu sistema, vamos entende-lo.</p>
<img src="https://scontent.fpoo2-1.fna.fbcdn.net/v/t39.30808-6/312804383_2703639723105568_5859901621827910878_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_ohc=jzzrbgY5UrAAX8ERAvv&tn=RjR3YJhMqGte1mqP&_nc_ht=scontent.fpoo2-1.fna&oh=00_AfC7EgMq79rPU9kMYbSP5lvWawCfHZ5DjnNL6Uk1TKMw4A&oe=6394F7B7" alt="">
<br>
Vamos utilizar os recursos do PHP para pegar o IP externo, segue a variavel.<br>
<code>$ip_addr = $_SERVER['REMOTE_ADDR'];</code>

<br>
<p>Criando a variável URL, vamos adicionar a URL que configuramos na pagina anterior.</p>
<code>$url = "http://ip-api.com/json/$ip_addr?fields=258047&lang=pt-BR";</code>

<p>agora é simples, utilizando o curl_init, curl_setopt, com a função json_decode agora basta, integrar os valores dentro das variáveis que você configurou.</p>

<h2>Obs: Essa API em especifico não funciona somente com a configuração padrão do localhost pelo XAMPP e pelo WAMPP, devera testar em um domínio.</h2>
