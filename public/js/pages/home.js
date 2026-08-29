(function () {
    const canvas = document.getElementById('networkCanvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    const hero = canvas.closest('.hero-full');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    let width, height;

    function resize() {
        width = hero.clientWidth;
        height = hero.clientHeight;
        canvas.width = width * devicePixelRatio;
        canvas.height = height * devicePixelRatio;
        canvas.style.width = width + 'px';
        canvas.style.height = height + 'px';
        ctx.setTransform(devicePixelRatio, 0, 0, devicePixelRatio, 0, 0);
    }

    window.addEventListener('resize', resize);
    resize();

    const nodeCount = Math.max(16, Math.floor(width / 100));
    const nodes = [];
    for (let i = 0; i < nodeCount; i++) {
        nodes.push({
            x: Math.random() * width,
            y: Math.random() * height,
            vx: (Math.random() - 0.5) * 0.3,
            vy: (Math.random() - 0.5) * 0.3,
        });
    }

    const maxDist = 160;
    const root = getComputedStyle(document.documentElement);
    const signalColor = root.getPropertyValue('--color-signal').trim() || '#38BDF8';
    const accentColor = root.getPropertyValue('--color-accent').trim() || '#FF6B35';

    let packets = [];

    function hexToRgba(hex, alpha) {
        hex = hex.replace('#', '');
        const bigint = parseInt(hex, 16);
        const r = (bigint >> 16) & 255;
        const g = (bigint >> 8) & 255;
        const b = bigint & 255;
        return `rgba(${r}, ${g}, ${b}, ${alpha})`;
    }

    function maybeSpawnPacket(edges) {
        if (Math.random() < 0.02 && edges.length) {
            const edge = edges[Math.floor(Math.random() * edges.length)];
            packets.push({ a: edge.a, b: edge.b, t: 0 });
        }
    }

    function drawFrame() {
        ctx.clearRect(0, 0, width, height);

        if (!prefersReducedMotion) {
            for (const n of nodes) {
                n.x += n.vx;
                n.y += n.vy;
                if (n.x < 0 || n.x > width) n.vx *= -1;
                if (n.y < 0 || n.y > height) n.vy *= -1;
            }
        }

        const edges = [];
        for (let i = 0; i < nodes.length; i++) {
            for (let j = i + 1; j < nodes.length; j++) {
                const dx = nodes[i].x - nodes[j].x;
                const dy = nodes[i].y - nodes[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < maxDist) {
                    edges.push({ a: nodes[i], b: nodes[j], dist });
                }
            }
        }

        for (const edge of edges) {
            const alpha = (1 - edge.dist / maxDist) * 0.35;
            ctx.strokeStyle = hexToRgba(signalColor, alpha);
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(edge.a.x, edge.a.y);
            ctx.lineTo(edge.b.x, edge.b.y);
            ctx.stroke();
        }

        for (const n of nodes) {
            ctx.fillStyle = hexToRgba(signalColor, 0.8);
            ctx.beginPath();
            ctx.arc(n.x, n.y, 2.2, 0, Math.PI * 2);
            ctx.fill();
        }

        if (!prefersReducedMotion) {
            maybeSpawnPacket(edges);
            packets = packets.filter((p) => p.t <= 1);
            for (const p of packets) {
                p.t += 0.012;
                const x = p.a.x + (p.b.x - p.a.x) * p.t;
                const y = p.a.y + (p.b.y - p.a.y) * p.t;
                ctx.fillStyle = accentColor;
                ctx.beginPath();
                ctx.arc(x, y, 2.6, 0, Math.PI * 2);
                ctx.fill();
            }
            requestAnimationFrame(drawFrame);
        }
    }

    drawFrame();
})();