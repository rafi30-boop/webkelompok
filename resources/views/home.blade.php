<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Kenalan yuk – Kelompok Kami</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root{
      --clr-primary:#0066ff;
      --clr-secondary:#6a11cb;
      --clr-bg:#f5f7fa;
      --clr-card:#ffffff;
      --radius:14px;
      --shadow:0 4px 16px rgba(0,0,0,.10);
      --gradient:linear-gradient(90deg,#2575fc 0%,#6a11cb 100%);
    }
    *{margin:0;padding:0;box-sizing:border-box;}
    body{font-family:'Inter',sans-serif;background:var(--clr-bg);color:#222;line-height:1.6;}
    img{max-width:100%;display:block;}
  
    
    .container{max-width:1000px;margin:auto;padding:0 1rem;}
    .btn{
      display:inline-block;padding:.75rem 1.5rem;border-radius:50px;
      background:var(--gradient);color:#fff;font-weight:600;transition:.3s;
      box-shadow:0 2px 12px rgba(37,117,252,0.13);
      letter-spacing:.5px;
      position:relative;overflow:hidden;

    }
    .btn::after{
      content:"";position:absolute;left:0;top:0;width:100%;height:100%;
      background:rgba(255,255,255,0.08);opacity:0;transition:.3s;
    }
    .btn:hover{transform:translateY(-2px) scale(1.04);}
    .btn:hover::after{opacity:1;}
    .section{
      padding:80px 0;
      background:linear-gradient(90deg,#f5f7fa 70%,#e3e6f3 100%);
      border-radius:var(--radius);
      margin-bottom:32px;
      box-shadow:0 2px 12px rgba(37,117,252,0.07);

    }
    .section-title{
      text-align:center;font-size:2.2rem;margin-bottom:2.5rem;
      color:var(--clr-primary);font-weight:700;letter-spacing:1px;
      text-shadow:0 2px 8px rgba(106,17,203,0.08);
    }
    /* HERO */
    .hero{
      height:60vh;
      background:url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      display:flex;align-items:center;justify-content:center;
      color:#fff;text-align:center;position:relative;
      border-radius:0 0 px 40px;
      box-shadow:0 px 40px rgba(37,117,252,0.10);      
      animation:fadeInHero 1.2s; 
    }
    @keyframes fadeInHero{
      from{opacity:0;transform:translateY(-30px);}
      to{opacity:1;transform:translateY(0);}
    }
    .hero::after{content:'';position:absolute;inset:0;background:rgba(0,0,0,.55);}
    .hero-content{position:relative;z-index:1;}
    .hero h1{font-size:2.7rem;margin-bottom:.5rem;font-weight:700;}
    .hero p{max-width:600px;margin:0 auto 1.5rem;font-size:1.15rem;}
    /* ANGGOTA */
    .anggota-grid{
      display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:2rem;
      margin-top:24px;
    }
    .card-member{
      background:var(--clr-card);
      border-radius:var(--radius);
      overflow:hidden;
      box-shadow:var(--shadow);
      text-align:center;
      transition:.3s;
      position:relative;
      animation:fadeInCard .8s;
      margin    
    }
    @keyframes fadeInCard{
      from{opacity:0;transform:scale(.95);}
      to{opacity:1;transform:scale(1);}
    }
    .card-member:hover{
      transform:translateY(-8px) scale(1.03);
      box-shadow:0 8px 32px rgba(37,117,252,0.18);
      border:2px solid var(--clr-primary);
    }
    .card-member img{
      width:100%;aspect-ratio:1;object-fit:cover;
      border-bottom:2px solid var(--clr-secondary);
      transition:.3s;
    }
    .card-member:hover img{filter:brightness(1.08) saturate(1.1);}
    .info{padding:1.2rem;}
    .info h3{font-size:1.15rem;margin-bottom:.2rem;font-weight:700;}
    .info p{color:#666;font-size:.95rem;margin-bottom:.8rem;}
    .socials a{
      margin:0 .3rem;font-size:1.15rem;color:var(--clr-primary);
      transition:.2s;
    }
    .socials a:hover{color:var(--clr-secondary);}
    /* TIMELINE */
    .timeline{position:relative;padding:2rem 0;}
    .timeline::before{
      content:'';position:absolute;left:50%;top:0;bottom:0;width:2px;background:#ddd;
      transform:translateX(-50%);
    }
    .timeline-item{
      width:50%;padding:1rem 2rem;position:relative;
      min-height:90px;
      transition:.3s;
    }
    .timeline-item:nth-child(odd){left:0;text-align:right;}
    .timeline-item:nth-child(even){left:50%;}
    .timeline-item::after{
      content:'';position:absolute;top:1.2rem;width:14px;height:14px;background:var(--clr-primary);border-radius:50%;
      box-shadow:0 2px 8px rgba(37,117,252,0.13);
    }
    .timeline-item:nth-child(odd)::after{right:-7px;}
    .timeline-item:nth-child(even)::after{left:-7px;}
    .timeline-box{
      background:var(--clr-card);
      padding:1.1rem 1rem;
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      border-left:4px solid var(--clr-primary);
      transition:.3s;
    }
    .timeline-item:hover .timeline-box{
      background:linear-gradient(90deg,#e3e6f3 60%,#f5f7fa 100%);
      border-left:4px solid var(--clr-secondary);
      box-shadow:0 8px 32px rgba(37,117,252,0.10);
    }
    .timeline-box h4{color:var(--clr-primary);margin-bottom:.5rem;}
    @media(max-width:800px){
      .timeline-item{padding:1rem .5rem;}
    }
    @media(max-width:600px){
      .timeline::before{left:20px;}
      .timeline-item{width:100%;left:0!important;text-align:left;padding-left:50px;}
      .timeline-item::after{left:14px!important;}
    }
    /* SKILL VALUE */
    .skills-grid{
      display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1.5rem;
      margin-top:24px;
    }
    .skill-card{
      background:var(--clr-card);
      padding:1.5rem;
      border-radius:var(--radius);
      box-shadow:var(--shadow);
      border-top:4px solid var(--clr-secondary);
      transition:.3s;
      text-align:center;
      position:relative;
    }
    .skill-card:hover{
      background:linear-gradient(90deg,#e3e6f3 60%,#f5f7fa 100%);
      border-top:4px solid var(--clr-primary);
      box-shadow:0 8px 32px rgba(37,117,252,0.10);
      transform:scale(1.04);
    }
    .skill-card h4{margin-bottom:.5rem;color:var(--clr-primary);}
    /* FOOTER */
    footer{
      background:var(--gradient);
      color:#fff;
      text-align:center;
      padding:2.5rem 0 1.2rem 0;
      border-radius:40px 40px 0 0;
      margin-top:48px;
      box-shadow:0 -2px 12px rgba(37,117,252,0.07);
      font-size:1.1rem;
      letter-spacing:.5px;
    }
    footer .footer-socials a{
      color:#fff;margin:0 .5rem;font-size:1.3rem;transition:.2s;
    }
    footer .footer-socials a:hover{color:#222;}
    @media(max-width:600px){
      .section{padding:28px 6px;}
      .section-title{font-size:1.3rem;}
      .skills-grid,.anggota-grid{gap:1rem;}
      .container{padding:0 .5rem;}
      .hero h1{font-size:1.5rem;}
      .hero{height:38vh;}
    }
  </style>
</head>
<body>
<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <h1>Perkenalan Kelompok 3</h1>
    <p>Sebuah tim kecil yang punya mimpi besar. Kenalan lebih dekat yuk!</p>
    <a href="#anggota" class="btn">Lihat Anggota</a>
  </div>
</section>
<!-- ANGGOTA -->
<section class="section" id="anggota">
  <div class="container">
    <h2 class="section-title">Anggota Kami</h2>
    <div class="anggota-grid">
      <div class="card-member">
        <img src="alfia.jpg" alt="Ayu">
        <div class="info">
          <h3>Ayu Lestari</h3>
          <p>Ketua Kelompok</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="card-member">
        <img src="prisa.jpg" alt="Budi">
        <div class="info">
          <h3>Budi Santoso</h3>
          <p>Developer</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="card-member">
        <img src="prisa.jpg" alt="Citra">
        <div class="info">
          <h3>Citra Dewi</h3>
          <p>UI/UX Designer</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
          </div>
        </div>
      </div>
      <div class="card-member">
        <img src="alfia.jpg" alt="Dani">
        <div class="info">
          <h3>Dani Ramadhan</h3>
          <p>Marketing</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
      
<div class="card-member">
        <img src="alfia.jpg" alt="Dani">
        <div class="info">
          <h3>Dani Ramadhan</h3>
          <p>Marketing</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>     

      <div class="card-member">
        <img src="prisa.jpg" alt="Eka">
        <div class="info">
          <h3>Eka Pratama</h3>
          <p>Support</p>
          <div class="socials">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CERITA KAMI (Timeline) -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Cerita Kami</h2>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-box">
          <h4>Januari 2023</h4>
          <p>Ide awal muncul saat kami satu kelas dan ingin membuat proyek bersama.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-box">
          <h4>Maret 2023</h4>
          <p>Membangun aplikasi pertama: “WasteLess” – edukasi pengolahan sampah.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-box">
          <h4>Agustus 2023</h4>
          <p>Menjadi juara 2 lomba kewirausahaan kampus & mendapatkan pendanaan.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-box">
          <h4>Mei 2024</h4>
          <p>Launching versi 2.0 dengan fitur komunitas & challenge harian.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- VALUE / SKILL MASING-MASING -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Keahlian & Nilai Kami</h2>
    <div class="skills-grid">
      <div class="skill-card">
        <h4>Work Smart</h4>
        <p>Kami percaya proses yang efisien menghasilkan karya luar biasa.</p>
      </div>
      <div class="skill-card">
        <h4>User First</h4>
        <p>Setiap fitur dirancang untuk memudahkan pengguna.</p>
      </div>
      <div class="skill-card">
        <h4>Growth Mindset</h4>
        <p>Belajar tiap hari agar solusi kami terus relevan.</p>
      </div>
      <div class="skill-card">
        <h4>Kolaborasi</h4>
        <p>Bersinergi, saling mendukung, dan terbuka terhadap ide baru.</p>
      </div>
    </div>
  </div>
</section>
<!-- FOOTER -->
<footer>
  <div class="footer-socials" style="margin-bottom:1rem;">
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-github"></i></a>
  </div>
  <p>Terima kasih sudah mau kenalan! 👋</p>
  <p style="font-size:.95rem;margin-top:.5rem;">Kelompok Kita &copy; 2024</p>
</footer>
<script>
  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',e=>{
      e.preventDefault();
      document.querySelector(a.getAttribute('href')).scrollIntoView({behavior:'smooth'});
    });
  });
</script>
</body>
</html>