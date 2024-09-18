<?php
$id = $_GET['id'];
    if ($id) {
        $query = "SELECT * FROM barang WHERE id = '$id'";

        $executeQuery = mysqli_queery($conn, $query);
        $resutData = mysqli_fetch_assoc($executeQuery); 
        var_dump($resutData)
    }

    



$query = "SELECT nama_barang, jml_stock FROM barang WHERE barang_id = $barang_id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $nama_barang = $row['nama_barang'];
            $jml_stock_sebelum = $row['jml_stock'];
    
            if ($jml_stock_sebelum >= $jml_barangdibeli) {
                
                $jml_stock_sisa = $jml_stock_sebelum - $jml_barangdibeli;
                $update_query = "UPDATE produk SET jml_stock = $jml_stock_sisa WHERE barang_id = $barang_id";
                mysqli_query($conn, $update_query);
    
                
                $insert_query = "INSERT INTO transaksi (barang_id, jml_barangdibeli) VALUES ($barang_id, $jml_barangdibeli)";
                mysqli_query($conn, $insert_query);

                echo "Notifikasi: Pelanggan telah membeli $nama_barang sebanyak $jml_barangdibeli. Sisa jml_stock: $jml_stock_sisa.";
            } else {
                echo "Notifikasi: Stok produk tidak mencukupi.";
            }
        } else {
            echo "Notifikasi: Produk tidak ditemukan.";
        }
    }
    
    
    <canvas id="myChart" width="400" height="200"></canvas>
                                                                <script class="col-">
                                                                    // Get the canvas element
                                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                        
                                                                                // Create a new Chart
                                                                                const myChart = new Chart(ctx, {
                                                                                    type: 'bar', // The type of chart
                                                                                    data: {
                                                                                        labels: ['sen', 'sel', 'rab', 'kam', 'jum', 'sab', 'ming'],
                                                                                        datasets: [{
                                                                                            label: 'Pendapatan Minggu INI',
                                                                                            data: [1, ],
                                                                                            backgroundColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderWidth: 1
                                                                                        }]
                                                                                    },
                                                                                    options: {
                                                                                        scales: {
                                                                                            y: {
                                                                                                beginAtZero: true
                                                                                            }
                                                                                        },
                                                                                        plugins: {
                                                                                            legend: {
                                                                                                display: true,
                                                                                                position: 'top'
                                                                                            },
                                                                                            tooltip: {
                                                                                                callbacks: {
                                                                                                    label: function(context) {
                                                                                                        let label = context.dataset.label || '';
                                                                                                        if (label) {
                                                                                                            label += ': ';
                                                                                                        }
                                                                                                        if (context.parsed.y !== null) {
                                                                                                            label += new Intl.NumberFormat().format(context.parsed.y);
                                                                                                        }
                                                                                                        return label;
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>



<canvas id="myChart" width="400" height="200"></canvas>

    <script>
        // Ambil elemen canvas
        const ctx = document.getElementById('myChart').getContext('2d');

        // Data yang diambil dari PHP (menggunakan json_encode)
        const label = <?php echo json_encode($days); ?>; // Nama hari
        const dataPendapatan = <?php echo json_encode($total_barang); ?>; // Pendapatan per hari

        // Membuat chart baru
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                label: label, // Nama hari (Senin - Minggu)
                datasets: [{
                    label: 'Pendapatan Minggu Ini',
                    data: dataPendapatan, // Data pendapatan
                    backgroundColor: 'rgba(75, 50, 192, 0.5)',
                    borderColor: 'rgba(75, 50, 192, 1)',
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
        
        
        <canvas id="myChart" width="400" height="200"></canvas>
        <script>
        // Ambil data dari PHP
        const labels = <?php echo json_encode($hari); ?>;
        const dataPendapatan = <?php echo json_encode($pendapatan); ?>;
        
        // Get the canvas element
        const ctx = document.getElementById('myChart').getContext('2d');
        
    // Create a new Chart
    const myChart = new Chart(ctx, {
        type: 'line', // The type of chart
        data: {
            labels: labels, // Label hari
            datasets: [{
                label: 'Pendapatan Minggu INI',
                data: dataPendapatan, // Data pendapatan dari PHP
                backgroundColor: 'rgba(75, 50, 192, 0.2)',
                borderColor: 'rgba(75, 50, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += new Intl.NumberFormat().format(context.parsed.y);
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
    </script>
    
    
    
    
    
    
    <canvas id="myChart" width="400" height="200"></canvas>
    <script class="col-">
    // Get the canvas element
                                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                        
                                                                                // Create a new Chart
                                                                                const myChart = new Chart(ctx, {
                                                                                    type: 'line', // The type of chart
                                                                                    data: {
                                                                                        labels: ['sen', 'sel', 'rab', 'kam', 'jum', 'sab', 'ming'],
                                                                                        datasets: [{
                                                                                            label: 'Pendapatan Minggu INI',
                                                                                            data: [1,2.9,7,2,9,8,10,3],
                                                                                            backgroundColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderColor: 'rgba(75, 50, 192, 100)',
                                                                                            borderWidth: 1
                                                                                        }]
                                                                                    },
                                                                                    options: {
                                                                                        scales: {
                                                                                            y: {
                                                                                                beginAtZero: true
                                                                                            }
                                                                                        },
                                                                                        plugins: {
                                                                                            legend: {
                                                                                                display: true,
                                                                                                position: 'top'
                                                                                            },
                                                                                            tooltip: {
                                                                                                callbacks: {
                                                                                                    label: function(context) {
                                                                                                        let label = context.dataset.label || '';
                                                                                                        if (label) {
                                                                                                            label += ': ';
                                                                                                        }
                                                                                                        if (context.parsed.y !== null) {
                                                                                                            label += new Intl.NumberFormat().format(context.parsed.y);
                                                                                                        }
                                                                                                        return label;
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                            









<p>
                                                            <?php 
                                                            $total_harga = "";
                                                            foreach($rs_data as $row){
                                                            $total_harga .= $row['total_harga'] . ",";
                                                            }?>
                                                            <?php $total_harga =subtr($total_harga, 0, -1);
                                                            echo "data harga";
                                                            ?>
                                                            </p>
                                                            
                                                            
                                                            
                                                            
                                                            //totalharga//
                                                            <h6 class="p-2"><em>Total harga</em></h6>
                                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                                <script>
                                                                $(document).ready(function(){
                                                                    $('#barang').change(function(){
                                                                        var barang_id = $(this).val();

                                                                        // Jika barang dipilih
                                                                        if(barang_id != '') {
                                                                            $.ajax({
                                                                                url: 'get_harga.php',  // File PHP untuk mengambil harga
                                                                                method: 'POST',
                                                                                data: {barang_id: barang_id},
                                                                                dataType: 'json',
                                                                                success: function(response) {
                                                                                    $('#harga').val(response.harga);  // Tampilkan harga di input
                                                                                }
                                                                            });
                                                                        } else {
                                                                            $('#harga').val('');  // Kosongkan harga jika barang tidak dipilih
                                                                        }
                                                                    });
                                                                });
                                                                </script>
                                                            ?>

                                                            //harga
                                                            <label for="metode_pembayaran" class="container p-2"><em>Mertode pembayaran</em></label>
                                                                <select id="metode_pembayaran" name="metode_pembayaran" class="form-control">
                                                                    <option value="">Pilih pembayaran</option>
                                                                    <option value="cash">cash</option>
                                                                    <option value="debit">Debit</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>
                                                            ?>











                                                            <?php if (!empty($today_notifications)) : ?>
                                                                <h3 class="section-title">Hari ini</h3>
                                                                <?php foreach ($notifications as $notif): ?>
                                                                    <div class="notification">
                                                                        <p><?= $notif['message']; ?></p>
                                                                        <small>Diterima pada: <?php echo $notifikasi; ?></small>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>