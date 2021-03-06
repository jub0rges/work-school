<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>React</title>
</head>
<body>
    <header>
     <div id="title">
      <a class="react-btn" href="index.php"><h1>React</h1></a>
     </div>

     <ul class="menu">
         <a href="Home.php"><li>Início</li></a>
         <a href="apresent.php"><li>Apresentação</li></a>
         <a href="history.php"><li>História</li></a>
         <a href="implement.php"><li>Implementação</li></a>
     </ul>
    
    </header>
     <h2 class="title-tds">Como funciona?</h2>
    <p class="text">Como comentado o React é uma biblioteca front-end e tem como um de seus objetivos facilitar a conexão entre diferentes partes de uma página, portanto seu funcionamento acontece através do que chamamos de componentes. <br>
Em outras palavras, podemos imaginar que o React divide uma tela em diversos componentes para, depois, trabalhar sobre eles de maneira individual.
Os componentes são utilizados para reaproveitamento de código e o alinhamento das interfaces. <br>
Isso torna o React uma tecnologia muito flexível para a solução de problemas e para a construção de interfaces reutilizáveis, uma vez que cada um destes componentes pode ser manipulado de maneira distinta.</p>


<h2 class="title-tds">Como o React usa JavaScript?</h2>
 <p class="text">O React é uma biblioteca que utiliza a linguagem de programação JavaScript.
O JS é uma das mais versáteis e populares linguagens de programação do mundo e conta com um grande número de bibliotecas e outras tecnologias que a utilizam. Entre elas, Node.js, Angular, VueJS, jQuery, Ember.js e, é claro, o React. <br>
Por essa razão, se você quer aprender a manipular esta biblioteca e extrair dela todo o seu potencial, é preciso antes ter uma boa base de conhecimento em JavaScript, bem como em suas outras duas linguagens principais: HTML e CSS. <br>
Isso porque o React utiliza uma extensão alternativa ao JavaScript para descrever seus componentes. Esta sintaxe é chamada de JSX.
O JSX, de modo grosseiro, é uma linguagem desenvolvida como uma mistura de HTML e JS. Seu objetivo é ser transposta para JS da maneira mais simplificada possível.</p>

<h2 class="title-tds">Características do React</h2>
<p class="text">Sendo criado para simplificar um processo complexo, o React tem como uma de suas principais características a acessibilidade com que ele é entendido.
Para os iniciantes em programação, está com certeza é uma das mais úteis bibliotecas a ser estudada.
Agora terá alguns elementos importantes e quais as suas funções.</p>

<h2 class="title-tds">Componentes</h2>
<p class="text">O uso de componentes é um dos pilares de sustentação do React.
Para entender e agir sobre uma determinada página, o React a quebra em pequenos pedaços, chamados de componentes, e os isola, sendo cada um deles independentes entre si perante a tecnologia.
Estes componentes são reutilizáveis e, uma vez categorizados, podem ser reaproveitados em quaisquer páginas de um site ou aplicativo.<br>
Os componentes de uma página podem ser organizados, por exemplo, em BarraLateral, MenuSuperior, BotaoChamada, ou da maneira que o programador preferir.
Os componentes podem ser comparados às funções em JavaScript.</p>


<h2 class="title-tds">Props (properties)</h2>
<p class="text">Dentro dos componentes estão as propriedades, ou props. Estas props são objetos com várias informações que podem ser de variados tipos, como função, número ou string. </p>

<h2 class="title-tds">State (estado)</h2>
<p class="text">Assim como as propriedades, os estados, ou states, também são objetos ou informações, mas ao invés de serem passadas para o componente, eles são criados dentro do componente.
Diferentemente das propriedades, os states são mutáveis, como por exemplo variáveis declaradas dentro de uma função. </p>

<h2 class="title-tds">Virtual DOM</h2>
<p class="text">O Virtual DOM, ou VDOM, é uma representação em memória de um DOM (Document Object Model) real de uma interface
Na prática, DOM real é a estrutura que representa a camada visual de uma página.
Para que fique mais claro, imagine o seguinte processo:
Para atualizar uma página, o React primeiro salva suas alterações em memória, ou seja, em um ambiente chamado de Virtual DOM. Isso acontece porque manipular um DOM virtual é muito mais rápido do que manipular um DOM real — ou seja, a página que está sendo atualizada.
Em front-end, a atualização de DOMs é extremamente corriqueira, uma vez que é através deles que as páginas de um site ou aplicativo são efetivamente atualizadas.
Após criada esta estrutura virtual, o React a traduz para a tela real com o mínimo de processos possível, trazendo mais agilidade para a atualização. Este processo é chamado de reconciliação. </p>

<h2 class="title-tds">JSX</h2>
<p class="text">Como citado acima, o JSX é uma sintaxe muito parecida com HTML, mas com elementos de JS.
Todos os componentes do React são descritos com o JSX, então se você pretende trabalhar com o React e todo o seu universo de possibilidades, é necessário aprender antes a compreender o JSX. </p>

<h2 class="title-tds">Um Componente Simples </h2>
<p class="text">Os componentes do React implementam um método render() que recebe os dados de entrada e retornam o que deve ser exibido. Este exemplo usa uma sintaxe parecida com XML chamada JSX. Os dados de entrada que são passados para o componente podem ser acessados no render() via this.props.
</p>

<br>

<h2 class="title-tds">Agora olhe um vídeo rápido e aprenda sobre React </h2>



<iframe width="560" height="315" src="https://www.youtube.com/embed/SQsR0KA-oew?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</body>
