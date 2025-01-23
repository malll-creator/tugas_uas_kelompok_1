// Fungsi untuk menampilkan rincian pesanan
function displayOrderDetails(name, bikeModel, quantity, paymentMethod) {
    const orderDetails = `
        Nama Pembeli: ${name}<br>
        Model Sepeda: ${bikeModel}<br>
        Jumlah: ${quantity}<br>
        Metode Pembayaran: ${paymentMethod}
    `;
    return orderDetails;
}

// Event handler untuk menangani pengiriman formulir
document.getElementById('bikeForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah halaman untuk reload

    // Mengambil nilai input
    const name = document.getElementById('name').value;
    const bikeModel = document.getElementById('bikeModel').value;
    const quantity = document.getElementById('quantity').value;
    const paymentMethod = document.getElementById('payment').value;

    // Memproses data (contoh logika pengolahan data)
    if (quantity <= 0) {
        alert("Jumlah sepeda harus lebih dari 0.");
        return;
    }

    // Menggunakan fungsi untuk menampilkan rincian pesanan
    const orderDetails = displayOrderDetails(name, bikeModel, quantity, paymentMethod);

    // Menampilkan rincian pesanan di div output
    document.getElementById('orderDetails').innerHTML = orderDetails;
    document.getElementById('orderOutput').style.display = 'block';
});

window.onload = function() {
    const savedOrderData = localStorage.getItem('orderData');
    
    if (savedOrderData) {
        const orderData = JSON.parse(savedOrderData);
        const orderDetails = displayOrderDetails(
            orderData.name, 
            orderData.bikeModel, 
            orderData.quantity, 
            orderData.paymentMethod
        );

        document.getElementById('orderDetails').innerHTML = orderDetails;
        document.getElementById('orderOutput').style.display = 'block';
    }
};

