/* Robô 3D da página inicial — Three.js local (sem depender de CDN nem de serviços externos). */
import * as THREE from './three.module.min.js';

export function iniciarRobo(canvas, hero) {
    let vivo = true;
    const reduzido = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true, powerPreference: 'high-performance' });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.outputColorSpace = THREE.SRGBColorSpace;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.15;

    const cena = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(32, 1, 0.1, 100);
    camera.position.set(0, -0.2, 12.5);

    /* ---------- Luzes ---------- */
    cena.add(new THREE.HemisphereLight(0x9fd8ff, 0x0b1020, 0.9));
    const principal = new THREE.DirectionalLight(0xffffff, 2.4);
    principal.position.set(3, 5, 6);
    cena.add(principal);
    const recorte = new THREE.DirectionalLight(0x5fd3ee, 3);
    recorte.position.set(-5, 2, -4);
    cena.add(recorte);
    const olhoLuz = new THREE.PointLight(0x7fe3f5, 6, 6);
    olhoLuz.position.set(0, 1.9, 2);
    cena.add(olhoLuz);

    /* ---------- Materiais ---------- */
    const corpoMat = new THREE.MeshStandardMaterial({ color: 0xe8eef4, metalness: 0.55, roughness: 0.28 });
    const escuroMat = new THREE.MeshStandardMaterial({ color: 0x141b26, metalness: 0.7, roughness: 0.35 });
    const visorMat = new THREE.MeshStandardMaterial({ color: 0x05080d, metalness: 0.9, roughness: 0.08 });
    const brilhoMat = new THREE.MeshStandardMaterial({ color: 0x7fe3f5, emissive: 0x4fd6f0, emissiveIntensity: 2.2 });
    const acentoMat = new THREE.MeshStandardMaterial({ color: 0x7fe3f5, metalness: 0.6, roughness: 0.3, emissive: 0x1b6b80, emissiveIntensity: 0.6 });

    function malha(geo, mat, x = 0, y = 0, z = 0) {
        const m = new THREE.Mesh(geo, mat);
        m.position.set(x, y, z);
        return m;
    }

    const robo = new THREE.Group();
    cena.add(robo);

    /* ---------- Tronco ---------- */
    const tronco = new THREE.Group();
    robo.add(tronco);
    const torso = malha(new THREE.CapsuleGeometry(0.78, 0.7, 12, 32), corpoMat, 0, -1.05, 0);
    torso.scale.set(1, 1, 0.82);
    tronco.add(torso);
    tronco.add(malha(new THREE.TorusGeometry(0.8, 0.05, 12, 48), acentoMat, 0, -0.78, 0).rotateX(Math.PI / 2));
    const nucleo = malha(new THREE.CircleGeometry(0.2, 32), brilhoMat, 0, -1.1, 0.66);
    tronco.add(nucleo);
    tronco.add(malha(new THREE.TorusGeometry(0.26, 0.04, 12, 40), escuroMat, 0, -1.1, 0.65));
    tronco.add(malha(new THREE.CylinderGeometry(0.28, 0.34, 0.22, 24), escuroMat, 0, -0.3, 0));

    /* ---------- Braços ---------- */
    function braco(lado) {
        const g = new THREE.Group();
        g.position.set(lado * 1.02, -0.72, 0);
        g.add(malha(new THREE.SphereGeometry(0.24, 24, 16), escuroMat));
        const seg = malha(new THREE.CapsuleGeometry(0.15, 0.62, 8, 20), corpoMat, lado * 0.05, -0.55, 0);
        g.add(seg);
        g.add(malha(new THREE.SphereGeometry(0.2, 24, 16), acentoMat, lado * 0.08, -1.12, 0));
        return g;
    }
    const bracoE = braco(-1);
    const bracoD = braco(1);
    tronco.add(bracoE, bracoD);

    /* ---------- Cabeça ---------- */
    const cabeca = new THREE.Group();
    cabeca.position.set(0, 0.55, 0);
    robo.add(cabeca);
    const crani = malha(new THREE.SphereGeometry(1, 48, 32), corpoMat);
    crani.scale.set(1.18, 0.98, 1);
    cabeca.add(crani);
    const visor = malha(new THREE.SphereGeometry(1, 48, 32), visorMat, 0, 0.02, 0.5);
    visor.scale.set(0.98, 0.58, 0.62);
    cabeca.add(visor);
    const olhos = [];
    for (const lado of [-1, 1]) {
        const o = malha(new THREE.CapsuleGeometry(0.1, 0.18, 8, 16), brilhoMat, lado * 0.4, 0.04, 1.08);
        o.scale.set(1, 1, 0.5);
        cabeca.add(o);
        olhos.push(o);
        const orelha = malha(new THREE.CylinderGeometry(0.28, 0.28, 0.2, 32), escuroMat, lado * 1.2, 0, 0);
        orelha.rotation.z = Math.PI / 2;
        cabeca.add(orelha);
        const anel = malha(new THREE.CylinderGeometry(0.15, 0.15, 0.24, 24), acentoMat, lado * 1.21, 0, 0);
        anel.rotation.z = Math.PI / 2;
        cabeca.add(anel);
    }
    cabeca.add(malha(new THREE.CylinderGeometry(0.03, 0.03, 0.5, 12), escuroMat, 0, 1.15, 0));
    const bola = malha(new THREE.SphereGeometry(0.1, 20, 16), brilhoMat, 0, 1.45, 0);
    cabeca.add(bola);

    /* ---------- Base de levitação ---------- */
    const aneis = new THREE.Group();
    aneis.position.set(0, -2.5, 0);
    robo.add(aneis);
    for (let i = 0; i < 3; i++) {
        const a = malha(new THREE.TorusGeometry(0.5 + i * 0.32, 0.018, 8, 64), brilhoMat);
        a.rotation.x = Math.PI / 2;
        a.material = brilhoMat.clone();
        a.material.transparent = true;
        a.material.opacity = 0.75 - i * 0.2;
        aneis.add(a);
    }

    /* ---------- Partículas ---------- */
    const N = 90;
    const pos = new Float32Array(N * 3);
    for (let i = 0; i < N; i++) {
        const r = 2.4 + Math.random() * 2.2, a = Math.random() * Math.PI * 2;
        pos[i * 3] = Math.cos(a) * r;
        pos[i * 3 + 1] = (Math.random() - 0.5) * 5;
        pos[i * 3 + 2] = Math.sin(a) * r * 0.6 - 1;
    }
    const geoP = new THREE.BufferGeometry();
    geoP.setAttribute('position', new THREE.BufferAttribute(pos, 3));
    const pontos = new THREE.Points(geoP, new THREE.PointsMaterial({ color: 0x7fe3f5, size: 0.035, transparent: true, opacity: 0.7 }));
    cena.add(pontos);

    /* ---------- Interação ---------- */
    const alvo = { x: 0, y: 0 }, atual = { x: 0, y: 0 };
    const mover = (e) => {
        if (e.pointerType === 'touch') return;
        const r = hero.getBoundingClientRect();
        alvo.x = ((e.clientX - r.left) / r.width) * 2 - 1;
        alvo.y = ((e.clientY - r.top) / r.height) * 2 - 1;
    };
    const sair = () => { alvo.x = 0; alvo.y = 0; };
    hero.addEventListener('pointermove', mover);
    hero.addEventListener('pointerleave', sair);

    function ajustar() {
        const w = canvas.clientWidth || 1, h = canvas.clientHeight || 1;
        renderer.setSize(w, h, false);
        camera.aspect = w / h;
        // em telas estreitas, afasta a câmera para o robô caber
        camera.position.z = camera.aspect < 0.9 ? 17 : 12.5;
        camera.updateProjectionMatrix();
    }
    ajustar();
    const ro = new ResizeObserver(ajustar);
    ro.observe(canvas);

    let visivel = true, rodando = false;
    const io = new IntersectionObserver((en) => { visivel = en[0].isIntersecting; if (visivel) comecar(); });
    io.observe(hero);

    const relogio = new THREE.Clock();
    function quadro() {
        if (!vivo || !visivel || document.hidden) { rodando = false; return; }
        const t = relogio.getElapsedTime();
        atual.x += (alvo.x - atual.x) * 0.06;
        atual.y += (alvo.y - atual.y) * 0.06;

        const f = reduzido ? 0 : 1;
        robo.position.y = Math.sin(t * 1.4) * 0.12 * f;
        robo.rotation.y = atual.x * 0.45 + Math.sin(t * 0.5) * 0.12 * f;
        cabeca.rotation.y = atual.x * 0.35;
        cabeca.rotation.x = atual.y * 0.25;
        bracoE.rotation.z = -0.08 + Math.sin(t * 1.4 + 1) * 0.06 * f;
        bracoD.rotation.z = 0.08 - Math.sin(t * 1.4) * 0.06 * f;
        bola.scale.setScalar(1 + Math.sin(t * 4) * 0.2 * f);
        nucleo.material = brilhoMat;
        const piscar = (t % 4.2) > 4.08 ? 0.15 : 1;
        olhos.forEach((o) => (o.scale.y = piscar));
        aneis.children.forEach((a, i) => {
            const s = 1 + ((t * 0.5 + i * 0.33) % 1) * 0.35 * f;
            a.scale.set(s, s, 1);
        });
        pontos.rotation.y = t * 0.05 * f;

        renderer.render(cena, camera);
        requestAnimationFrame(quadro);
    }
    function comecar() { if (vivo && !rodando) { rodando = true; relogio.getDelta(); requestAnimationFrame(quadro); } }
    const vis = () => { if (!document.hidden) comecar(); };
    document.addEventListener('visibilitychange', vis);
    comecar();

    return function destruir() {
        vivo = false;
        ro.disconnect();
        io.disconnect();
        hero.removeEventListener('pointermove', mover);
        hero.removeEventListener('pointerleave', sair);
        document.removeEventListener('visibilitychange', vis);
        renderer.dispose();
        renderer.forceContextLoss();
    };
}
