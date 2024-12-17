<?php
// Cek apakah parameter 'showChart' ada di URL
$showChart = isset($_GET['showChart']) ? $_GET['showChart'] : false;
?>

<!-- Tampilkan canvas jika showChart true -->
<div class="container w-40" <?php echo $showChart ? '' : 'style="display: none;"'; ?>>
    <br><br><br>
    <canvas id="myChart"></canvas>
</div>

<script>
    var data = <?php echo CJavaScript::encode($data); ?>;
    var labels = [];
    var values = [];

    data.forEach(function(item) {
        labels.push(item.nama_diklat);
        values.push(item.total);
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Peserta',
                data: values,
                backgroundColor: [
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(255, 205, 86, 0.7)',
                    'rgba(252, 128, 3, 0.7)',
                    'rgba(252, 3, 219, 0.7)',
                    // ...tambahkan warna sesuai dengan jumlah label
                ],
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>