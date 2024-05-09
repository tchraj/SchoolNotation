@php
    $criteres = App\Models\Critere::all();
    $universites = App\Models\University::all();
    $notations = App\Models\Notation::where('criteria_id', $critereId)->get();
    $notationsGroupedByUniversity = $notations->groupBy('univ_id');

    // Calculer le total des points pour chaque université
    $classement = [];
    foreach ($notationsGroupedByUniversity as $univId => $notations) {
        $totalPoints = $notations->sum('score');
        $classement[$univId] = $totalPoints;
    }

    // Trier les universités en fonction des points de notation
    arsort($classement);
@endphp
<h1>Classement des universités</h1>
<div style="display: flex; align-items:center;justify-content:space-between;list-style:none;">
    <ul>
        @foreach ($criteres as $critere)
            <li style="padding:7px;background-color:rgb(236, 214, 9);">
                <a style="color:{{ $loop->index == $critere->id ? 'red' : 'black' }}; text-decoration:none;"
                    href="{{ route('classements.critere', $critere->id) }}" class="critere-link"
                    data-critere-id="{{ $critere->id }}">
                    {{ $critere->libelle }}
                </a>
            </li>
    </ul>
    @endforeach

</div>

<div id="classement">
    @foreach ($classement as $univId => $totalPoints)
        @php
            $universite = App\Models\University::find($univId);
        @endphp
        <li>{{ $universite->univ_name }} - {{ $totalPoints }}</li>
    @endforeach
</div>









