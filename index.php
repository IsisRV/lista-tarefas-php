<?php

$tarefas = [
    "Fazer atividade de PHP",
    "Estudar para a prova",
    "Organizar os arquivos",
    "Enviar atividade"
];

function mostrarTarefas($lista) {
    echo "<h2>Lista de Tarefas</h2>";

    foreach ($lista as $tarefa) {
        echo "<p>- $tarefa</p>";
    }
}

mostrarTarefas($tarefas);

?>