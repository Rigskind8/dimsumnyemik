<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dimsum Nyemik</title>
  <style>
    :root {
      --primary: #ff6f3c;
      --accent: #25D366;
      --bg: #fffdf8;
      --radius: 18px;
      --shadow: 0 4px 12px rgba(0,0,0,0.06);
    }

    * {
      box-sizing: border-box;
      -webkit-tap-highlight-color: transparent;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: var(--bg);
      color: #333;
      scroll-behavior: smooth;
    }

    header {
      background-color: var(--primary);
      color: white;
      text-align: center;
      padding: 32px 20px 24px;
      border-bottom-left-radius: var(--radius);
      border-bottom-right-radius: var(--radius);
    }

    header h1 {
      font-size: 3em;
      margin: 0;
      letter-spacing: 0.5px;
    }

    header p {
      font-size: 1em;
      margin: 6px 0 0;
    }

    .produk {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
      padding: 24px 16px;
    }

    .card {
      background: white;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      text-align: center;
      padding: 0 0 20px;
    }

    .card img {
      width: 30%;
      height: 500px;
      object-fit: cover;
    }

    .card h3 {
      margin: 14px 0 6px;
    }

    .harga {
      color: var(--primary);
      font-weight: bold;
      font-size: 2em;
    }

    .form-order {
      background: white;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      margin: 20px 16px;
      padding: 24px 20px;
    }

    .form-order h2 {
      color: var(--primary);
      text-align: center;
      margin-bottom: 20px;
    }

    .form-order input,
    .form-order select,
    .form-order textarea {
      width: 100%;
      padding: 14px;
      margin-bottom: 14px;
      font-size: 1em;
      border-radius: var(--radius);
      border: 1px solid #ddd;
    }

    .form-order textarea {
      resize: none;
    }

    .form-order button {
      width: 100%;
      background: var(--accent);
      color: white;
      font-weight: 500;
      border: none;
      padding: 14px;
      font-size: 1em;
      border-radius: var(--radius);
      cursor: pointer;
      transition: background 0.3s;
    }

    .form-order button:hover {
      background: #1ca44f;
    }

    .toggle-buttons {
      display: flex;
      gap: 10px;
    }

    .toggle-btn {
      flex: 1;
      padding: 10px;
      font-size: 0.95em;
      text-align: center;
      border: 2px solid #ccc;
      border-radius: var(--radius);
      background: #f4f4f4;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .toggle-btn.selected {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    #totalHarga {
      text-align: center;
      font-weight: bold;
      margin-top: 50px;
      font-size: 1.1em;
      color: var(--primary);
    }

    .payment {
      background: white;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      margin: 20px 16px;
      padding: 20px;
      text-align: center;
    }
    <!-- Modal QR -->
<div id="qrModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="qr-image" src="" alt="QR Code" style="max-width: 0,5px;">
  </div>
