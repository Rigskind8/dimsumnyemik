<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dimsum Nyemik</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #fffdf8;
      color: #333;
    }
    header {
      background-color: #ff6f3c;
      color: white;
      text-align: center;
      padding: 30px 20px;
    }
    header h1 {
      margin: 0;
      font-size: 2.4em;
    }
    header p {
      font-size: 1.1em;
      margin-top: 10px;
    }
    .produk {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
      gap: 20px;
      padding: 30px 20px;
      max-width: 1000px;
      margin: auto;
    }
    .card {
      background-color: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      padding-bottom: 15px;
    }
    .card img {
      width: 55%;
      height:250px;
      object-fit: cover;
    }
    .card h3 {
      margin: 15px 0 5px;
    }
    .harga {
      color: #ff6f3c;
      font-weight: bold;
      font-size: 1.1em;
    }
    .form-order {
      max-width: 600px;
      margin: 40px auto;
      background: white;
      padding: 30px 25px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.08);
    }
    .form-order h2 {
      margin-bottom: 20px;
      color: #ff6f3c;
      text-align: center;
    }
    .form-order input,
    .form-order select,
    .form-order textarea {
      width: 100%;
      padding: 14px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1em;
    }
    .form-order button {
      background-color: #25D366;
      color: white;
      border: none;
      padding: 14px;
      font-size: 1em;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
      transition: background 0.3s ease;
    }
    .form-order button:hover {
      background-color: #1eb950;
    }
    .pengiriman-group {
      margin: 25px 0 15px;
    }
    .pengiriman-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }
    .toggle-buttons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .toggle-btn {
      flex: 1 1 48%;
      padding: 12px;
      background: #f9f9f9;
      border: 2px solid #ddd;
      border-radius: 8px;
      text-align: center;
      cursor: pointer;
      font-size: 0.95em;
      transition: all 0.2s ease;
    }
    .toggle-btn.selected {
      background: #ff6f3c;
      color: white;
      border-color: #ff6f3c;
    }
    #totalHarga {
      text-align: center;
      font-size: 1.2em;
      font-weight: bold;
      color: #ff6f3c;
      margin-top: 10px;
    }
    .spinner {
      width: 24px;
      height: 24px;
      border: 4px solid #ccc;
      border-top: 4px solid #25D366;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: auto;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .payment {
      max-width: 600px;
      margin: 0 auto 50px;
      padding: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .payment h2 {
      color: #ff6f3c;
      margin-bottom: 20px;
    }
    .payment img {
      max-width: 200px;
      margin: 0 20px;
      cursor: pointer;
      border-radius: 12px;
      box-shadow: 0 0 5px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }
    .payment img:hover {
      transform: scale(1.05);
    }
    .gallery {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px 40px;
    }
    .gallery h2 {
      text-align: center;
      color: #ff6f3c;
      margin-bottom: 25px;
    }
    .testimoni-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .testimoni-card {
      background: white;
      padding: 15px 20px;
      border-radius: 12px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      max-width: 280px;
      flex: 1 1 280px;
    }
    .testimoni-card p {
      font-style: italic;
    }
    .testimoni-card h4 {
      margin-top: 10px;
      text-align: right;
      font-weight: normal;
      color: #555;
    }
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>
<body>

<header>
  <h1>Dimsum Nyemik</h1>
  <p>Dimsum homemade, fresh & halal — rasanya bikin nagih!</p>
</header>

<section class="produk">
  <div class="card">
    <img src="dimsum ori.jpeg" alt="Dimsum Original" />
    <h3>Dimsum Original</h3>
    <p class="harga">Rp 10.000 / 3 pcs</p>
  </div>
  <div class="card">
    <img src="dimsum mentai.jpeg" alt="Dimsum Mentai" />
    <h3>Dimsum Mentai</h3>
    <p class="harga">Rp 30.000 / 6 pcs free chili oil ,keju & nori</p>
  </div>
</section>

<section class="form-order">
  <h2>Form Order</h2>
  <form id="orderForm">
    <input type="text" id="nama" placeholder="Nama lengkap" required />

    <div class="pengiriman-group">
      <label>Pilih metode pengiriman:</label>
      <div class="toggle-buttons">
        <button type="button" class="toggle-btn selected" data-value="antar">🛵 Diantar</button>
        <button type="button" class="toggle-btn" data-value="ambil">🤝 Ambil sendiri</button>
      </div>
      <input type="hidden" id="pengiriman" value="antar" />
    </div>

    <div id="alamat-group">
      <input type="text" id="alamat" placeholder="Alamat lengkap" required />
    </div>

    <input type="number" id="original" placeholder="Jumlah Dimsum Original (box)" min="0" />
    <input type="number" id="mentai" placeholder="Jumlah Dimsum Mentai (box)" min="0" />
    <textarea id="catatan" rows="3" placeholder="Catatan tambahan (opsional)" style="resize: none;"></textarea>

    <p id="totalHarga">Total: Rp 0</p>

    <button type="submit">Kirim ke WhatsApp</button>
    <div id="loading" style="display: none; text-align: center; margin-top: 15px;">
      <div class="spinner"></div>
      <p style="margin-top: 8px; color: #888;">Mengarahkan ke WhatsApp...</p>
    </div>
  </form>
</section>

<section class="payment">
  <h2>Pembayaran</h2>
  <p>Scan QRIS atau ShopeePay untuk pembayaran cepat</p>
  <img src="qrisdimsum.jpeg" alt="QRIS Payment" title="Scan QRIS" />
  <img src="qrisshopee.jpeg" alt="ShopeePay Payment" title="Scan ShopeePay" />
</section>

<section class="maps">
  <h2 style="text-align:center; color:#ff6f3c;">Lokasi SMP 250 Jakarta Selatan</h2>
  <div style="display: flex; justify-content: center; margin: 20px 0;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4997507498697!2d106.820048!3d-6.28872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d8c4159d4f%3A0xd57b6c7cb7d84c58!2sSMP%20Negeri%20250%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1716123123456!5m2!1sid!2sid" 
      width="90%" height="350" style="border:0;" allowfullscreen loading="lazy">
    </iframe>
  </div>
</section>

<section class="gallery">
  <h2>Testimoni Pelanggan</h2>
  <div class="testimoni-list">
    <div class="testimoni-card">
      <p>"Dimsum nya enak banget, bumbunya meresap dan saus mentainya juara!"</p>
      <h4>- Rani, Indramayu</h4>
    </div>
    <div class="testimoni-card">
      <p>"Pengiriman cepat, rasa sesuai ekspektasi. Recommended buat yang suka dimsum."</p>
      <h4>- Suci, Bandung</h4>
    </div>
    <div class="testimoni-card">
      <p>"Packaging rapi, pelayanan ramah, pasti order lagi nanti."</p>
      <h4>- Iki, Jakarta</h4>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Dimsum Nyemik. All rights reserved.</p>
</footer>

<script>
  document.querySelectorAll('.toggle-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('selected'));
      this.classList.add('selected');
      const value = this.getAttribute('data-value');
      document.getElementById('pengiriman').value = value;

      const alamatGroup = document.getElementById('alamat-group');
      const alamatInput = document.getElementById('alamat');
      if (value === 'ambil') {
        alamatGroup.style.display = 'none';
        alamatInput.required = false;
      } else {
        alamatGroup.style.display = 'block';
        alamatInput.required = true;
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('pengiriman').value === 'ambil') {
      document.getElementById('alamat-group').style.display = 'none';
    }
  });

  function updateTotal() {
    const original = parseInt(document.getElementById('original').value) || 0;
    const mentai = parseInt(document.getElementById('mentai').value) || 0;
    const total = (original * 10000) + (mentai * 30000);
    document.getElementById('totalHarga').textContent = `Total: Rp ${total.toLocaleString('id-ID')}`;
  }

  document.getElementById('original').addEventListener('input', updateTotal);
  document.getElementById('mentai').addEventListener('input', updateTotal);

  document.getElementById('orderForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value.trim();
    const alamat = document.getElementById('alamat').value.trim();
    const original = parseInt(document.getElementById('original').value) || 0;
    const mentai = parseInt(document.getElementById('mentai').value) || 0;
    const catatan = document.getElementById('catatan').value.trim();
    const pengiriman = document.getElementById('pengiriman').value;

    if (!nama || (pengiriman === 'antar' && !alamat) || (original <= 0 && mentai <= 0)) {
      alert('Mohon lengkapi data dengan benar.');
      return;
    }
    console.log("Alamat:", alamat);  // Untuk cek

    let pesan = `Halo Dimsum Nyemik,Saya mau pesan:`;
    

    if (original > 0) pesan += `- Dimsum Original: ${original} box`;
    if (mentai > 0) pesan += `- Dimsum Mentai: ${mentai} box`;
    pesan += `-Nama: ${nama}`;
    pesan += `-Metode Pengiriman: ${pengiriman === 'antar' ? 'Diantar' : 'Ambil sendiri'}`;
    if (pengiriman === '-antar') {
      pesan += `Alamat: ${alamat}`;
    }
    if (catatan) {
      pesan += `Catatan: ${catatan}`;
    }

    const phone = '6285692936098';
    const waURL = `https://wa.me/${phone}?text=${encodeURIComponent(pesan)}`;

    document.getElementById('loading').style.display = 'block';
    setTimeout(() => {
      window.open(waURL, '_blank');
      document.getElementById('loading').style.display = 'none';
    }, 1500);
  });
</script>
</body>
</html>