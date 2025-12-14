<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso Espaço - Carvi Clinic</title>
     <link rel="stylesheet" href="nossoespaco.css">
    <!-- Importação das fontes utilizadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<?php
    include("header.php");
?>

<body>
    <h1 class="titulo-nossos-profissionais animate">NOSSO ESPAÇO</h1>
<!--Conteúdo da página-->  
        <section>
           
            <div class="bloco-um-nosso-espaco animate">
                <img src="imagens da clinica/Imagem Nosso Espaço (1).jpg" alt="Imagem da clínica">
                <div class="titulo-texto">
                <h1 id="titulo-um">Conheça o espaço em que cuidaremos de você</h1>
                <p>Aqui, acreditamos que o ambiente físico é fundamental para <strong>potencializar os resultados</strong>
                dos tratamentos e garantir o <strong>bem-estar integral</strong> dos nossos clientes. Nosso espaço foi 
                meticulosamente projetado para ser um refúgio de <strong>tranquilidade e sofisticação.</strong>
                Desde o momento em que você adentra nossa recepção, notará o equilíbrio entre um <strong>design moderno, 
                clean e elegante</strong>, e uma atmosfera acolhedora.</p>
                <button id="botao"><a href="#endereco">Ver endereço da Carvi Clinic</a></button>
                </div>
            </div>
            <!-- <p class="texto-meio">O coração da Carvi Clinic reside na precisão de nossas salas de tratamento. 
                Equipadas com tecnologias de última geração alinhadas às mais rigorosas normas de segurança, garantimos 
                que cada procedimento seja realizado com máxima eficácia e conforto. Priorizamos a funcionalidade e a 
                higiene impecável em cada detalhe, assegurando que você esteja sempre em um ambiente esterilizado e 
                tecnologicamente avançado.</p> -->

            <div class="bloco-dois-nosso-espaco animate ">
                <img src="imagens da clinica/Imagem Nosso Espaço (3).jpg" alt="">
                <img src="imagens da clinica/Imagem Nosso Espaço (4).jpg" alt="">
                <img src="imagens da clinica/Imagem Nosso Espaço (5).jpg" alt="">
            </div>
        </section>

        <div id="endereco" class="animate">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.5044752696886!2d-43.36962662489749!3d-22.968469579211774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd9828e978c17%3A0x4401bc4f8e2ca033!2sAv.%20Ator%20Jos%C3%A9%20Wilker%2C%20600%20-%20Jacarepagu%C3%A1%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022775-024!5e0!3m2!1sen!2sbr!4v1765516176869!5m2!1sen!2sbr" width="50%" height="450" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class= "titulo-texto">
        <h2>Endereço: Av. Ator José Wilker, 600 - Jacarepaguá, Rio de Janeiro</h2>
        <p>Entre em contato conosco: <br>
        <a href="https://wa.me/5521974729384">WhatsApp: (21) 97472-9384</a> <br>
        <a href="https://www.instagram.com/carviclinic/">Instagram: @carviclinic</a>
        </p>
        <button id="botao"><a href="agendamentosint.php">Agendar consulta</a></button>
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
    include("footer.php");
?>
