<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@teamgroupinc | Linktree</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <script>
    function showme()
    {
        //alert("Halo Selamat Datang");
        Swal.fire({
        title: "Hallo!",
        text: "Selamat Datang!",
        icon: "success"
        });

        console.log("Ini baris 17 , sudah sampai di sini");
        a = 18 + 10 ;
        console.log("Hasil Penjumlahan : " + a);
        c = 1 * 2 * 3 ;
        console.log("Hasil Perkalian : " + a);
    }

    function changeText()
    {
        const element = document.getElementById("intro");
        element.innerHTML = "Sistem Informasi ITS" ;
    }

    function changeStyle()
    {
        const element = document.getElementById("tombol");
        element.style.color = "red" ;
        element.style.background = "yellow";
    }


  </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background-color: #9eae9f;
      color: #222222;
      min-height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .main-container {
      width: 100%;
      max-width: 580px;
    }

    .linktree-outer-card {
      background-color: #e0f8f0;
      border: 1px solid #ffffff;
      border-radius: 24px;
      width: 100%;
      padding: 60px 24px 20px 24px;
      position: relative;
      box-sizing: border-box;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .top-icon-left, .top-icon-right {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #ffffff;
      border: 1px solid #eeeeee;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: 24px;
      overflow: hidden;
      transition: transform 0.2s;
      cursor: pointer;
    }

    .top-icon-left:hover, .top-icon-right:hover { transform: scale(1.1); }
    .top-icon-left { left: 24px; }
    .top-icon-right { right: 24px; }

    .top-icon-left img, .top-icon-right img {
      width: 60%;
      height: auto;
    }

    .profile-logo-container {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      background-color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
      border: 1px solid #eeeeee;
      overflow: hidden;
    }

    .profile-logo-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-family: 'Courier Prime', monospace;
      font-size: 22px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 14px;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 25px;
    }

    .social-icons img {
      width: 40px;
      height: 40px;
      transition: transform 0.2s;
    }

    .social-icons a:hover img { transform: scale(1.2); }

    .link-btn {
      display: flex;
      align-items: center;
      background-color: transparent;
      border: 1px solid #aaaaaa;
      border-radius: 50px;
      padding: 14px 20px;
      margin-bottom: 12px;
      text-decoration: none;
      color: #222222;
      transition: all 0.2s;
      width: 100%;
    }

    .link-btn:hover {
      background-color: #cbe3db;
      border-color: white;
      text-decoration: none;
      color: #222222;
      box-shadow: none;
    }

    .link-label {
      flex-grow: 1;
      text-align: center;
      font-family: 'Space Mono', monospace;
      font-weight: 500;
      font-size: 16px;
     }
    .link-dots { color: #888888; }

    .join-btn {
      display: block;
      background-color: #ffffff;
      color: #1a1a1a;
      border-radius: 30px;
      padding: 12px 25px;
      text-align: center;
      font-weight: 700;
      font-size: 14px;
      text-decoration: none;
      margin: 30px auto 20px auto;
      width: fit-content;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .footer-links {
      text-align: center;
      font-size: 11px;
      color: #555555;
      margin-top: 10px;
    }

    .footer-links a { color: #555555; text-decoration: none; margin: 0 5px; }
  </style>
</head>
<body>

  <div class="main-container">
    <div class="linktree-outer-card">

      <div class="top-icon-left">
        <img src="assets/pertemuan5/linktree.png" alt="Linktree">
      </div>

      <div class="top-icon-right">
        <img src="assets/pertemuan5/sharee.png" alt="Share">
      </div>

      <div class="profile-logo-container">
        <img src="assets/pertemuan5/teamgroup.webp" alt="Logo">
      </div>

      <p id="intro" class="profile-name">@teamgroupinc</p>

      <div class="social-icons">
        <a href="https://instagram.com/teamgroupinc" target="_blank" rel="noopener noreferrer"><img src="assets/pertemuan5/instagram.png" alt="IG"></a>
        <a href="https://facebook.com/teamgroupinc" target="_blank" rel="noopener noreferrer"><img src="assets/pertemuan5/facebook.png" alt="FB"></a>
        <a href="https://tiktok.com/@teamgroupinc" target="_blank" rel="noopener noreferrer"><img src="assets/pertemuan5/tiktok.png" alt="TT"></a>
        <a href="https://youtube.com/teamgroupinc" target="_blank" rel="noopener noreferrer"><img src="assets/pertemuan5/youtube.png" alt="YT"></a>
      </div>

<div>
        <button class="btn btn-primary" onclick="showme();">Show Me</button>

        <button class="btn btn-primary" onclick="changeText();">Change Text</button>

        <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>
</div>

      <a id="tombol" href="https://www.teamgroupinc.com/en/" target="_blank" rel="noopener noreferrer" class="link-btn">
        <span class="link-label">Website</span>
        <span class="link-dots">⋮</span>
      </a>
      <a href="https://web.facebook.com/teamgroupid?_rdc=1&_rdr#" target="_blank" rel="noopener noreferrer" class="link-btn">
        <span class="link-label">Facebook</span>
        <span class="link-dots">⋮</span>
      </a>
      <a href="https://www.tokopedia.com/teamgroup?source=universe&st=product" target="_blank" rel="noopener noreferrer" class="link-btn">
        <span class="link-label">Tokopedia</span>
        <span class="link-dots">⋮</span>
      </a>
      <a href="https://shopee.co.id/teamgroupinc.id" target="_blank" rel="noopener noreferrer" class="link-btn">
        <span class="link-label">Shopee</span>
        <span class="link-dots">⋮</span>
      </a>
      <a href="https://blibli.com/merchant/teamgroup-official-store/TEP-60055" target="_blank" rel="noopener noreferrer" class="link-btn">
        <span class="link-label">Blibli</span>
        <span class="link-dots">⋮</span>
      </a>

      <a href="https://linktr.ee/?utm_source=linktree&utm_medium=profile" target="_blank" rel="noopener noreferrer" class="join-btn">Join teamgroupinc on Linktree</a>

      <div class="footer-links">
        <a href="#">Cookie Preferences</a> •
        <a href="#">Report</a> •
        <a href="#">Privacy</a>
      </div>

    </div>
  </div>

</body>
</html>
