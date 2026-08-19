<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        :root { --ink: #101315; --paper: #f3f0e8; --lava: #e4572e; --mint: #b9e3c6; --line: rgba(16, 19, 21, .14); --muted: #68706c; }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; color: var(--ink); font-family: Georgia, 'Times New Roman', serif; background: var(--paper); }
        body::before { content: ''; position: fixed; inset: 0; pointer-events: none; opacity: .32; background-image: linear-gradient(var(--line) 1px, transparent 1px), linear-gradient(90deg, var(--line) 1px, transparent 1px); background-size: 32px 32px; mask-image: linear-gradient(to bottom, #000, transparent 78%); }
        .shell { position: relative; max-width: 1120px; min-height: 100vh; margin: 0 auto; padding: 28px 28px 56px; }
        .topbar { display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--ink); padding-bottom: 18px; }
        .mark { display: flex; align-items: center; gap: 11px; font: 700 12px/1 Arial, sans-serif; letter-spacing: .18em; text-transform: uppercase; }
        .mark-dot { width: 13px; height: 13px; background: var(--lava); transform: rotate(45deg); }
        nav { display: flex; gap: 22px; font: 700 11px/1 Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; }
        nav a { color: var(--ink); text-decoration: none; padding: 8px 0; border-bottom: 2px solid transparent; }
        nav a:hover, nav a:focus { border-color: var(--lava); }
        .hero { display: grid; grid-template-columns: minmax(0, 1.25fr) minmax(230px, .75fr); gap: 48px; align-items: end; padding: 100px 0 72px; }
        .eyebrow { margin: 0 0 18px; color: var(--lava); font: 700 11px/1 Arial, sans-serif; letter-spacing: .2em; text-transform: uppercase; }
        h1 { max-width: 700px; margin: 0; font-size: clamp(52px, 9vw, 112px); line-height: .88; letter-spacing: -.065em; font-weight: 700; }
        .intro { max-width: 290px; margin: 0 0 5px; color: var(--muted); font-size: 18px; line-height: 1.45; }
        .intro strong { display: block; color: var(--ink); font-size: 24px; line-height: 1.05; margin-bottom: 12px; }
        .notice { display: flex; align-items: center; gap: 15px; margin: 0 0 28px; padding: 16px 18px; background: var(--mint); border-left: 5px solid var(--ink); font-size: 16px; }
        .notice b { font: 700 10px/1 Arial, sans-serif; letter-spacing: .14em; text-transform: uppercase; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; border-top: 1px solid var(--ink); padding-top: 22px; }
        .button { display: inline-flex; align-items: center; gap: 10px; min-height: 46px; padding: 0 17px; border: 1px solid var(--ink); color: var(--ink); text-decoration: none; font: 700 11px/1 Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; transition: transform .18s ease, box-shadow .18s ease; }
        .button::after { content: '->'; font-size: 15px; }
        .button:hover, .button:focus { transform: translate(-3px, -3px); box-shadow: 5px 5px 0 var(--lava); }
        .button.primary { background: var(--ink); color: var(--paper); }
        .footer-note { position: absolute; bottom: 25px; right: 28px; color: var(--muted); font: 10px/1 Arial, sans-serif; letter-spacing: .12em; text-transform: uppercase; }
        @media (max-width: 680px) { .shell { padding: 20px 20px 60px; } .topbar { align-items: flex-start; gap: 20px; } nav { flex-direction: column; align-items: flex-end; gap: 10px; } .hero { display: block; padding: 80px 0 52px; } .intro { margin-top: 28px; } .footer-note { right: 20px; } }
    </style>
</head>
<body>
    <main class="shell">
        <section class="hero">
            <div>
                <p class="eyebrow">Information page / 2026</p>
                <h1>Make room<br>for ideas.</h1>
            </div>
            <p class="intro"><strong>Welcome to my student space.</strong>A small corner for the work, interests, and details behind the name.</p>
        </section>

        <?php if (!empty($middleware_blocked)): ?>
            <div class="notice"><b>Access note</b><span>You cannot enter the student profile because the middleware blocked this request.</span></div>
        <?php endif; ?>

        <section class="actions">
            <a class="button primary" href="<?= site_url('student/profile') ?>">View student profile</a>
            <a class="button" href="<?= site_url('student/test-middleware') ?>">Test middleware protection</a>
        </section>
        <p class="footer-note">LavaLust / student portal</p>
    </main>
</body>
</html>
