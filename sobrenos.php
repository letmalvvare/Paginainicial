<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Carvi Clinic</title>
    <link rel="stylesheet" href="sobrenos.css">
    <!-- Importação das fontes utilizadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<?php
    include ("header.php"); 
?>

<body>

<h1 class="titulo-sobre-nos">SOBRE NÓS</h1>
    
    <div class="sobre-nos animate animate-left">
        <img src="imagens da clinica/Carvi Clinic foto logo.jpg" alt="">
        <div class="titulo-texto">
        <h1 id="titulo-um">Sobre a Carvi Clinic</h1>
        <p> 
        Na Carvi Clinic, acreditamos que a verdadeira beleza reside na confiança e no bem-estar integral.
        Mais do que uma clínica de estética, somos um espaço dedicado ao seu cuidado, onde a tecnologia avançada
        e o atendimento humanizado se unem para realçar o que há de mais bonito em você.
        </p>
        </div>
    </div>  

    <!--Diferencial da Carvi Clinic-->
    <h1 class="titulo-diferencial">Nossos serviços seguem esses princípios:</h1>
    <div class="diferencial animate">
        <p>
            <strong>Tratamentos Personalizados</strong> <br><br> Cada cliente recebe um plano de tratamento desenhado exclusivamente para suas necessidades e objetivos.
        </p>
        <p>
            <strong>Experiência Integrada</strong> <br><br> Oferecemos uma gama completa de serviços, incluindo consultoria de estilo e mudança de visual, para uma 
            transformação abrangente.
        </p>
        <p>
            <strong>Especialização em Visagismo</strong> <br><br> Utilizamos o visagismo para criar harmonia e equilíbrio, ressaltando as características únicas de cada 
            cliente.
        </p>
    </div>

    <div class="sobre-nos-dois animate animate-right">
        <img src="imagens da clinica/Imagem Sobre Nós (2).jpg" alt="">
        <div class="titulo-texto">
        <h1 id="titulo-dois">Nosso destaque no mundo da estética</h1>
        <p>Nosso diferencial reside na fusão harmoniosa entre <strong>tecnologia de ponta</strong>, baseada em <strong>ciência e evidência</strong>, 
            e um olhar artístico e <strong>humanizado</strong>. Cada jornada na Carvi Clinic começa com uma Avaliação, uma consulta 
            detalhada que busca <strong>compreender</strong> não apenas as necessidades físicas, mas também as expectativas e o estilo 
            de vida do cliente.
        </p>
        <button type="submit" id="botao"><a href="agendamentos_int.php">Quero fazer um agendamento</a></button>
        </div>
    </div>

    <!-- Horários de funcionamento e vias de contato-->
    <div class="horarios-contatos animate">
        <h2 class="horarios">HORÁRIO DE FUNCIONAMENTO</h2>
        <p>Quinta, sexta e sábado - 9h às 18h</p>
        <h2 class="contatos">ENTRE EM CONTATO</h2>
        <p><a href="https://wa.me/5521974729384">Via WhatsApp: (21)97472-9384</a><br>
        <a href="https://mail.google.com/mail/u/0/?hl=pt-BR#inbox?compose=CllgCKCHTlvrmGFmPRjmrLWjjXXpPWtFBbPXTVbhxjkChFDklDhpvcgbjZmhDKHXwvgBXNgMPmL">Via E-mail: contatocarviclinic@gmail.com</a> <br>
        <a href="https://www.instagram.com/carviclinic/">Via Intagram: @carviclinic</a>
        </p>
    </div>

    <!--Missão, Visão, Valores-->
    <div class="missao-visao-valores animate">
        <img src="imagens da clinica/Imagem Atendimento.jpg" alt="Atendimento">
        <div class="titulo-texto">
        <h1 class="titulo-missao-visao-valores">Nossa Missão, Visão e Valores</h1>
        <p>
            <strong>Missão:</strong> Ajudar pessoas a expressarem sua identidade, através de uma jornada personalizada de 
            auto-descoberta.<br>
            <strong>Visão:</strong> Ser referência no mercado de estética e visagismo, utilizando uma abordagem inovadora 
            e personalizada que inspira pessoas a abraçarem sua verdadeira essência e viverem sua melhor versão. <br>
            <strong>Valores:</strong> Sustentabilidade, Autenticidade, Inovação, Excelência e Personalização.
        </p>
        </div>
    </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const elements = document.querySelectorAll(".animate");

                const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                },
            {
                threshold: 0.2
            }
                );

    elements.forEach(el => observer.observe(el));
});
</script>

</body>
</html>

<?php
    include ("footer.php"); 
?>
