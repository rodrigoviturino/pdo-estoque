<?php 
    require_once 'classes/Categoria.php';

    $categoria = new Categoria();
    $id = $_GET['id']; // está PEGANDO o valor do link "/categorias-editar.php?id=<?php do botão EDITAR
    $categoria->id = $id;//Pegando o ATRIBUTO DO OBJETO e guardando o resultado do ID DO BOTAO EDITAR CATEGORIA
    $resultado = $categoria->carregar();
?>

<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="#" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="text" value="<?php echo $resultado['nome'] ?>" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
