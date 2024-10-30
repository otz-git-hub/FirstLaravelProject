<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Laravel</h1>
    <h2>Test Blade</h2>
    @php
    $name="<h1>Opentechz</h1>";
    //echo $name;
    @endphp
    {{"Subham"}} {{--      Subham               --}}
    {{ $name }}  {{--      <h1>Opentechz</h1>   --}}
    {!! $name !!} {{--     Opentechz            --}} 
    {{-- Is statement --}}
    @if (true)
        {{"True Statement"}}
    @endif
    {{-- If Else Statemet --}}
    @if (false)
    {{"True Statement"}}
    @else
    {{"False Statement"}}
    @endif

    {{-- If ElseIf Else Statement --}}
    @if (false)
    {{"False Statement-1"}}
    @elseif(false)
    {{"True Statement-1"}}
    @else
    {{"False Statement-2"}}
    @endif

    {{-- @for ($i = 1; $i <= 100; $i++)
       <p> Roll No-{{$i}}  </p>
    @endfor --}}

    @php
    $fruits = ['apple', 'banana', 'orange', 'grape'];
    $fruits2=[];
    @endphp
    {{-- for loop  --}}
    <ol>
        @for ($i = 0; $i < count($fruits); $i++)
            <li>{{$fruits[$i]}}</li>
        @endfor
    </ol>
    {{--for each loop  --}}
    <ol>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
        @endforeach
    </ol>
    {{-- for else loop --}}
    <ul>
        @forelse ($fruits2 as $fruit)
          <li>{{$fruit}}</li>
        @empty
            <li>No Fruits Founds</li>
        @endforelse
    </ul>

    @php
    $fruits3 = [
        [
            'name' => 'Apple',
            'color' => 'Red',
            'weight' => 150, // in grams
            'in_season' => true,
        ],
        [
            'name' => 'Banana',
            'color' => 'Yellow',
            'weight' => 120,
            'in_season' => true,
        ],
        [
            'name' => 'Orange',
            'color' => 'Orange',
            'weight' => 130,
            'in_season' => false,
        ],
        [
            'name' => 'Grape',
            'color' => 'Purple',
            'weight' => 50,
            'in_season' => true,
        ],
        [
            'name' => 'Mango',
            'color' => 'Yellow',
            'weight' => 200,
            'in_season' => false,
        ],
        [
            'name' => 'Strawberry',
            'color' => 'Red',
            'weight' => 30,
            'in_season' => true,
        ],
        [
            'name' => 'Blueberry',
            'color' => 'Blue',
            'weight' => 10,
            'in_season' => true,
        ],
        [
            'name' => 'Pineapple',
            'color' => 'Brown',
            'weight' => 1200,
            'in_season' => true,
        ],
        [
            'name' => 'Peach',
            'color' => 'Pink',
            'weight' => 150,
            'in_season' => true,
        ],
        [
            'name' => 'Kiwi',
            'color' => 'Brown',
            'weight' => 75,
            'in_season' => false,
        ],
    ];
@endphp
        <ol>
            @foreach ($fruits3 as $fruit)
                <li><b>Name:</b>{{$fruit['name']}}</li>
                <li><b>Color:</b>{{$fruit['color']}}</li>
                <li><b>Weight:</b>{{$fruit['weight']}}</li>
                <li><b>Session:</b>{{$fruit['in_season'] ? 'Yes' : 'No'}}</li>
            @endforeach
        </ol>

        <ol>
            @forelse ($fruits3 as $fruit)
                <li><b>Name:</b>{{$fruit['name']}}</li>
                <li><b>Color:</b>{{$fruit['color']}}</li>
                <li><b>Weight:</b>{{$fruit['weight']}}</li>
                <li><b>Session:</b>{{$fruit['in_season'] ? 'Yes' : 'No'}}</li>
            @empty
            <li>No Fruits Founds</li>
            @endforelse
        </ol>
</body>
</html>