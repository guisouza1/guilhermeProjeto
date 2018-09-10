<!DOCTYPE html>

<div class="container">
    
    <div class="row"></div>
    
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    <div class="col-xs-10 col-sm-10 col-lg-6">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Contato</h2>
    <?php echo form_open('contato/inserir'); ?>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input name="nome" type="text" class="col-sm-3 col-form-label form-control"  id="nome"> 
    </div>

    <div class="form-group">
        <label for="email">e-mail</label>
        <input class="col-sm-3 col-form-label form-control" id="email" name="email" type="email" required/>
    </div>
    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-secondary" type="reset" value="Limpar"/>
    <?php form_close(); ?>
    <p></p>




    <table class="table table-striped">
    <caption>Contatos</caption>
    
         
    <thead>
        <tr>
            <th class="table-dark" >Nome</th>
            <th class="table-dark">e-mail</th>
            <th class="table-dark">Função</th>
        </tr>
        
    </thead>
    <tbody>
        <?php if ($contatos == FALSE): ?>
            <tr><td>Nenhum contato encontrado!</td></tr>
        <?php else: ?>
            <?php foreach ($contatos as $row): ?>
                <tr>
                    <td><?php echo $row->nome; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td>
                        <a class="btn btn-success" href="<?php
                        echo base_url() .
                        'contato/editar/' . $row->id;
                        ?>">Editar</a>
                        |
                        <a class="btn btn-danger" href="<?php
                           echo base_url() . ''
                           . 'contato/excluir/' . $row->id;
                           ?>">Excluir</a>
                    </td>
                </tr>
    <?php endforeach; ?>
<?php endif; ?>
    </tbody>
</table>

<p></p>
<a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
</div>
    </div>
