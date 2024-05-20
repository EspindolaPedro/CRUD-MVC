<?php $render('header');?>

<h2>Adicionar novo Usuários</h2>

<form action="<?=$base;?>/novo" method="post">
    <label for="">
        nome: <br/>
        <input type="text" name="name"/>
    </label> <br/> <br/>

    <label for="">
        email: <br/>
        <input type="email" name="email"/>
    </label> <br/> <br/>

    <input type="submit" value="Adicionar"/>
</form>

<?php $render('footer')?>