</div>

    .payment img {
      max-width: 160px;
      margin: 10px;
      border-radius: var(--radius);
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .payment img:hover {
      transform: scale(1.05);
    }

    .maps {
      margin: 20px 16px;
      background: white;
      border-radius: var(--radius);
      padding: 16px;
      box-shadow: var(--shadow);
    }

    .maps h2 {
      text-align: center;
      color: var(--primary);
      font-size: 1.1em;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: 0;
      border-radius: var(--radius);
      margin-top: 10px;
    }

    .gallery {
      margin: 20px 16px 40px;
      background: white;
      padding: 20px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .gallery h2 {
      text-align: center;
      color: var(--primary);
    }

    .testimoni-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .testimoni-card {
      background: #fafafa;
      padding: 16px;
      border-radius: var(--radius);
      box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    }

    .testimoni-card p {
      font-style: italic;
      margin: 0;
    }

    .testimoni-card h4 {
      text-align: right;
      font-weight: normal;
      color: #666;
      margin-top: 8px;
    }
    .modal {
  display: none;
  position: fixed;
  z-index: 1000;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.6);
  animation: fadeIn 0.3s ease-in-out;
}

.modal-content {
  background-color: #fff;
  margin: auto;
  padding: 20px;
  border-radius: 15px;
  width: 300px;
  text-align: center;
  animation: slideDown 0.3s ease-in-out;
  position: relative;
}

.modal-content img {
  margin-top: 10px;
}

.close {
  position: absolute;
  right: 15px;
  top: 10px;
  font-size: 22px;
  font-weight: bold;
  color: #555;
  cursor: pointer;
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes slideDown {
  from {transform: translateY(-50px); opacity: 0;}
  to {transform: translateY(0); opacity: 1;}
}


    footer {
      background: #333;
      color: white;
      text-align: center;
      padding: 16px;
      font-size: 0.9em;
    }
  </style>
</head>
<body>


</body>
</html>


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
    <select id="pembayaran" required>
  <option value="">Pilih metode pembayaran</option>
  <option value="QRIS">QRIS</option>
  <option value="ShopeePay">ShopeePay</option>
  <option value="Tunai">Bayar Tunai Saat Terima</option>
</select>

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
  <p>Silakan pilih metode pembayaran:</p>
  <ul style="text-align: left; max-width: 400px; margin: 0 auto 20px; padding: 0; list-style: none;">
    <li>✅ Transfer via QRIS</li>
    <li>✅ ShopeePay</li>
    <li>✅ Bayar Tunai Saat Terima</li>
  </ul>
  <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 16px;">
    <div style="text-align: center;">
      <p style="margin-bottom: 8px;">QRIS</p>
      <img src="qrisdimsum.jpeg" alt="QRIS Payment" title="Scan QRIS" />
    </div>
    <div style="text-align: center;">
      <p style="margin-bottom: 8px;">ShopeePay</p>
      <img src="qrisshopee.jpeg" alt="ShopeePay Payment" title="Scan ShopeePay" />
    </div>
    <div id="loading" style="display:none; text-align:center; margin-top:10px;">
  <span>⏳ Mengirim ke WhatsApp...</span>
</div>

<!-- Modal QR -->
<div id="qrModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
  </div>
</div>

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
  function openModal(qrSrc) {
  const modal = document.getElementById("qrModal");
  const qrImage = document.getElementById("qr-image");
  qrImage.src = qrSrc;
  modal.style.display = "block";
}

function closeModal() {
  const modal = document.getElementById("qrModal");
  modal.style.display = "none";
}
  document.getElementById('original').addEventListener('input', updateTotal);
  document.getElementById('mentai').addEventListener('input', updateTotal);
  document.getElementById('orderForm').addEventListener('submit', function (e) {
  e.preventDefault();
  document.getElementById('original').addEventListener('input', updateTotal);
  document.getElementById('mentai').addEventListener('input', updateTotal);

  const nama = document.getElementById('nama').value.trim();
  const pengiriman = document.getElementById('pengiriman').value;
  const alamat = document.getElementById('alamat').value.trim();
  const pembayaran = document.getElementById('pembayaran').value;
  const catatan = document.getElementById('catatan').value.trim();
  const original = parseInt(document.getElementById('original').value) || 0;
const mentai = parseInt(document.getElementById('mentai').value) || 0;

// Validasi minimal 1 box
if (original + mentai === 0) {
  alert("Silakan pesan minimal 1 box dimsum.");
  return;
}

  const total = (original * 10000) + (mentai * 30000);

  let pesan = `Halo! Saya ingin memesan Dimsum Nyemik:\n`;
  pesan += `- Nama: ${nama}\n`;
  pesan += `- Pengiriman: ${pengiriman}\n`;
  if (pengiriman === "antar") {
    pesan += `- Alamat: ${alamat}\n`;
  }
  pesan += `- Dimsum Original: ${original} box\n`;
  pesan += `- Dimsum Mentai: ${mentai} box\n`;
  pesan += `- Metode Pembayaran: ${pembayaran}\n`;
  if (catatan) pesan += `- Catatan: ${catatan}\n`;
  pesan += `- Total Harga: Rp ${total.toLocaleString('id-ID')}\n`;

  const phone = '6285692936098'; // nomor WhatsApp tujuan
  const waURL = `https://wa.me/${phone}?text=${encodeURIComponent(pesan)}`;

  // Menampilkan loading (opsional)
  document.getElementById('loading').style.display = 'block';

  // Redirect ke WhatsApp
  setTimeout(() => {
    window.open(waURL, '_blank');
    document.getElementById('loading').style.display = 'none';
  }, 1200);
});

</script>
</body>
</html>