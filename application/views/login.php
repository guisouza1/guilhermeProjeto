
 <div class="page-content">
    <div class="row"></div>
    <div class="demo-container mdl-grid">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-lg-6">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Login</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <?php echo form_open('login/autenticar'); ?>
               
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input class="col-sm-6 form-control" id="usuario" name="usuario" type="text" required/>
        </div>
                <p></p>   
        <div class="form-group">
            <label for="senha">Senha</label>
            <input class="col-sm-6 form-control" id="senha" name="senha" type="password" required/>
        </div>

                </br>
                <input type="submit" name="acao" value="Entrar" class="btn btn-success"/>
                <input type="reset" class="btn btn-primary"/>
                <?php form_close(); ?>  
            </div>
        </div>
        <div>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
</script>