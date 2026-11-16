<title>ARS Sites</title>
<meta name="claude:viewport-fit-sides" content="cover">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/ars.css">
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
    <symbol id="ars-mark" viewBox="9 22 636 636">
        <circle cx="327" cy="340" r="318" fill="#e35f21" />
        <path fill="#05080a" d="M135 228 250 163V517L135 452Z M270 152 327 120 385 152V530L327 562 270 528Z M405 163 520 228V452L405 517Z" />
    </symbol>
</svg>

<header class="top band">
    <div class="in">
        <a class="brand" href="#topo" aria-label="Ars, início">
            <svg class="mk" aria-hidden="true">
                <use href="#ars-mark" />
            </svg>Ars
        </a>
        <nav aria-label="Seções">
            <a href="#sobre">Sobre</a>
            <a href="#case">Case RoboParts</a>
            <a href="#contato">Contato</a>
        </nav>
        <button class="theme" id="tema" type="button" aria-label="Alternar tema claro e escuro">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z" />
            </svg>
        </button>
    </div>
</header>

<main id="topo">
    <section class="hero band">
        <div class="in">
            <div>
                <p class="eyebrow">ARS · criação de sites</p>
                <h1>Sites sob medida, <em>do layout ao servidor.</em></h1>
                <p class="lead">A ARS cria sites e lojas virtuais completos. Nosso projeto mais recente é a RoboParts, uma loja de robôs que você pode navegar logo abaixo.</p>
                <div class="cta">
                    <a class="btn btn-main" href="#case">Navegar pela RoboParts</a>
                    <a class="btn btn-line" href="#contato">Falar com a ARS</a>
                </div>
            </div>

            <div class="mock" id="mock" data-m="escuro" aria-label="Miniatura da loja RoboParts">
                <div class="mock-bar"><b></b><b></b><b></b><span>RoboParts</span></div>
                <div class="mock-nav">
                    <span class="logo">
                        <svg viewBox="0 0 32 32" aria-hidden="true">
                            <rect width="32" height="32" rx="6" fill="#90e0ef" />
                            <circle cx="11" cy="21" r="4" fill="none" stroke="#fff" stroke-width="2.5" />
                            <path d="M14 18 L23 9" stroke="#fff" stroke-width="2.5" stroke-linecap="round" />
                            <circle cx="24" cy="8" r="2.2" fill="#fff" />
                        </svg>
                        RoboParts
                    </span>
                    <button class="pill" id="mockTema" type="button">tema: escuro</button>
                </div>
                <div class="mock-body">
                    <small>Loja de robôs</small>
                    <h3>Beyond Human.</h3>
                    <p>Robôs para indústrias, fazendas, comércio e laboratórios.</p>
                    <div class="chips"><span>Industriais</span><span>Humanoides</span><span>Sociais</span><span>Agrícolas</span><span>Colaborativos</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec band alt" id="sobre">
        <div class="in sobre">
            <div>
                <p class="eyebrow">Sobre a ARS</p>
                <h2>Criamos o site e entregamos funcionando.</h2>
            </div>
            <div>
                <p>A ARS desenvolve sites para negócios que precisam de mais do que uma página bonita: visual feito para o assunto do cliente, área de login, painel para cadastrar o próprio conteúdo e publicação em servidor.</p>
                <div class="tags"><span>Lojas virtuais</span><span>Sites institucionais</span><span>Painel de administração</span><span>Chatbot</span><span>Publicação</span></div>
            </div>
        </div>
    </section>

    <section class="sec band" id="case">
        <div class="in">
            <div class="case-head">
                <p class="eyebrow">Case · RoboParts</p>
                <h2>Navegue pela loja que a ARS criou.</h2>
                <p>A RoboParts vende robôs industriais, humanoides, sociais, agrícolas e colaborativos. Esta é a página inicial do projeto, funcionando aqui mesmo, com o robô 3D interativo: passe o mouse sobre ele.</p>
            </div>

            <div class="paginas" id="paginas" role="group" aria-label="Página da RoboParts">
                <span class="rot">Página</span>
                <button class="chip" type="button" data-go="home">Início</button>
            </div>

            <div class="janela">
                <div class="janela-bar"><b></b><b></b><b></b><span class="url" id="url">app/index.php</span></div>
                <div class="rp" id="rp" data-m="claro">
                    <div class="rp-view" id="view"></div>
                    <div class="rp-toast" id="toast" role="status"></div>
                    <button class="rp-chat-btn" id="chatBtn" type="button" aria-label="Abrir chat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12z" />
                        </svg></button>
                    <div class="rp-chat" id="chat">
                        <div class="rp-chat-t"><span>Fale com a gente</span><button type="button" id="chatX" aria-label="Fechar chat">✕</button></div>
                        <div class="rp-msgs" id="msgs">
                            <div class="rp-b bot">Olá! Pergunte sobre preços, categorias ou contato.</div>
                        </div>
                        <div class="rp-sug" id="sug"></div>
                        <form id="chatForm"><input id="chatIn" type="text" placeholder="Digite sua mensagem..." autocomplete="off" aria-label="Mensagem"><button type="submit">Enviar</button></form>
                    </div>
                </div>
            </div>
            <p class="dica"><span>Passe o mouse sobre o robô: a cabeça e o corpo acompanham o cursor.</span></p>

            <details class="mais">
                <summary>Ver como o projeto foi montado</summary>
                <div class="tec">
                    <div>
                        <p style="color:var(--ink-2);margin-bottom:16px">Todo o site fica na pasta <code>app/</code>. O banco MySQL já está configurado para quando a loja crescer.</p>
                        <div class="stack"><span>PHP</span><span>Apache</span><span>Docker</span><span>MySQL 8.4</span><span>JavaScript</span><span>CSS</span><span>Spline 3D</span><span>Coolify</span></div>
                    </div>
                    <pre class="tree" aria-label="Estrutura de pastas do RoboParts">RoboParts/
├── <b>app/</b>
│   ├── index.php
│   ├── php/    login · carrinho · admin…
│   ├── css/  js/  img/
│   └── data/loja.json
├── docker/
├── database/schema.sql
└── Dockerfile · compose.yaml</pre>
                </div>
            </details>
        </div>
    </section>

    <section class="sec band" id="contato" style="padding-top:0">
        <div class="in">
            <div class="contato">
                <div>
                    <h2>Vamos criar o site do seu negócio?</h2>
                    <p>Conte o que você vende e quem são seus clientes. A ARS responde com uma proposta.</p>
                </div>
                <div class="canais" id="canais"></div>
            </div>
        </div>
    </section>
</main>

