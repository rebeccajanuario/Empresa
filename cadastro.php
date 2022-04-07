<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Cadastrar Funcionário</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>body {
        background: #c1f7c3
        }

.list-group {
    width: 400px !important
}

.list-group-item {
    margin-top: 10px;
    border-radius: none;
    background: #7cc27e;
    cursor: pointer;
    transition: all 0.3s ease-in-out
}

.list-group-item:hover {
    transform: scaleX(1.1)
}

.check {
    opacity: 0;
    transition: all 0.6s ease-in-out
}

.list-group-item:hover .check {
    opacity: 1
}

.about span {
    font-size: 12px;
    margin-right: 10px
}

input[type=checkbox] {
    position: relative;
    cursor: pointer
}

input[type=checkbox]:before {
    content: "";
    display: block;
    position: absolute;
    width: 20px;
    height: 20px;
    top: 0px;
    left: 0;
    border: 1px solid #10a3f9;
    border-radius: 3px;
    background-color: white
}

input[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 7px;
    height: 12px;
    border: solid #007bff;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px
}

input[type="checkbox"]:checked+.check {
    opacity: 1
}</style>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
    <div class="container d-flex justify-content-center">
    <ul class="list-group mt-5 text-white">
        <li class="list-group-item d-flex justify-content-between align-content-center">
        <div class="form-group col-md-6">
            <label for="inputSurname">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div> 
        <li class="list-group-item d-flex justify-content-between align-content-center">
            <div>
            <label for="inputSurname">Cidade</label>
            <input type="text" class="form-control" name="nome" id="cidade" required>
        </div>   
        
    </ul>
</div>
<div class="list-group-item" style= "text-align: center">
    <input  class="ml-2" type="submit" name="cadastrar" id="cadastrar" value="cadastrar"/>
</div>   
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
    </body>
</html>
