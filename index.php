<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>  
    <!-- <div class="body">
        <div class="content">
            <div id="pieSlice1" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice2" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice3" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice4" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice5" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice6" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice7" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
            <div id="pieSlice8" class="hold" style="cursor: pointer;"><div class="pie">pergunta1</div></div>
        </div>
    </div> -->
    <img src="" alt="" id="exibicao" class="m-5">
    <form action="post.php" method="POST" enctype='multipart/form-data'>
        <input type="text" name="nome" id="nome" value="" style="display: none;">
        <div>
            Foto
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            Quais pessoas você admira e quais competências ela tem? <br>
            <input type="text" name="r1">
        </div>
        <div>
            Práticas que recarregam a energia e te fazem bem <br>
            <input type="text" name="r2">
        </div>
        <div>
            Potências <br>
            <input type="text" name="r3">
        </div>
        <div>
            Habilidades e Competências <br>
            <input type="text" name="r4">
        </div>
        <div>
            "Caminhos de futuro"? <br>
            <input type="text" name="r5">
        </div>
        <div>
            Qual a sua causa? <br>
            <input type="text" name="r6">
        </div>
        <div>
            Qual é o seu território? <br>
            <input type="text" name="r7">
        </div>
        <input type="submit" value="Enviar">
    </form>


</body>
<script>

    window.onload = () =>{
        nome = prompt('Informe seu nome');
        while(!nome){
            nome = prompt('Informe seu nome');
        }

        document.getElementById('nome').value = nome;
    }

    input_file = document.getElementById("foto");
    
    input_file.addEventListener('change', ()=> {

        if(input_file.files <= 0){
            return;
        }
        
        var reader = new FileReader();

        reader.onload = () => {
            document.getElementById('exibicao').src = reader.result;
        }

        reader.readAsDataURL(input_file.files[0]);
    })

</script>


</html>