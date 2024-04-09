@extends('master')
@section('content')
    


<div class="container">
    <div class="search-bar card1" style="max-width: 85%;">

        <input type="text" name="search_pad" id="search_pad" onkeyup="return searchFunction();" placeholder="Search name/designation/department" />
    </div>


    <div class="card-row" id="searchResults">
        @if (isset($get_datas))
        @foreach ($get_datas as $item)


        <div class="card">
            <h2 style="text-align: center">{{$item->userName}}</h2>
            <p style="text-align: center">{{$item->depName}}</p>
            <p style="text-align: center">{{$item->desName}}</p>
        </div>

        @endforeach

        @endif
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function searchFunction(){
        var input_content = document.getElementById('search_pad').value;
        if(input_content){
           console.log('input_content:',input_content);

           $.ajax({
                url: '/search_keyup', 
                method: 'GET',
                data: { searchTerm: input_content},
                success: function(response) {
                    console.log('res:',response);
                    var html = '';
                    response.forEach(function(item) {
                        html += '<div class="card">';
                        html += '<h2>' + item.userName + '</h2>';
                        html += '<p>' + item.depName + '</p>';
                        html += '<p>' + item.desName + '</p>';
                        html += '</div>';
                    });
                    $('#searchResults').html(html);
                },
                error: function(xhr, status, error) {
                    console.log('Error');
                    }
            });
            

        }
    }
    
</script>

  @endsection