<?php $render('header');?>

<h2>Editar usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" >
    <label for="">
        nome: <br/>
        <input type="text" name="name" value="<?=$usuario['nome'];?>"/>
    </label> <br/> <br/>

    <label for="">
        email: <br/>
        <input type="email" name="email" value="<?=$usuario['email'];?>"/>
    </label> <br/> <br/>

    <input type="submit" value="Editar"/>
</form>

<?php $render('footer')?>