<title>ARS Sites</title>
<meta name="claude:viewport-fit-sides" content="cover">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<style>
    /* Layout: cabeçalho fixo, hero com miniatura, sobre curto, case com a loja RoboParts navegável dentro de uma janela de navegador, contato. Laranja como acento da ARS sobre grafite azulado; a loja mantém as cores originais da RoboParts. */
    :root {
        --bg: #f7f7f5;
        --surface: #ffffff;
        --ink: #14161c;
        --ink-2: #3b404b;
        --mute: #646a76;
        --line: #e4e5e8;
        --accent: #ff6b1a;
        --accent-soft: #ffe9dc;
        --on-accent: #1a0d04;
        --link: #c2410c;
        --band: #efefec;
        --f-display: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        --f-body: 'IBM Plex Sans', system-ui, Arial, sans-serif;
        --f-mono: 'IBM Plex Mono', ui-monospace, Menlo, Consolas, monospace;
    }

    @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]) {
            --bg: #0f1218;
            --surface: #171b23;
            --ink: #eceef2;
            --ink-2: #c8ccd4;
            --mute: #98a0ad;
            --line: #272c36;
            --accent-soft: #2e1d12;
            --link: #ff8a4c;
            --band: #131720;
            color-scheme: dark;
        }
    }

    :root[data-theme="dark"] {
        --bg: #0f1218;
        --surface: #171b23;
        --ink: #eceef2;
        --ink-2: #c8ccd4;
        --mute: #98a0ad;
        --line: #272c36;
        --accent-soft: #2e1d12;
        --link: #ff8a4c;
        --band: #131720;
        color-scheme: dark;
    }

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
        scroll-padding-top: 80px;
    }

    body {
        margin: 0;
        background: var(--bg);
        color: var(--ink);
        font-family: var(--f-body);
        font-size: 16px;
        line-height: 1.6;
    }

    body::before {
        content: "";
        position: fixed;
        inset: 0 0 auto;
        height: env(safe-area-inset-top, 0px);
        z-index: 30;
        background: var(--bg);
    }

    a {
        color: var(--link);
    }

    h1,
    h2,
    h3,
    h4 {
        font-family: var(--f-display);
        margin: 0;
        line-height: 1.12;
        text-wrap: balance;
        letter-spacing: -0.015em;
    }

    p {
        margin: 0;
    }

    button,
    input,
    select {
        font-family: inherit;
    }

    :focus-visible {
        outline: 2px solid var(--accent);
        outline-offset: 3px;
        border-radius: 4px;
    }

    .band {
        padding-inline: max(16px, env(safe-area-inset-left, 0px)) max(16px, env(safe-area-inset-right, 0px));
    }

    .in {
        max-width: 1120px;
        margin-inline: auto;
    }

    .alt {
        background: var(--band);
    }

    .sec {
        padding-block: 88px;
    }

    .eyebrow {
        font-family: var(--f-mono);
        font-size: 12.5px;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--link);
        margin-bottom: 14px;
    }

    /* Cabeçalho */
    .top {
        position: sticky;
        top: env(safe-area-inset-top, 0px);
        z-index: 20;
        background: color-mix(in srgb, var(--bg) 92%, transparent);
        backdrop-filter: blur(8px);
        border-bottom: 1px solid var(--line);
    }

    .top .in {
        display: flex;
        align-items: center;
        gap: 24px;
        height: 64px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: var(--f-display);
        font-weight: 700;
        font-size: 28px;
        line-height: 1;
        letter-spacing: -0.02em;
        color: var(--ink);
        text-decoration: none;
    }

    .mk {
        width: 36px;
        height: 36px;
        flex: none;
        transition: transform .3s;
    }

    .brand:hover .mk {
        transform: rotate(-10deg) scale(1.06);
    }

    .fl {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--f-display);
        font-weight: 700;
        font-size: 18px;
        color: var(--ink);
    }

    .fl .mk {
        width: 24px;
        height: 24px;
    }

    nav {
        display: flex;
        gap: 6px;
        margin-left: auto;
    }

    nav a {
        color: var(--ink-2);
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        padding: 7px 13px;
        border-radius: 999px;
        transition: background .2s, color .2s;
    }

    nav a:hover,
    nav a.on {
        background: var(--accent-soft);
        color: var(--link);
    }

    .theme {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid var(--line);
        background: var(--surface);
        color: var(--ink);
        cursor: pointer;
        display: grid;
        place-items: center;
        flex: none;
        transition: border-color .2s, transform .2s;
    }

    .theme:hover {
        border-color: var(--accent);
        transform: rotate(18deg);
    }

    .theme svg {
        width: 18px;
        height: 18px;
    }

    /* Botões */
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 13px 24px;
        border-radius: 999px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        border: 1px solid transparent;
        cursor: pointer;
        transition: transform .2s, box-shadow .2s, border-color .2s;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .btn-main {
        background: var(--accent);
        color: var(--on-accent);
        box-shadow: 0 8px 22px -10px var(--accent);
    }

    .btn-main:hover {
        box-shadow: 0 14px 28px -10px var(--accent);
    }

    .btn-line {
        background: transparent;
        color: var(--ink);
        border-color: var(--line);
    }

    .btn-line:hover {
        border-color: var(--accent);
    }

    /* Hero */
    .hero {
        padding-block: 72px 88px;
    }

    .hero .in {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr);
        gap: 56px;
        align-items: center;
    }

    .hero h1 {
        font-size: clamp(2.3rem, 5vw, 3.8rem);
        font-weight: 700;
        margin-bottom: 20px;
    }

    .hero h1 em {
        font-style: normal;
        color: var(--link);
    }

    .hero .lead {
        font-size: 1.12rem;
        color: var(--ink-2);
        max-width: 46ch;
        margin-bottom: 30px;
    }

    .cta {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    /* Miniatura do hero */
    .mock {
        --m-bg: #0e1013;
        --m-card: #1a1d23;
        --m-ink: #e8eaee;
        --m-mute: #9aa1ad;
        --m-line: #2a2e36;
        border-radius: 14px;
        border: 1px solid var(--line);
        overflow: hidden;
        background: var(--m-bg);
        color: var(--m-ink);
        box-shadow: 0 30px 70px -34px rgba(255, 107, 26, .5);
        transition: background .25s, color .25s;
    }

    .mock[data-m="claro"] {
        --m-bg: #f4f5f7;
        --m-card: #ffffff;
        --m-ink: #16181d;
        --m-mute: #5c6370;
        --m-line: #e1e4e9;
    }

    .mock-bar {
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 10px 14px;
        background: var(--m-card);
        border-bottom: 1px solid var(--m-line);
    }

    .mock-bar b {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--m-line);
    }

    .mock-bar span {
        margin-left: 8px;
        font-family: var(--f-mono);
        font-size: 12px;
        color: var(--m-mute);
    }

    .mock-nav {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 18px;
        border-bottom: 1px solid var(--m-line);
        font-size: 13px;
    }

    .mock-nav .logo {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        font-size: 15px;
        margin-right: auto;
    }

    .mock-nav .logo svg {
        width: 22px;
        height: 22px;
    }

    .pill {
        border: 1px solid var(--m-line);
        background: transparent;
        color: var(--m-ink);
        font-family: var(--f-mono);
        font-size: 11px;
        padding: 4px 10px;
        border-radius: 999px;
        cursor: pointer;
        transition: border-color .2s;
    }

    .pill:hover {
        border-color: #90e0ef;
    }

    .mock-body {
        padding: 32px 24px 26px;
    }

    .mock-body small {
        font-family: var(--f-mono);
        font-size: 11px;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--m-mute);
    }

    .mock-body h3 {
        font-size: 2.1rem;
        font-weight: 700;
        margin: 6px 0 8px;
    }

    .mock-body p {
        font-size: 13.5px;
        color: var(--m-mute);
        max-width: 42ch;
        margin-bottom: 18px;
    }

    .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .chips span {
        font-size: 12.5px;
        padding: 6px 12px;
        border-radius: 999px;
        border: 1px solid var(--m-line);
        background: var(--m-card);
    }

    /* Sobre */
    .sobre {
        display: grid;
        grid-template-columns: minmax(0, 5fr) minmax(0, 6fr);
        gap: 56px;
        align-items: start;
    }

    .sobre h2 {
        font-size: clamp(1.8rem, 3.4vw, 2.6rem);
    }

    .sobre p {
        color: var(--ink-2);
        font-size: 1.06rem;
        margin-bottom: 22px;
    }

    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tags span {
        font-size: 14px;
        padding: 7px 14px;
        border-radius: 999px;
        background: var(--surface);
        border: 1px solid var(--line);
        transition: border-color .2s, transform .2s;
    }

    .tags span:hover {
        border-color: var(--accent);
        transform: translateY(-2px);
    }

    /* Case */
    .case-head {
        max-width: 680px;
        margin-bottom: 28px;
    }

    .case-head h2 {
        font-size: clamp(1.8rem, 3.4vw, 2.6rem);
        margin-bottom: 12px;
    }

    .case-head p {
        color: var(--ink-2);
    }

    .paginas {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 18px;
        align-items: center;
    }

    .paginas .rot {
        font-family: var(--f-mono);
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .08em;
        color: var(--mute);
        margin-right: 4px;
    }

    .chip {
        border: 1px solid var(--line);
        background: var(--surface);
        color: var(--ink-2);
        padding: 8px 15px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: border-color .2s, background .2s, color .2s, transform .2s;
    }

    .chip:hover {
        border-color: var(--accent);
        transform: translateY(-1px);
    }

    .chip.on {
        background: var(--accent);
        border-color: var(--accent);
        color: var(--on-accent);
    }

    .janela {
        border: 1px solid var(--line);
        border-radius: 16px;
        overflow: hidden;
        background: var(--surface);
        box-shadow: 0 40px 80px -48px rgba(255, 107, 26, .45);
    }

    .janela-bar {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border-bottom: 1px solid var(--line);
        background: var(--band);
    }

    .janela-bar b {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: var(--line);
    }

    .janela-bar .url {
        margin-left: 10px;
        flex: 1;
        min-width: 0;
        font-family: var(--f-mono);
        font-size: 12.5px;
        color: var(--mute);
        background: var(--surface);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: 4px 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dica {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 22px;
        margin-top: 14px;
        font-size: 14px;
        color: var(--mute);
    }

    .dica b {
        color: var(--ink);
        font-weight: 600;
    }

    .mais {
        margin-top: 28px;
    }

    .mais summary {
        cursor: pointer;
        font-weight: 600;
        color: var(--link);
        width: fit-content;
    }

    .mais[open] summary {
        margin-bottom: 16px;
    }

    .tec {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 24px;
        align-items: start;
    }

    .stack {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .stack span {
        font-family: var(--f-mono);
        font-size: 12.5px;
        padding: 5px 10px;
        border: 1px solid var(--line);
        border-radius: 6px;
        background: var(--surface);
    }

    .tree {
        margin: 0;
        padding: 16px 18px;
        background: var(--surface);
        border: 1px solid var(--line);
        border-radius: 10px;
        font-family: var(--f-mono);
        font-size: 12.5px;
        line-height: 1.75;
        color: var(--ink-2);
        overflow-x: auto;
    }

    .tree b {
        color: var(--link);
        font-weight: 500;
    }

    /* ===== Loja RoboParts (cores e estrutura do projeto original) ===== */
    .rp {
        --bgl: #f4f5f7;
        --card: #ffffff;
        --txt: #16181d;
        --suave: #5c6370;
        --lin: #e1e4e9;
        --cmp: #c9ced6;
        --sf: #eceef1;
        --acc: #90e0ef;
        --accd: #5fa8d3;
        --pre: #0e1013;
        --err: #c4261d;
        --okb: #e8f5ea;
        --okt: #1d6a2c;
        --okl: #b9dcbf;
        position: relative;
        container-type: inline-size;
        font-family: 'IBM Plex Sans', system-ui, sans-serif;
        color: var(--txt);
        background: var(--bgl);
    }

    .rp[data-m="escuro"] {
        --bgl: #111418;
        --card: #181b21;
        --txt: #e8eaee;
        --suave: #9aa1ad;
        --lin: #2a2e36;
        --cmp: #3a3f48;
        --sf: #23272e;
        --err: #e5534b;
        --okb: #14301b;
        --okt: #7fd493;
        --okl: #25562f;
        color-scheme: dark;
    }

    .rp-view {
        position: relative;
        height: 640px;
        overflow-y: auto;
        overflow-x: hidden;
        scroll-behavior: smooth;
        background: var(--bgl);
    }

    .rp a {
        color: inherit;
        cursor: pointer;
    }

    .rp button {
        cursor: pointer;
    }

    .rp h1,
    .rp h2,
    .rp h3,
    .rp h4 {
        font-family: 'IBM Plex Sans', system-ui, sans-serif;
        font-weight: 600;
        letter-spacing: 0;
        line-height: 1.2;
    }

    .rp-top {
        position: sticky;
        top: 0;
        z-index: 5;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 12px 22px;
        background: var(--pre);
        color: #fff;
    }

    .rp-logo {
        display: flex;
        align-items: center;
        gap: 9px;
        font-weight: 600;
        font-size: 17px;
        text-decoration: none;
        color: #fff !important;
        flex: none;
    }

    .rp-logo svg {
        width: 26px;
        height: 26px;
    }

    .rp-busca {
        display: flex;
        flex: 1;
        min-width: 0;
        max-width: 460px;
        margin-inline: auto;
    }

    .rp-busca input {
        flex: 1;
        min-width: 0;
        padding: 8px 12px;
        border: 0;
        border-radius: 6px 0 0 6px;
        background: #1a1d23;
        color: #fff;
        font-size: 14px;
        box-shadow: inset 0 0 0 1px #2f343d;
    }

    .rp-busca input::placeholder {
        color: #8b93a1;
    }

    .rp-busca button {
        border: 0;
        background: var(--acc);
        color: #0e1013;
        font-weight: 600;
        padding: 0 14px;
        border-radius: 0 6px 6px 0;
        font-size: 14px;
    }

    .rp-conta {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 14px;
        flex: none;
        position: relative;
    }

    .rp-conta a,
    .rp-conta button.lnk {
        color: #dfe3e9 !important;
        text-decoration: none;
        background: none;
        border: 0;
        font-size: 14px;
        padding: 0;
    }

    .rp-conta a:hover,
    .rp-conta button.lnk:hover {
        color: var(--acc) !important;
    }

    .rp-carr span {
        display: inline-grid;
        place-items: center;
        min-width: 20px;
        height: 20px;
        padding: 0 5px;
        margin-left: 4px;
        border-radius: 10px;
        background: var(--acc);
        color: #0e1013;
        font-size: 12px;
        font-weight: 700;
    }

    .rp-user {
        border: 1px solid #343a45;
        background: transparent;
        color: #fff;
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 14px;
    }

    .rp-menu {
        position: absolute;
        right: 0;
        top: 38px;
        min-width: 160px;
        display: grid;
        background: var(--card);
        color: var(--txt);
        border: 1px solid var(--lin);
        border-radius: 8px;
        padding: 6px;
        box-shadow: 0 16px 36px -12px rgba(0, 0, 0, .4);
        z-index: 8;
    }

    .rp-menu a,
    .rp-menu button {
        color: var(--txt) !important;
        text-align: left;
        padding: 8px 10px;
        border-radius: 6px;
        background: none;
        border: 0;
        font-size: 14px;
        text-decoration: none;
    }

    .rp-menu a:hover,
    .rp-menu button:hover {
        background: var(--sf);
        color: var(--txt) !important;
    }

    .rp-hero {
        position: relative;
        overflow: hidden;
        background: #0e1013 radial-gradient(900px 400px at 80% 20%, #1c2a4a 0%, transparent 70%);
        color: #fff;
        padding: 64px 28px 56px;
    }

    .rp-luz {
        position: absolute;
        width: 440px;
        height: 440px;
        left: 0;
        top: 0;
        transform: translate(calc(var(--x, -400px) - 220px), calc(var(--y, -400px) - 220px));
        background: radial-gradient(circle, rgba(144, 224, 239, .32), transparent 65%);
        pointer-events: none;
    }

    .rp-hero-in {
        position: relative;
        z-index: 1;
        max-width: 560px;
    }

    .rp-hero {
        min-height: 520px;
    }

    /* Cena Spline: ocupa o hero todo, deslocada como na loja original */
    .rp-3d {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        transform: translateX(15%) scale(1.08);
        opacity: 0;
        transition: opacity .8s ease;
        touch-action: pan-y;
    }

    /* Robô local (reserva) */
    .rp-3d.rp-local {
        inset: auto;
        top: 0;
        right: 0;
        width: 58%;
        transform: none;
    }

    .rp-3d.on {
        opacity: 1;
    }

    @media (max-width: 720px) {
        .rp-3d.rp-local {
            width: 100%;
        }

        .rp-3d.rp-local.on {
            opacity: .35;
        }
    }

    .rp-hero h1 {
        font-size: 2.9rem;
        font-weight: 700;
        display: grid;
        line-height: 1.05;
        margin-bottom: 14px;
    }

    .rp-hero h1 .l2 {
        color: var(--acc);
    }

    .rp-hero p {
        color: #b7bfcc;
        max-width: 46ch;
        margin-bottom: 22px;
    }

    .rp-btns {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 26px;
    }

    .rp-b1,
    .rp-b2 {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: transform .2s;
    }

    .rp-b1 {
        background: var(--acc);
        color: #0e1013 !important;
    }

    .rp-b2 {
        border: 1px solid #3a4150;
        color: #fff !important;
    }

    .rp-b1:hover,
    .rp-b2:hover {
        transform: translateY(-2px);
    }

    .rp-feats {
        display: flex;
        gap: 22px;
        font-size: 13px;
        color: #b7bfcc;
    }

    .rp-feats strong {
        display: block;
        color: #fff;
        font-size: 14px;
    }

    .rp-sec {
        padding: 40px 28px;
    }

    .rp-sec.cinza {
        background: var(--sf);
    }

    .rp-topo {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        gap: 12px;
        margin-bottom: 18px;
    }

    .rp-topo h2 {
        font-size: 1.4rem;
    }

    .rp-ver {
        font-size: 14px;
        color: var(--accd) !important;
        text-decoration: none;
    }

    .rp-ver:hover {
        text-decoration: underline;
    }

    .rp-cats {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 12px;
    }

    .rp-catc {
        display: grid;
        gap: 2px;
        align-content: start;
        padding: 16px;
        background: var(--card);
        border: 1px solid var(--lin);
        border-radius: 10px;
        text-decoration: none;
        transition: border-color .2s, transform .2s;
    }

    .rp-catc:hover {
        border-color: var(--accd);
        transform: translateY(-3px);
    }

    .rp-catc .n {
        font-family: 'IBM Plex Mono', monospace;
        color: var(--accd);
        font-size: 13px;
        margin-bottom: 14px;
    }

    .rp-catc small {
        color: var(--suave);
    }

    .rp-vit {
        margin-bottom: 32px;
    }

    .rp-vit:last-child {
        margin-bottom: 0;
    }

    .rp-vit-t {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 12px;
        margin-bottom: 14px;
    }

    .rp-vit-t h3 {
        font-size: 1.1rem;
    }

    .rp-vit-t p {
        color: var(--suave);
        font-size: 14px;
    }

    .rp-grade {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 14px;
    }

    .rp-card {
        display: grid;
        grid-template-rows: auto 1fr;
        background: var(--card);
        border: 1px solid var(--lin);
        border-radius: 10px;
        overflow: hidden;
        transition: border-color .2s, transform .2s, box-shadow .2s;
    }

    .rp-card:hover {
        border-color: var(--accd);
        transform: translateY(-3px);
        box-shadow: 0 14px 30px -18px rgba(0, 0, 0, .45);
    }

    .rp-foto,
    .rp-foto * {
        text-decoration: none !important;
    }

    .rp-foto {
        position: relative;
        display: block;
    }

    .rp-item>a {
        text-decoration: none;
    }

    .rp-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: linear-gradient(rgba(144, 224, 239, .07) 1px, transparent 1px), linear-gradient(90deg, rgba(144, 224, 239, .07) 1px, transparent 1px);
        background-size: 44px 44px;
        -webkit-mask-image: radial-gradient(ellipse at 75% 40%, #000 0%, transparent 70%);
        mask-image: radial-gradient(ellipse at 75% 40%, #000 0%, transparent 70%);
    }

    .rp-semfoto {
        display: grid;
        place-content: center;
        justify-items: center;
        gap: 4px;
        aspect-ratio: 4 / 3;
        background: var(--sf);
        color: var(--suave);
        text-align: center;
        padding: 8px;
    }

    .rp-semfoto b {
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 500;
        font-size: 15px;
        color: var(--accd);
    }

    .rp-semfoto i {
        font-style: normal;
        font-size: 11.5px;
        letter-spacing: .04em;
        color: #98a0ac;
    }

    .rp-selo {
        position: absolute;
        top: 8px;
        left: 8px;
        background: #0e1013;
        color: var(--acc);
        font-size: 12px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 999px;
    }

    .rp-corpo {
        padding: 12px 14px 14px;
        display: grid;
        gap: 4px;
        align-content: start;
    }

    .rp-cat {
        font-size: 12px;
        color: var(--suave);
        text-transform: uppercase;
        letter-spacing: .05em;
    }

    .rp-corpo h3 {
        font-size: 14.5px;
        line-height: 1.3;
    }

    .rp-corpo h3 a {
        text-decoration: none;
    }

    .rp-preco {
        display: flex;
        flex-wrap: wrap;
        gap: 4px 8px;
        align-items: baseline;
        margin-top: 4px;
    }

    .rp-preco s {
        color: var(--suave);
        font-size: 13px;
    }

    .rp-preco strong {
        font-size: 1.1rem;
    }

    .rp-parc {
        font-size: 12.5px;
        color: var(--suave);
    }

    .rp-chamada {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        padding: 32px 28px;
        background: var(--pre);
        color: #fff;
    }

    .rp-chamada h2 {
        font-size: 1.3rem;
        margin-bottom: 4px;
    }

    .rp-chamada p {
        color: #b7bfcc;
        font-size: 14px;
    }

    .rp-rodape {
        padding: 30px 28px 22px;
        border-top: 1px solid var(--lin);
        background: var(--card);
        font-size: 14px;
    }

    .rp-rodape-g {
        display: grid;
        grid-template-columns: 1.3fr repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 20px;
    }

    .rp-rodape h4 {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: var(--suave);
        margin-bottom: 8px;
    }

    .rp-rodape a {
        display: block;
        text-decoration: none;
        color: var(--txt);
        padding: 2px 0;
    }

    .rp-rodape a:hover {
        color: var(--accd);
    }

    .rp-marca {
        font-weight: 700;
        font-size: 17px;
    }

    .rp-base {
        color: var(--suave);
        font-size: 13px;
    }

    .rp-pg {
        padding: 28px;
        max-width: 980px;
        margin-inline: auto;
    }

    .rp-pg.est {
        max-width: 640px;
    }

    .rp-pg h1 {
        font-size: 1.7rem;
        margin-bottom: 14px;
    }

    .rp-trilha {
        font-size: 13px;
        color: var(--suave);
        margin-bottom: 18px;
    }

    .rp-trilha a {
        text-decoration: none;
    }

    .rp-trilha a:hover {
        color: var(--accd);
    }

    .rp-filtro {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 18px;
    }

    .rp-f {
        border: 1px solid var(--cmp);
        background: var(--card);
        color: var(--txt);
        font-size: 13.5px;
        padding: 6px 13px;
        border-radius: 999px;
        transition: border-color .2s, background .2s;
    }

    .rp-f:hover {
        border-color: var(--accd);
    }

    .rp-f.on {
        background: var(--pre);
        color: #fff;
        border-color: var(--pre);
    }

    .rp[data-m="escuro"] .rp-f.on {
        background: var(--acc);
        color: #0e1013;
        border-color: var(--acc);
    }

    .rp-vazio {
        text-align: center;
        padding: 44px 16px;
        border: 1px dashed var(--cmp);
        border-radius: 10px;
        display: grid;
        gap: 8px;
        justify-items: center;
        color: var(--suave);
    }

    .rp-vazio h3 {
        color: var(--txt);
    }

    .rp-cb {
        display: inline-block;
        border: 0;
        border-radius: 8px;
        background: var(--acc);
        color: #0e1013 !important;
        font-weight: 600;
        padding: 10px 18px;
        font-size: 14px;
        text-decoration: none;
        transition: filter .2s, transform .2s;
    }

    .rp-cb:hover {
        filter: brightness(.95);
        transform: translateY(-1px);
    }

    .rp-ce {
        display: inline-block;
        border: 0;
        border-radius: 8px;
        background: var(--pre);
        color: #fff !important;
        font-weight: 600;
        padding: 10px 18px;
        font-size: 14px;
        text-decoration: none;
    }

    .rp-cl {
        display: inline-block;
        border: 1px solid var(--cmp);
        border-radius: 8px;
        background: transparent;
        color: var(--txt) !important;
        font-weight: 500;
        padding: 8px 14px;
        font-size: 14px;
        text-decoration: none;
    }

    .rp-cl:hover {
        border-color: var(--accd);
    }

    .rp-det {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1.1fr);
        gap: 32px;
    }

    .rp-det .rp-semfoto {
        aspect-ratio: 1;
        border-radius: 12px;
        border: 1px solid var(--lin);
    }

    .rp-det .rp-semfoto b {
        font-size: 22px;
    }

    .rp-det .rp-foto .rp-selo {
        font-size: 14px;
        padding: 4px 10px;
    }

    .rp-det-cat {
        font-size: 13px;
        color: var(--accd) !important;
        text-decoration: none;
    }

    .rp-det h1 {
        font-size: 1.6rem;
        margin: 6px 0 4px;
    }

    .rp-cod {
        font-size: 12.5px;
        color: var(--suave);
        font-family: 'IBM Plex Mono', monospace;
        margin-bottom: 14px;
    }

    .rp-det-preco {
        display: grid;
        gap: 2px;
        margin-bottom: 14px;
    }

    .rp-det-preco s {
        color: var(--suave);
    }

    .rp-det-preco strong {
        font-size: 2rem;
    }

    .rp-econ {
        color: var(--okt);
        font-size: 13.5px;
        font-weight: 500;
    }

    .rp-desc {
        color: var(--suave);
        margin-bottom: 16px;
    }

    .rp-qtd {
        display: flex;
        flex-wrap: wrap;
        align-items: end;
        gap: 12px;
        margin-bottom: 20px;
    }

    .rp-qtd label {
        display: grid;
        gap: 4px;
        font-size: 13px;
        color: var(--suave);
    }

    .rp-qtd input {
        width: 84px;
        padding: 9px 10px;
        border: 1px solid var(--cmp);
        border-radius: 8px;
        background: var(--card);
        color: var(--txt);
        font-size: 15px;
    }

    .rp-specs {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        border: 1px solid var(--lin);
        border-radius: 8px;
        overflow: hidden;
    }

    .rp-specs td {
        padding: 8px 12px;
        border-bottom: 1px solid var(--lin);
    }

    .rp-specs tr:last-child td {
        border: 0;
    }

    .rp-specs td:first-child {
        color: var(--suave);
        width: 45%;
        background: var(--sf);
    }

    .rp-rel {
        margin-top: 36px;
    }

    .rp-rel h2 {
        font-size: 1.2rem;
        margin-bottom: 12px;
    }

    .rp-item {
        display: grid;
        grid-template-columns: 76px minmax(0, 1fr) auto;
        gap: 14px;
        align-items: center;
        padding: 14px;
        background: var(--card);
        border: 1px solid var(--lin);
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .rp-item .rp-semfoto {
        aspect-ratio: 1;
        border-radius: 8px;
        padding: 2px;
    }

    .rp-item .rp-semfoto b {
        font-size: 11px;
    }

    .rp-item .rp-semfoto i {
        display: none;
    }

    .rp-item h3 {
        font-size: 14.5px;
        margin-bottom: 2px;
    }

    .rp-unit {
        font-size: 13px;
        color: var(--suave);
    }

    .rp-qc {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
    }

    .rp-qc button {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        border: 1px solid var(--cmp);
        background: var(--card);
        color: var(--txt);
        font-size: 16px;
        line-height: 1;
        transition: border-color .2s;
    }

    .rp-qc button:hover {
        border-color: var(--accd);
    }

    .rp-qc .rm {
        width: auto;
        padding: 0 10px;
        font-size: 13px;
        color: var(--err);
        margin-left: 8px;
    }

    .rp-qn {
        min-width: 22px;
        text-align: center;
        font-weight: 600;
    }

    .rp-sub {
        font-weight: 700;
        white-space: nowrap;
    }

    .rp-total {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
        padding: 18px 4px;
        font-size: 1.2rem;
    }

    .rp-ok {
        padding: 16px 18px;
        background: var(--okb);
        border: 1px solid var(--okl);
        color: var(--okt);
        border-radius: 10px;
        margin-bottom: 16px;
    }

    .rp-ok h3 {
        margin-bottom: 4px;
    }

    .rp-auth {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        min-height: 640px;
    }

    .rp-auth-v {
        position: relative;
        overflow: hidden;
        background: #000 radial-gradient(500px 360px at 30% 70%, #1c3a58 0%, transparent 70%);
        color: #fff;
        padding: 28px;
        display: grid;
        align-content: space-between;
    }

    .rp-auth-v .rp-logo {
        font-size: 20px;
    }

    .rp-auth-v p {
        font-size: 2.2rem;
        font-weight: 700;
        line-height: 1.05;
    }

    .rp-auth-v p span {
        color: var(--acc);
        display: block;
    }

    .rp-auth-f {
        padding: 40px 36px;
        display: grid;
        align-content: center;
        gap: 0;
        background: var(--bgl);
    }

    .rp-auth-f h1 {
        font-size: 1.7rem;
        margin-bottom: 4px;
    }

    .rp-sub-t {
        color: var(--suave);
        font-size: 14px;
        margin-bottom: 18px;
    }

    .rp-auth-f form {
        display: grid;
        gap: 4px;
    }

    .rp-auth-f label {
        font-size: 13.5px;
        font-weight: 500;
        margin-top: 8px;
    }

    .rp-auth-f input[type=text],
    .rp-auth-f input[type=email],
    .rp-auth-f input[type=password] {
        padding: 10px 12px;
        border: 1px solid var(--cmp);
        border-radius: 8px;
        background: var(--card);
        color: var(--txt);
        font-size: 15px;
    }

    .rp-auth-f input:focus,
    .rp-qtd input:focus,
    .rp-busca input:focus,
    .rp-adm-f input:focus,
    .rp-adm-f select:focus {
        outline: 2px solid var(--accd);
        outline-offset: 0;
    }

    .rp-auth-f fieldset {
        border: 1px solid var(--lin);
        border-radius: 8px;
        margin: 12px 0 0;
        padding: 10px 12px;
        font-size: 13px;
        display: flex;
        flex-wrap: wrap;
        gap: 4px 16px;
    }

    .rp-auth-f fieldset legend {
        font-weight: 500;
        padding: 0 4px;
    }

    .rp-auth-f fieldset p {
        width: 100%;
        color: var(--suave);
    }

    .rp-auth-f fieldset label {
        margin: 0;
        font-weight: 400;
        display: flex;
        gap: 6px;
        align-items: center;
    }

    .rp-go {
        margin-top: 16px;
        padding: 11px;
        border: 0;
        border-radius: 8px;
        background: var(--acc);
        color: #0e1013;
        font-weight: 700;
        font-size: 15px;
        transition: filter .2s;
    }

    .rp-go:hover {
        filter: brightness(.95);
    }

    .rp-troca {
        margin-top: 16px;
        font-size: 14px;
        color: var(--suave);
    }

    .rp-msg {
        padding: 10px 12px;
        border-radius: 8px;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .rp-msg.erro {
        background: color-mix(in srgb, var(--err) 12%, transparent);
        color: var(--err);
        border: 1px solid color-mix(in srgb, var(--err) 40%, transparent);
    }

    .rp-msg.info {
        background: var(--sf);
        border: 1px solid var(--lin);
    }

    .rp-adm-acoes {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 18px;
    }

    .rp-adm-f {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        padding: 14px;
        background: var(--card);
        border: 1px solid var(--accd);
        border-radius: 10px;
        margin-bottom: 18px;
    }

    .rp-adm-f input,
    .rp-adm-f select {
        flex: 1 1 140px;
        min-width: 0;
        padding: 9px 11px;
        border: 1px solid var(--cmp);
        border-radius: 8px;
        background: var(--bgl);
        color: var(--txt);
        font-size: 14px;
    }

    .rp-bloco {
        background: var(--card);
        border: 1px solid var(--lin);
        border-radius: 10px;
        margin-bottom: 14px;
        overflow: hidden;
    }

    .rp-lin {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 10px 14px;
        border-bottom: 1px solid var(--lin);
        font-size: 14px;
    }

    .rp-lin:last-child {
        border: 0;
    }

    .rp-lin.cat {
        background: var(--sf);
    }

    .rp-lin a {
        text-decoration: none;
    }

    .rp-lin a:hover {
        color: var(--accd);
    }

    .rp-lin>span:first-child {
        min-width: 0;
    }

    .rp-del {
        border: 0;
        background: none;
        color: var(--err);
        font-size: 13.5px;
        padding: 2px 6px;
        border-radius: 6px;
    }

    .rp-del:hover {
        background: color-mix(in srgb, var(--err) 12%, transparent);
    }

    .rp-del.conf {
        background: var(--err);
        color: #fff;
    }

    .rp-min {
        padding: 12px 14px;
        color: var(--suave);
        font-size: 14px;
    }

    .rp-lista {
        padding-left: 18px;
        color: var(--suave);
    }

    .rp-lista li {
        margin-bottom: 4px;
    }

    .rp-lista a {
        color: var(--accd) !important;
        font-weight: 600;
        text-decoration: none;
    }

    .rp-txt p {
        margin-bottom: 14px;
        color: var(--suave);
    }

    .rp-txt h2 {
        font-size: 1.2rem;
        margin: 22px 0 8px;
    }

    .rp-toast {
        position: absolute;
        left: 50%;
        bottom: 76px;
        transform: translate(-50%, 12px);
        z-index: 12;
        background: #0e1013;
        color: #fff;
        padding: 10px 16px;
        border-radius: 8px;
        font-size: 14px;
        border: 1px solid #343a45;
        opacity: 0;
        pointer-events: none;
        transition: opacity .2s, transform .2s;
        max-width: 86%;
        text-align: center;
    }

    .rp-toast.on {
        opacity: 1;
        transform: translate(-50%, 0);
    }

    .rp-chat-btn {
        position: absolute;
        right: 16px;
        bottom: 16px;
        z-index: 11;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border: 0;
        background: var(--acc);
        color: #0e1013;
        display: grid;
        place-items: center;
        box-shadow: 0 10px 24px -8px rgba(0, 0, 0, .5);
        transition: transform .2s;
    }

    .rp-chat-btn:hover {
        transform: scale(1.08);
    }

    .rp-chat-btn svg {
        width: 22px;
        height: 22px;
    }

    .rp-chat {
        position: absolute;
        right: 16px;
        bottom: 74px;
        z-index: 11;
        width: min(320px, calc(100% - 32px));
        background: var(--card);
        color: var(--txt);
        border: 1px solid var(--lin);
        border-radius: 12px;
        box-shadow: 0 24px 50px -16px rgba(0, 0, 0, .5);
        display: none;
        overflow: hidden;
    }

    .rp-chat.on {
        display: block;
    }

    .rp-chat-t {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 14px;
        background: var(--pre);
        color: #fff;
        font-weight: 600;
        font-size: 14px;
    }

    .rp-chat-t button {
        background: none;
        border: 0;
        color: #fff;
        font-size: 16px;
    }

    .rp-msgs {
        height: 190px;
        overflow-y: auto;
        padding: 12px;
        display: grid;
        gap: 8px;
        align-content: start;
    }

    .rp-b {
        padding: 8px 12px;
        border-radius: 12px;
        font-size: 13.5px;
        max-width: 88%;
        animation: sobe .25s ease-out;
    }

    .rp-b.eu {
        justify-self: end;
        background: var(--acc);
        color: #0e1013;
        border-bottom-right-radius: 3px;
    }

    .rp-b.bot {
        background: var(--sf);
        border-bottom-left-radius: 3px;
    }

    @keyframes sobe {
        from {
            opacity: 0;
            transform: translateY(6px);
        }
    }

    .rp-sug {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        padding: 0 12px 8px;
    }

    .rp-sug button {
        border: 1px solid var(--cmp);
        background: var(--card);
        color: var(--txt);
        font-size: 12px;
        padding: 4px 10px;
        border-radius: 999px;
    }

    .rp-sug button:hover {
        border-color: var(--accd);
    }

    .rp-chat form {
        display: flex;
        gap: 6px;
        padding: 10px 12px;
        border-top: 1px solid var(--lin);
    }

    .rp-chat input {
        flex: 1;
        min-width: 0;
        padding: 8px 10px;
        border: 1px solid var(--cmp);
        border-radius: 8px;
        background: var(--bgl);
        color: var(--txt);
        font-size: 14px;
    }

    .rp-chat form button {
        border: 0;
        background: var(--pre);
        color: #fff;
        border-radius: 8px;
        padding: 0 12px;
        font-size: 13.5px;
    }

    .rp[data-m="escuro"] .rp-chat form button {
        background: var(--acc);
        color: #0e1013;
    }

    @container (max-width: 760px) {
        .rp-cats {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .rp-grade {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .rp-det {
            grid-template-columns: minmax(0, 1fr);
        }

        .rp-auth {
            grid-template-columns: minmax(0, 1fr);
        }

        .rp-auth-v {
            display: none;
        }

        .rp-top {
            flex-wrap: wrap;
            padding: 10px 14px;
            gap: 10px;
        }

        .rp-busca {
            order: 3;
            flex-basis: 100%;
            max-width: none;
        }

        .rp-conta {
            margin-left: auto;
            gap: 10px;
        }

        .rp-hero {
            padding: 40px 18px 36px;
        }

        .rp-hero h1 {
            font-size: 2.1rem;
        }

        .rp-sec,
        .rp-pg {
            padding: 26px 16px;
        }

        .rp-rodape-g {
            grid-template-columns: minmax(0, 1fr);
        }

        .rp-item {
            grid-template-columns: 56px minmax(0, 1fr);
        }

        .rp-sub {
            grid-column: 2;
        }
    }

    /* Contato */
    .contato {
        background: var(--ink);
        color: var(--bg);
        border-radius: 20px;
        padding: 52px;
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 32px;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .contato::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 8px;
        background: var(--accent);
    }

    .contato h2 {
        font-size: clamp(1.6rem, 3vw, 2.3rem);
        margin-bottom: 10px;
    }

    .contato p {
        opacity: .8;
        max-width: 48ch;
    }

    .canais {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
    }

    .canais .btn-line {
        color: var(--bg);
        border-color: color-mix(in srgb, var(--bg) 40%, transparent);
    }

    .canais .btn-line:hover {
        border-color: var(--bg);
    }

    .canais .vazio {
        opacity: .8;
    }

    .addr {
        font-family: var(--f-mono);
        font-size: 13px;
        opacity: .75;
        width: 100%;
    }

    footer {
        padding-block: 8px 40px;
        color: var(--mute);
        font-size: 14px;
    }

    footer .in {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 8px 24px;
        border-top: 1px solid var(--line);
        padding-top: 22px;
    }

    @media (max-width: 960px) {

        .hero .in,
        .sobre,
        .tec {
            grid-template-columns: minmax(0, 1fr);
            gap: 36px;
        }

        .contato {
            grid-template-columns: minmax(0, 1fr);
            padding: 36px 26px;
        }
    }

    @media (max-width: 640px) {
        nav {
            display: none;
        }

        .theme {
            margin-left: auto;
        }

        .sec {
            padding-block: 56px;
        }

        .hero {
            padding-block: 40px 56px;
        }

        .rp-view {
            height: 580px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        .rp-view {
            scroll-behavior: auto;
        }

        * {
            transition: none !important;
            animation: none !important;
        }
    }
</style>

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