<nav>
    <ul>
        <li><a href="{{route('home')}}">Domov</a></li>
        <li class="dropdown">
            <a href="{{route('mythology')}}" class="dropbtn">Mytológia &#9662;</a>
            <div class="dropdown-content">
                <a href="{{route('greek')}}">Grécka mytológia</a>
                <a href="{{route('norse')}}">Severská mytológia</a>
                <a href="#" class="non-clickable">Egyptská mytológia</a>
                <a href="#" class="non-clickable">Keltská mytológia</a>
                <a href="{{route('slavic')}}">Slovanská mytológia</a>
                <a href="{{route('list')}}">Dalšie...</a>
            </div>
        </li>
        <li>
            <a href="/posts">Príspevky</a>
        </li>
        <li>
            <a href="{{route('creepypasta')}}" class="creepy">Creepypasty</a>
        </li>
        <li>
            <a href="{{route('about_me')}}" >O mne</a>
        </li>
    </ul>
</nav>
