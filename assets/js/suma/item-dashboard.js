document.addEventListener("DOMContentLoaded", function() {
    const endpoint = 'https://fakestoreapi.com/carts';
    const tableBody = document.getElementById('tableBody');
  
    // Array statis untuk alamat
    const addresses = ["123 Street, City", "456 Avenue, Town", "789 Road, Village", "012 Lane, Hamlet"];
  
    fetch(endpoint)
      .then(response => response.json())
      .then(data => {
        data.forEach((item, index) => {
          const formattedDate = new Date(item.date).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
          const randomAddress = addresses[Math.floor(Math.random() * addresses.length)]; // Mengambil alamat secara acak dari array
          
          // Calculate total quantity
          const totalQuantity = item.products.reduce((acc, product) => acc + product.quantity, 0);
          
          // Create new row
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${index + 1}</td>
            <td>${formattedDate}</td>
            <td>${randomAddress}</td>
            <td>${totalQuantity}</td> <!-- Menampilkan jumlah produk -->
            <td>${totalQuantity * 10}</td> <!-- Menghitung total -->
          `;
          
          // Append row to table body
          tableBody.appendChild(row);
        });
      })
      .catch(error => console.error('Error fetching data:', error));
  });

  //unpaid
  document.addEventListener("DOMContentLoaded", function() {
    const usersEndpoint = 'https://fakestoreapi.com/users';
    const cartsEndpoint = 'https://fakestoreapi.com/carts';
    const tableBody = document.getElementById('unpaid');
  
    axios.all([
      axios.get(usersEndpoint),
      axios.get(cartsEndpoint)
    ]).then(axios.spread((usersResponse, cartsResponse) => {
      const users = usersResponse.data;
      const carts = cartsResponse.data;
  
      carts.forEach((cart, index) => {
        const user = users[Math.floor(Math.random() * users.length)]; // Mengambil pengguna secara acak
        const orderType = ['COD', 'Transfer'][Math.floor(Math.random() * 2)]; // Memilih tipe pembayaran secara acak
        const total = Math.floor(Math.random() * 100000) + 10000; // Nominal uang acak
  
        // Create new row
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${index + 1}</td>
          <td>Ticket #${index + 1}</td>
          <td>${user.email}</td>
          <td>${orderType}</td>
          <td>${formatRupiah(total)}</td> <!-- Format uang dengan rupiah -->
        `;
        
        // Append row to table body
        tableBody.appendChild(row);
      });
    })).catch(error => console.error('Error fetching data:', error));
  
    // Function to format currency to Indonesian Rupiah
    function formatRupiah(angka) {
      var reverse = angka.toString().split('').reverse().join(''),
        ribuan = reverse.match(/\d{1,3}/g);
      ribuan = ribuan.join('.').split('').reverse().join('');
      return 'Rp ' + ribuan;
    }
  });