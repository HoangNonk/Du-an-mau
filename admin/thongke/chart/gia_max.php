<div id="myChart"></div>
<div class="row chart">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Danh mục sản phẩm', 'Dollar US / $'],
                <?php foreach ($thongke as $tk) {
                    extract($tk);
                    foreach ($list_sanpham as $sp) {
                        if ($sp['price'] == $gia_max) {
                            $name_sp_max = $sp['name'];
                        }
                    }
                ?>['<?= $name_sp_max ?>', <?= $gia_max ?>],
                <?php } ?>
            ]);

            // Set Options
            const options = {
                title: 'Các sản phẩm có gia cao nhất theo danh mục',
                is3D: true
            };

            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</div>