<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{ route('store') }}" method="post">
            @csrf
        <h1>menu kaart</h1>

        @if(session('message'))
            <div class="btn btn-success disabled">
                {{ session('message') }}
            </div>
        @endif

        
            
    
        
            <select name="tables_select" id="tables_select">
                @foreach ($tables as $table)
                    <option value="{{$table->id}}">{{$table->id}}</option>
                @endforeach
            </select>
        @foreach($categories as $categorie)
            <div class="">
                <h3 class="">{{$categorie ->name}}</h3>
                @foreach ($categorie->dishes as $dish)
                <div class="card border-primary mb-3" style="max-width: 100%;">
                    <div class="card-header">{{$dish->name}}</div>
                    <div class="card-body" style="display: flex; justify-content: space-between">
                      <h4 class="card-title">&euro; {{$dish->price}}</h4>
                      <p class="card-text"></p>
                      <button id="addDishButton-{{$dish->id}}" class="btn btn-succes">+</button>
                    </div>
                </div>
                  @endforeach
            
        @endforeach
            <h3>Drinks</h3>
                @foreach ($drinks as $drink)
                <div class="card border-primary mb-3" style="max-width: 100%;">
                    <div class="card-header">{{$drink->name}}</div>
                    <div class="card-body" style="display: flex; justify-content: space-between">
                      <h4 class="card-title">&euro; {{$drink->price}}</h4>
                      <p class="card-text"></p>
                      <button id="addDrinkButton-{{$drink->id}}" class="btn btn-succes">+</button>
                    </div>
                </div>
                @endforeach
        <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">order</div>
            <div class="card-body">
                <div class="alert alert-dismissible alert-warning" id="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <h4 class="alert-heading">Warning!</h4>
                    <p class="mb-0">u heeft nog niks besteld.</p>
                </div>
                
                    
                    
                    <div id="input-selection">

                    </div>
                    <input type="submit" value="bestel">
                </div>
            </div>
            
        </form>

    </div>
    <script>
        for(let i = 1; i <= {{$dishCount}}; i++){
            
            document.getElementById('addDishButton-'+ i)
            .addEventListener('click', function(e){

                e.preventDefault();

                let name = e.path[2].firstElementChild.innerText;
                
                document.getElementById('input-selection')
                .innerHTML += `
                <input type="text" disabled value="${name}" class="form control">
                <input type="hidden" name="dish[]" value="${i}" class="form control">              
                `;

                document.getElementById('alert')
                style.display = 'none';

            })
        }
        for(let j = 1; j <={{$drinkCount}}; j++){
            document.getElementById('addDrinkButton-'+ j)
            .addEventListener('click', function(e){
                e.preventDefault();

                let name = e.path[2].firstElementChild.innerText;
                
                document.getElementById('input-selection')
                .innerHTML += `
                <input type="text" disabled value="${name}" class="form control">
                <input type="hidden" name="drink[]" value="${j}" class="form control">              
                `;

                document.getElementById('alert')
                style.display = 'none';


            })
        }
        
    </script>
</body>
</html>