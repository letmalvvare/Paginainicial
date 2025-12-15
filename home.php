<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Carvi Clinic</title>
    <link rel="stylesheet" href="home.css">
    <!-- Importação das fontes utilizadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<?php
    include "header.php"; 
?>
<body>
    <!-- Banner página inicial -->
<section class="banner-container animate">
    <a href="agendamentos.php">
    <div class="banner-slide fade">
        <img src="banner/1.png" alt="Banner 1">
    </div>

    <div class="banner-slide fade">
        <img src="banner/2.png" alt="Banner 2">
    </div>
    </a>
</section>

    <!-- Apresentação de produtos da Carvi Clinic -->
     <section class="procedimentos-home">
        <h1 class="animate">Carvi Clinic: conheça nosso trabalho</h1>
        <p style="background-color: #d9d9d9; box-shadow: 0 4px 11px rgba(0, 0, 0, 0.3); padding: 2%; font-weight: 400; line-height: 5dvh; padding: 2% 5%;">
            Somos referência no mercado da beleza do Rio de Janeiro, por meio de nossos tratamentos de qualidade, 
            tecnologia de ponta, e olhar artístico sobre as características de cada cliente. 
            Veja nossos procedimentos mais famosos:
        </p>

        <div class="img-procedimentos">
            <a href="procedimentos.php" class="animate animate-left"><img src="imagens da clinica/Harmonização.jpg" alt=""><p>Harmonização facial</p></a>
            <a href="procedimentos.php" class="animate"><img src="imagens da clinica/Drenagem.jpg" alt=""><p>Drenagem linfática</p></a>
            <a href="procedimentos.php" class="animate animate-right"><img src="imagens da clinica/Botox.jpg" alt=""><p>Toxina botulínica (Botox)</p></a>
        </div>
        
        <div class="img-procedimentos-dois">
            <a href="procedimentos.php" class="animate animate-left"><img src="imagens da clinica/Preenchimento labial.jpg" alt=""><p>Preenchimento com ácido <br> hialurônico</p></a>
            <a href="procedimentos.php" class="animate"><img src="imagens da clinica/Lipo.jpg" alt=""><p>Lipo enzimática</p></a>
            <a href="procedimentos.php" class="animate animate-right"><img src="imagens da clinica/Limpeza de pele.jpg" alt=""><p>Limpeza de pele <br> profunda</p></a>
        </div>

        <button class="botao-procedimentos"><a href="procedimentos.php">VER TODOS OS PROCEDIMENTOS</a></button>
     </section>

    <!-- Depoimentos -->
    <h1 class="titulo-principal-depoimentos animate">DEPOIMENTOS</h1>
    <div class="depoimentos animate">
        <p class="titulo-depoimento">Aurélia R, 57 anos</p>
        <P class="texto-depoimento">"Resultados incríveis e superaram minhas expectativas! <br>
        A equipe é muito profissional. <br>
        O resultado do procedimento que eu fiz ficou bem natural, <br>
        exatamente como eu queria. <br>
        Recomendo pela excelência e segurança."</P>
    </div>

    <div class="depoimentos animate">
        <p class="titulo-depoimento">Ricardo F, 41 anos</p>
        <P class="texto-depoimento">"Clínica maravilhosa, ambiente acolhedor <br>
        e atendimento impecável. Senti total confiança na equipe, <br>
        que se preocupou o tempo todo em fazer exatamente <br>
        como eu queria, sem exageros."</P>
    </div>

    <div class="depoimentos animate">
        <p class="titulo-depoimento">Juliana M, 29 anos</p>
        <P class="texto-depoimento">"Não é só estética, é autoestima! <br>
        Gostei muito do acompanhamento pós-procedimento. <br>
        São muito atenciosos! Saio renovada a cada visita. Nota 10!"</P>
    </div>
    
    <!--Seção Nossos Profissionais-->
    
    <h1 class="titulo-nossos-profissionais animate">NOSSOS PROFISSIONAIS</h1>
    <section class="nossos-profissionais">
        <div class="img-e-nome animate animate-left"><img src="Dr. Filipe Duarte home.png" alt="Dr. Filipe Duarte"> 
            <p>Dr. Filipe Duarte <br>
            Formação: Cirurgião-dentista
        </p></div>
        <div class="img-e-nome animate"><img src="Dra. Melânia Pênedo home.png" alt="Dra. Melânia Pênedo"> 
            <p>Dra. Melânia Pênedo <br>
            Formação: Farmacêutica e <br> Cosmetóloga
        </p></div>
        <div class="img-e-nome animate animate-right"><img src="Dra. Marina Pinheiro home.png" alt="Dra. Marina Pinheiro"> 
            <p>Dra. Marina Pinheiro <br>
            Formação: Médica
        </p></div>
    </section>
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
    <script src="banner.js"></script>
</html> 

<?php
    include("footer.php");
?>


