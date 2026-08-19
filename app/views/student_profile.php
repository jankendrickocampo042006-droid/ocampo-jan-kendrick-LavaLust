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
        .shell { position: relative; max-width: 1120px; margin: 0 auto; padding: 28px 28px 56px; }
        .topbar { display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--ink); padding-bottom: 18px; }
        .mark { display: flex; align-items: center; gap: 11px; font: 700 12px/1 Arial, sans-serif; letter-spacing: .18em; text-transform: uppercase; }
        .mark-dot { width: 13px; height: 13px; background: var(--lava); transform: rotate(45deg); }
        nav { display: flex; gap: 22px; font: 700 11px/1 Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; }
        nav a { color: var(--ink); text-decoration: none; padding: 8px 0; border-bottom: 2px solid transparent; }
        nav a:hover, nav a:focus { border-color: var(--lava); }
        .heading { display: flex; align-items: end; justify-content: space-between; gap: 30px; padding: 54px 0 28px; }
        .eyebrow { margin: 0 0 15px; color: var(--lava); font: 700 11px/1 Arial, sans-serif; letter-spacing: .2em; text-transform: uppercase; }
        h1 { margin: 0; font-size: clamp(38px, 6vw, 64px); line-height: .92; letter-spacing: -.05em; }
        .identity { max-width: 250px; color: var(--muted); font-size: 15px; line-height: 1.4; }
        .identity strong { display: block; color: var(--ink); font-size: 19px; line-height: 1.05; margin-bottom: 8px; }
        .profile-table { width: 100%; max-width: 820px; border-collapse: collapse; border-top: 2px solid var(--ink); font-size: 15px; }
        .profile-table th, .profile-table td { padding: 13px 16px; border-bottom: 1px solid var(--line); text-align: left; vertical-align: top; }
        .profile-table th { width: 28%; color: var(--muted); font: 700 10px/1.2 Arial, sans-serif; letter-spacing: .12em; text-transform: uppercase; }
        .profile-table tr:nth-child(odd) { background: rgba(185, 227, 198, .32); }
        .profile-table td { overflow-wrap: anywhere; }
        .actions { display: flex; gap: 12px; margin-top: 20px; }
        .button { display: inline-flex; align-items: center; gap: 10px; min-height: 46px; padding: 0 17px; border: 1px solid var(--ink); color: var(--ink); text-decoration: none; font: 700 11px/1 Arial, sans-serif; letter-spacing: .08em; text-transform: uppercase; transition: transform .18s ease, box-shadow .18s ease; }
        .button::after { content: '->'; font-size: 15px; }
        .button:hover, .button:focus { transform: translate(-3px, -3px); box-shadow: 5px 5px 0 var(--lava); }
        .button.primary { background: var(--ink); color: var(--paper); }
        @media (max-width: 680px) { .shell { padding: 20px 20px 40px; } .heading { display: block; padding: 48px 0 24px; } .identity { margin-top: 20px; } .profile-table th, .profile-table td { padding: 11px 10px; } .profile-table th { width: 36%; } .actions { flex-wrap: wrap; } }
    </style>
</head>
<body>
    <main class="shell">
        <section class="heading">
            <div><p class="eyebrow">Personal index / 001</p><h1>Student<br>profile.</h1></div>
            <p class="identity"><strong><?= $student['name'] ?></strong><?= $student['course'] ?><br><?= $student['year'] ?> / <?= $student['section'] ?></p>
        </section>

        <table class="profile-table">
            <tbody>
                <tr><th scope="row">Student ID</th><td><?= $student['student_id'] ?></td></tr>
                <tr><th scope="row">Full name</th><td><?= $student['name'] ?></td></tr>
                <tr><th scope="row">Course</th><td><?= $student['course'] ?></td></tr>
                <tr><th scope="row">Year level</th><td><?= $student['year'] ?></td></tr>
                <tr><th scope="row">Section</th><td><?= $student['section'] ?></td></tr>
                <tr><th scope="row">Email</th><td><?= $student['email'] ?></td></tr>
                <tr><th scope="row">Address</th><td><?= $student['address'] ?></td></tr>
                <tr><th scope="row">Skills</th><td><?= $student['skills'] ?></td></tr>
                <tr><th scope="row">Hobbies</th><td><?= $student['hobbies'] ?></td></tr>
                <tr><th scope="row">Instagram</th><td><?= $student['instagram'] ?></td></tr>
            </tbody>
        </table>

        <div class="actions"><a class="button primary" href="<?= site_url('student') ?>">Back to home</a></div>
    </main>
</body>
</html>
