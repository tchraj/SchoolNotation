<h1>Classement des universités - Graphique</h1>
@php
    $points = [];
    $classement = [];
    foreach ($classement as $univId => $totalPoints) {
        $universite = University::find($univId);
        $universities[] = $universite->univ_name;
        $points[] = $totalPoints;
    }
@endphp
<canvas id="myChart" width="400" height="200"></canvas>

<script>
    const universities = @json($universities);
    const points = @json($points);

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: universities,
            datasets: [{
                label: 'Points',
                data: points,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
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
<script src="{{ asset('js/init-alpine.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
<script src="{{ asset('js/charts-lines.js') }}" defer></script>
<script src="{{ asset('js/charts-pie.js') }}" defer></script>
<script src="{{ asset('js/focus-trap.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

