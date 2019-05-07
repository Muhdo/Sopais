<!DOCTYPE html><html lang="pt"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="shortcut icon" type="image/png" href="../img/favicon.png"/><title>Sopais</title> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <link rel="stylesheet" href="../materialize/css/materialize.css"> <script src="../materialize/js/materialize.min.js"></script> <link rel="stylesheet" href="../css/style.css"><link rel="stylesheet" href="../css/empresa.css"></head><body> <?php include_once "includes/header.php"; ?> <main><div class="parallax-container"><div class="parallax"> <img class="img-heading" src="../img/drone.png"></div></div><div class="div-wrapper"><p id="p-texto"><i>Sopais – Componentes Metálicos, Lda. </i> foi fundada em 1987 contando com mais de 30 anos de experiência na indústria metalomecânica.<br><br>Assente no know-how adquirido ao longo da sua história a empresa olha para as suas instalações, tecnologia e estrutura humana qualificada, flexível e profissional – capaz de abraçar projetos ambiciosos – como fatores que a diferenciam. Com uma oferta de excelência a empresa visa fixar-se no mercado como top of mind na indústria da produção de componentes metálicos para todos os setores.</p></div><div class="div-wrapper"><div class="div-division flow division-top imgbuttons"> <img class="normal" src="../img/icons/visao.png" id="1" onclick="mudar($(this).attr('id'));"> <img class="selected" src="../img/icons/missao.png" id="2" onclick="mudar($(this).attr('id'));"> <img class="normal" src="../img/icons/valores.png" id="3" onclick="mudar($(this).attr('id'));"></div><div class="div-container" id="div-azul"><div class="div-box hidden" id="1"><h3>Visão</h3><p>Ser uma das primeiras empresas a ser consultada, dentro da indústria metalomecânica, pelos grandes grupos internacionais que necessitarem de componentes metálicos.</p></div><div class="div-box shown" id="2"><h3>Missão</h3><p>Desenvolver e dar soluções, produzir e comercializar com excelência, componentes metálicos para vários tipos de setores de atividade.<br><br>Procuramos sempre produzir produtos/serviços que satisfaçam integralmente os nossos clientes, assim como as suas exigências, privilegiando prazos de entrega, qualidade, preços e uma relação de plena confiança.<br><br>Com os nossos fornecedores privilegiamos uma relação de confiança e cooperação e pretendemos dispor aos nossos colaboradores as melhores condições que proporcionem um bom ambiente laboral criando uma equipa qualificada e competente.</p></div><div class="div-box hidden" id="3"><h3>Valores</h3><p>Satisfação do cliente;<br>Melhoria contínua;<br>Respeito pelo meio ambiente e prevenção da poluição;<br>Prevenção das lesões e afeções da saúde;<br>Cumprir os requisitos legais aplicáveis às atividades da empresa;<br>Foco em resultados;<br>Confiança entre as partes;<br>Valorização e respeito pelos colaboradores;<br>Inovação.</p></div></div></div><div class="parallax-container"><div class="parallax"> <img class="img-footing" src="../img/drone.png"></div></div> </main> <script>$("nav a[href$='empresa.php']").addClass("paginaatual");$(document).ready(function(){var elems=document.querySelectorAll('.parallax');var instances=M.Parallax.init(elems);});function mudar(id){$("#div-azul").find(".div-box").removeClass("shown").addClass("hidden");$("#div-azul").find("#"+id).removeClass("hidden").addClass("shown");$(".imgbuttons").find("img").removeClass("selected").addClass("normal");$(".imgbuttons").find("#"+id).removeClass("normal").addClass("selected");}</script> <?php include_once "includes/aside.php"; include_once "includes/footer.php"; ?></body></html>
