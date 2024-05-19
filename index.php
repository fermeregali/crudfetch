<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - API fetch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3>Registro de Produtos</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <label for="">Codigo</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Produto</label>
                                <input type="text" name="produto" id="produto" placeholder="produto" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Preco</label>
                                <input type="text" name="preco" id="preco" placeholder="preco" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Quantidade</label>
                                <input type="text" name="quantidade" id="quantidade" placeholder="quantidade" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="Submit" id="registrar" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>    
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                           <div class="form-group">
                                <label for="buscar">Buscar:</label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control"></input>
                           </div>

                        </form>
                    </div>
                </div>
                <table class="table table-hover table-resposive">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Descricao</th>
                            <th>Preco</th>
                            <th>Quantidade</th>
                            <th>Acao</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>

</html>