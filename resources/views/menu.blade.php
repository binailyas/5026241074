<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web — Bina Ilyas Santosa</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background: #f0f4f8;
            color: #2c2c2c;
            font-size: 15px;
            line-height: 1.6;
        }

        /* ── HEADER ── */
        .student-header {
            background: linear-gradient(135deg, #eaf2ff 0%, #f0ebff 100%);
            border-bottom: 2px solid #c5d8f0;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .avatar {
            width: 48px; height: 48px;
            background: linear-gradient(135deg, #3a6fa8, #7c5cbf);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-weight: 700; font-size: 18px;
            flex-shrink: 0;
        }

        .name {
            font-family: 'Source Serif 4', serif;
            font-size: 19px; font-weight: 600; color: #1a2e45;
        }

        .course {
            font-size: 13px; color: #6b7a8d;
            margin-top: 2px;
        }

        .header-right {
            margin-left: auto;
            text-align: right;
            font-size: 12px; color: #8a97a8;
        }

        /* ── LAYOUT ── */
        .wrapper {
            display: flex;
            min-height: calc(100vh - 82px);
        }

        /* ── SIDEBAR ── */
        .sidebar {
            width: 220px;
            background: #e8eef6;
            border-right: 1px solid #cdd8e8;
            padding: 24px 0;
            flex-shrink: 0;
        }

        .sidebar-title {
            font-size: 10.5px; font-weight: 600;
            text-transform: uppercase; letter-spacing: 1px;
            color: #8a97a8; padding: 0 20px 10px;
        }

        .sidebar a {
            display: block; padding: 10px 20px;
            text-decoration: none; color: #4a5568;
            font-size: 14px; border-left: 3px solid transparent;
            transition: background 0.15s, color 0.15s;
        }

        .sidebar a:hover { background: #dce6f5; color: #1a2e45; }

        .sidebar a.active {
            background: #d4e4f7;
            color: #3a6fa8; font-weight: 600;
            border-left: 3px solid #3a6fa8;
        }

        .sidebar-divider { height: 1px; background: #c8d5e6; margin: 10px 16px; }

        /* ── MAIN ── */
        .main { flex: 1; padding: 32px 40px; }

        /* ── MEETING CARD ── */
        .meeting-card {
            background: #fff;
            border: 1px solid #dde6f0;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-left: 5px solid #ccc;
            transition: box-shadow 0.2s, transform 0.2s;
            overflow: hidden;
        }

        .meeting-card:hover {
            box-shadow: 0 6px 20px rgba(0,0,0,0.10);
            transform: translateY(-2px);
        }

        /* Per-meeting accent colors */
        #pertemuan1 { border-left-color: #4a90d9; }
        #pertemuan2 { border-left-color: #8b6fcb; }
        #pertemuan3 { border-left-color: #3ab87f; }
        #pertemuan4 { border-left-color: #e8883a; }
        #pertemuan5 { border-left-color: #2ab8b8; }
        #pertemuan6 { border-left-color: #d96a9e; }

        .meeting-card-head {
            padding: 16px 20px;
            border-bottom: 1px solid #edf2f7;
            display: flex; align-items: center; gap: 12px;
        }

        .meeting-number {
            width: 28px; height: 28px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px; font-weight: 700; color: #fff; flex-shrink: 0;
        }

        #pertemuan1 .meeting-number { background: #4a90d9; }
        #pertemuan2 .meeting-number { background: #8b6fcb; }
        #pertemuan3 .meeting-number { background: #3ab87f; }
        #pertemuan4 .meeting-number { background: #e8883a; }
        #pertemuan5 .meeting-number { background: #2ab8b8; }
        #pertemuan6 .meeting-number { background: #d96a9e; }

        .meeting-title { font-size: 15.5px; font-weight: 700; color: #1a2e45; }

        .meeting-desc { margin-left: auto; font-size: 12.5px; color: #9aa5b4; }

        .meeting-card-body {
            padding: 16px 20px;
            display: flex; flex-wrap: wrap; gap: 10px;
        }

        /* ── TASK BUTTONS ── */
        .task-btn {
            padding: 7px 18px; border-radius: 6px;
            border: none; text-decoration: none;
            font-size: 13.5px; font-weight: 500;
            cursor: pointer; transition: background 0.15s, transform 0.1s;
            display: inline-block;
        }

        .task-btn:hover { transform: translateY(-1px); }

        #pertemuan1 .task-btn { background: #ddeeff; color: #1a5ea8; }
        #pertemuan1 .task-btn:hover { background: #b8d8f8; }

        #pertemuan2 .task-btn { background: #ede8ff; color: #5a3b9e; }
        #pertemuan2 .task-btn:hover { background: #d8cff5; }

        #pertemuan3 .task-btn { background: #d8f5ea; color: #1e7a52; }
        #pertemuan3 .task-btn:hover { background: #b6e8d4; }

        #pertemuan4 .task-btn { background: #fdecd8; color: #a85a10; }
        #pertemuan4 .task-btn:hover { background: #f8d8b0; }

        #pertemuan5 .task-btn { background: #d8f5f5; color: #1a7a7a; }
        #pertemuan5 .task-btn:hover { background: #b0e8e8; }

        #pertemuan6 .task-btn { background: #fde8f2; color: #a83268; }
        #pertemuan6 .task-btn:hover { background: #f8cce4; }

        /* ── FOOTER ── */
        footer {
            padding: 16px 40px;
            font-size: 12px; color: #9aa5b4;
            border-top: 1px solid #dce4ed;
            background: #f8fafc;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 640px) {
            .wrapper { flex-direction: column; }
            .sidebar { width: 100%; border-right: none; border-bottom: 1px solid #cdd8e8; padding: 10px 0; display: flex; flex-wrap: wrap; }
            .sidebar a { padding: 8px 14px; border-left: none; }
            .sidebar a.active { border-left: none; border-bottom: 3px solid #3a6fa8; }
            .sidebar-title, .sidebar-divider { display: none; }
            .main { padding: 20px 16px; }
            .student-header { padding: 14px 16px; }
            .header-right { display: none; }
            footer { padding: 14px 16px; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="student-header">
    <div class="avatar">B</div>
    <div>
        <div class="name">Bina Ilyas Santosa - 5026241074</div>
        <div class="course">Pemrograman Web</div>
    </div>
</header>

<div class="wrapper">

    <!-- SIDEBAR -->
    <nav class="sidebar">
        <div class="sidebar-title">Menu</div>
        <a href="#pertemuan1">Pertemuan 1</a>
        <a href="#pertemuan2">Pertemuan 2</a>
        <a href="#pertemuan3">Pertemuan 3</a>
        <a href="#pertemuan4">Pertemuan 4</a>
        <a href="#pertemuan5">Pertemuan 5</a>
        <a href="#pertemuan6">Pertemuan 6</a>
    </nav>

    <!-- MAIN -->
<main class="main">

    <div class="meeting-card" id="pertemuan1">
        <div class="meeting-card-head">
            <div class="meeting-number">1</div>
            <div class="meeting-title">Pertemuan 1</div>
        </div>
        <div class="meeting-card-body">
            <a href="/intro" class="task-btn">intro</a>
        </div>
    </div>

    <div class="meeting-card" id="pertemuan2">
        <div class="meeting-card-head">
            <div class="meeting-number">2</div>
            <div class="meeting-title">Pertemuan 2</div>
        </div>
        <div class="meeting-card-body">
            <a href="/news" class="task-btn">news</a>
            <a href="/news1" class="task-btn">news1</a>
        </div>
    </div>

    <div class="meeting-card" id="pertemuan3">
        <div class="meeting-card-head">
            <div class="meeting-number">3</div>
            <div class="meeting-title">Pertemuan 3</div>
        </div>
        <div class="meeting-card-body">
            <a href="/responsive" class="task-btn">responsive</a>
            <a href="/template" class="task-btn">template</a>
            <a href="/tugaspertemuan3" class="task-btn">tugaspertemuan3</a>
        </div>
    </div>

    <div class="meeting-card" id="pertemuan4">
        <div class="meeting-card-head">
            <div class="meeting-number">4</div>
            <div class="meeting-title">Pertemuan 4</div>
        </div>
        <div class="meeting-card-body">
            <a href="/tugaspertemuan4" class="task-btn">tugaspertemuan4</a>
        </div>
    </div>

    <div class="meeting-card" id="pertemuan5">
        <div class="meeting-card-head">
            <div class="meeting-number">5</div>
            <div class="meeting-title">Pertemuan 5</div>
        </div>
        <div class="meeting-card-body">
            <a href="/index" class="task-btn">index</a>
            <a href="/pertemuan5" class="task-btn">pertemuan5</a>
        </div>
    </div>

    <div class="meeting-card" id="pertemuan6">
        <div class="meeting-card-head">
            <div class="meeting-number">6</div>
            <div class="meeting-title">Pertemuan 6</div>
        </div>
        <div class="meeting-card-body">
            <a href="/linktree" class="task-btn">linktree</a>
        </div>
    </div>

</main>
</div>

<footer>
    Pemrograman Web — Bina Ilyas Santosa
</footer>

</body>
</html>
