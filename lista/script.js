//função para adicionar uma nova tarefa
function addTask(){
     let input = document.getElementById("taskInput");
     //captura o campo de entrada de texto.
     let taskText = input.value.trim();
     //Obtém o valor digitado e remove espaços extras.

     if(taskText === "") return;
     //Se o campo estiver vazio, a função para aqui.
     let li = document.createElement("li");
     //Cria um elemento <li> para a lista. 
     li.innerHTML= `${taskText}  <button onclick ="removeTask(this)">X</button>`;
     //Adcionar o texto da tarefa a um botão de regmoção.

     //Adicionar um evento de clique ao item da lista, marcação.
     li.addEventListener("click", function(){
        this.classList.toggle("done");
     });

}