<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Carvi Clinic</title>
    <link rel="stylesheet" href="procedimentos.css">
    <!-- Importação das fontes utilizadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<?php
    include("header.php");
?>

<body>
  <div class="container-proc">
    <div class="header-proc">
      <h1 class="procedimentoh1">PROCEDIMENTOS</h1>
      <p class="ptop"style="background-color: #d9d9d9; box-shadow: 0 4px 11px rgba(0, 0, 0, 0.3); padding: 2%; font-weight: 400; line-height: 5dvh; padding: 2% 5%;">Descubra a harmonia perfeita para o seu rosto e seu corpo! Exploramos as mais avançadas técnicas de estética, combinando ciência e inovação. Deixe-nos guiá-lo numa jornada de realce e rejuvenescimento, revelando a sua melhor versão!</p>
      <nav class="menu-proc">
        <button class="btn-proc ativo-proc" data-section="corporais">Corporais</button>
        <button class="btn-proc" data-section="faciais">Faciais</button>
      </nav>
    </div>

    <main class="conteudo-proc" id="conteudo-proc"></main>
  </div>

  <script>
    const dadosProcedimentos = {
      corporais: [
        {
          nome: "Massagem Relaxante",
          imagem:  "imagens da clinica/MassagemR.jpg",
          imagemDetalhe: "imagens da clinica/MassagemR.jpg",
          descricao: "Sessão de massagem com movimentos suaves e profundos, pensada para aliviar tensões, melhorar a circulação e promover profundo relaxamento corporal.",
          antes: "./Imagens Procedimentos/Massagem antes.png",
          depois: "./Imagens Procedimentos/Massagem depois.png"
        },
        {
          nome: "Drenagem Linfática",
          imagem: "./imagens da clinica/Drenagem.jpg",
          imagemDetalhe: "./imagens da clinica/Drenagem.jpg",
          descricao: "Técnica manual que estimula o sistema linfático, auxiliando na redução de inchaços e retenção de líquidos.",
          antes: "./Imagens Procedimentos/Drenagem antes.png",
          depois: "./Imagens Procedimentos/Drenagem depois.png"
        },
        {
          nome: "Modeladora Corporal",
          imagem: "imagens da clinica/Modeladora.jpg",
          imagemDetalhe: "imagens da clinica/Modeladora.jpg",
          descricao: "Massagem profunda e enérgica que ajuda a modelar o contorno corporal e ativar a circulação.",
          antes: "./Imagens Procedimentos/Modeladora antes.png",
          depois: "./Imagens Procedimentos/Modeladora depois.png"
        }
      ],
      faciais: [
        {
          nome: "Limpeza de Pele Profunda",
          imagem: "imagens da clinica/LimpezaP.png",
          imagemDetalhe: "imagens da clinica/LimpezaP.png",
          descricao: "Procedimento para remoção de impurezas e células mortas, promovendo renovação e viço natural à pele do rosto.",
          antes: "./Imagens Procedimentos/Limpeza de pele Antes.png",
          depois: "./Imagens Procedimentos/Limpeza de pele Depois.png"
        },
        {
          nome: "Peeling Químico",
          imagem: "imagens da clinica/PeelingQuimico.jpeg",
          imagemDetalhe: "imagens da clinica/PeelingQuimico.jpeg",
          descricao: "Aplicação controlada de agentes químicos que estimulam renovação celular e uniformizam o tom da pele.",
          antes: "./Imagens Procedimentos/Peeling químico antes.png",
          depois: "./Imagens Procedimentos/Peeling Químico depois.png"
        },
        {
          nome: "Aplicação de Botox",
          imagem: "imagens da clinica/Botox.jpg",
          imagemDetalhe: "imagens da clinica/Botox.jpg",
          descricao: "Procedimento para suavizar rugas e linhas de expressão, com resultado natural e rápido.",
          antes: "./Imagens Procedimentos/botox antes.png",
          depois: "./Imagens Procedimentos/botox depois.png"
        }
      ]
    };

    const conteudo = document.getElementById("conteudo-proc");
    const botoes = document.querySelectorAll(".btn-proc");

    botoes.forEach(btn => {
      btn.addEventListener("click", () => {
        botoes.forEach(b => b.classList.remove("ativo-proc"));
        btn.classList.add("ativo-proc");
        carregarSecao(btn.dataset.section);
      });
    });

    function carregarSecao(secao) {
      const procedimentos = dadosProcedimentos[secao];
      conteudo.innerHTML = `
        <div class="carrossel-proc">
          ${procedimentos.map((p, i) => `
            <div class="item-proc ${i === 1 ? "centro-proc" : ""}" 
              style="background-image:url('${p.imagem}')" data-index="${i}"></div>
          `).join("")}
        </div>
        <div class="nome-proc" id="nome-proc">Procedimento: ${procedimentos[1].nome}</div>
        <div id="detalhes-wrapper-proc"></div>
      `;
      ativarCarrossel(procedimentos);
    }

    function ativarCarrossel(procedimentos) {
      const carrossel = document.querySelector(".carrossel-proc");
      const nomeProc = document.getElementById("nome-proc");
      const detalhes = document.getElementById("detalhes-wrapper-proc");

      let ordem = [...procedimentos];

      function render() {
        carrossel.innerHTML = ordem.map((p, i) => `
          <div class="item-proc ${i === 1 ? "centro-proc" : ""}"
            style="background-image:url('${p.imagem}')"></div>
        `).join("");
        nomeProc.textContent = "Procedimento: " + ordem[1].nome;

        detalhes.innerHTML = `
          <div class="detalhes-proc">
            <div class="detalhe-grid-proc">
              <div class="detalhe-imagem-proc" style="background-image:url('${ordem[1].imagemDetalhe}')"></div>
              <div class="detalhe-texto-proc">
                <h2>${ordem[1].nome}</h2>
                <p>${ordem[1].descricao}</p>
              </div>
            </div>
            <div class="galeria-proc">
              <div class="card-proc">
                <div class="label-proc">ANTES</div>
                <div class="img-proc" style="background-image:url('${ordem[1].antes}')"></div>
              </div>
              <div class="card-proc">
                <div class="label-proc">DEPOIS</div>
                <div class="img-proc" style="background-image:url('${ordem[1].depois}')"></div>
              </div>
            </div>
          </div>
        `;

        document.querySelectorAll(".item-proc").forEach((item, i) => {
          item.addEventListener("click", () => {
            if (i === 0) {
              ordem.push(ordem.shift());
              render();
            } else if (i === 2) {
              ordem.unshift(ordem.pop());
              render();
            }
          });
        });
      }
      render();
    }

    carregarSecao("corporais");
  </script>
</body>
</html>

<?php
    include("footer.php");
?>
