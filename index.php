<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Табу.kz
                    </title>
                    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet"></link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div class="jumbotron">
            <h1 class="text-center">
                Tabu.kz <? echo $_POST['text'];?>
            </h1>
            <p class="text-center">
                
            </p>
        </div>
        <main>
            <div class="container">
                <center>
                   
                      <input type="text" class="form-control" name="search" id="text_search" style="width: 500px;" onkeyup="search();">
                   
                </center>
            </div>
            <br><br>

            <div id="result">
                
                <p id="no_text" class="lead text-center">Введите поисковый запрос</p>
                <div id="block_res" style="display: none;">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation">
                            <a aria-controls="messages" data-toggle="tab" href="#messages" role="tab">
                                Bing
                            </a>
                        </li>
                        <li role="presentation">
                            <a aria-controls="home" data-toggle="tab" href="#home" role="tab">
                                Google
                            </a>
                        </li>
                        <li role="presentation">
                            <a aria-controls="profile" data-toggle="tab" href="#profile" role="tab">
                                Yandex
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="messages" role="tabpanel">
                            <h2>Bing</h2>
                            <iframe src="" id="bing" width="100%" height="1000px"></iframe>
                        </div>
                        <div class="tab-pane" id="home" role="tabpanel">
                            
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        
<script>
function search (){
    var text = $('#text_search').val();
    if (text == ''){
        $('#block_res').hide();
        $('#no_text').show();
    }
    else{
        $('#block_res').show();
        $('#no_text').hide();
    
        $('#bing').attr('src', 'http://www.bing.com/search?q='+text);
        
        $('#home').html('Секунду получаем данные...');
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: {text : $('#text_search').val(), google: true},
            success: function(data){
                $('#home').html(data);
            }
        });
        $('#profile').html('Секунду получаем данные...');
        $.ajax({
            type: 'POST',
            url: 'search.php',
            data: {text : $('#text_search').val(), yandex: true},
            success: function(data){
                $('#profile').html(data);
            }
        });



        
        
    }
}     

   

</script>        


    </body>
</html>