<footer class="band">
    <div class="in">
        <span class="fl"><svg class="mk" aria-hidden="true">
                <use href="#ars-mark" />
            </svg>Ars</span>
        <span>© 2026 Ars · criação de sites</span>
    </div>
</footer>

<script>
    /* Preencha com os canais da ARS. Campos vazios não aparecem na página. */
    const CONTATO = {
        whatsapp: '',
        email: ''
    };

    (function() {
        var raiz = document.documentElement;
        var $ = function(id) {
            return document.getElementById(id);
        };

        /* Tema da página da ARS */
        $('tema').addEventListener('click', function() {
            var escuro = raiz.dataset.theme === 'dark' ||
                (!raiz.dataset.theme && matchMedia('(prefers-color-scheme: dark)').matches);
            raiz.dataset.theme = escuro ? 'light' : 'dark';
        });

        /* Miniatura do hero */
        var mock = $('mock'),
            mockBtn = $('mockTema');
        mockBtn.addEventListener('click', function() {
            var claro = mock.dataset.m === 'escuro';
            mock.dataset.m = claro ? 'claro' : 'escuro';
            mockBtn.textContent = 'tema: ' + (claro ? 'claro' : 'escuro');
        });

        /* ================= Loja RoboParts (dados reais do projeto) ================= */
        var CATS = [
            ['robos-industriais', 'Robôs industriais', 'Braços articulados, SCARA, delta e robôs de solda para linhas de produção.'],
            ['robos-humanoides', 'Robôs humanoides', 'Plataformas bípedes e sobre rodas, mãos robóticas e kits de pesquisa.'],
            ['robos-sociais', 'Robôs sociais', 'Robôs de atendimento, recepção, companhia e educação.'],
            ['robos-agricolas', 'Robôs agrícolas', 'Drones, robôs de monitoramento, capina e colheita para o campo.'],
            ['robos-colaborativos', 'Robôs colaborativos', 'Cobots que trabalham ao lado de pessoas, com garras e estações prontas.']
        ];
        var RAW = [
            ['robos-industriais', 'Braço robótico industrial 6 eixos RP-IR600', 89900, 104900, 'Braço de seis eixos para solda ponto, manipulação e montagem. Controlador compacto com programação por teach pendant.', 'Eixos: 6\nCarga útil: 6 kg\nAlcance: 900 mm\nRepetibilidade: ±0,03 mm\nAlimentação: 220 V'],
            ['robos-industriais', 'Robô SCARA de alta velocidade RP-SC400', 62500, 71900, 'Robô SCARA para montagem rápida de componentes e inserção em placas, com baixa vibração em alta cadência.', 'Eixos: 4\nCarga útil: 3 kg\nAlcance: 400 mm\nRepetibilidade: ±0,01 mm'],
            ['robos-industriais', 'Robô delta para picking RP-DL250', 74800, null, 'Robô de cinemática paralela para separação e embalagem de itens leves em esteira.', 'Eixos: 4\nCarga útil: 1 kg\nÁrea de trabalho: 250 mm\nCiclos: até 120 por minuto'],
            ['robos-industriais', 'Robô de solda MIG/MAG RP-WD800 com fonte', 118900, 134000, 'Conjunto de robô, tocha e fonte de solda para cordões contínuos em estruturas metálicas.', 'Eixos: 6\nCarga útil: 8 kg\nAlcance: 1.450 mm\nProteção: IP54'],
            ['robos-humanoides', 'Robô humanoide bípede RP-H1', 248900, 279900, 'Humanoide de pesquisa com marcha estável, câmera de profundidade e SDK aberto para desenvolvimento.', 'Altura: 1,32 m\nPeso: 35 kg\nGraus de liberdade: 23\nAutonomia: 2 h\nSDK: Python e C++'],
            ['robos-humanoides', 'Robô humanoide com rodas RP-H2 Wheel', 160000, 178000, 'Corpo humanoide sobre base de rodas, para navegação autônoma em ambientes internos.', 'Altura: 1,30 m\nGraus de liberdade: 18\nNavegação: LiDAR e câmera RGB\nAutonomia: 4 h'],
            ['robos-humanoides', 'Mão robótica articulada de 5 dedos RP-HAND5', 18900, 21500, 'Mão com cinco dedos independentes e sensores de força nas pontas, compatível com braços de 6 eixos.', 'Dedos: 5\nGraus de liberdade: 15\nForça de preensão: 80 N\nComunicação: CAN e RS-485'],
            ['robos-humanoides', 'Robô humanoide educacional RP-H0 Mini', 12990, 15490, 'Humanoide de 45 cm para aulas de robótica e programação em escolas e laboratórios.', 'Altura: 45 cm\nServos: 20\nProgramação: blocos e Python\nBateria: 1 h de uso'],
            ['robos-sociais', 'Robô de atendimento RP-S300 com tela de 10"', 69900, 79900, 'Robô de balcão com reconhecimento de voz e facial, ideal para lojas, bancos e eventos.', 'Tela: 10 polegadas\nIdiomas: português, inglês e espanhol\nConectividade: Wi-Fi e 4G\nAutonomia: 8 h'],
            ['robos-sociais', 'Robô recepcionista RP-S200', 38500, null, 'Recepcionista móvel que recebe visitantes, informa horários e guia até o local desejado.', 'Altura: 1,10 m\nNavegação: autônoma\nTela: 8 polegadas\nAutonomia: 10 h'],
            ['robos-sociais', 'Robô companheiro de mesa RP-Buddy', 1397, 2999, 'Pequeno robô de mesa com expressões animadas, que reage a toque e voz.', 'Altura: 12 cm\nSensores: toque, som e queda\nBateria: 6 h\nCarregamento: USB-C'],
            ['robos-sociais', 'Robô educacional de programação RP-Kid', 987, 1290, 'Robô para crianças a partir de 6 anos aprenderem lógica de programação brincando.', 'Idade: 6+\nProgramação: blocos visuais\nSensores: distância e linha\nBateria: 5 h'],
            ['robos-agricolas', 'Drone pulverizador agrícola RP-AG40 de 40 L', 84900, 96000, 'Drone para pulverização e distribuição de insumos com mapeamento de rota por GPS RTK.', 'Tanque: 40 L\nAutonomia: 20 min com carga\nFaixa de aplicação: 9 m\nPosicionamento: GPS RTK'],
            ['robos-agricolas', 'Robô autônomo de monitoramento de lavoura RP-FieldScout', 56700, null, 'Robô de esteiras que percorre as fileiras e registra imagens para análise de pragas e falhas de plantio.', 'Tração: esteiras\nAutonomia: 8 h\nCâmeras: RGB e infravermelho\nConectividade: 4G e rádio'],
            ['robos-agricolas', 'Robô de capina autônomo RP-Weeder', 92400, 105000, 'Identifica plantas daninhas por visão computacional e remove sem uso de herbicida.', 'Largura de trabalho: 2 m\nAlimentação: solar e bateria\nVelocidade: 2 km/h\nÁrea: até 3 ha por dia'],
            ['robos-agricolas', 'Robô de colheita de morangos RP-Berry', 138000, 154900, 'Braço com visão para colher frutos maduros em estufas, sem danificar a planta.', 'Ciclo: 5 s por fruto\nBraços: 2\nAmbiente: estufa\nAutonomia: 10 h'],
            ['robos-colaborativos', 'Cobot 6 eixos RP-C10 de 10 kg', 79900, 92900, 'Cobot que trabalha sem grades de proteção, com parada automática ao detectar contato.', 'Eixos: 6\nCarga útil: 10 kg\nAlcance: 1.300 mm\nRepetibilidade: ±0,05 mm\nNorma: ISO/TS 15066'],
            ['robos-colaborativos', 'Cobot 6 eixos RP-C5 de 5 kg', 54900, 62900, 'Cobot leve para parafusamento, inspeção e alimentação de máquinas. Programação por arraste.', 'Eixos: 6\nCarga útil: 5 kg\nAlcance: 850 mm\nPeso: 20 kg'],
            ['robos-colaborativos', 'Garra elétrica adaptativa RP-GR80 para cobots', 6490, 7490, 'Garra de dois dedos com curso ajustável e controle de força, para vários formatos de peça.', 'Curso: 80 mm\nForça: 10 a 80 N\nComunicação: Modbus RTU\nFixação: ISO 9409'],
            ['robos-colaborativos', 'Estação de paletização com cobot RP-PAL', 124900, 139900, 'Estação pronta com cobot, base móvel e software de montagem de paletes sem programação.', 'Altura de pilha: até 1,6 m\nCarga por caixa: 10 kg\nSetup: menos de 1 dia']
        ];

        var seq = 0;
        var S = {
            page: 'home',
            arg: null,
            user: null,
            cart: {},
            q: '',
            fcat: '',
            theme: 'claro',
            msg: '',
            next: null,
            menu: false,
            conf: null,
            form: '',
            ok: null,
            cats: CATS.map(function(c) {
                return {
                    id: c[0],
                    nome: c[1],
                    desc: c[2]
                };
            }),
            prods: RAW.map(function(r) {
                return {
                    id: 'p' + (++seq),
                    cat: r[0],
                    nome: r[1],
                    preco: r[2],
                    antigo: r[3],
                    desc: r[4],
                    specs: r[5]
                };
            })
        };

        var view = $('view'),
            rp = $('rp');
        var esc = function(s) {
            return String(s).replace(/[&<>"']/g, function(c) {
                return {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#39;'
                } [c];
            });
        };
        var fmt = function(v) {
            return 'R$ ' + v.toLocaleString('pt-BR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        };
        var parcela = function(v) {
            return v >= 120 ? '12x de ' + fmt(v / 12) : '';
        };
        var catNome = function(id) {
            var c = S.cats.filter(function(x) {
                return x.id === id;
            })[0];
            return c ? c.nome : '';
        };
        var prod = function(id) {
            return S.prods.filter(function(p) {
                return p.id === id;
            })[0];
        };
        var desc = function(p) {
            return p.antigo ? Math.round((1 - p.preco / p.antigo) * 100) : 0;
        };
        var qtdCarrinho = function() {
            var n = 0;
            for (var k in S.cart) n += S.cart[k];
            return n;
        };
        var LOGO = '<svg viewBox="0 0 32 32" aria-hidden="true"><rect width="32" height="32" rx="6" fill="#90e0ef"/><circle cx="11" cy="21" r="4" fill="none" stroke="#fff" stroke-width="2.5"/><path d="M14 18 L23 9" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/><circle cx="24" cy="8" r="2.2" fill="#fff"/></svg>';

        function foto(p) {
            var m = p.nome.match(/RP-[\w-]+/);
            return '<span class="rp-semfoto" role="img" aria-label="' + esc(p.nome) + '"><b>' + (m ? m[0] : 'RP') + '</b><i>sem imagem</i></span>';
        }

        function card(p) {
            var d = desc(p);
            return '<article class="rp-card"><a class="rp-foto" href="#" data-go="produto:' + p.id + '">' + foto(p) + (d ? '<span class="rp-selo">-' + d + '%</span>' : '') +
                '</a><div class="rp-corpo"><p class="rp-cat">' + esc(catNome(p.cat)) + '</p><h3><a href="#" data-go="produto:' + p.id + '">' + esc(p.nome) + '</a></h3>' +
                '<p class="rp-preco">' + (p.antigo ? '<s>' + fmt(p.antigo) + '</s>' : '') + '<strong>' + fmt(p.preco) + '</strong></p>' +
                (parcela(p.preco) ? '<p class="rp-parc">ou ' + parcela(p.preco) + '</p>' : '') + '</div></article>';
        }

        function grade(lista) {
            return '<div class="rp-grade">' + lista.map(card).join('') + '</div>';
        }

        function doCat(id) {
            return S.prods.filter(function(p) {
                return p.cat === id;
            });
        }

        /* ----- Cabeçalho e rodapé ----- */
        function topo() {
            var conta;
            if (S.user) {
                conta = '<button class="rp-user" type="button" data-act="menu">' + esc(S.user.nome.split(' ')[0]) + '</button>' +
                    (S.menu ? '<div class="rp-menu"><a href="#" data-go="carrinho">Compras</a><a href="#" data-go="sobre">Sobre</a>' +
                        (S.user.admin ? '<a href="#" data-go="admin">Painel</a>' : '') +
                        '<button type="button" data-act="tema">Tema ' + (S.theme === 'claro' ? 'escuro' : 'claro') + '</button><button type="button" data-act="sair">Sair</button></div>' : '');
            } else {
                conta = '<a href="#" data-go="login">Entrar</a><a href="#" data-go="cadastro">Criar conta</a><button class="lnk" type="button" data-act="tema">Tema ' + (S.theme === 'claro' ? 'escuro' : 'claro') + '</button>';
            }
            return '<header class="rp-top"><a class="rp-logo" href="#" data-go="home">' + LOGO + 'RoboParts</a>' +
                '<form class="rp-busca" data-form="busca" role="search"><input type="search" name="q" value="' + esc(S.q) + '" placeholder="Buscar robôs e componentes" aria-label="Buscar"><button type="submit">Buscar</button></form>' +
                '<div class="rp-conta">' + conta + '<a class="rp-carr" href="#" data-go="carrinho">Carrinho <span>' + qtdCarrinho() + '</span></a></div></header>';
        }

        function rodape() {
            return '<footer class="rp-rodape"><div class="rp-rodape-g"><div><p class="rp-marca">RoboParts</p><p>Beyond Human.</p></div>' +
                '<div><h4>Categorias</h4>' + S.cats.map(function(c) {
                    return '<a href="#" data-go="categoria:' + c.id + '">' + esc(c.nome) + '</a>';
                }).join('') + '</div>' +
                '<div><h4>Loja</h4><a href="#" data-go="produtos">Todos os produtos</a><a href="#" data-go="carrinho">Carrinho</a><a href="#" data-go="sobre">Sobre nós</a></div></div>' +
                '<p class="rp-base">© 2026 RoboParts. Todos os direitos reservados.</p></footer>';
        }
        var pagina = function(inner, est) {
            return topo() + '<main class="rp-pg' + (est ? ' est' : '') + '">' + inner + '</main>' + rodape();
        };

        /* ----- Páginas ----- */
        function home() {
            var cats = S.cats.map(function(c, i) {
                var n = doCat(c.id).length;
                return '<a class="rp-catc" href="#" data-go="categoria:' + c.id + '"><span class="n">' + ('0' + (i + 1)).slice(-2) + '</span><strong>' + esc(c.nome) + '</strong><small>' + n + (n === 1 ? ' produto' : ' produtos') + '</small></a>';
            }).join('');
            var vit = S.cats.map(function(c) {
                var l = doCat(c.id).slice(0, 4);
                return '<div class="rp-vit"><div class="rp-vit-t"><div><h3><a href="#" data-go="categoria:' + c.id + '" style="text-decoration:none">' + esc(c.nome) + '</a></h3><p>' + esc(c.desc) + '</p></div><a class="rp-ver" href="#" data-go="categoria:' + c.id + '">Ver categoria</a></div>' +
                    (l.length ? grade(l) : '<div class="rp-vazio"><p>Nenhum produto nesta categoria ainda.</p></div>') + '</div>';
            }).join('');
            return topo() +
                '<section class="rp-hero"><div class="rp-luz"></div><canvas class="rp-3d" role="img" aria-label="Robô 3D interativo"></canvas><div class="rp-hero-in"><h1><span>Robôs para</span><span class="l2">cada tarefa.</span></h1>' +
                '<p>Industriais, humanoides, sociais, agrícolas e colaborativos. Escolha a categoria e monte o seu projeto de robótica com a RoboParts.</p>' +
                '<div class="rp-btns"><a class="rp-b1" href="#" data-scroll="rp-catalogo">Ver catálogo →</a><a class="rp-b2" href="#" data-go="produtos">Todos os produtos</a></div>' +
                '<div class="rp-feats"><div><strong>Catálogo online</strong>' + S.cats.length + ' categorias de robôs</div><div><strong>Atendimento</strong>WhatsApp e e-mail</div></div></div></section>' +
                '<section class="rp-sec"><div class="rp-topo"><h2>Categorias</h2></div><div class="rp-cats">' + cats + '</div></section>' +
                '<section class="rp-sec cinza" id="rp-catalogo"><div class="rp-topo"><h2>Catálogo</h2><a class="rp-ver" href="#" data-go="produtos">Ver todos os produtos</a></div>' + vit + '</section>' +
                '<section class="rp-chamada"><div><h2>Precisa de ajuda para escolher?</h2><p>Fale com a nossa equipe pelo WhatsApp ou por e-mail.</p></div><div><button class="rp-cb" type="button" data-act="aviso:Botão de contato da loja (demonstração).">WhatsApp</button> <button class="rp-ce" type="button" data-act="aviso:Botão de contato da loja (demonstração).">E-mail</button></div></section>' +
                rodape();
        }

        function produtos() {
            var q = S.q.trim().toLowerCase();
            var l = S.prods.filter(function(p) {
                return (!S.fcat || p.cat === S.fcat) && (!q || (p.nome + ' ' + p.desc + ' ' + catNome(p.cat)).toLowerCase().indexOf(q) > -1);
            });
            var f = '<button class="rp-f' + (!S.fcat ? ' on' : '') + '" type="button" data-act="filtro:">Todas</button>' +
                S.cats.map(function(c) {
                    return '<button class="rp-f' + (S.fcat === c.id ? ' on' : '') + '" type="button" data-act="filtro:' + c.id + '">' + esc(c.nome) + '</button>';
                }).join('');
            return pagina('<h1>' + (q ? 'Resultados para "' + esc(S.q.trim()) + '"' : 'Produtos') + '</h1><div class="rp-filtro">' + f + '</div>' +
                (l.length ? grade(l) : '<div class="rp-vazio"><h3>Nenhum produto encontrado</h3><p>Tente outra palavra ou categoria.</p><button class="rp-cb" type="button" data-act="limpar">Limpar busca</button></div>'));
        }

        function categoria() {
            var c = S.cats.filter(function(x) {
                return x.id === S.arg;
            })[0] || S.cats[0];
            if (!c) return pagina('<div class="rp-vazio"><h3>Nenhuma categoria cadastrada</h3></div>');
            var l = doCat(c.id);
            return pagina('<p class="rp-trilha"><a href="#" data-go="home">Início</a> / ' + esc(c.nome) + '</p><h1>' + esc(c.nome) + '</h1><p class="rp-sub-t">' + esc(c.desc) + '</p>' +
                '<div class="rp-filtro">' + S.cats.map(function(x) {
                    return '<button class="rp-f' + (x.id === c.id ? ' on' : '') + '" type="button" data-go="categoria:' + x.id + '">' + esc(x.nome) + '</button>';
                }).join('') + '</div>' +
                (l.length ? grade(l) : '<div class="rp-vazio"><h3>Nenhum produto nesta categoria</h3></div>'));
        }

        function produto() {
            var p = prod(S.arg) || S.prods[0];
            if (!p) return pagina('<div class="rp-vazio"><h3>Nenhum produto cadastrado</h3></div>');
            var d = desc(p),
                eco = p.antigo ? p.antigo - p.preco : 0;
            var m = p.nome.match(/RP-[\w-]+/);
            var specs = (p.specs || '').split('\n').filter(Boolean).map(function(l) {
                var i = l.indexOf(':');
                return '<tr><td>' + esc(l.slice(0, i)) + '</td><td>' + esc(l.slice(i + 1).trim()) + '</td></tr>';
            }).join('');
            var rel = doCat(p.cat).filter(function(r) {
                return r.id !== p.id;
            }).slice(0, 4);
            return pagina('<p class="rp-trilha"><a href="#" data-go="home">Início</a> / <a href="#" data-go="produtos">Produtos</a> / <a href="#" data-go="categoria:' + p.cat + '">' + esc(catNome(p.cat)) + '</a> / ' + esc(p.nome) + '</p>' +
                '<section class="rp-det"><div class="rp-foto">' + foto(p) + (d ? '<span class="rp-selo">-' + d + '%</span>' : '') + '</div><div>' +
                '<a class="rp-det-cat" href="#" data-go="categoria:' + p.cat + '">' + esc(catNome(p.cat)) + '</a><h1>' + esc(p.nome) + '</h1><p class="rp-cod">Código ' + esc((m ? m[0] : p.id).toUpperCase()) + '</p>' +
                '<div class="rp-det-preco">' + (p.antigo ? '<s>' + fmt(p.antigo) + '</s>' : '') + '<strong>' + fmt(p.preco) + '</strong>' + (parcela(p.preco) ? '<span class="rp-parc">ou ' + parcela(p.preco) + '</span>' : '') + (eco > 0 ? '<span class="rp-econ">Você economiza ' + fmt(eco) + '</span>' : '') + '</div>' +
                (p.desc ? '<p class="rp-desc">' + esc(p.desc) + '</p>' : '') +
                '<form class="rp-qtd" data-form="add" data-id="' + p.id + '"><label for="qtd">Quantidade<input type="number" id="qtd" name="qtd" value="1" min="1" max="20"></label><button class="rp-cb" type="submit">Adicionar ao carrinho</button></form>' +
                (specs ? '<table class="rp-specs">' + specs + '</table>' : '') + '</div></section>' +
                (rel.length ? '<section class="rp-rel"><h2>Mais em ' + esc(catNome(p.cat)) + '</h2>' + grade(rel) + '</section>' : ''));
        }

        function carrinho() {
            var linhas = '',
                total = 0;
            for (var id in S.cart) {
                var p = prod(id);
                if (!p) continue;
                var sub = p.preco * S.cart[id];
                total += sub;
                linhas += '<article class="rp-item"><a href="#" data-go="produto:' + id + '">' + foto(p) + '</a><div><h3><a href="#" data-go="produto:' + id + '" style="text-decoration:none">' + esc(p.nome) + '</a></h3><span class="rp-unit">' + fmt(p.preco) + ' cada</span>' +
                    '<div class="rp-qc"><button type="button" data-act="menos:' + id + '" aria-label="Diminuir">−</button><span class="rp-qn">' + S.cart[id] + '</span><button type="button" data-act="mais:' + id + '" aria-label="Aumentar">+</button><button class="rm" type="button" data-act="remover:' + id + '">Remover</button></div></div><div class="rp-sub">' + fmt(sub) + '</div></article>';
            }
            var ok = S.ok !== null ? '<div class="rp-ok"><h3>Pedido realizado com sucesso!</h3><p>Total pago: <strong>' + fmt(S.ok) + '</strong></p></div>' : '';
            var corpo = linhas ? linhas + '<div class="rp-total"><span>Total: <strong>' + fmt(total) + '</strong></span><button class="rp-cb" type="button" data-act="pagar">Finalizar compra</button></div>' :
                '<div class="rp-vazio"><h3>Seu carrinho está vazio</h3><p>Escolha seus produtos e eles aparecem aqui.</p><button class="rp-cb" type="button" data-go="produtos">Ver produtos</button></div>';
            return pagina('<h1>Meu carrinho</h1>' + ok + corpo, true);
        }

        function sobre() {
            return pagina('<div class="rp-txt"><h1>Sobre a RoboParts</h1><p>A RoboParts vende robôs para indústrias, fazendas, comércio e laboratórios, de braços articulados a humanoides de pesquisa. Nosso lema é <em>"Beyond Human."</em>: automatizar o que for repetitivo, pesado ou perigoso para que as pessoas façam o que só elas fazem.</p>' +
                '<h2>O que você encontra aqui</h2><ul class="rp-lista">' + S.cats.map(function(c) {
                    return '<li><a href="#" data-go="categoria:' + c.id + '">' + esc(c.nome) + '</a> — ' + esc(c.desc) + '</li>';
                }).join('') + '</ul>' +
                '<h2>Como comprar</h2><ol class="rp-lista"><li>Crie sua conta ou entre com o seu e-mail.</li><li>Navegue pelas categorias e adicione os produtos ao carrinho.</li><li>Revise o carrinho e finalize a compra.</li></ol>' +
                '<p style="margin-top:18px"><a class="rp-cb" href="#" data-go="produtos">Ver produtos</a></p></div>', true);
        }

        function authLado() {
            return '<div class="rp-auth-v"><a class="rp-logo" href="#" data-go="home">' + LOGO + 'RoboParts</a><p>Beyond<span>Human.</span></p></div>';
        }

        function login() {
            return '<div class="rp-auth">' + authLado() + '<section class="rp-auth-f"><h1>Entrar</h1><p class="rp-sub-t">Acesse a sua conta RoboParts.</p>' +
                (S.msg ? '<p class="rp-msg ' + (S.msgTipo || 'info') + '">' + esc(S.msg) + '</p>' : '') +
                '<form data-form="login"><label for="le">E-mail</label><input type="email" id="le" name="email" required autocomplete="email" placeholder="voce@exemplo.com"><label for="ls">Senha</label><input type="password" id="ls" name="senha" required autocomplete="current-password"><button class="rp-go" type="submit">Acessar</button></form>' +
                '<p class="rp-troca">Não tem conta? <a href="#" data-go="cadastro">Criar conta</a></p>' +
                '<p class="rp-troca" style="margin-top:8px">Só quer ver o painel? <a href="#" data-act="admindemo">Entrar como administrador (demonstração)</a></p></section></div>';
        }

        function cadastro() {
            return '<div class="rp-auth">' + authLado() + '<section class="rp-auth-f"><h1>Criar conta</h1><p class="rp-sub-t">Leva menos de um minuto.</p>' +
                (S.msg ? '<p class="rp-msg erro">' + esc(S.msg) + '</p>' : '') +
                '<form data-form="cadastro"><label for="cn">Nome</label><input type="text" id="cn" name="nome" required minlength="2" maxlength="100" autocomplete="name">' +
                '<label for="ce">E-mail</label><input type="email" id="ce" name="email" required maxlength="150" autocomplete="email">' +
                '<label for="cs">Senha</label><input type="password" id="cs" name="senha" required minlength="6" maxlength="100" autocomplete="new-password">' +
                '<label for="cc">Confirmar senha</label><input type="password" id="cc" name="conf" required minlength="6" maxlength="100" autocomplete="new-password">' +
                '<fieldset><legend>Podemos acessar sua localização para facilitar o envio dos produtos?</legend><p>Você pode mudar essa preferência depois, no seu perfil.</p><label><input type="radio" name="loc" value="sim" required> Sim</label><label><input type="radio" name="loc" value="nao" required> Não</label></fieldset>' +
                '<button class="rp-go" type="submit">Criar conta</button></form><p class="rp-troca">Já tem conta? <a href="#" data-go="login">Entrar</a></p></section></div>';
        }

        function admin() {
            var f = '';
            if (S.form === 'cat') f = '<form class="rp-adm-f" data-form="novacat"><input name="nome" type="text" placeholder="Nome da categoria" required aria-label="Nome da categoria"><button class="rp-cb" type="submit">Criar categoria</button><button class="rp-cl" type="button" data-act="fechaform">Cancelar</button></form>';
            if (S.form === 'prod') f = '<form class="rp-adm-f" data-form="novoprod"><input name="nome" type="text" placeholder="Nome do produto" required aria-label="Nome do produto"><select name="cat" aria-label="Categoria">' +
                S.cats.map(function(c) {
                    return '<option value="' + c.id + '"' + (S.formCat === c.id ? ' selected' : '') + '>' + esc(c.nome) + '</option>';
                }).join('') + '</select><input name="preco" type="number" min="1" step="0.01" placeholder="Preço (R$)" required aria-label="Preço"><button class="rp-cb" type="submit">Criar produto</button><button class="rp-cl" type="button" data-act="fechaform">Cancelar</button></form>';
            var blocos = S.cats.map(function(c) {
                var l = doCat(c.id),
                    kc = 'c:' + c.id;
                return '<section class="rp-bloco"><div class="rp-lin cat"><a href="#" data-go="categoria:' + c.id + '"><strong>' + esc(c.nome) + '</strong></a><span><a href="#" data-act="formprod:' + c.id + '">+ produto</a> ' +
                    '<button class="rp-del' + (S.conf === kc ? ' conf' : '') + '" type="button" data-act="delcat:' + c.id + '">' + (S.conf === kc ? 'confirmar exclusão' : 'excluir') + '</button></span></div>' +
                    (l.length ? l.map(function(p) {
                        var kp = 'p:' + p.id;
                        return '<div class="rp-lin"><span><a href="#" data-go="produto:' + p.id + '">' + esc(p.nome) + '</a> · ' + fmt(p.preco) + '</span><button class="rp-del' + (S.conf === kp ? ' conf' : '') + '" type="button" data-act="delprod:' + p.id + '">' + (S.conf === kp ? 'confirmar' : 'excluir') + '</button></div>';
                    }).join('') : '<p class="rp-min">Nenhum produto nesta categoria.</p>') + '</section>';
            }).join('');
            return pagina('<h1>Painel do admin</h1><p class="rp-adm-acoes"><button class="rp-cb" type="button" data-act="formcat">+ Nova categoria</button><button class="rp-cb" type="button" data-act="formprod:">+ Novo produto</button></p>' + f +
                (S.cats.length ? blocos : '<p class="rp-min">Nenhuma categoria. Crie a primeira.</p>'));
        }

        var ARQ = {
            home: 'index.php',
            produtos: 'php/produtos.php',
            categoria: 'php/categoria.php',
            produto: 'php/produto.php',
            carrinho: 'php/carrinho.php',
            login: 'php/login.php',
            cadastro: 'php/cadastro.php',
            admin: 'php/admin.php',
            sobre: 'php/sobre.php'
        };
        var PAGS = {
            home: home,
            produtos: produtos,
            categoria: categoria,
            produto: produto,
            carrinho: carrinho,
            login: login,
            cadastro: cadastro,
            admin: admin,
            sobre: sobre
        };

        /* Robô 3D da home da RoboParts (cena Spline original). Se não carregar, usa o robô local (js/robo3d.js). */
        var SPLINE_RUNTIME = 'https://unpkg.com/@splinetool/runtime@1.10.39/build/runtime.js';
        var SPLINE_CENA = 'https://prod.spline.design/kZDDjO5HuC9GJUM2/scene.splinecode';
        var robotOff = null,
            robotMod = null;

        function montarRobo() {
            var cv = view.querySelector('.rp-3d');
            if (!cv) return;
            var hero = cv.closest('.rp-hero'),
                morto = false,
                app = null,
                local = null;
            robotOff = function() {
                morto = true;
                try {
                    if (app && app.dispose) app.dispose();
                } catch (e) {}
                if (local) local();
            };

            function usarLocal() {
                if (morto || !cv.isConnected) return;
                var c2 = document.createElement('canvas');
                c2.className = 'rp-3d rp-local';
                c2.setAttribute('role', 'img');
                c2.setAttribute('aria-label', 'Robô 3D interativo');
                cv.replaceWith(c2);
                (robotMod || (robotMod = import('./js/robo3d.js'))).then(function(m) {
                    if (morto || !c2.isConnected) return;
                    local = m.iniciarRobo(c2, hero);
                    c2.classList.add('on');
                }).catch(function(err) {
                    console.error('Robô 3D:', err);
                });
            }

            var limite = new Promise(function(_, rej) {
                setTimeout(function() {
                    rej(new Error('tempo esgotado'));
                }, 15000);
            });
            Promise.race([
                import(SPLINE_RUNTIME).then(function(m) {
                    app = new m.Application(cv);
                    return app.load(SPLINE_CENA);
                }),
                limite
            ]).then(function() {
                if (morto) return;
                cv.classList.add('on');
            }).catch(function(err) {
                console.warn('Cena Spline indisponível, usando o robô local:', err);
                try {
                    if (app && app.dispose) app.dispose();
                } catch (e) {}
                app = null;
                usarLocal();
            });
        }

        function render(keep) {
            var top = view.scrollTop;
            if (robotOff) {
                robotOff();
                robotOff = null;
            }
            view.innerHTML = PAGS[S.page]();
            montarRobo();
            rp.dataset.m = S.theme;
            var a = S.arg ? '?' + (S.page === 'produto' ? 'id=' : 'c=') + (S.page === 'produto' ? S.arg : S.arg.replace('robos-', '')) : '';
            $('url').textContent = 'app/' + ARQ[S.page] + (S.page === 'produto' || S.page === 'categoria' ? a : S.page === 'produtos' && S.q ? '?q=' + encodeURIComponent(S.q) : '');
            document.querySelectorAll('#paginas .chip').forEach(function(c) {
                c.classList.toggle('on', c.dataset.go.split(':')[0] === S.page);
            });
            view.scrollTop = keep ? top : 0;
        }

        var tt;

        function toast(t) {
            var el = $('toast');
            el.textContent = t;
            el.classList.add('on');
            clearTimeout(tt);
            tt = setTimeout(function() {
                el.classList.remove('on');
            }, 2300);
        }

        function go(spec) {
            var p = spec.split(':'),
                pg = p[0],
                arg = p[1] || null;
            S.menu = false;
            S.conf = null;
            S.form = '';
            S.msg = '';
            S.msgTipo = '';
            if (pg !== 'home') {
                /* Demonstração: apenas a página inicial (app/index.php) */
                var cat = pg === 'categoria' || pg === 'produtos' || pg === 'produto';
                if (S.page !== 'home') {
                    S.page = 'home';
                    S.arg = null;
                    render();
                }
                if (cat) {
                    var al = document.getElementById('rp-catalogo');
                    if (al) view.scrollTo({
                        top: al.offsetTop - 8,
                        behavior: 'smooth'
                    });
                } else toast('Esta demonstração mostra apenas a página inicial.');
                return;
            }
            if (pg === 'carrinho' && !S.user) {
                S.next = 'carrinho';
                S.msg = 'Entre na sua conta para ver o carrinho.';
                pg = 'login';
            }
            if (pg === 'admin') {
                if (!S.user) {
                    S.next = 'admin';
                    S.msg = 'Área restrita. Entre como administrador (use o acesso de demonstração abaixo).';
                    pg = 'login';
                } else if (!S.user.admin) {
                    toast('O painel é só para administradores.');
                    pg = 'home';
                }
            }
            if (pg === 'categoria' && !arg && S.page !== 'categoria') arg = S.cats[0] ? S.cats[0].id : null;
            if (pg === 'categoria' && !arg) arg = S.arg;
            if (pg === 'produto' && !arg) arg = (S.arg && prod(S.arg)) ? S.arg : (S.prods[0] ? S.prods[0].id : null);
            if (pg === 'produtos' && arg !== null) {
                S.fcat = arg;
            }
            if (pg === 'produtos' && p.length === 1 && S.page !== 'produtos') {
                /* mantém busca/filtro atuais */ }
            S.page = pg;
            S.arg = arg;
            render();
        }

        function entrar(nome, admin) {
            S.user = {
                nome: nome,
                admin: !!admin
            };
            var n = S.next;
            S.next = null;
            S.msg = '';
            go(n || (admin ? 'admin' : 'home'));
            toast('Bem-vindo, ' + nome.split(' ')[0] + '!');
        }

        function acao(a) {
            var p = a.split(':'),
                n = p[0],
                id = p.slice(1).join(':');
            if (n === 'menu') {
                S.menu = !S.menu;
                render(true);
                return;
            }
            if (n === 'tema') {
                S.theme = S.theme === 'claro' ? 'escuro' : 'claro';
                S.menu = false;
                render(true);
                return;
            }
            if (n === 'sair') {
                S.user = null;
                S.cart = {};
                S.ok = null;
                S.menu = false;
                go('login');
                S.msg = 'Você saiu da conta.';
                S.msgTipo = 'info';
                render();
                return;
            }
            if (n === 'aviso') {
                toast(id);
                return;
            }
            if (n === 'filtro') {
                S.fcat = id;
                render(true);
                return;
            }
            if (n === 'limpar') {
                S.q = '';
                S.fcat = '';
                render(true);
                return;
            }
            if (n === 'admindemo') {
                entrar('Administrador', true);
                return;
            }
            if (n === 'mais') {
                S.cart[id] = (S.cart[id] || 0) + 1;
                render(true);
                return;
            }
            if (n === 'menos') {
                if ((S.cart[id] || 0) > 1) S.cart[id]--;
                else delete S.cart[id];
                render(true);
                return;
            }
            if (n === 'remover') {
                delete S.cart[id];
                render(true);
                return;
            }
            if (n === 'pagar') {
                var t = 0;
                for (var k in S.cart) {
                    var pp = prod(k);
                    if (pp) t += pp.preco * S.cart[k];
                }
                if (t > 0) {
                    S.ok = t;
                    S.cart = {};
                    render();
                }
                return;
            }
            if (n === 'formcat') {
                S.form = 'cat';
                render(true);
                return;
            }
            if (n === 'formprod') {
                S.form = 'prod';
                S.formCat = id;
                render(true);
                return;
            }
            if (n === 'fechaform') {
                S.form = '';
                render(true);
                return;
            }
            if (n === 'delprod' || n === 'delcat') {
                var key = (n === 'delprod' ? 'p:' : 'c:') + id;
                if (S.conf !== key) {
                    S.conf = key;
                    render(true);
                    return;
                }
                if (n === 'delprod') {
                    S.prods = S.prods.filter(function(x) {
                        return x.id !== id;
                    });
                    delete S.cart[id];
                    toast('Produto excluído.');
                } else {
                    S.prods.filter(function(x) {
                        return x.cat === id;
                    }).forEach(function(x) {
                        delete S.cart[x.id];
                    });
                    S.prods = S.prods.filter(function(x) {
                        return x.cat !== id;
                    });
                    S.cats = S.cats.filter(function(x) {
                        return x.id !== id;
                    });
                    if (S.fcat === id) S.fcat = '';
                    toast('Categoria e produtos excluídos.');
                }
                S.conf = null;
                render(true);
            }
        }

        /* Eventos da loja e dos botões de páginas (delegação) */
        $('case').addEventListener('click', function(e) {
            var el = e.target.closest('[data-go],[data-act],[data-scroll]');
            if (!el || !$('case').contains(el)) {
                if (S.menu && !e.target.closest('.rp-menu') && !e.target.closest('.rp-user')) {
                    S.menu = false;
                    render(true);
                }
                return;
            }
            e.preventDefault();
            if (el.dataset.go) {
                go(el.dataset.go);
                if (el.closest('#paginas')) $('rp').scrollIntoView({
                    block: 'nearest',
                    behavior: 'smooth'
                });
            } else if (el.dataset.act) acao(el.dataset.act);
            else if (el.dataset.scroll) {
                var t = document.getElementById(el.dataset.scroll);
                if (t) view.scrollTo({
                    top: t.offsetTop - 8,
                    behavior: 'smooth'
                });
            }
        });

        view.addEventListener('submit', function(e) {
            var f = e.target.closest('form[data-form]');
            if (!f) return;
            e.preventDefault();
            var d = new FormData(f),
                t = f.dataset.form;
            if (t === 'busca') {
                S.menu = false;
                toast('A busca está desativada: esta demonstração mostra só a página inicial.');
            } else if (t === 'add') {
                var q = Math.min(20, Math.max(1, parseInt(d.get('qtd'), 10) || 1)),
                    id = f.dataset.id;
                S.cart[id] = (S.cart[id] || 0) + q;
                render(true);
                toast(prod(id).nome + ' foi adicionado ao carrinho.');
            } else if (t === 'login') {
                var em = (d.get('email') || '').toString(),
                    nome = em.split('@')[0].replace(/[._-]+/g, ' ');
                nome = nome.charAt(0).toUpperCase() + nome.slice(1);
                entrar(nome || 'Cliente', false);
            } else if (t === 'cadastro') {
                if (d.get('senha') !== d.get('conf')) {
                    S.msg = 'As senhas não conferem.';
                    render(true);
                    return;
                }
                S.next = null;
                entrar((d.get('nome') || '').toString().trim(), false);
                toast('Conta criada com sucesso.');
            } else if (t === 'novacat') {
                var nm = (d.get('nome') || '').toString().trim();
                if (!nm) return;
                var slug = nm.normalize('NFD').replace(/[̀-ͯ]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '') || 'cat' + (++seq);
                S.cats.push({
                    id: slug,
                    nome: nm,
                    desc: ''
                });
                S.form = '';
                render(true);
                toast('Categoria criada.');
            } else if (t === 'novoprod') {
                var pn = (d.get('nome') || '').toString().trim(),
                    pr = parseFloat(d.get('preco'));
                if (!pn || !(pr > 0)) return;
                S.prods.unshift({
                    id: 'p' + (++seq),
                    cat: d.get('cat'),
                    nome: pn,
                    preco: pr,
                    antigo: null,
                    desc: '',
                    specs: ''
                });
                S.form = '';
                render(true);
                toast('Produto criado. Veja na vitrine.');
            }
        });

        /* Luz do hero que segue o cursor */
        view.addEventListener('pointermove', function(e) {
            var h = e.target.closest('.rp-hero');
            if (!h) return;
            var r = h.getBoundingClientRect(),
                l = h.querySelector('.rp-luz');
            l.style.setProperty('--x', (e.clientX - r.left) + 'px');
            l.style.setProperty('--y', (e.clientY - r.top) + 'px');
        });

        /* Chatbot (mesma lógica de tolerância a erros de digitação do projeto) */
        function norm(t) {
            return t.normalize('NFD').replace(/[̀-ͯ]/g, '').toLowerCase();
        }

        function dist(a, b) {
            var t = [],
                i, j;
            for (i = 0; i <= a.length; i++) t[i] = [i];
            for (j = 0; j <= b.length; j++) t[0][j] = j;
            for (i = 1; i <= a.length; i++)
                for (j = 1; j <= b.length; j++)
                    t[i][j] = Math.min(t[i - 1][j] + 1, t[i][j - 1] + 1, t[i - 1][j - 1] + (a[i - 1] === b[j - 1] ? 0 : 1));
            return t[a.length][b.length];
        }

        function tol(p) {
            return p.length <= 3 ? 0 : p.length <= 7 ? 1 : 2;
        }
        var REGRAS = [{
                k: ['preco', 'valor', 'custa', 'quanto', 'orcamento'],
                r: 'Os valores aparecem em cada produto do catálogo. Para projetos sob medida ou compras em quantidade, fale com a nossa equipe pelo WhatsApp ou por e-mail.'
            },
            {
                k: ['whatsapp', 'telefone', 'ligar', 'contato', 'atendente', 'falar', 'email'],
                r: 'Você pode falar com a nossa equipe pelo WhatsApp ou por e-mail.'
            },
            {
                k: ['robo', 'industrial', 'humanoide', 'agricola', 'colaborativo', 'social', 'categoria'],
                r: 'Temos 5 categorias: industriais, humanoides, sociais, agrícolas e colaborativos.'
            }
        ];

        function responder(txt) {
            var ps = norm(txt).split(/[^a-z0-9]+/).filter(Boolean);
            for (var i = 0; i < REGRAS.length; i++)
                for (var a = 0; a < ps.length; a++)
                    for (var b = 0; b < REGRAS[i].k.length; b++)
                        if (dist(ps[a], REGRAS[i].k[b]) <= tol(REGRAS[i].k[b])) return REGRAS[i].r;
            return 'Desculpe, não consegui ajudar com isso! O jeito mais rápido de falar com a gente é pelo telefone.';
        }

        function bolha(t, c) {
            var d = document.createElement('div');
            d.className = 'rp-b ' + c;
            d.textContent = t;
            $('msgs').appendChild(d);
            $('msgs').scrollTop = 1e6;
            return d;
        }

        function perguntar(t) {
            bolha(t, 'eu');
            var b = bolha('…', 'bot');
            setTimeout(function() {
                b.textContent = responder(t);
                $('msgs').scrollTop = 1e6;
            }, 500);
        }
        $('chatBtn').addEventListener('click', function() {
            $('chat').classList.toggle('on');
            if ($('chat').classList.contains('on')) $('chatIn').focus();
        });
        $('chatX').addEventListener('click', function() {
            $('chat').classList.remove('on');
        });
        ['Qual o preço?', 'kuanto custa?', 'Falar com atendente'].forEach(function(q) {
            var b = document.createElement('button');
            b.type = 'button';
            b.textContent = q;
            b.addEventListener('click', function() {
                perguntar(q);
            });
            $('sug').appendChild(b);
        });
        $('chatForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var v = $('chatIn').value.trim();
            if (!v) return;
            $('chatIn').value = '';
            perguntar(v);
        });

        render();

        /* Destaque do menu conforme a seção */
        var links = document.querySelectorAll('nav a');
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function(es) {
                es.forEach(function(en) {
                    if (en.isIntersecting) links.forEach(function(a) {
                        a.classList.toggle('on', a.getAttribute('href') === '#' + en.target.id);
                    });
                });
            }, {
                rootMargin: '-45% 0px -50% 0px'
            });
            ['sobre', 'case', 'contato'].forEach(function(id) {
                io.observe($(id));
            });
        }

        /* Canais de contato */
        var box = $('canais'),
            wa = (CONTATO.whatsapp || '').replace(/\D/g, ''),
            tem = false;

        function botao(href, texto, cls) {
            var a = document.createElement('a');
            a.className = 'btn ' + cls;
            a.href = href;
            a.textContent = texto;
            if (href.indexOf('http') === 0) {
                a.target = '_blank';
                a.rel = 'noopener';
            }
            box.appendChild(a);
            tem = true;
        }
        if (wa) botao('https://wa.me/' + wa, 'Chamar no WhatsApp', 'btn-main');
        if (CONTATO.email) botao('mailto:' + CONTATO.email, 'Enviar e-mail', 'btn-line');
        if (tem) {
            var s = document.createElement('span');
            s.className = 'addr';
            s.textContent = [CONTATO.email, CONTATO.whatsapp].filter(Boolean).join(' · ');
            box.appendChild(s);
        } else {
            var v = document.createElement('span');
            v.className = 'vazio';
            v.textContent = 'Canais de contato em breve.';
            box.appendChild(v);
        }
    })();
</script>