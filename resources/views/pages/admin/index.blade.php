<x-layouts.admin title="Dashboard">
    <div class="row">
        <div class="col-6">
            <canvas id="chart1"></canvas>
        </div>
    </div>
</x-layouts.admin>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module">
    let cart1 = document.getElementById('cart1');
    new Chart(cart1, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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