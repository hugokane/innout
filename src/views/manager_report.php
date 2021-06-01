<main class="content">
<?php
renderTitle(
    'Relatorio Gerencial',
    'Resumo das horas trabalhadas dos funcionários',
    'icofont-chart-histogram'
);
?>
<div class="sumary-boxes">
<div class="sumary-box bg-primary">
<i class="icon icofont-users"></i>
<p class="title">Qtde de funcionários</p>
<h3 class="value"><?= $activeUsersCount ?></h3>
</div>
<div class="sumary-box bg-danger">
<i class="icon icofont-patient-bed"></i>
<p class="title">Faltas</p>
<h3 class="value"><?= count($absentUsers) ?></h3>
</div>
<div class="sumary-box bg-success">
<i class="icon icofont-sand-clock"></i>
<p class="title">Horas Trabalhadas no Mês</p>
<h3 class="value"><?= $hoursInMonth ?></h3>
</div>
</div>

<?php if(count($absentUsers) > 0): ?>
<div class="card mt-4">
<div class="card-header">
<h4 class="card-title">Faltosos do Dia</h4>
<p class="card-category mb-0">Relação dos funcionarios que ainda nao bateram ponto</p>
</div>
<div class="card-body">
<table class="table table-bordered table-striped table-hover">
<thead>
<th>Nome</th>
</thead>
<tbody>
<?php foreach($absentUsers as $name): ?>
<tr>
<td><?= $name ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
<?php endif ?>
</main>