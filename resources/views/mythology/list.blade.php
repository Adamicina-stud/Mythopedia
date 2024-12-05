<x-layout1>
    @section('title', 'Zoznam Mytológií')
    @section('description', 'Mýty všetkých kútov sveta podľa svetadielov.')
    @section('body-class','index')

    <section>
        <h2>Afrika</h2>
        <ul>
            <li>
                <a href="#">Egyptská mytológia</a>
            </li>
        </ul>
    </section>
    <section>
        <h2>Austrália</h2>
    </section>
    <section>
        <h2>Ázia</h2>
    </section>
    <section>
        <h2>Európa</h2>
        <ul>
            <li>
                <a href="{{route('greek')}}">Grécka mytológia</a>
            </li>
            <li>
                <a href="{{route('greek')}}">Severská mytológia</a>
            </li>
            <li>
                <a href="#">Slovanská mytológia</a>
            </li>
        </ul>
    </section>
    <section>
        <h2>Severná Amerika</h2>
    </section>
    <section>
        <h2>Južná Amerika</h2>
    </section>
    <section>
        <h2>Oceánia</h2>
    </section>
</x-layout1>
