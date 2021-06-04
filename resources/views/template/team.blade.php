<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  meet the team</h2>
        </div>
        <div class="row">
            @foreach ($teams as $team)
                
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset("img/" . $team->photo->src)}}" alt="">
                    <h2>{{$team->nom}}</h2>
                    <h3>Project Manager</h3>
                </div>
            </div>
<<<<<<< HEAD
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/2.jpg" alt="">
                    <h2>Christinne Williams</h2>
