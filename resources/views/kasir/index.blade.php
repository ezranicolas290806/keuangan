<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jurnal Keuangan - Kasir</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 20px 0;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
}

nav ul li a.active {
  color: blue;
}

main {
  display: flex;
  justify-content: space-around;
  padding: 20px;
}

section {
  width: 45%;
}

form {
  border: 1px solid #ccc;
  padding: 20px;
}

form label,
form input,
form select,
form button {
  display: block;
  margin-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table th,
table td {
  border: 1px solid #ccc;
  padding: 8px;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
} 
    </style>
  <header>
    <h1>Jurnal Keuangan - Kasir</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#" class="active">Transaksi Baru</a></li>
      <li><a href="#">Histori Transaksi</a></li>
      <li><a href="#">Laporan Keuangan</a></li>
    </ul>
  </nav>

  <main>
    <section id="transaction-form">
      <h2>Transaksi Baru</h2>
      <form>
        <label for="customer-name">Nama Pelanggan:</label>
        <input type="text" id="customer-name" name="customer-name" required>

        <label for="service">Layanan:</label>
        <select id="service" name="service">
          <option value="cleaning">Cleaning</option>
          <option value="detailing">Detailing</option>
          <option value="coating">Coating</option>
          <option value="fogging">Fogging</option>
        </select>

        <label for="price">Harga (Rp):</label>
        <input type="number" id="price" name="price" required>

        <button type="submit">Submit</button>
      </form>
    </section>

    <section id="transaction-history">
      <h2>Histori Transaksi</h2>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Layanan</th>
            <th>Harga (Rp)</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data transaksi akan ditampilkan di sini -->
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Jurnal Keuangan Car Wash</p>
  </footer>
</body>
</html>
