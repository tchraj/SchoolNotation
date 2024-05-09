<div class="row event_box">
    @foreach ($classement as $univId => $totalPoints)
        @php
            $universite = App\Models\University::find($univId);
        @endphp
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
            <div class="events_item">
                <div class="thumb">
                    <a href="#"><img src="{{ asset('img/logos/' . $universite->logo) }}" alt=""></a>
                    <span style="background-color:rgb(49, 68, 240);color:white;" class="category">{{ $totalPoints }} points</span>
                </div>
                <div class="down-content">
                    <span class="author">{{ $universite->univ_name }}</span>
                    <h4>{{ $universite->univ_name }}</h4>
                </div>
            </div>
        </div>
    @endforeach
</div>
