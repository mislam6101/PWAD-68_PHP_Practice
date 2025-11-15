<?php

class fruits
{
    private $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function intro()
    {
        echo "This is {$this->name} and the color is {$this->color} .";
    }
}

class blueberry extends fruits
{
    function msg()
    {
        echo "<br> Am I a fruit or berry?";
    }<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>PhoneReviewer — Honest Phone Reviews</title>
<meta name="description" content="PhoneReviewer's honest and short reviews, specs, pros & cons and buying advice." />
<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<style>
  :root{
    --bg:#f4f6fb; --card:#fff; --muted:#6b7280; --accent:#0b63ff; --glass: rgba(255,255,255,0.6);
    --maxw:1100px;
  }
  *{box-sizing:border-box}
  body{
    margin:0;font-family:Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background: linear-gradient(180deg,#eef2ff 0%, var(--bg) 50%); color:#12202b;
    -webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;
  }

  header{background:transparent;padding:20px 16px;display:flex;justify-content:center;border-bottom:1px solid rgba(0,0,0,0.04)}
  .wrap{width:100%;max-width:var(--maxw);margin:0 auto;padding:0 16px}

  .brand{display:flex;align-items:center;gap:12px;font-weight:700;font-size:18px;color:var(--accent)}
  .brand .logo{width:42px;height:42px;background:linear-gradient(135deg,#0b63ff,#00b4ff);border-radius:8px;display:inline-grid;place-items:center;color:white;font-weight:800}

  .hero{display:flex;flex-wrap:wrap;align-items:center;gap:20px;padding:36px 0}
  .hero-left{flex:1;min-width:260px}
  .hero h1{margin:0;font-size:28px;line-height:1.05}
  .hero p{color:var(--muted);margin:12px 0 0}
  .searchbar{margin-top:16px;display:flex;gap:8px}
  .searchbar input{flex:1;padding:12px 14px;border-radius:12px;border:1px solid #e6e9f2;background:var(--card)}
  .searchbar button{background:var(--accent);color:white;border:none;padding:10px 14px;border-radius:10px;cursor:pointer}

  .hero-right{width:320px;min-width:240px}
  .featured{background:var(--card);padding:16px;border-radius:10px;box-shadow:0 8px 30px rgba(12,20,40,0.06)}
  .featured img{width:100%;border-radius:8px;display:block}

  main{padding:18px 0}
  .filters{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px}
  .chip{background:var(--card);padding:8px 12px;border-radius:999px;border:1px solid #eef2ff;cursor:pointer;color:var(--muted)}
  .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:14px}

  .card{background:var(--card);padding:14px;border-radius:12px;box-shadow:0 6px 20px rgba(12,20,40,0.04);display:flex;flex-direction:column;gap:10px}
  .card img{width:100%;height:160px;object-fit:cover;border-radius:8px}
  .card h3{margin:0;font-size:16px}
  .meta{display:flex;justify-content:space-between;align-items:center;color:var(--muted);font-size:13px}
  .rating{background:linear-gradient(90deg,#ffd166,#ffb347);padding:6px 8px;border-radius:8px;color:#503200;font-weight:700}

  /* modal */
  .modal-backdrop{position:fixed;inset:0;background:rgba(3,7,18,0.5);display:none;align-items:center;justify-content:center;padding:20px;z-index:80}
  .modal{width:100%;max-width:900px;background:var(--card);border-radius:12px;padding:20px;box-shadow:0 24px 64px rgba(7,12,22,0.35);max-height:90vh;overflow:auto}
  .modal .top{display:flex;gap:14px;align-items:center}
  .modal img{width:220px;height:220px;object-fit:cover;border-radius:10px}
  .specs{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:12px}
  .badge{display:inline-block;padding:6px 8px;border-radius:8px;background:#eef6ff;color:var(--accent);font-weight:700}

  .proscons{display:flex;gap:12px;margin-top:12px}
  .proscons > div{flex:1;background:#fbfbff;padding:10px;border-radius:8px}
  .btn{display:inline-block;padding:10px 14px;border-radius:8px;border:none;background:var(--accent);color:white;cursor:pointer;text-decoration:none}
  footer{padding:24px 0;color:var(--muted);text-align:center;font-size:14px}

  @media (max-width:720px){
    .modal .top{flex-direction:column;align-items:flex-start}
    .hero{flex-direction:column}
    .hero-right{width:100%}
  }
</style>
</head>
<body>

<header>
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <div class="brand"><span class="logo">PR</span> PhoneReviewer</div>
      <nav style="display:flex;gap:14px;align-items:center">
        <a href="#" style="color:var(--muted);text-decoration:none">Reviews</a>
        <a href="#" style="color:var(--muted);text-decoration:none">Guides</a>
        <a href="#" style="color:var(--muted);text-decoration:none">Deals</a>
      </nav>
    </div>
  </div>
</header>

<div class="wrap">
  <section class="hero">
    <div class="hero-left">
      <h1>Honest phone reviews, quick specs, and real buying advice.</h1>
      <p>We test phones and give a short verdict so you can decide fast.</p>

      <div class="searchbar" role="search" aria-label="Search reviews">
        <input id="q" placeholder="Search phones, e.g. iPhone 15, Samsung S24..." />
        <button id="searchBtn">Search</button>
      </div>
    </div>

    <div class="hero-right">
      <div class="featured">
        <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=0b53a3f3a1255c8b7d7c0e52f9a8b2c3" alt="featured phone">
        <div style="margin-top:10px">
          <div style="display:flex;justify-content:space-between;align-items:center">
            <div>
              <div style="font-weight:700">Featured: Pixel 8</div>
              <div style="color:var(--muted);font-size:13px">Best camera under $700</div>
            </div>
            <div class="badge">Editor’s pick</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main>
    <div class="filters">
      <div class="chip" data-filter="all">All</div>
      <div class="chip" data-filter="camera">Camera</div>
      <div class="chip" data-filter="battery">Battery</div>
      <div class="chip" data-filter="budget">Budget</div>
      <div class="chip" data-filter="flagship">Flagship</div>
    </div>

    <div class="grid" id="grid">
      <!-- Cards inserted by JS -->
    </div>
  </main>
</div>

<!-- Review modal -->
<div class="modal-backdrop" id="modalBackdrop" aria-hidden="true">
  <article class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <h2 id="modalTitle">Phone title</h2>
      <button id="closeModal" style="background:none;border:none;font-size:20px;cursor:pointer">✖</button>
    </div>

    <div class="top">
      <img id="modalImage" src="" alt="">
      <div style="flex:1">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:12px">
          <div>
            <div id="modalBrand" style="color:var(--muted);font-size:13px"></div>
            <div style="font-size:20px;font-weight:700;margin-top:8px" id="modalModel"></div>
            <div style="margin-top:8px"><span class="rating" id="modalRating">8.5</span> <span style="color:var(--muted);margin-left:8px">/10 — <span id="modalVerdictShort">Great camera and battery</span></span></div>
          </div>
          <div style="text-align:right">
            <a id="buyBtn" class="btn" href="#" target="_blank" rel="noreferrer">Buy</a>
            <div style="color:var(--muted);font-size:12px;margin-top:8px">Price: <span id="modalPrice">$599</span></div>
          </div>
        </div>

        <div style="margin-top:12px" id="modalSummary"></div>

        <div class="proscons">
          <div>
            <strong>Pros</strong>
            <ul id="modalPros"></ul>
          </div>
          <div>
            <strong>Cons</strong>
            <ul id="modalCons"></ul>
          </div>
        </div>

        <div style="margin-top:12px">
          <strong>Specs</strong>
          <div class="specs" id="modalSpecs"></div>
        </div>

      </div>
    </div>

    <div style="margin-top:12px;color:var(--muted);font-size:14px" id="modalLong"></div>
  </article>
</div>

<footer>
  <div class="wrap">© <span id="year"></span> PhoneReviewer — Honest mobile phone reviews</div>
</footer>

<script>
  // Sample data - replace or expand
  const phones = [
    {
      id:'pixel8', brand:'Google', model:'Pixel 8', score:9, price:'$699',
      img:'https://images.unsplash.com/photo-1603898037225-6f9d2a0d3c4e?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=f0a4b9fb2582a5b5c3f3b8e4be6b1f9c',
      tags:['camera','flagship'],
      short:'Excellent camera and clean software experience.',
      summary:'Pixel 8 brings improved camera algorithms and a refined Android experience.',
      pros:['Outstanding still photography','Timely OS updates','Clean UI'],
      cons:['Battery could be better','No microSD'],
      specs:{'Display':'6.2" OLED 120Hz','SoC':'Tensor G3','RAM':'8GB','Storage':'128GB','Battery':'4575mAh'}
    },
    {
      id:'galaxyS24', brand:'Samsung', model:'Galaxy S24', score:8.5, price:'$799',
      img:'https://images.unsplash.com/photo-1617728349001-6a1c1b7cd2fd?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=ae3d8e7b8b9f7d4b2c0a8a9f8d2c3e1f',
      tags:['camera','flagship'],
      short:'Great display and solid performance.',
      summary:'The S24 is a mature platform with strong display and performance.',
      pros:['Excellent display','Powerful chipset','Versatile cameras'],
      cons:['Pricey','Software quirks'],
      specs:{'Display':'6.2" Dynamic AMOLED','SoC':'Snapdragon 8 Gen','RAM':'8GB','Storage':'256GB','Battery':'3900mAh'}
    },
    {
      id:'redmiNote', brand:'Xiaomi', model:'Redmi Note 12', score:7.8, price:'$199',
      img:'https://images.unsplash.com/photo-1622566147712-44d9f0f2b4f6?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=7b7c8d9a9c6b5e4f3d2c1b0a9f8e7d6c',
      tags:['budget','battery'],
      short:'Best budget phone for battery life and value.',
      summary:'Amazing battery endurance and a surprisingly capable camera for the price.',
      pros:['Huge battery','Great value','Decent performance'],
      cons:['Average camera in low light','MIUI ads (region dependent)'],
      specs:{'Display':'6.7" IPS 90Hz','SoC':'Snapdragon 6xx','RAM':'6GB','Storage':'128GB','Battery':'6000mAh'}
    }
  ];

  // Populate grid
  const grid = document.getElementById('grid');
  function renderCards(list){
    grid.innerHTML = '';
    list.forEach(p=>{
      const d = document.createElement('div');
      d.className = 'card';
      d.innerHTML = `
        <img src="${p.img}" alt="${p.brand} ${p.model}">
        <div>
          <h3>${p.brand} ${p.model}</h3>
          <div class="meta">
            <div style="color:var(--muted)">${p.short}</div>
            <div class="rating">${p.score}</div>
          </div>
        </div>
      `;
      d.onclick = ()=> openModal(p);
      grid.appendChild(d);
    });
  }
  renderCards(phones);

  // Filter chips
  document.querySelectorAll('.chip').forEach(ch=>{
    ch.onclick = ()=> {
      const f = ch.dataset.filter;
      if(f==='all') renderCards(phones);
      else renderCards(phones.filter(p=>p.tags.includes(f)));
    };
  });

  // Search
  document.getElementById('searchBtn').onclick = ()=>{
    const q = document.getElementById('q').value.trim().toLowerCase();
    if(!q) { renderCards(phones); return; }
    const res = phones.filter(p => (p.brand+' '+p.model+' '+p.short+' '+Object.values(p.specs).join(' ')).toLowerCase().includes(q));
    renderCards(res);
  };
  document.getElementById('q').addEventListener('keydown', (e)=>{ if(e.key==='Enter'){ e.preventDefault(); document.getElementById('searchBtn').click(); } });

  // Modal logic
  const modalBackdrop = document.getElementById('modalBackdrop');
  const closeModalBtn = document.getElementById('closeModal');
  function openModal(p){
    document.getElementById('modalTitle').innerText = `${p.brand} ${p.model} Review`;
    document.getElementById('modalImage').src = p.img;
    document.getElementById('modalBrand').innerText = p.brand;
    document.getElementById('modalModel').innerText = p.model;
    document.getElementById('modalRating').innerText = p.score;
    document.getElementById('modalVerdictShort').innerText = p.short;
    document.getElementById('modalPrice').innerText = p.price;
    document.getElementById('modalSummary').innerText = p.summary;
    document.getElementById('modalLong').innerText = p.summary + " — full review text would go here; add detailed benchmarks, photos, and comparison tables.";

    const prosEl = document.getElementById('modalPros'); prosEl.innerHTML='';
    p.pros.forEach(x=>{ const li=document.createElement('li'); li.textContent=x; prosEl.appendChild(li); });

    const consEl = document.getElementById('modalCons'); consEl.innerHTML='';
    p.cons.forEach(x=>{ const li=document.createElement('li'); li.textContent=x; consEl.appendChild(li); });

    const specsEl = document.getElementById('modalSpecs'); specsEl.innerHTML='';
    for(const [k,v] of Object.entries(p.specs)){ const el=document.createElement('div'); el.innerHTML=`<strong>${k}</strong><div style="color:var(--muted)">${v}</div>`; specsEl.appendChild(el); }

    document.getElementById('buyBtn').href = 'https://duckduckgo.com/?q='+encodeURIComponent(`${p.brand} ${p.model} buy`);
    // Insert JSON-LD structured data for this review (updates DOM so search bots see it)
    insertReviewJsonLd(p);
    modalBackdrop.style.display='flex';
    modalBackdrop.setAttribute('aria-hidden','false');
  }
  closeModalBtn.onclick = ()=> { modalBackdrop.style.display='none'; modalBackdrop.setAttribute('aria-hidden','true'); };

  // JSON-LD for review (simple)
  function insertReviewJsonLd(p){
    // remove previous script if any
    const old = document.getElementById('reviewJsonLd');
    if(old) old.remove();
    const review = {
      "@context":"https://schema.org",
      "@type":"Review",
      "itemReviewed": {
        "@type":"Product",
        "name": `${p.brand} ${p.model}`,
        "image": p.img,
        "brand": p.brand
      },
      "author": {"@type":"Person","name":"PhoneReviewer"},
      "reviewRating": {"@type":"Rating","ratingValue": String(p.score),"bestRating":"10","worstRating":"1"},
      "reviewBody": p.summary,
      "datePublished": new Date().toISOString().slice(0,10)
    };
    const s = document.createElement('script');
    s.type='application/ld+json';
    s.id='reviewJsonLd';
    s.textContent = JSON.stringify(review, null, 2);
    document.head.appendChild(s);
  }

  // footer year
  document.getElementById('year').innerText = new Date().getFullYear();

  // Accessibility: close modal on ESC
  window.addEventListener('keydown', e=>{ if(e.key==='Escape'){ closeModalBtn.click(); } });

</script>
</body>
</html>

}

$jaam = new blueberry("Blueberry", "Blue");
$jaam->intro();
$jaam->msg();


?>