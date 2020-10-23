<div class="row">
    <div class="col-lg-12">
        <div class="card">
        <div class="card-header">
            <h4>Total Tagihan</h4>
        </div>
        <div class="card-body">
            <canvas id="myChart" height="158"></canvas>
        </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<script>

var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
				datasets: [{
					label: 'Lunas',
					data: [
          <?php echo $lunas_januari->totaltagihan ?>,
          <?php echo $lunas_februari->totaltagihan ?>,
          <?php echo $lunas_maret->totaltagihan ?>,
          <?php echo $lunas_april->totaltagihan ?>,
          <?php echo $lunas_mei->totaltagihan ?>,
          <?php echo $lunas_juni->totaltagihan ?>,
          <?php echo $lunas_juli->totaltagihan ?>,
          <?php echo $lunas_agustus->totaltagihan ?>,
          <?php echo $lunas_september->totaltagihan ?>,
          <?php echo $lunas_oktober->totaltagihan ?>,
          <?php echo $lunas_november->totaltagihan ?>,
          <?php echo $lunas_desember->totaltagihan ?>
          ],
					backgroundColor: [
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				},{
					label: 'Belum',
					data: [
            <?php echo $belum_januari->totaltagihan ?>,
            <?php echo $belum_februari->totaltagihan ?>,
            <?php echo $belum_maret->totaltagihan ?>,
            <?php echo $belum_april->totaltagihan ?>,
            <?php echo $belum_mei->totaltagihan ?>,
            <?php echo $belum_juni->totaltagihan ?>,
            <?php echo $belum_juli->totaltagihan ?>,
            <?php echo $belum_agustus->totaltagihan ?>,
            <?php echo $belum_september->totaltagihan ?>,
            <?php echo $belum_oktober->totaltagihan ?>,
            <?php echo $belum_november->totaltagihan ?>,
            <?php echo $belum_desember->totaltagihan ?>
          ],
					backgroundColor: [
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
              callback: function(value, index, values) {
                return 'Rp.' + value;
              }
						},
					}]
				}
			}
		});
</script>